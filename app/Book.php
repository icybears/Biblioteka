<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Book;

class Book extends Model
{
    public static $pagination = 16;
    
    public $timestamps = false;
    
    protected $guarded = [];

    public static function searchByTitleOrAuthor($query)
    {

        return Book::where('title','like','%' . $query .'%')
        ->orWhere('author','like','%' . $query .'%');

    }

    public static function getAllBooksWithPagination() 
    {

        return Book::orderBy('id','desc')
        ->paginate(static::$pagination);

    }

    public static function filter (Request $request)
    {
        
        if($request->filled('search')){

            $books = Book::searchByTitleOrAuthor($request->input('search'));

        } else {

            $books = Book::where('id','>','0');
        }

        if($request->filled('language')){
           
            $books = $books->where('language', $request->input('language'));
                    
        }

        if($request->filled('filterby')){

            switch ( $request->input('filterby' )){
                case 'recent':
                    $books = $books->orderBy('id','desc');
                    break;
                case 'oldest':
                    $books = $books->orderBy('id','asc'); 
                    break;
                case 'bypages':
                    $books = $books->orderBy('pages', 'asc');
                    break;
            }
        }
       
        return $books;
    }

}
