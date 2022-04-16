<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;

class RegisterController extends Controller
{
    //
    function register(Request $req)
    {
        /* 
        always put on the validation before entering the data 
        Thats the first step into feeding data.
        */
        $req->validate([
            'email'=>'required|email|unique:users'
        ]);
        
        // feeding data to database
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;

        // hashing password before feeding
        // its important to hash, login wont work if you dont
        $password = request('password');
        $hashed = Hash::make($password);
        
        $user->password=$hashed;
        $user->save();

        return redirect('login');
    }
   
                                                                             
}
