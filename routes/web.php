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

Route::get('/students','StudentController@index');

Route::get('/students/create','StudentController@create')->name('create');
Route::post('/students','StudentController@store')->name('store');

Route::get('/students/{student}','StudentController@show')->name('profile');

Route::get('/students/{student}/delete','StudentController@destroy')->name('delete');

Route::get('/students/{student}/edit','StudentController@edit')->name('edit');
Route::post('/students/update/{student}', 'StudentController@update')->name('update');

