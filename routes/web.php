<?php



Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


// 
// Library
//

Route::get('/library', 'BooksController@index')->name('library');

Route::get('/book/{id}', 'BooksController@show')->name('book');

Route::get('/library/search', 'LibraryController@search');

Route::get('/library/filter', 'LibraryController@filter');

//
// Admin routes
//

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::get('/admin/books', 'AdminController@manageBooks')->name('admin.books');

Route::post('/admin/books', 'BooksController@store');

Route::get('/admin/books/create', 'BooksController@create')->name('admin.createBook');

Route::get('/admin/books/search', 'AdminController@bookSearch')->name('admin.bookSearch');

Route::get('/admin/books/filter', 'AdminController@bookFilter')->name('admin.bookFilter');

Route::get('/admin/books/delete', 'BooksController@delete')->name('admin.deleteBook');

Route::post('/admin/books/edit', 'BooksController@update')->name('admin.updateBook');

//
// Auth Routes
//

Route::get('/login', 'AuthController@loginPage');

Route::post('/login','AuthController@login')->name('login');

Route::get('/logout','AuthController@logout')->name('logout');




