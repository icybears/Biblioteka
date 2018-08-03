
  <div id="delete" class="modal">
    <div class="modal-content">
      <h4>Delete a Book</h4>
      <p>Are you sure you want to delete the book <strong>{{ $book->title }}</strong> By <strong>{{ $book->author }}</strong> ?</p>
    </div>
    <div class="modal-footer">
      <a href="{{ route('admin.deleteBook', ['id' => $book->id] ) }}" class="modal-action modal-close waves-effect waves-green btn-flat red lighten-3 white-text">Yes</a>
      <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>    
    </div>
  </div>