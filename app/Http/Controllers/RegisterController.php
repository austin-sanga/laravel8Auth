<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    function register(Request $req)
    {
        // $data = new User;
        // $data->email=$req->email;
        // $data->password=$req->password;
        return $req->input()->get();
    }
   
                                                                             
}
