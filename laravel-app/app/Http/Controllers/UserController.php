<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser()
    {
        $data=['sandesh','sandy','xyz'];
        return view('users',["user"=>$data]);
    }

    function getData(Request $request)
    {
        $request->validate([
            'username'=> 'required | max:10',
            'password'=> 'required | min:3'
        ]);
        return $request->input();
    }
}
