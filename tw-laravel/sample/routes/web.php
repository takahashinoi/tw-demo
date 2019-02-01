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

Route::get('/create','UsersController@create');
Route::post('/store','UsersController@store');
Route::get('/','UsersController@index');
Route::get('/edit/{id}','UsersController@edit');
Route::post('/update','UsersController@update');
Route::post('/delete','UsersController@delete');
// Route::get('/', function () 
// {
//     return view('index');


// });