<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index() {
            // $books = DB::table('books')->get();
            //$books = Book::all();
            $books = Book::orderBy('id','desc')
                        ->paginate(16);
    
            return view('library', compact('books'));
    }

    public function manage() {

        $books = Book::orderBy('id','desc')->paginate(16);
        return view('admin.manage_books', compact('books'));
    }

    public function show($id){
        // $book = DB::table('books')->find($id); 
         $book = Book::find($id);
    
        return view('book', ['book' => $book]);
    }

    public function create() {
        return view('admin.new_book');
    }

    public function search() {
        
               $books = Book::where('title','like','%' . request('search') .'%')
                        ->orWhere('author','like','%' . request('search') .'%')
                        ->paginate(16);
        
                return view( 'library', compact('books'));
            }

    public function adminSearch() {

       $books = Book::where('title','like','%' . request('search') .'%')
                ->orWhere('author','like','%' . request('search') .'%')
                ->paginate(16);

        return view( 'admin.manage_books', compact('books'));
    }

    
    public function filter() {
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
        return view('library', compact('books'));
    }

    public function adminFilter() {
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
        return view('admin.manage_books', compact('books'));
    }
    public function store(Request $request) {
        // new book instance
        // $book = new Book;

        // setting the values for each field
        // $book->title = request('Title');
        // $book->author = request('Author'); 
        //...
        //save to db
        // $book->save();

        // $imageLink = $request->bookImage->getClientOriginalExtension();
        if($request->file('bookImage')){
            $imageLink = $request->file('bookImage')->getClientOriginalName();
            $request->file('bookImage')->move(public_path('static/images'), $imageLink);
        
        } else {
            $imageLink = '';
        }
       
        Book::create([
            'title' => request('Title'),
            'author' => request('Author'),
            'language' => request('Language'),
            'year' => request('Year'),
            'pages' => request('Pages'),
            'imageLink'=> $imageLink   
        ]);
 
        return redirect('admin/book/create')->with('status', 'Book Added Successfully !');
    }

    public function update(){
        Book::where('id', request('id'))
            ->update([
                'title' => request('Title'),
                'author' => request('Author'),
                'language' => request('Language'),
                'year' => request('Year'),
                'pages' => request('Pages'),
                'imageLink'=> ''   
            ]);

        return redirect('admin/books')->with(['status' => 'Book updated']);
    }
    public function delete() {

         Book::destroy(request('id'));

        return redirect('admin/books')->with(['status' => 'Book deleted']);
    }
}
