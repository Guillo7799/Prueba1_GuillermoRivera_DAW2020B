<?php

use App\Movie;
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

Route::get('movies', 'MovieController@index');
Route::get('movies/{movie}', 'MovieController@show');
Route::post('movies', 'MovieController@store');
Route::put('movies/{movie}', 'MovieController@update');
Route::delete('movies/{movie}', 'MovieController@delete');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@delete');

//Route::get('movies', 'MovieController@index');
//Route::get('movies/{id}', 'MovieController@show');
//Route::post('movies', 'MovieController@store');
//Route::put('movies/{id}', 'MovieController@update');
//Route::delete('movies/{id}', 'MovieController@delete');
