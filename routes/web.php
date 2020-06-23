<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'adminController@index')->name('index');

Route::get('/user/index', 'UserController@index')->name('userIndex');
Route::get('/user/edit/{uuid}', 'UserController@edit')->name('userEdit');

Route::get('/posisi/index', 'PosisiController@index')->name('posisiIndex');

Route::get('/berita/index', 'adminController@beritaIndex')->name('beritaIndex');
