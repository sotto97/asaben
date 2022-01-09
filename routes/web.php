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
    Route::get('entrance', 'TopController@entrance')->name('top.entrance');
    Route::get('greetings', 'TopController@greetings')->name('top.greetings');
    Route::get('course', 'TopController@course')->name('top.course');
    Route::get('top', 'TopController@index')->name('top.top');
    Route::get('curriculum', 'TopController@curriculum')->name('top.curriculum');
    Route::get('blog', 'TopController@index')->name('top.blog');
    Route::get('peculiarity', 'TopController@peculiarity')->name('top.peculiarity');
});