<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Service;

use Image;
use File;

class Services extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Service;
        $result = $model::orderBy('created_at','DESC')->paginate(15);
        $data['result'] = $result;
        return view('admin.services',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->all();
        // dd($post);
        $model = new Service;
        $model->title = $post['title'];
        $model->shortdesc = $post['shortdesc'];
        $model->desc = $post['desc'];
        // $model->title_en = ($post['title_en']!=''?$post['title_en']:$post['title']);
        // $model->shortdesc_en = ($post['shortdesc_en']!=''?$post['shortdesc_en']:$post['shortdesc']);
        // $model->desc_en = ($post['desc_en']!=''?$post['desc_en']:$post['desc']);
        // $model->tags = $post['tags'];
        $model->slug = Str::slug($post['slug']);
        // $model->seo_title = $post['seo_title'];
        // $model->seo_desc = $post['seo_desc'];
        // $model->status = (isset($post['rd_status']) && $post['rd_status']=='on' ?'1':'0');

        if($model->save()){
            $complete = [
                'complete' => 'บันทึกข้อมูลเรียบร้อย',
                'classname' => 'success'
            ];
            return redirect('admin/services')->with($complete);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new Service;
        $result = $model::where('id',$id)->first();
        $data['result'] = $result;
        $data['action'] = 'update';
        return view('admin.services-form',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $model = new Service;
        $post = $request->all();

        $info = [
            'title' => $post['title'],
            'shortdesc' => $post['shortdesc'],
            'desc' => $post['desc'],
            // 'title_en' => ($post['title_en']!=''?$post['title_en']:$post['title']),
            // 'shortdesc_en' => ($post['shortdesc_en']!=''?$post['shortdesc_en']:$post['shortdesc']),
            // 'desc_en' => ($post['desc_en']!=''?$post['desc_en']:$post['desc']),
            // 'tags' => $post['tags'],
            'slug' => Str::slug($post['slug']),
            // 'metatitle' => $post['metatitle'],
            // 'metadesc' => $post['metadesc'],
            // 'status' => (isset($post['rd_status']) && $post['rd_status']=='on' ?'1':'0'),
        ];            
        
        if($model::where('id', $post['hd_id'])->update($info)){
            
            // $path_url = public_path($post['hd_upload'].'/services/'.$post['hd_id']);
            // $path_save = 'upload/services'; //path รูปภาพสำหรับบันทึกลง db
            // if(!File::isDirectory($path_url)){
            //     File::makeDirectory($path_url, 0777, true, true);
            // }
            
            // if($request->hasFile('thumbnail')){
            //     $thumb = $model::find($post['hd_id']);
            //     $file = $thumb->thumbnail;
            //     if(file_exists($file)){
            //         File::delete($file);
            //     }
            //     $this->uploadImage($post['thumbnail'],$post['hd_id'],$path_url,$path_save);
            //     $path = $file->store('uploads', 'public');
            // }
            $complete = [
                'complete' => 'บันทึกข้อมูลเรียบร้อย',
                'classname' => 'success'
            ];
            return redirect('admin/services')->with($complete);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadImage($file,$id,$path_url,$path_save)
    {
        if($id){

            $input['imagename'] = 'thumb-'.time().'.'.$file->extension();
            $img = Image::make($file->path());
            $img->resize(300, 266, function ($const) {
                $const->aspectRatio();
            })->save($path_url.'/'.$input['imagename']);

            $article = new Article;
            $info = [
                'thumbnail' => $path_save.'/'.$id.'/'.$input['imagename']
            ];

            $article::where('id', $id)->update($info);
            
            return true;
        }else{
            return false;
        }
    }
}
