<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class LibraryController extends Controller
{
    
    public function search() {
        
            $books = Book::searchByTitleOrAuthor(request('search'))->paginate(Book::$pagination);
            
            return view( 'library', compact('books'));
    
    }

        
    public function filter(Request $request) {

        $books = Book::filter($request)->paginate(Book::$pagination);

        return view('library', compact('books'));
    }

}
