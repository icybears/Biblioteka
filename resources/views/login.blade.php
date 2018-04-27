@extends('layouts.main')

@section('content') 

<div class="container">
    <h4 class="center-align section">Login to your Account</h4>
    <div class="row section">
        <form method="post" action="">
            <div class="input-field col s12 m6 offset-m3 l4 offset-l4">
                <input type="email" id="email" class="validate">
                <label for="email" data-error="wrong" data-success="right">Email</label>
            </div>
            <div class="input-field col s12 m6 offset-m3 l4 offset-l4">
                <input type="password" id="password" name="password" class="validate">
                <label for="password">Password</label>
            </div>
            <div class="input-field col s12 m6 offset-m3 l4 offset-l4">
                <button class="btn waves-effect waves-light" type="submit" name="action">Login
                </button>
            </div>
            @csrf
        </form>
    </div>
</div>

@endsection