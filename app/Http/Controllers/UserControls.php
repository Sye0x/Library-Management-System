<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
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
        if(view::exists('nest.admin')){
            return view('nest.admin');
        }else{
            return "View not found";
        }
        
    }
    function userData(Request $req){
        echo "User data added successfully";
        echo $req->name;
        
    }
}
