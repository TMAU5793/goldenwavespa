@extends('admin.app')

@section('content')

<main class="main-content position-relative border-radius-lg">
    <div class="container-fluid mt-6rem">
        <form action="{{ (isset($action) ? route('admin.svupdate') : route('admin.svstore') ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="hd_id" value="{{ (isset($result) ? $result->id : '') }}">

            <div class="row nav-fixed">
                <div class="col-6">
                    <Strong class="">เพิ่มข้อมูลบริการ</Strong>
                </div>
                <div class="col-6 text-end">
                    <button type="submit" class="btn btn-success my-0 me-3">บันทึก</button>
                    <a href="{{ route('admin.sv') }}" class="btn btn-warning my-0">ยกเลิก</a>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="form-group">
                                <label for="">ชื่อบริการ</label>
                                <input type="text" name="title" class="form-control" value="{{ (isset($result) ? $result->title : old('title')) }}">
                            </div>
                            <div class="form-group">
                                <label for="">ข้อมูลแนะนำ</label>
                                <textarea name="shortdesc" class="form-control">{{ (isset($result) ? $result->shortdesc : old('shortdesc')) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">ข้อมูลทั้งหมด</label>
                                <textarea name="desc" class="form-control tinymce">{{ (isset($result) ? $result->desc : old('desc')) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="form-group">
                                <label for="">รูป Thumbnail</label>
                                <input type="file" name="thumbnail" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Slug URL</label>
                                <input type="text" name="slug" class="form-control" value="{{ (isset($result) ? $result->slug : old('slug')) }}">
                            </div>
                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input type="text" name="metatitle" class="form-control" value="{{ (isset($result) ? $result->metatitle : old('metatitle')) }}">
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <textarea name="metadesc" class="form-control">{{ (isset($result) ? $result->metadesc : old('metadesc')) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<script>

    $(function(){

    });

</script>

@endsection