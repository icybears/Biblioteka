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
        
        $books = Book::orderBy('id','desc')->paginate(16);

        return view('admin.books.manage', compact('books'));
    }

    public function manageUsers() {
        return view('admin.manage_users');
    }

    public function bookSearch() {
        $books = Book::where('title','like','%' . request('search') .'%')
                 ->orWhere('author','like','%' . request('search') .'%')
                 ->paginate(16);
         return view( 'admin.books.manage', compact('books'));
     }

     public function bookFilter() {
        if(request('search')){
        $books = Book::where('title','like','%' . request('search') .'%')
                        ->orWhere('author','like','%' . request('search') .'%');
        } else {
        $books = Book::where('id','>','0');
        }
        if(request('language')){
           
            $books = $books->where('language', request('language'));
                    
        }
        if(request('filterby') == 'recent'){
            $books = $books->orderBy('id','desc');
                            
        } else if(request('filterby') == 'oldest'){
            $books = $books->orderBy('id','asc');                  
        } else if(request('filterby') == 'bypages'){
            $books = $books->orderBy('pages', 'asc');
        }

        $books = $books->paginate(16);
        return view('admin.books.manage', compact('books'));
    }
}
