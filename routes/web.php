<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', ['as' => 'seats.index', 'uses' => 'UserSeatsController@index']);
Route::resource('/', 'UserSeatsController');
Route::get('/show/{email}', 'UserSeatsController@show');