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

Route::group(['prefix' => '/'], function() {
    Route::get('', 'TopController@index')->name('top.index');
    Route::get('features', 'TopController@index')->name('top.features');
    Route::get('class', 'TopController@index')->name('top.class');
    Route::get('course', 'TopController@course')->name('top.course');
    Route::get('top', 'TopController@index')->name('top.top');
    Route::get('flow', 'TopController@index')->name('top.flow');
    Route::get('blog', 'TopController@index')->name('top.blog');
    Route::get('peculiarity', 'TopController@peculiarity')->name('top.peculiarity');
});