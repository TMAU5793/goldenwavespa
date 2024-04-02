<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCtr extends Controller
{
    function index(){
        return view('home');
    }
}
