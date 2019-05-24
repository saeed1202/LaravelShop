<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    $profile = $request->only([
        'name', 'family', 'national_code', 'phone', 'card_number', 'gender'
    ]);
    $validation = Validator::make(
        $profile,
        [
            'name' => 'min:3|max:16|string|nullable',
            'family' => 'min:4|max:16|string|nullable',
            'card_number' => 'nullable|numeric|digits:16',
            'phone' => 'nullable|numeric|digits:10',
            'national_code' => 'nullable|numeric|digits:10',
            'gender' => 'nullable|boolean'
        ]
    );
    if ($validation->fails()) return response()->json($validation->errors());
    if (!auth()->user()->update($profile)) abort(400, "لطفا تمام ورودی ها را برسی کنید!");
    return response()->json(auth()->user());

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function me()
  {
    return response()->json(auth()->user());
  }

}
