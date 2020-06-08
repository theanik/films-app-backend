<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','namespace'=>'Api'], function () {
    // Api auth route
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::get('/films','FilmController@index');
    Route::get('/film/{slug}','FilmController@show');

    Route::group(['middleware' => 'auth:api'], function() {
        Route::post('/films','FilmController@store');
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });


   
});
