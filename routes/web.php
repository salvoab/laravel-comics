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

Route::get('/', 'PageController@index')->name('home');
Route::get('comics', 'PageController@comics')->name('comics');
Route::get('comics/{comic}', 'PageController@showComic')->name('show_comic');


Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('comics', 'ComicController');
    Route::resource('articles', 'ArticleController');
});