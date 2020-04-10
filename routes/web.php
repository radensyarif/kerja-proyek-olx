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


Route::namespace('Home')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('mobil', 'HomeController@mobil')->name('mobil');
    Route::get('motor', 'HomeController@motor')->name('motor');
    Route::get('handphone', 'HomeController@handphone')->name('handphone');
    Route::get('televisi', 'HomeController@televisi')->name('televisi');
});

Route::prefix('dashboard')->namespace('Dashboard')->group(function(){
    Route::namespace('Users')->group(function(){

        Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
            Route::get('/','AdminController@index')->name('index');
            Route::get('form/{id?}','AdminController@form')->name('form');
            Route::get('delete/{id?}','AdminController@delete')->name('delete');
            Route::post('store/{id?}','AdminController@store')->name('store');
        });
    });
});
