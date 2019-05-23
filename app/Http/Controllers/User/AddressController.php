<?php

namespace App\Http\Controllers\User;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{

  /**
   * AddressController constructor.
   */
  public function __construct()
  {
    $this->authorizeResource(Address::class);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return response()->json(auth()->user()->addresses()->get());
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $newAddress = $request->only(['address', 'full_name', 'phone', 'postal_code', 'city_id']);
    $validation = Validator::make(
        $newAddress,
        [
            'full_name' => 'required|min:6|max:32',
            'address' => 'min:10|required|max:255',
            'phone' => 'numeric|digits:10|required',
            'postal_code' => 'numeric|digits:10|required',
            'city_id' => 'numeric|required|digits_between:1,3|max:440'
        ]
    );
    if ($validation->fails()) return response()->json($validation->errors(), 400);

    $address = auth()->user()->addresses()->create($newAddress);

    return response()->json(
        $address
            ->where('id', $address->id)
            ->with('city', 'city.state')
            ->first()
    );
  }


  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $address = Address::where('id', $id)->with('city', 'city.state')->first();
    $this->authorize('view',$address);
    if (!$address) $address = false;
    return response()->json($address, $address ? 200 : 400);
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $updateAddress = $request->only(['address', 'full_name', 'phone', 'postal_code', 'city_id']);
    $validation = Validator::make(
        $updateAddress,
        [
            'full_name' => 'required|min:6|max:32',
            'address' => 'min:10|required|max:255',
            'phone' => 'numeric|digits:10|required',
            'postal_code' => 'numeric|digits:10|required',
            'city_id' => 'numeric|required|digits_between:1,3|max:440|min:1'
        ]
    );
    if ($validation->fails()) return response()->json($validation->errors(), 400);


    $address = Address::where('id', $id)->with('city', 'city.state')->first();
    $this->authorize('update', $address);
    $address->update($updateAddress);
    return response()->json($address);


  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $address = Address::find($id);
    $this->authorize('delete', $address);
    return response()->json([
        'address' => $address,
        'deleted' => (bool)$address->delete(),
        'by' => auth()->user()
    ]);
  }


}
