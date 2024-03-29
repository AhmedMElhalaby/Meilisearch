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
    app()->setLocale('ar');
    return view('welcome');
});
Route::resource('images','ImageController');
Route::resource('posts','PostController');
Route::resource('users','UserController');
Route::get('/ping', 'SolariumController@ping');
Route::get('/search', 'SolariumController@search');
Route::get('meiliesearch/doc', 'MeiliesearchController@store_doc');
Route::get('meiliesearch/search', 'MeiliesearchController@search');
