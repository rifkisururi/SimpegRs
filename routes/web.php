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

Route::resource("/pegawai", 'PegawaiController');
Route::get('/pegawai/hapus/{id}','pegawaiController@destroy');
Route::get('/pegawai/getpegawai/{param}', [
    'as' => 'getpegawai.pegawai',
    'uses' => 'pegawaiController@getpegawai'
]);

Route::resource("/cuti", 'CutiController');
Route::get('/cuti/hapus/{id}','cutiController@destroy');

Route::resource("/perjadin", 'PerjadinController');
Route::get('/perjadin/hapus/{id}','perjadinController@destroy');

Route::resource("/rotasi", 'RotasiController');
Route::get('/rotasi/hapus/{id}','rotasiController@destroy');

Route::resource("/kenaikanjbtn", 'KenaikanJbtnController');

Route::resource("/rencana", 'RencanaController');
Route::get('/rencana/hapus/{id}','rotasiController@destroy');

Route::resource("/laporan", 'LaporanController');

