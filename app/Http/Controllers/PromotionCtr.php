<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionCtr extends Controller
{
    function index(){
        $data['title'] = 'โปรโมชั่นสำหรับคุณลูกค้า';
        return view('promotion',$data);
    }

    function desc(){
        $data['title'] = 'โปรโมชั่นสำหรับคุณลูกค้า';
        return view('promotion-detail',$data);
    }
}
