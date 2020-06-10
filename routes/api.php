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
    Route::post('/login', 'AuthController@login');
    Route::post('/signup', 'AuthController@signup');

    Route::get('/films','FilmController@index');
    Route::get('/films/{slug}','FilmController@show');
   

    Route::group(['middleware' => 'auth:api'], function() {
        // film
        Route::post('/films','FilmController@store');

        //comment - rating
        Route::post('/rating','RatingController@store');
        Route::get('/rating/current/{film_id}','RatingController@currentUserRate');
       
        Route::post('/comment','CommentController@store');

        // auth
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });


   
});
