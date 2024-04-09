<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class HomeCtr extends Controller
{
    function index(){
        $services = new Service();
        $result = $services::where('status','1')->get();

        $data['services'] = $result;
        return view('home',$data);
    }
}
