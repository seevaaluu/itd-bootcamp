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

Route::get('hola_mundo', function() {
    return 'Hola mundo';
});

Route::get('movies', 'MoviesController@index')->name('movies.index');
Route::get('movies/create', 'MoviesController@create')->name('movies.create');
Route::post('movies', 'MoviesController@store')->name('movies.store');