<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('admin/dataanak', 'DataAnakController');
Route::resource('admin/datakepegawaian', 'DataKepegawaianController');
Route::resource('admin/kenaikanpangkat', 'KenaikanPangkatController');
Route::resource('admin/pegawai', 'PegawaiController');
Route::resource('admin/riwayatpendidikan', 'RiwayatPendidikanController');