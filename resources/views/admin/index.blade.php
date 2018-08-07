@extends('layouts.admin')

@section('content')

    <div id="adminIndex" class="container ">
      <div class="row">
            <div class="row col s12 m6 offset-m3 center-align">
                <h4>Library Administration</h4>
            </div>
            <ul class="collection col s12 m4 offset-m4 component">
                <li class="collection-item"><a href="{{ route('admin.createBook') }}" class="waves-effect waves-light btn green accent-4">Add a Book</a></li>
                <li class="collection-item"><a href="{{ route('admin.books') }}" class="waves-effect waves-light btn  red accent-2">Manage Books</a></li>
                <li class="collection-item"><a href="{{ route('library') }}" class="waves-effect waves-light btn  blue darken-1">Return to Library</a></li>
                <li class="collection-item"><a href="{{ route('logout') }}" class="waves-effect waves-light btn grey darken-3">Logout</a></li>
            </ul>
      </div>
    </div>

    
@endsection