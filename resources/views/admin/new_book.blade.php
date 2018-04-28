@extends('layouts.admin')

@section('content')

    <div class="container">
        <h4>Add a book</h4>
        <form method="post" class="section row" style="max-width:600px; margin:auto;">
          <div class="input-field col s12 m6">
            <input type="text" id="title" name="Title" class="validate">
            <label for="title">Title</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="author" name="Author" class="validate">
            <label for="author">Author</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="country" name="Country" class="validate">
            <label for="country">Country</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="language" name="Language" class="validate">
            <label for="language">Language</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="year" name="Year" class="validate">
            <label for="year">Year</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="number" id="pages" name="Pages" class="validate">
            <label for="pages">Pages</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="url" id="link" name="Link" class="validate">
            <label for="link">Book URL</label>
          </div>
          <div class="file-field input-field col s12 m6">
          <div class="btn grey">
            <span>Book Image</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
          <button class="btn waves-effect waves-light green" type="submit" name="action">Add Book
          </button>
        </form>
    </div>

@endsection