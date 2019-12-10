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

Route::get('/', 'Todo@index')->name('todo');

Route::get('/edit/{id?}', 'Todo@index')->name('edittodo');

Route::post('/managetodo', 'Todo@manage')->name('managetodo');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/delete/{id}', 'Todo@delete')->name('delete');