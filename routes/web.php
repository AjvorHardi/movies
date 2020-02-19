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

Route::get('movies', 'MovieController@index');

Route::get('movies/{id}', 'MovieController@show');

Route::get('create', 'MovieController@create');

Route::post('create', 'MovieController@store')->name('movie-create');
