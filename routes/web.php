<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControls;
Route::get('/', function () {
    return view('welcome');
});
Route::view('/home', 'Home');
Route::get('/about/{name}',function ($name){
    echo "Name is: ".$name;
    return view('about',['name'=>$name]);
});
Route::redirect('/home','/about/SARAH');
Route::get('/user/{name}',[userControls::class,'getname']);

Route::get('/viewName/{name}',[userControls::class,'ViewName']);
Route::get('/nested',[userControls::class,'nestedFile']);