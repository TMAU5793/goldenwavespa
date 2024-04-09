<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->to('admin/services');
    }
    
    public function tinyupload(Request $request)
    {        
        $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->storeAs('uploads', $fileName, 'public');

        // Return on localhost
        return response()->json(['location'=>url('/')."/storage/$path"]);

        // Return on Server Site
        // return response()->json(['location'=>url('/')."/data/storage/app/public/$path"]);
    }
}
