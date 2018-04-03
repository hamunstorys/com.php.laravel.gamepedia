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


Route::get('/', [
    'as' => 'index',
    'uses' => 'IndexController@index'
]);

Route::prefix('user')->group(function () {
    Route::get('/login', [
        'as' => 'session.create',
        'uses' => 'SessionController@create'
    ]);

    Route::post('/login', [
        'as' => 'session.store',
        'uses' => 'SessionController@store'
    ]);

    Route::get('/register', [
        'as' => 'session.register',
        'uses' => 'SessionController@register'
    ]);

    Route::get('/logout', [
        'as' => 'session.destroy',
        'uses' => 'SessionController@destroy'
    ]);
});


Route::prefix('game')->group(function () {
    Route::get('/create', [
        'as' => 'game.create',
        'uses' => 'GameController@create'
    ]);

    Route::get('/show', [
        'as' => 'game.show',
        'uses' => 'GameController@show'
    ]);
});

Route::prefix('search')->group(function () {
    Route::get('/result', [
        'as' => 'search.result',
        'uses' => 'SearchController@result'
    ]);
});