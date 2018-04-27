@extends('layouts.main')


@section('content')
    <div class="container">
        <br>
        <ul class="collection">
            @foreach($books as $book)
                <li class="collection-item">{{ $book }}</li>
            @endforeach
        </ul>
    </div>


@endsection