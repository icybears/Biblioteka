@extends('layouts.main')


@section('content')
<div class="container" id="library">
    <div class="section">
        <form action="" class="row">
          <div class="input-field col s12 m4">
            <select name="language" id="language">
                <option value="" disabled selected>Search by Language</option>
                <option value="English">English</option>
                <option value="French">French</option>
                <option value="German">German</option>
                <option value="Russian">Russian</option>
                <option value="Spanish">Spanish</option>
                <option value="Greek">Greek</option>
                <option value="Italian">Italian</option>
                <option value="Sanskrit">Sanskrit</option>
                <option value="Arabic">Arabic</option>
                <option value="Portuguese">Portuguese</option>
                <option value="Norwegian">Norwegian</option>
                <option value="Japanese">Japanese</option>
                <option value="Persian">Persian</option>
                <option value="Classical Latin">Classical Latin</option>  
            </select>
            <label for="language">Language</label>
          </div>
          <div class="input-field col s12 m6">
                <input placeholder="Search by Title or by Author" id="search" type="search">
                <label for="search">Search library</label>
          </div>
          <div class="col s6 m2" >
                <button class="btn waves-effect waves-light " type="submit" name="action">
                    Search
                </button>
          </div>
        </form>
    </div>
<br>
<div class="row ">
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