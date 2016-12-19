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



Route::get('/test', 'HomeController@show');


//ADMIN
Route::resource('admin/dataanak', 'DataAnakController');
Route::resource('admin/datakepegawaian', 'DataKepegawaianController');
Route::resource('admin/kenaikanpangkat', 'KenaikanPangkatController');
Route::resource('admin/pegawai', 'PegawaiController');
Route::resource('admin/riwayatpendidikan', 'RiwayatPendidikanController');

//USER
Route::resource('user/dataanak', 'user\DataAnakController');
Route::resource('user/datakepegawaian', 'user\DataKepegawaianController');
Route::resource('user/kenaikanpangkat', 'user\KenaikanPangkatController');
Route::resource('user/pegawai', 'user\PegawaiController');
Route::resource('user/riwayatpendidikan', 'user\RiwayatPendidikanController');