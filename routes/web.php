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

Route::prefix('barang')->name('barang.')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::get('mobil', 'HomeController@mobil')->name('mobil');
    Route::get('motor', 'HomeController@motor')->name('motor');
    Route::get('handphone', 'HomeController@handphone')->name('handphone');
    Route::get('televisi', 'HomeController@televisi')->name('televisi');
});
