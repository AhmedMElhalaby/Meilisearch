<?php

use Illuminate\Support\Facades\Route;

Route::get('app/lang', 'HomeController@lang');

Route::group([
    'namespace'  => 'Auth',
], function() {
    Route::get('login', ['uses' => 'LoginController@showLoginForm','as'=>'dashboard.login']);
    Route::post('login', ['uses' => 'LoginController@login']);
    Route::group([
        'middleware' => 'auth.dashboard',
    ], function() {
        Route::post('logout', ['uses' => 'LoginController@logout','as'=>'dashboard.logout']);
    });
});
Route::group([
    'middleware'  => 'auth.dashboard',
], function() {
    Route::get('/', 'HomeController@index');
    Route::group([
        'prefix'=>'images'
    ],function () {
        Route::get('/','ImageController@index');
        Route::get('/create','ImageController@create');
        Route::post('/','ImageController@store');
        Route::get('/{image}','ImageController@show');
        Route::get('/{image}/edit','ImageController@edit');
        Route::put('/{image}','ImageController@update');
        Route::delete('/{image}','ImageController@destroy');
        Route::get('/option/export','ImageController@export');
    });
    Route::group([
        'prefix'=>'tags'
    ],function () {
        Route::get('/','TagController@index');
        Route::get('/create','TagController@create');
        Route::post('/','TagController@store');
        Route::get('/{tag}','TagController@show');
        Route::get('/{tag}/edit','TagController@edit');
        Route::put('/{tag}','TagController@update');
        Route::delete('/{tag}','TagController@destroy');
        Route::get('/option/export','TagController@export');
    });
});
