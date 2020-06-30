<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/lowongan/detail/{uuid}', 'adminController@lowonganDetail')->name('lowonganDetail');
Route::get('/lowongan/input/{uuid}', 'adminController@lowonganInput')->name('lowonganInput');

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['admin']], function () {
    Route::get('/index', 'adminController@index')->name('index');

    Route::get('/user/index', 'UserController@index')->name('userIndex');
    Route::post('/user/index/create', 'UserController@store')->name('userCreate');
    Route::get('/user/edit/{uuid}', 'UserController@edit')->name('userEdit');
    Route::put('/user/edit/{uuid}', 'UserController@update')->name('userUpdate');
    Route::get('/user/delete/{uuid}', 'UserController@destroy')->name('userDestroy');

    Route::get('/posisi/index', 'PosisiController@index')->name('posisiIndex');
    Route::post('/posisi/index/create', 'PosisiController@store')->name('posisiCreate');
    Route::get('/posisi/edit/{uuid}', 'PosisiController@edit')->name('posisiEdit');
    Route::put('/posisi/edit/{uuid}', 'PosisiController@update')->name('posisiUpdate');
    Route::get('/posisi/delete/{uuid}', 'PosisiController@destroy')->name('posisiDestroy');

    Route::get('/berita/index', 'BeritaController@index')->name('beritaIndex');
    Route::get('/berita/tambah', 'BeritaController@create')->name('beritaAdd');
    Route::post('/berita/tambah', 'BeritaController@store')->name('beritaStore');
    Route::get('/berita/edit/{uuid}', 'BeritaController@edit')->name('beritaEdit');
    Route::put('/berita/edit/{uuid}', 'BeritaController@update')->name('beritaUpdate');
    Route::get('/berita/detail/{uuid}', 'BeritaController@show')->name('beritaShow');
    Route::get('/berita/delete/{uuid}', 'BeritaController@destroy')->name('beritaDestroy');


    Route::get('/lowongan/index', 'LowonganController@index')->name('lowonganIndex');

    Route::get('/pelamar/index/{uuid}', 'PelamarController@index')->name('pelamarIndex');
    Route::post('/pelamar/tambah', 'PelamarController@store')->name('pelamarStore');
    Route::get('/pelamar/edit/{uuid}', 'PelamarController@edit')->name('pelamarEdit');
    Route::get('/pelamar/detail/{uuid}', 'PelamarController@show')->name('pelamarShow');
    Route::get('/pelamar/delete/{uuid}', 'PelamarController@delete')->name('pelamarDestroy');

    Route::get('/soal/index', 'SoalController@index')->name('soalIndex');
    Route::post('/soal/index/create', 'SoalController@store')->name('soalStore');
    Route::get('/soal/edit/{uuid}', 'SoalController@edit')->name('soalEdit');
    Route::put('/soal/edit/{uuid}', 'SoalController@update')->name('soalUpdate');
    Route::get('/soal/detail/{uuid}', 'SoalController@show')->name('soalShow');
});
Route::group(['middleware' => ['pelamar']], function () {
    //halaman pelamar
});
