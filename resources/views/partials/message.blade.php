@if (session('status'))
<div class="card horizontal green lighten-3 white-text ">
    <div class="card-content" >
      <p  style="margin:auto;" >{{ session('status') }}</p>
    </div>
</div>
@endif