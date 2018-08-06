@extends('layouts.admin')

@section('content')

    <div class="container">
    @include('partials.message')
    @include('partials.errors')
        <h4>Add a book</h4>
        <div class="component" id="add-book-form">
          <form method="POST" action="{{ url('admin/books') }}" class="row"  files="true" enctype="multipart/form-data">
            @csrf       
            <div class="input-field col s12 m6">
              <input type="text" id="title" name="title" class="validate">
              <label for="title">Title</label>
            </div>
            <div class="input-field col s12 m6">
              <input type="text" id="author" name="author" class="validate">
              <label for="author">Author</label>
            </div>
  
            <div class="input-field col s12 m6">
              <input type="text" id="language" name="language" class="validate">
              <label for="language">Language</label>
            </div>
            <div class="input-field col s12 m6">
              <input type="text" id="year" name="year" class="validate">
              <label for="year">Year</label>
            </div>
            <div class="input-field col s12 m6">
              <input type="number" id="pages" name="pages" class="validate">
              <label for="pages">Pages</label>
            </div>
           
            <div class="file-field input-field col s12 m6">
            <div class="btn btn-small grey">
              <span>Book Image</span>
              <input type="file" name="bookImage" accept=".jpg,.jpeg,.png">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          
           <div class="col s12 ">
               <br>
                <button class="btn waves-effect waves-light green"  onclick="submitForm(this)">Add Book</button>
           </div>
          </form>
        </div>
    </div>

@endsection