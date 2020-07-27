<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'NotebookController@index')->name('home');
Route::post('/', 'NotebookController@store')->name('store');
Route::get('/create','NotebookController@create')->name('create');
Route::post('update/{id}' ,'NotebookController@update')->name("update");
Route::delete('destroy/{id}' ,'NotebookController@destroy')->name("destroy");
