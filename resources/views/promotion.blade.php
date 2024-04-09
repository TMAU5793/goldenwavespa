@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        {{-- Head Menu --}}
        @include('layouts.menu')

        <!-- Start main-content -->
        <section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
            <h1 class="large-title"></h1>
            <div class="image-curve"></div>
            <div class="auto-container">
                <div class="title-outer text-center">
                    <h1 class="title">{!! __('messages.promotion') !!}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">{!! __('messages.home') !!}</a></li>
                        <li>{!! __('messages.promotion') !!}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end main-content -->

        <!-- News Section -->
        <section class="blog-section-two">
            <div class="auto-container">
                <div class="row">
                    
                    @foreach ( $result as $item )
                    <!-- News Block -->
                    <div class="blog-block col-lg-3 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('promotion.desc',$item->slug) }}">
                                        @if ($item->thumbnail)
                                            <img src="{{ url($item->thumbnail) }}" alt="">
                                            <img src="{{ url($item->thumbnail) }}" alt="">
                                        @else
                                            <img src="https://via.placeholder.com/416x351" alt="">
                                            <img src="https://via.placeholder.com/416x351" alt="">
                                        @endif
                                    </a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta ms-0">
                                    {{-- <li class="categories"><a href="{{ route('promotion.desc','1') }}">Trending</a></li> --}}
                                    <li class="date ms-4">วันที่ {{ Str::substr($item->created_at, 0, 10) }}</li>
                                </ul>
                                <h4 class="title h6">
                                    <a href="{{ route('promotion.desc',$item->slug) }}">
                                        {{ session()->get('locale') == 'en' ? ($item->title_en != '' ? $item->title_en : $item->title) : $item->title }}
                                    </a>
                                </h4>
                                <a class="read-more" href="{{ route('promotion.desc',$item->slug) }}">{!! __('messages.learnmore') !!}<i class="icon fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
        <!--End News Section -->

        {{-- Footer --}}
        @include('layouts.footer')
    </div>
@endsection
