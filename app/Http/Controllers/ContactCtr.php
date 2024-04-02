<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactCtr extends Controller
{
    function index(){
        $data['title'] = 'ติดต่อ Goldenwavespa';
        return view('contact',$data);
    }
}
