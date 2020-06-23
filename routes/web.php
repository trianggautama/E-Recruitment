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
Route::get('/posisi/edit/{uuid}', 'PosisiController@edit')->name('posisiEdit');


Route::get('/berita/index', 'BeritaController@index')->name('beritaIndex');
Route::get('/berita/tambah', 'BeritaController@create')->name('beritaAdd');
Route::get('/berita/edit/{uuid}', 'BeritaController@edit')->name('beritaEdit');
Route::get('/berita/detail/{uuid}', 'BeritaController@show')->name('beritaShow');

Route::get('/soal/index', 'SoalController@index')->name('soalIndex');
Route::get('/soal/edit/{uuid}', 'SoalController@edit')->name('soalEdit');
Route::get('/soal/detail/{uuid}', 'SoalController@show')->name('soalShow');