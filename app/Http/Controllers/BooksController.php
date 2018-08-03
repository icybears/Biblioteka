<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index() {
          
            $books = Book::orderBy('id','desc')
                        ->paginate(16);
    
            return view('library', compact('books'));
    }


    public function show($id){

         $book = Book::find($id);
    
        return view('book', ['book' => $book]);
    }

    public function create() {
        return view('books.create');
    }


    public function store(Request $request) {
        $this->validate(request(),
        [
            'title' => 'required|min:2',
            'author' => 'required|min:2',
            'image'=> 'mimes:jpeg,jpg,bmp,png'
        ]);

        if($request->file('bookImage')){
            $imageLink = $request->file('bookImage')->getClientOriginalName();
            // not sure
            if(!is_file(public_path('static/images/' . $imageLink))){ //if the image file doesnt already exist
                $request->file('bookImage')->move(public_path('static/images'), $imageLink);
            }
        
        } else {
            $imageLink = '';
        }
       
        Book::create([
            'title' => request('title'),
            'author' => request('author'),
            'language' => request('language'),
            'year' => request('year'),
            'pages' => request('pages'),
            'imageLink'=> $imageLink   
        ]);
 
        return back()->with('status', 'Book Added Successfully !');
    }

    public function update(Request $request){

        if($request->file('bookImage')){ // if file is sent 


                $imageLink = $request->file('bookImage')->getClientOriginalName();
                if(!is_file(public_path('static/images/' . $imageLink))){ //if the image file doesnt already exist
                    $request->file('bookImage')->move(public_path('static/images'), $imageLink);
                }
        
        } else {
            $imageLink = request('bookImage');
        }
       
        Book::where('id', request('id'))
            ->update([
                'title' => request('Title'),
                'author' => request('Author'),
                'language' => request('Language'),
                'year' => request('Year'),
                'pages' => request('Pages'),
                'imageLink'=> $imageLink   
            ]);

        return redirect('admin/books')->with(['status' => 'Book updated']);
    }

    public function delete() {

         Book::destroy(request('id'));

        return redirect('admin/books')->with(['status' => 'Book deleted']);
    }
}
