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
    return view('welcome');
});


Route::get('/addProperties', function () {
    return view('Properties.create');
});
Route::get('/property/{property}/edit', 'PropertyController@edit');
Route::post('/store', 'PropertyController@store')->name('store');
Route::post('/update', 'PropertyController@update')->name('update');
