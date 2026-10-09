<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public $username = "Arif";

    public function index(){
        return view("user")->with('username', $this->username);
    }
}
