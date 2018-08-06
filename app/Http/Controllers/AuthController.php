<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('loginPage','login');
    }
    
    public function loginPage ()
    {
        return view('auth.login');
    }

    public function login ()
    {
        $credentials = request()->only('name', 'password');
        
                if (auth()->attempt($credentials)) {
                    
                    return redirect()->route('admin.index');
                }
                return back()->with(['status' => 'Invalid username or password', 'color' => 'red']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }

  
}
