<?php

use Illuminate\Support\Facades\Auth;
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
// Pages controller
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
//Route::get('/contact', 'PagesController@contact');
Route::get('/projects', 'PagesController@projects');
Route::get('productapi', 'PagesController@productAPI');
Route::get('wordpress', 'PagesController@wordpress');
Route::get('contacts', 'PagesController@contacts');

// Albums controller
Route::get('/gallery', 'AlbumsController@index');
Route::get('/gallery/create', 'AlbumsController@create');
Route::post('gallery/store', 'AlbumsController@store');
Route::get('gallery/albums', 'AlbumsController@albums');
Route::get('gallery/albums/{id}', 'AlbumsController@show');

// Photos controller
Route::get('gallery/photos/create/{id}', 'PhotosController@create');
Route::post('gallery/photos/store', 'PhotosController@store');
Route::get('gallery/photos/{id}', 'PhotosController@show');
Route::delete('gallery/photos/{id}', 'PhotosController@destroy');

// Authentication controller
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

// Localization
Route::get('lang/{locale}', function ($locale) {
   session()->put('locale', $locale);
   return redirect()->back();
});

// Contact form controller
Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');
