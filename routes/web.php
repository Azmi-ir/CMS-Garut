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


Route::get('/', 'Pages@home');
Route::get('/about', 'Pages@about');

//Feature
Route::get('/feature', 'FeatureController@index');

//service
/*
Route::get('/service', 'ServicesController@index');
Route::get('/service/create', 'ServicesController@create');
Route::get('/service/{service}', 'ServicesController@show');
Route::post('/service', 'ServicesController@store');
Route::delete('/service/{service}', 'ServicesController@destroy');
Route::get('/service/{service}/edit', 'ServicesController@edit');
Route::put('/service/{service}', 'ServicesController@update');
*/
Route::resource('service', 'ServicesController');

//Kategori Berita
Route::resource('kategori', 'Kategori_BeritaController');

//tebel berita
Route::resource('berita', 'Tabel_BeritaController');

//tabel kegiatan
Route::resource('kegiatan', 'Tabel_KegiatanController');

//tabel program
Route::resource('program', 'Tabel_ProgramController');