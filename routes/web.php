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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/projects', 'PagesController@projects');

Route::get('/gallery', 'AlbumsController@index');

Route::get('/gallery/create', 'AlbumsController@create');

Route::post('gallery/store', 'AlbumsController@store');

Route::get('gallery/albums', 'AlbumsController@albums');

