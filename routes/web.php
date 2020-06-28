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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
Route::get('/home/create', 'UserController@create')->name('user.create');
Route::get('/home/{user}/edit', 'UserController@edit')->name('user.edit');
Route::post('/home', 'UserController@store')->name('user.store');
Route::get('/home/{user}', 'UserController@show')->name('user.show');
Route::patch('/home/{user}', 'UserController@update')->name('user.update');
Route::delete('/home/{user}', 'UserController@destroy')->name('user.destroy');


