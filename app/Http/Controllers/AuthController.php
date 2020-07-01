<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        // $fname = $request->input('fname');
        $fname = $request['fname'];
        $lname = $request['lname'];
        $name = $fname.' '.$lname;
        return view('succes', ['name' => $name]);
    }
}
