<?php

use App\Book;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/library', 'BooksController@index')->name('library');

Route::get('/book/{id}', 'BooksController@show')->name('book');

// 
// Library
//
Route::get('/library/search', 'LibraryController@search');

Route::get('/library/filter', 'LibraryController@filter');
//
// Admin routes
//

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::get('/admin/book/new', 'BooksController@create')->name('admin.createBook');

Route::post('/admin/book/new', 'BooksController@store');

Route::get('/admin/books', 'AdminController@manageBooks')->name('admin.books');

Route::get('/admin/users', 'AdminController@manageUsers')->name('admin.users');

Route::get('/admin/books/search', 'AdminController@bookSearch')->name('admin.bookSearch');

Route::get('/admin/books/filter', 'AdminController@bookFilter')->name('admin.bookFilter');

Route::get('/admin/books/delete', 'BooksController@delete')->name('admin.deleteBook');

Route::post('/admin/books/edit', 'BooksController@update')->name('admin.updateBook');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@show');
