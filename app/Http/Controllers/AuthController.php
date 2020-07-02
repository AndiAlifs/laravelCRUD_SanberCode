<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function welcome(Request $request)
    {   
        return view("welcam", ["first_name" => $request["first_name"],"last_name" => $request["last_name"]]);
    }
}
