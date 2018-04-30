@extends('layouts.main')

@section('content')

    <div class="container" id="bookPage">

        <div class="row section">

            <div class="col s12 m6 ">
                <div id="bookImg">
                    <img class="responsive-img" src="{{ asset('static/images/' . $book->imageLink)  }}" alt="{{$book->title}}">
                </div>
            </div>

            <div class="col s12 m6">
                    <ul class="collection with-header component">
                        <li class="collection-header"><h4>{{ $book->title }}</h4></li>
                        <li class="collection-item"><strong>Author:</strong>&nbsp;{{ $book->author}}</li>
                        <li class="collection-item"><strong>Number of pages:</strong>&nbsp;{{ $book->pages }}</li>
                        <li class="collection-item"><strong>Year of Publication:</strong>&nbsp;{{ $book->year }}</li>
                        <li class="collection-item"><strong>Language:</strong>&nbsp;{{ $book->language }}</li>
                    </ul>
            </div>

        </div>

    </div>

@endsection