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
