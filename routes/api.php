<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/login', function (Request $request) {
    return 'hola';
});

Route::post('/register', 'OAuthController@register');

Route::get('/me', 'OAuthController@userProfile')->middleware('auth:api');
//Route::get('/me', 'OAuthController@userProfile')->middleware('client_credentials');