<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index() {
            // $books = DB::table('books')->get();
            $books = Book::all();
    
            return view('library', compact('books'));
    }

    public function show($id){
        // $book = DB::table('books')->find($id); 
         $book = Book::find($id);
    
        return view('book', ['book' => $book]);
    }
}
