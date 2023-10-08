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

Route::get('/login','App\Http\Controllers\LoginController@login')->name('login');
Route::post('/giris','App\Http\Controllers\LoginController@giris')->name('giris');
Route::get('/loginCreate','App\Http\Controllers\LoginController@loginCreate')->name('login.create');
Route::post('/post', 'App\Http\Controllers\LoginController@loginPost')->name('login.post');

Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::middleware('login')->group(function (){
Route::get('/','App\Http\Controllers\TodoController@index')->name('index');
Route::get('/create','App\Http\Controllers\TodoController@create')->name('create');
Route::post('/store','App\Http\Controllers\TodoController@store')->name('store');
Route::get('/edit/{id}','App\Http\Controllers\TodoController@edit')->name('edit');
Route::put('/update','App\Http\Controllers\TodoController@update')->name('update');
Route::get('/show/{id}','App\Http\Controllers\TodoController@show')->name('show');
Route::delete('/destroy','App\Http\Controllers\TodoController@destroy')->name('destroy');
Route::get('/trashed','App\Http\Controllers\TodoController@trashed')->name('trashed');
Route::get('/recover/{id}','App\Http\Controllers\TodoController@recover')->name('recover');
Route::get('/delete/{id}','App\Http\Controllers\TodoController@hardDelete')->name('delete');
});




