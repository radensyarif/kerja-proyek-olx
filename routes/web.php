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
    return view('index');
});

Route::get('barang', 'HomeController@index');
Route::get('/barang/mobil', 'HomeController@mobil');
Route::get('/barang/motor', 'HomeController@motor');
Route::get('/barang/handphone', 'HomeController@handphone');
Route::get('/barang/televisi', 'HomeController@televisi');