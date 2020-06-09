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

Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {

    /** Página Inicial */
    Route::get('/', 'WebController@home')->name('home');
    Route::get('/filmes', 'WebController@home')->name('movies');
    Route::get('/filmes/categorias', 'WebController@movieCategory')->name('category');
    Route::get('/usuarios', 'WebController@users')->name('users');
    Route::get('/usuarios/papeis', 'WebController@userRole')->name('role');

});
