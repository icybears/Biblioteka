@extends('layouts.admin')

@section('content')

    <div class="container">
        <h4>Library Administration</h4>
        <ul class="collection">
            <li class="collection-item"><a href="{{ route('admin.new_book') }}" class="waves-effect waves-light btn">Add a Book</a></li>
            <li class="collection-item"><a href="{{ route('admin.books') }}" class="waves-effect waves-light btn">Manage Books</a></li>
        </ul>
        <ul class="collection">
            <li class="collection-item"><a href="{{ route('admin.users')}}" class="waves-effect waves-light btn">Manage Users</a></li>
        </ul>
    </div>

    
@endsection