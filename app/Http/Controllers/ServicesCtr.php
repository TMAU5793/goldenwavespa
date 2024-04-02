<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesCtr extends Controller
{
    function index(){
        $data['title'] = 'บริการ Goldenwavespa';
        return view('services',$data);
    }

    function desc() {
        $data['title'] = 'บริการ Goldenwavespa';
        return view('services-detail',$data);
    }
}
