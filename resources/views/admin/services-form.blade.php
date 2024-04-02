@extends('admin.app')

@section('content')

<main class="main-content position-relative border-radius-lg">
    <div class="container-fluid mt-6rem">
        <div class="row nav-fixed">
            <div class="col-6">
                <Strong class="">เพิ่มข้อมูลบริการ</Strong>
            </div>
            <div class="col-6 text-end">
                <a href="" class="btn btn-success my-0 me-3">บันทึก</a>
                <a href="{{ route('admin.sv') }}" class="btn btn-warning my-0">ยกเลิก</a>
            </div>
        </div>
        <div class="row">
            
            <div class="col-9">
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="form-group">
                            <label for="">ชื่อบริการ</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">ข้อมูลแนะนำ</label>
                            <textarea name="shortdesc" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">ข้อมูลทั้งหมด</label>
                            <textarea name="desc" class="form-control"></textarea>
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
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>

@endsection