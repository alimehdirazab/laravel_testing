<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function loadView()
    {
        $data=['ali','mehdi','raza','sajjad'];
        return view('users',['users'=>$data]);
    }
    function getData(Request $req)
    {
        return $req->input();
    }
}
