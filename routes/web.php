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
Route::get('/artikel', 'ArticleController@index');
Route::get('/artikel/{article:slug}', 'ArticleController@show');
Route::get('/category/{category:slug}', 'CategoryController@tampil');
Route::get('/daftar', 'RegisterController@show');
Route::get('/masuk', 'LoginController@show');


// admin
Route::get('/adminlte', 'AdminlteController@dashboard');

// admin-artikel
Route::get('/article', 'BeritaController@index');

Route::get('/article/create', 'BeritaController@create');
Route::post('/article/store', 'BeritaController@store');


Route::get('/article/{article:slug}/edit', 'BeritaController@edit');
Route::patch('/article/{article:slug}/edit', 'BeritaController@update');

Route::delete('/article/{article:slug}/delete', 'BeritaController@destroy');

Route::get('/categories/{category:slug}', 'CategoryController@show');

Route::get('/article/{article:slug}', 'BeritaController@show');



Route::view('beranda/admin', 'admin.beranda');
Route::view('siswa', 'admin.siswa');
Route::view('nilai', 'admin.nilai');
