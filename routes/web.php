<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/{username}', function ($username) {
//     return view('welcome')->with('username',$username);
// });

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function(){
    return view('about');
});
Route::get('basic', [BasicController::class,'index']);

Route::get('user', [UserController::class, 'index']);




