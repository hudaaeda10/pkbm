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

Route::get('/foto', 'PhotoController@show');
Route::get('/category/{category:slug}/photo', 'CategoryController@showphoto');

Route::get('/video', 'VideoController@show');
Route::get('/category/{category:slug}/video', 'CategoryController@showvideo');

Route::get('/artikel', 'ArticleController@index');
Route::get('/artikel/{article:slug}', 'ArticleController@show');
Route::get('/category/{category:slug}', 'CategoryController@tampil');
Route::get('/artikel/tag/{tag:slug}', 'ArticleController@tampil')->name('site.tag.show');

Route::get('/daftar', 'RegisterController@show');
Route::post('/student/site/store', 'RegisterController@store');
Route::get('/masuk', 'LoginController@show');


// admin
Route::get('/adminlte', 'AdminlteController@dashboard');

// admin-artikel-content
Route::get('/article', 'BeritaController@index');

Route::get('/article/create', 'BeritaController@create');
Route::post('/article/store', 'BeritaController@store');
Route::get('/article/{article:slug}/edit', 'BeritaController@edit');
Route::patch('/article/{article:slug}/edit', 'BeritaController@update');
Route::delete('/article/{article:slug}/delete', 'BeritaController@destroy');
Route::get('/categories/{category:slug}', 'CategoryController@show')->name('categories.show');
Route::get('/tags/{tag:slug}', 'TagController@show')->name('tags.show');
Route::get('/article/{article:slug}', 'BeritaController@show')->name('articles.show');

// admin-video-content
Route::get('/admin/video', 'VideoController@index');
Route::get('/videos/create', 'VideoController@create');
Route::post('/videos/store', 'VideoController@store');
Route::get('/videos/{video:slug}/edit', 'VideoController@edit');
Route::patch('/videos/{video:slug}/edit', 'VideoController@update');
Route::delete('/videos/{video:slug}/delete', 'VideoController@destroy');
Route::get('/videos/{category:slug}', 'CategoryController@video');


//admin-photo-content
Route::get('/admin/photo', 'PhotoController@index');
Route::get('/photos/create', 'PhotoController@create');
Route::post('/photos/store', 'PhotoController@store');
Route::get('/photos/{photo:slug}/edit', 'PhotoController@edit');
Route::patch('/photos/{photo:slug}/edit', 'PhotoController@update');
Route::delete('/photos/{photo:slug}/delete', 'PhotoController@destroy');
Route::get('/photos/{category:slug}', 'CategoryController@photo');

// admin-fitur_guru-data_siswa
Route::get('/admin/students', 'StudentController@index');
Route::post('/student/store', 'StudentController@store');
Route::get('/student/{student}/edit', 'StudentController@edit');
Route::patch('/student/{student}/update', 'StudentController@update');

Route::patch('/student/{student}/update/student', 'StudentController@updatestudent'); // update untuk murid
Route::delete('/student/{student}/delete', 'StudentController@destroy');
Route::get('/student/{student}/tampil', 'StudentController@tampil');
Route::post('/student/{id}/addnilai', 'StudentController@addnilai'); // tambah nilai
Route::get('/student/{student}/{idcourse}/deletenilai', 'StudentController@deletenilai'); // hapus nilai

//admin-fitur_guru-data-guru
Route::get('/admin/teachers', 'TeacherController@index');
Route::get('/admin/teachers/create', 'TeacherController@create');
Route::post('/teacher/store', 'TeacherController@store');
Route::get('/teacher/{teacher}/profile', 'TeacherController@profile');
Route::patch('/teacher/{teacher}/update/teacher', 'TeacherController@update');
Route::delete('/teacher/{teacher}/delete', 'TeacherController@destroy');


Route::view('beranda/admin', 'admin.beranda');
Route::view('siswa', 'admin.siswa');
Route::view('nilai', 'admin.nilai');
