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

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
})->name('get.logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'Dashboard@index')->name('dashboard');

//pendaftaran PKWT
Route::get('/pkwt/daftar', 'PKWT@pendaftaranJasa')->name('get.pkwtJasa.daftar');
Route::get('/pkwt/daftar2', 'PKWT@pendaftaranBorong')->name('get.pkwtBorong.daftar');
Route::get('/pkwt/daftar3', 'Kontrak@pendaftaranJasa')->name('get.kontrakJasa.daftar');
Route::get('/pkwt/daftar4', 'Kontrak@pendaftaranBorong')->name('get.kontrakBorong.daftar');
Route::get('/pkwt/lacak', 'PKWT@lacak')->name('get.pkwt.lacak');
Route::get('/pkwt/lacak/reUpload', 'PKWT@reUploadDocument')->name('get.pkwt.lacak.reUpload');
Route::get('/pkwt/lacak/reUpload/{token}', 'PKWT@reUploadDocument')->name('get.pkwt.lacak.reUploadBerkas');

//file uploader daftar
Route::get('file-upload', 'FileController@fileUpload');
Route::post('file-upload', 'FileController@fileUploadPost')->name('fileUploadPost');

//verifikasi
Route::get('/verifikasi/pkwt', 'Verifikasi@pkwt')->name('get.verifikasi.pkwt');
Route::get('/verifikasi/kontrak', 'Verifikasi@kontrak')->name('get.verifikasi.kontrak');
Route::get('/verifikasi/pkwt/{token}', 'Verifikasi@pkwtFile')->name('get.verifikasi.pkwtFile');
Route::post('/verifikasi/pkwt/verikasi', 'Verifikasi@verifikasiPKWTFile')->name('post.verifikasi.pkwt');
//cetak
Route::get('/cetak/kontrak', 'Cetak@kontrak')->name('get.cetak.kontrak');
Route::get('/cetak/pkwt', 'Cetak@pkwt')->name('get.cetak.pkwt');
Route::post('/cetak/getBerkas', 'Cetak@getBerkas')->name('post.cetak.berkasDownload');
Route::get('/cetak/getBerkas', 'Cetak@getBerkas')->name('get.cetak.berkasDownload');
//perusahaan
Route::get('/perusahaan/daftar', 'perusahaan@index')->name('get.perusahaan.index');
Route::get('/verifikasi/pkwt/download/{id}', 'FileController@show')->name('downloadFile');

//bursakerja
Route::get('/bursa/lowongan/admin', 'Bursa@lowonganAdmin')->name('get.bursa.lowongan.admin');