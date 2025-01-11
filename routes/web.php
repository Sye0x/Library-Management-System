<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/home', 'Home');
Route::get('/about/{name}',function ($name){
    echo "Name is: ".$name;
    return view('about',['name'=>$name]);
});
Route::redirect('/home','/about/SARAH');