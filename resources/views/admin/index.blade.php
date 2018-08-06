@extends('layouts.admin')

@section('content')

    <div class="container">
        <h4>Library Administration</h4>
        <ul class="collection">
            <li class="collection-item"><a href="{{ route('admin.createBook') }}" class="waves-effect waves-light btn">Add a Book</a></li>
            <li class="collection-item"><a href="{{ route('admin.books') }}" class="waves-effect waves-light btn">Manage Books</a></li>
        </ul>
    </div>

    
@endsection