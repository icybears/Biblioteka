<div id="edit" class="modal">
    <div class="modal-content">
      <h4>Edit a book</h4>
        <form method="post" class="section row" style="max-width:600px; margin:auto;">
        {{csrf_field()}}            
          <div class="input-field col s12 m6">
            <input type="text" id="title" name="Title" class="validate">
            <label for="title">Title</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="author" name="Author" class="validate">
            <label for="author">Author</label>
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
          <div class="file-field input-field col s12 m6">
          <div class="btn btn-small grey">
            <span>Book Image</span>
            <input type="file" name="image">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Edit</a>
    </div>
  </div>