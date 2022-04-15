<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// this is essential for user Authenticating
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /* 
      this is copied from the documentation

    */
     
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
