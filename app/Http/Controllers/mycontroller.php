<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    //
    function getname($user){
        return "Hello ". $user. " from mycontroller";
    }
    function showname($user){
        return view('welcome',['name'=>$user]);
    }
}
