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

Route::get('/', 'LayoutController@index')->name('main');
Route::get('/about', 'LayoutController@about')->name('about')->middleware('auth');;

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
