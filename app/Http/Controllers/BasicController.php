<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    //
    function index(){


    $num = 43;
    $names = ["Dustin","Haris","Khan","Nehal"];



        return view("basic")->with("names", $names)->with("num", $num);
    }
}
