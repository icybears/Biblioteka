<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () 
    {
        return view('admin.index');
    }

    public function manageBooks() {
        
        $books = Book::getAllBooksWithPagination();

        return view('admin.books.manage', compact('books'));
    }

    public function bookSearch() {

        $books = Book::searchByTitleOrAuthor(request('search'))->paginate(Book::$pagination);

         return view( 'admin.books.manage', compact('books'));
     }

     public function bookFilter(Request $request) {
   
        $books = Book::filter($request)->paginate(Book::$pagination);

        return view('admin.books.manage', compact('books'));
    }
}
