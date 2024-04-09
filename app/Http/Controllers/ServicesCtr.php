<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServicesCtr extends Controller
{
    function index(){
        $model = new Service();
        $result = $model::where('status','1')->get();

        $data['title'] = 'บริการ Goldenwavespa';
        $data['result'] = $result;
        return view('services',$data);
    }

    function desc($slug) {
        $model = new Service();
        $result = $model::where('slug',$slug)->first();

        $data['title'] = 'บริการ Goldenwavespa';
        $data['result'] = $result;
        $data['services'] = $model::where('status','1')->get();
        return view('services-detail',$data);
    }
}
