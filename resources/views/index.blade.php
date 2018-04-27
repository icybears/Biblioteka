@extends('layouts.main')

@section('content')
    <div id="landing" class="container" >
      <div class="row">
          <form action="" >
            <div class="input-field col s12 m6 offset-m3 center-align">
              <a href="{{ route('library') }}" class="waves-effect waves-light btn-large">Browse our Books</a>
            </div>
          </form>
      </div>
    </div>
@endsection