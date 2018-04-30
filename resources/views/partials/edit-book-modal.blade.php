<div id="edit" class="modal">
<form method="post" class="section row" style="max-width:600px; margin:auto;" action="{{ route('admin.update') }}">
    <div class="modal-content">
      <h4>Edit a book</h4>
        {{csrf_field()}}   
          <input type="hidden" name="id" value="{{ $book->id }}">         
          <div class="input-field col s12 m6">
            <input type="text" id="title" name="Title" class="validate" value="{{ $book->title }}">
            <label for="title">Title</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="author" name="Author" class="validate" value="{{ $book->author }}">
            <label for="author">Author</label>
          </div>

          <div class="input-field col s12 m6">
            <input type="text" id="language" name="Language" class="validate" value="{{ $book->language }}">
            <label for="language">Language</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="year" name="Year" class="validate" value="{{ $book->year }}">
            <label for="year">Year</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="number" id="pages" name="Pages" class="validate" value="{{ $book->pages }}">
            <label for="pages">Pages</label>
          </div>
          <div class="file-field input-field col s12 m6" >
          <div class="btn btn-small grey">
            <span>Book Image</span>
            <input type="file" name="image">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" value="{{ $book->imageLink }}">
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat green ">Edit</button>
      <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>      
    </div>
  </form>
  </div>