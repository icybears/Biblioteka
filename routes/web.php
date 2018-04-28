<?php

use App\Book;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/library', 'BooksController@index')->name('library');

Route::get('/book/{id}', 'BooksController@show')->name('book');

Route::get('/admin', function(){
    return view('admin');
})->name('admin');