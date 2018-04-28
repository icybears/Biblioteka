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

Route::get('/library', function() {

    // $books = DB::table('books')->get();
    $books = Book::all();

    return view('library', compact('books'));
})->name('library');

Route::get('/book/{id}', function($id) {

    // $book = DB::table('books')->find($id); 
    $book = Book::find($id);

    return view('book', ['book' => $book]);
})->name('book');