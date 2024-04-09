<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class LanguageCtr extends Controller
{
    function index(Request $request) {
        // dd($request->lang);
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }
}
