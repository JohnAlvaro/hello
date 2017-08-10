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

Route::get('/','ProductController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('add','ProductController@index');
Route::post('add','ProductController@add');
Route::get('edit/{id}','ProductController@edit');
Route::post('update/{id}','ProductController@update');
Route::get('delete/{id}','ProductController@delete');
