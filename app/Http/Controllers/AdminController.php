<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index () 
    {
        return view('admin.index');
    }

    public function manageBooks() {
        
        $books = Book::orderBy('id','desc')->paginate(16);
        return view('admin.manage_books', compact('books'));
    }
}
