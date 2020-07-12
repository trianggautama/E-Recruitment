<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'adminController@depan')->name('depan');

Auth::routes();

Route::get('/lowongan/detail/{uuid}', 'adminController@lowonganDetail')->name('lowonganDetail');
Route::get('/lowongan/input/{uuid}', 'adminController@lowonganInput')->name('lowonganInput');
Route::post('/lowongan/input/create', 'PelamarController@store')->name('lowonganInputStore');

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

    Route::get('/seleksiBerkas/index', 'PelamarController@lulusSeleksi')->name('seleksiBerkasIndex');
    Route::get('/seleksiBerkas/detail/{uuid}', 'PelamarController@lulusSeleksiShow')->name('seleksiBerkasShow');

    Route::get('/data/pelamar/index/{uuid}', 'PelamarController@index')->name('dataPelamarIndex');
    Route::post('/pelamar/tambah', 'PelamarController@store')->name('pelamarStore');
    Route::get('/pelamar/edit/{uuid}', 'PelamarController@edit')->name('pelamarEdit');
    Route::get('/pelamar/detail/{uuid}', 'PelamarController@show')->name('pelamarShow');
    Route::post('/pelamar/verif/{uuid}', 'PelamarController@verifPeserta')->name('verifPeserta');
    Route::get('/pelamar/delete/{uuid}', 'PelamarController@delete')->name('pelamarDestroy');

    Route::get('/soal/index', 'SoalController@index')->name('soalIndex');
    Route::post('/soal/index/create', 'SoalController@store')->name('soalStore');
    Route::get('/soal/edit/{uuid}', 'SoalController@edit')->name('soalEdit');
    Route::put('/soal/edit/{uuid}', 'SoalController@update')->name('soalUpdate');
    Route::get('/soal/detail/{uuid}', 'SoalController@show')->name('soalShow');
    Route::get('/soal/delete/{uuid}', 'SoalController@destroy')->name('soalDestroy');

    Route::get('/ujiKompetensi/index', 'ujiKompetensiController@index')->name('ujiKompetensiIndex');
    Route::post('/ujiKompetensi/create', 'ujiKompetensiController@store')->name('ujiKompetensiStore');
    Route::get('/ujiKompetensi/edit/{uuid}', 'ujiKompetensiController@edit')->name('ujiKompetensiEdit');
    Route::put('/ujiKompetensi/edit/{uuid}', 'ujiKompetensiController@update')->name('ujiKompetensiUpdate');
    Route::get('/ujiKompetensi/detail/{uuid}', 'ujiKompetensiController@show')->name('ujiKompetensiShow');
    Route::get('/ujiKompetensi/delete/{uuid}', 'ujiKompetensiController@destroy')->name('ujiKompetensiDestroy');

    Route::get('/ujiKesehatan/index', 'ujiKesehatanController@index')->name('ujiKesehatanIndex');
    Route::post('/ujiKesehatan/create', 'ujiKesehatanController@store')->name('ujiKesehatanStore');
    Route::get('/ujiKesehatan/edit/{uuid}', 'ujiKesehatanController@edit')->name('ujiKesehatanEdit');
    Route::put('/ujiKesehatan/edit/{uuid}', 'ujiKesehatanController@update')->name('ujiKesehatanUpdate');
    Route::get('/ujiKesehatan/detail/{uuid}', 'ujiKesehatanController@show')->name('ujiKesehatanShow');
    Route::get('/ujiKesehatan/delete/{uuid}', 'ujiKesehatanController@destroy')->name('ujiKesehatanDestroy');

    // uji kesehatan peserta
    Route::post('/ujiKesehatan/detail/create', 'ujiKesehatanController@pesertaStore')->name('ujiKesehatanPesertaStore');
    Route::get('/ujiKesehatan/detail/edit/{uuid}', 'ujiKesehatanController@rincianEdit')->name('ujiKesehatanRincianEdit');
    Route::put('/ujiKesehatan/detail/edit/{uuid}', 'ujiKesehatanController@rincianUpdate')->name('ujiKesehatanRincianUpdate');
    Route::get('/ujiKesehatan/detail/delete/{uuid}', 'ujiKesehatanController@rincianDestroy')->name('ujiKesehatanRincianDestroy');
});

Route::group(['middleware' => ['pelamar']], function () {

    //halaman pelamar
    Route::get('/pelamar/index', 'UserController@pelamarIndex')->name('pelamarIndex');
    Route::get('/pelamar/profil', 'UserController@pelamarProfil')->name('profilUser');
    Route::put('/pelamar/profilUpdate/{uuid}', 'UserController@pelamarProfilUpdate')->name('pelamarProfilUpdate');
    Route::get('/ujiKompetensi/input/{uuid}', 'ujiKompetensiController@input')->name('ujiKompetensiInput');
    Route::post('/ujiKompetensi/input', 'ujiKompetensiController@inputStore')->name('ujiKompetensiStore');
    Route::get('/ujiKompetensi/hasil', 'ujiKompetensiController@hasil')->name('ujiKompetensiHasil');

});
