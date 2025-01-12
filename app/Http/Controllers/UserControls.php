<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControls extends Controller
{
    //
    function getname($name){
        return "Name is:".$name;
    }
    function viewName($name){
        return view('Usersname',['name'=>$name]);
    }
    function nestedFile(){
        return view('nest.admin');
    }
}
