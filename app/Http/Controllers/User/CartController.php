<?php

namespace App\Http\Controllers\User;

use App\Cart;
use App\Http\Controllers\Controller;
use App\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

  private $state_order = 1;

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return response()->json(
        auth()
            ->user()
            ->carts()
            ->get()
    );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store()
  {
    $cart = auth()->user()->carts()->create([
        'order_status_id' => OrderStatus::where('order', $this->state_order)->first()->id
    ]);

    return response()->json($cart);
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $cart = Cart::where('id', $id)->with('products', 'status', 'address')->first();
    $this->authorize('view', $cart);

    return response()->json($cart);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
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
    $cart = $request->only(['products', 'address_id']);
    $validation = Validator::make(
        $cart,
        [
            'products' => 'array',
            'address_id' => 'numeric'
        ]
    );
    $cart = Cart::find($id);
    $this->authorize('update', $cart);


    return $cart->products()->sync($request->products);

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $cart = Cart::find($id);
    $this->authorize('delete', $cart);
    return response()->json([
        'address' => $cart,
        'deleted' => (bool)$cart->delete(),
        'by' => auth()->user()
    ]);
  }
}
