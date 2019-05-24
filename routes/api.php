<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('', function () {
  return \route('me');
});


Route::name('unauthorized')->any('unauthorized', function () {
  return "<code>Unauthorized!...</code>";

});

Route::resource('product', 'ProductController');


Route::middleware('auth:api')
    ->name('user.')
    ->prefix('user')
    ->group(function () {

      Route::name('updateProfile')->get('profile', 'User\UserController@update');
      Route::name('me')->get('me', 'User\UserController@me');


      Route::resource('address', 'User\AddressController');
      Route::resource('cart', 'User\CartController');

    });


Route::name('auth.')->prefix('auth')->group(function () {
  Route::name('login')->post('login', 'AuthController@login');
  Route::name('register')->post('register', 'AuthController@register');
  Route::name('forget')->post('forget', 'AuthController@forget');
});