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

// site
Route::get('/beranda', 'SiteController@home');
Route::get('/tentang', 'AboutController@show');
Route::get('/program', 'ProgramController@show');
Route::get('/foto', 'PictureController@show');
Route::get('/video', 'videoController@show');
Route::get('/artikel', 'ArticleController@show');
Route::get('/daftar', 'RegisterController@show');
Route::get('/masuk', 'LoginController@show');

// admin
Route::get('/berita/{article:slug}', 'BeritaController@show');


Route::view('beranda/admin', 'admin.beranda');
Route::view('siswa', 'admin.siswa');
Route::view('nilai', 'admin.nilai');
