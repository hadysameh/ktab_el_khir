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
use App\Mail\RequestBookMail;

Route::get('/', 'LayoutController@index')->name('main');
Route::get('/about', 'LayoutController@about')->name('about');
Route::get('/addbook', 'BookController@create')->name('addbook')->middleware(['auth','library']);
Route::post('/postbook', 'BookController@store')->name('postbook')->middleware(['auth','library']);
Route::get('/librarybooks', 'BookController@index')->name('librarybook')->middleware(['auth','library']);
Route::get('/download/{id}', 'BookController@show')->name('download')->middleware('auth');
Route::get('/edit/{id}', 'BookController@edit')->name('edit')->middleware(['auth','library']);
Route::delete('/deletebook/{id}', 'BookController@destroy')->name('deletebook')->middleware(['auth','library']);
Route::put('/edit/{id}', 'BookController@update')->middleware(['auth','library']);
Route::get('/search', 'BookController@search')->middleware(['auth']);
Route::get('/search_results', 'BookController@search_results')->middleware(['auth']);
Route::get('/library_reg', 'LibraryRegController@create')->name('library_reg')->middleware(["auth","library_reg"]);
Route::post('/library_reg', 'LibraryRegController@store')->middleware(["auth","library_reg"]);
Route::get('/send_email/{id}', 'BookController@send_email')->middleware(['auth']);
Route::get('/books_admin', 'BookController@books_admin')->middleware(['auth',"library_reg"]);

// Route::get('/email', function () {
//     return new RequestBookMail(1);
// });
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
