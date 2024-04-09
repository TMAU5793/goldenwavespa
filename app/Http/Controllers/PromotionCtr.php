<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Promotion;

class PromotionCtr extends Controller
{
    function index(){
        $model = new Promotion();
        $result = $model::where('status','1')->get();

        $data['title'] = 'โปรโมชั่นสำหรับคุณลูกค้า';
        $data['result'] = $result;
        return view('promotion',$data);
    }

    function desc($slug){
        $model = new Promotion();
        $result = $model::where('slug',$slug)->first();
        $lastpost = $model::where('status','1')->limit(3)->get();

        $data['title'] = 'โปรโมชั่นสำหรับคุณลูกค้า';
        $data['result'] = $result;
        $data['lastpost'] = $lastpost;
        return view('promotion-detail',$data);
    }
}
