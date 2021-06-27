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

Auth::routes();

//questa specifica route è accessibile solo se loggati. (specifico questo con il middleware).
Route::get('/', 'HomeController@index')->middleware('auth')->name('home');


//Gestisce i post pubblici
Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/blog/{slug}', 'PostController@show')->name('blog-page');


//Route api
Route::get('/vue-posts', 'PostController@vuePosts')->name('vue-post');


Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')

    ->group(function () {

        Route::get('/', 'HomeController@index')->name('home');

        Route::resource('posts', 'PostController');
    }); 
