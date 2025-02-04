<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControls;
use App\Http\Controllers\mycontroller;
Route::get('/wellcome/{name}', function ($name) {
    return view('welcome', ["name" => $name]);

});

Route::get("/fun/{user}",[mycontroller::class,"getname"]);
Route::get("/fun2/{user}",[mycontroller::class,"showname"]);
Route::get("/fun3",[mycontroller::class,"passarray"]);
Route::get("/fold",function(){
    return view('fold.hello');
});
Route::view("/signup","signup");
Route::post("signup",[Usercontroller::class,"save"]);