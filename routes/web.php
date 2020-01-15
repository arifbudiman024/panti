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

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::group(['prefix' => 'admin'], function () {
        Route::resource('/', 'dashboardController');

        Route::resource('visimisi', 'visimisiController');
        Route::resource('sejarah', 'sejarahController');
        Route::resource('dasarhukum', 'dasarhukumController');
        Route::resource('pelayanan', 'pelayananController');
        Route::resource('fasilitas', 'fasilitasController');

        Route::resource('asn', 'asnController');
        Route::resource('pjlp', 'pjlpController');
        Route::resource('wbs', 'wbsController');

        Route::resource('bimbingan', 'bimbinganController');
        Route::resource('laporan', 'laporanController');
    });
});

// Route::view('/login', 'auth.login')->name('home');

