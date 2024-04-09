@extends('admin.app')

@section('content')

<main class="main-content position-relative border-radius-lg">
    <div class="container-fluid mt-6rem">
        <div class="row nav-fixed">
            <div class="col-6">
                <Strong class="">รายการข้อมูลบริการ</Strong>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('admin.svnew') }}" class="btn btn-primary m-0">ใหม่</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if(Session::get('complete'))
                    <div class="alert-{{ Session::get('classname') }} alert-complete">
                        {{ Session::get('complete') }}
                    </div>
                @endif
            </div>
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">หัวเรื่อง</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">สถานะ</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($result as $item)
                                        
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-xs">{{ $item->title }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('admin.svedit', $item->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>

@endsection