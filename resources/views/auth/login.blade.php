@extends('layouts.main') 
@section('content')

<div class="container">
    <div class="row">
        <form class="col s12 m6 l4 offset-m3 offset-l4 " method="POST" action="{{ route('login') }}">
        <h3>Login</h3>
        @csrf
        
            <div class="row card-panel">
                @include('partials.message')
                <div class="row ">
                    <div class="input-field col s12 ">
                        <input name="name" placeholder="Your Username" id="name" type="text" class="validate" value="{{ old('name') }}">
                        <label for="name">User Name</label> 
               
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" placeholder="Your password" id="password" type="password" class="validate">
                        <label for="password">Password</label>
                      
                    </div>
        
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Login
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection