<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('master_lembur/ajax/{kode_karyawan}', 'LemburController@lembur');
// lembur
Route::get('/lembur', 'LemburController@index')->name('lembur');
Route::post('save-lembur', 'LemburController@save')->name('save-lembur');
// kasbon
Route::get('/kasbon', 'KasbonController@index')->name('kasbon');
Route::post('save-kasbon', 'KasbonController@save')->name('save-kasbon');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
