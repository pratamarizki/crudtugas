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

// Route CRUD
Route::get('/', 'CurdController@index');
Route::get('/add', 'CurdController@create');
Route::get('/read/{id}', 'CurdController@show');
Route::post('/store', 'CurdController@store');
Route::get('/edit/{id}', 'CurdController@edit');
Route::post('/update/{id}', 'CurdController@update');
Route::get('/delete/{id}', 'CurdController@destroy');
// END Route CRUD

Route::get('query', 'CariController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

