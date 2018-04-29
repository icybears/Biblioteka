@extends('layouts.main')


@section('content')
<div class="container" id="library">
    <br>
    <div class="section">
        @include('partials.filter-books-public-form')
    </div>

    <div class="row container section">
    @foreach($books as $book)
        <div class="col s12 m4 l3">
            <a href="{{route('book', $book->id)}}">
                <div class="card small  ">
                    <div class="card-image">
                        <img src="{{ asset('static/images/' . $book->imageLink) }}" alt="{{ $book->title }}"/>
                        <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                        <p>{{ $book->title }} &mdash; {{ $book->author }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    </div>
    <div class="row">
        <div class="col s12 center-align">
            {{ $books->links() }}
        </div>
    </div>
</div>
@endsection
</div>