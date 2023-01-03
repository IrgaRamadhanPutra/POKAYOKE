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



Route::get('home', function () {
    return view('pages.index');
});

Route::group(['middleware' => 'auth'], function () {

    //dashboard

    Route::get('/', 'HomeController@index');
    //pokayoke delivery
    Route::get('/validasi', 'ScanController@validasi')->name('validasi');
    Route::post('/getEkanbanAdmoutSp1', 'ScanController@getEkanbanAdmoutSp1')->name('getEkanbanAdmoutSp1');

    //new layout

    // Route::get('/asik', function () {
    //     return view('layouts/template');
    // });
});
//auth
Route::get('/auth', 'LoginController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout');

// Route::get('/home', 'HomeController@index');
