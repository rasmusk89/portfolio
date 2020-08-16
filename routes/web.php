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

Route::get('gallery/albums/{id}', 'AlbumsController@show');

Route::get('gallery/photos/create/{id}', 'PhotosController@create');

Route::post('gallery/photos/store', 'PhotosController@store');

Route::get('gallery/photos/{id}', 'PhotosController@show');

Route::delete('gallery/photos/{id}', 'PhotosController@destroy');

Route::get('productapi', 'PagesController@productAPI');

Route::get('wordpress', 'PagesController@wordpress');
