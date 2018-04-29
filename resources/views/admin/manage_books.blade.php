@extends('layouts.admin')

@section('content')
    <div class="container section">
        <h4>Manage Books</h4>
        <div class="section">
        <form action="" class="row">
          <div class="col s12 m4">
            
                <input name="group1" type="radio" id="test1" class="with-gap"/>
                <label for="test1">Red</label>
        
                <input name="group1" type="radio" id="test2" class="with-gap"/>
                <label for="test2">Yellow</label>
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
        <table class="centered bordered highlight">
            <thead>
                <tr>
                    <th data-field="title">Title</th>
                    <th data-field="author">Author</th>
                    <th data-field="pages">Pages</th>                    
                    <th data-field="language">Language</th>
                    <th data-field="year">Year</th>
                    <th data-field="imageLink">Image Link</th>
                    <th></th>
                    <th></th>                    
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->pages }}</td>                    
                    <td>{{ $book->language }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->imageLink }}</td>
                    <td>  <a class="btn-floating btn-small green lighten-3 modal-trigger" href="#edit">
      <i class="small material-icons">mode_edit</i>
    </a></td>
                    <td><a class="btn-floating btn-small red lighten-2 modal-trigger" href="#delete">
      <i class="small material-icons">delete_forever</i>
    </a></td>                          
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
     <div class="section">
            <div class="row">
                <div class="col s12 center-align">
                    {{ $books->links() }}
                </div>
            </div>
     </div>
    </div>
    @include('partials.edit-book-modal')
    @include('partials.confirm-delete')
@endsection