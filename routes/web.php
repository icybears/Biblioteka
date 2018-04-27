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

    $books = DB::table('books')->get();

    return view('library', compact('books'));
})->name('library');

Route::get('/book/{id}', function($id) {

    $book = DB::table('books')->find($id);

    return view('book', ['book' => $book]);
})->name('book');