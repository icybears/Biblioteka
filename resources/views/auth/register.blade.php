@extends('layouts.main') 
@section('content')

<div class="container">
    <div class="row">
        <form class="col s12 m6 l4 offset-m3 offset-l4 " method="POST" action="{{ route('register') }}">
        <h3>Register</h3>
        
        @csrf
            <div class="row card-panel">
                    <div class="row">
                            <div class="input-field col s12">
                                <input name="name" placeholder="Your name" id="name" type="text" class="validate" value='{{ old("name") }}'>
                                <label for="name">Name</label>
                                @if ($errors->has('name'))
                                <div class="card-panel red">
                                    <span class="white-text">
                                                <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                </div>
                                @endif
                            </div>
                
                        </div>
                <div class="row ">
                    <div class="input-field col s12 ">
                        <input name="email" placeholder="Your Email" id="email" type="text" class="validate" value="{{ old('email') }}">
                        <label for="email">Email Address</label> 
                        @if ($errors->has('email'))
                        <div class="card-panel red">
                            <span class="white-text">
                                  <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        </div>
        
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" placeholder="Your password" id="password" type="password" class="validate">
                        <label for="password">Password</label>
                        @if ($errors->has('password'))
                        <div class="card-panel red">
                            <span class="white-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        </div>
                        @endif
                    </div>
        
                </div>
                <div class="row">
                        <div class="input-field col s12">
                            <input name="password_confirmation" placeholder="Repeat your password" id="password_confirmation" type="password" class="validate">
                            <label for="password_confirmation">Password Confirmation</label>
                            @if ($errors->has('password_confirmation'))
                            <div class="card-panel red">
                                <span class="white-text">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            </div>
                            @endif
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

