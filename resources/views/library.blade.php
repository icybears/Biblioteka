@extends('layouts.main')


@section('content')
    <div class="container">
        <br>
        <div class="row">
            @foreach($books as $book)
                <div class="card medium col m4 l3">
                    <div class="card-image">
                        <img src="{{ asset('static/images/' . $book->imageLink) }}" alt="{{ $book->title }}"/>
                        <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                        <p>{{ $book->title }} &mdash; {{ $book->author }}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
@endsection