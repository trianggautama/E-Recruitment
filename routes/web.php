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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'adminController@index')->name('index');
Route::get('/user/index', 'adminController@userIndex')->name('userIndex');
Route::get('/posisi/index', 'adminController@posisiIndex')->name('posisiIndex');
Route::get('/berita/index', 'adminController@beritaIndex')->name('beritaIndex');
