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

Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::put('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destroy');
Route::get('/posts/{id}/jawaban', 'JawabanController@jawaban');
Route::get('/posts/{id}/komentar', 'JawabanController@komentar');
Route::post('/posts/jawaban', 'JawabanController@store1');
Route::post('/posts', 'JawabanController@index');
Route::get('/posts/{id}/vote', 'JawabanController@vote');
