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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'ridho ganda rahardi';
//     return view('about',['nama' => $nama]);
// });

//pages static
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');


//mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');

//students
Route::get('/students', 'StudentsController@index');
Route::get('/students/{student}', 'StudentsController@show');
