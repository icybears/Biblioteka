@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <div class="card horizontal red lighten-3 white-text ">
            <div class="card-content" >
              <li  style="margin:auto;" >{{ $error }}</li>
            </div>
        </div>
        @endforeach
    </ul>
</div>
@endif