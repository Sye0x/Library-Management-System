<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControls;
Route::get('/', function () {
    return view('welcome');
});
Route::view('/home', 'Home');
Route::get('/about/{name}',function ($name){
    echo "Name is: ".$name;
    $users=['Sarah','John','Doe'];
    return view('about',['name'=>$name,'users'=>$users]);
});
Route::get('/age/{age}',function($age){
    return view('exp',['age'=>$age]);
});
Route::redirect('/home','/about/SARAH');
Route::get('/user/{name}',[userControls::class,'getname']);

Route::get('/viewName/{name}',[userControls::class,'ViewName']);
Route::get('/nested',[userControls::class,'nestedFile']);
Route::get('/myView/{name}',function($name){
    return view('myView',['name'=>$name]);
});