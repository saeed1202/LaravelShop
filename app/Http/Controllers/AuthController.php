<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


  /**
   * @param Request $request
   * @return User Profile
   */
  public function login(Request $request)
  {
    $credentials = $request->only(['email', 'password']);
    $validation = Validator::make(
        $credentials,
        [
            'email' => 'required',
            'password' => 'required'
        ]
    );

    if ($validation->fails())
      return response()->json($validation->errors(), 400);

    if (!auth()->attempt($credentials))
      return response()->json([
          'message' => "کاربری با این مشخصات وجود ندارد!"
      ], 401);


    $token = auth()->user()->createToken('login')->accessToken;
    return response()->json([
        'profile' => auth()->user(),
        'token' => $token
    ]);
  }


  /**
   * @param Request $request
   * @return User Profile
   */
  public function register(Request $request)
  {
    $credentials = $request->only('email', 'password', 'password_confirmation');
    $validation = Validator::make(
        $request->all(),
        [
            'email' => 'email|required|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]
    );
    if ($validation->fails())
      return response()->json($validation->errors(), 400);


    $credentials['password'] = bcrypt($credentials['password']);
    $customer = User::create($credentials);
    if ($customer)
      return response()->json($customer);
    return response()->json([
        'message' => 'خطایی در عضویت شما رخ داده است! لطفا با پشتیبانی در میان بگذارید'
    ], 400);
  }


  public function forget(Request $request)
  {
    return response()->json("Not Working Yet");
  }

}
