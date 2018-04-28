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

    public function create() {
        return view('admin.new_book');
    }

    public function store() {
        // new book instance
        // $book = new Book;

        // setting the values for each field
        // $book->title = request('Title');
        // $book->author = request('Author'); 
        //...
        //save to db
        // $book->save();
        
        Book::create([
            'title' => request('Title'),
            'author' => request('Author'),
            'language' => request('Language'),
            'year' => request('Year'),
            'pages' => request('Pages'),
            'imageLink'=> ''   
        ]);
        
  

        //redirecting    
        return redirect('admin/book/create')->with('status', 'Book Added Successfully !');
    }
}
