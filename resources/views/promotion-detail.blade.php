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
                    <h1 class="title">{{ session()->get('locale') == 'en' ? ($result->title_en != '' ? $result->title_en : $result->title) : $result->title }}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{!! route('home') !!}">{!! __('messages.home') !!}</a></li>
                        <li>{!! __('messages.detail') !!}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end main-content -->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="{{ url('uploads/promotions/'.$result->slug.'-desc.jpg') }}" alt="">
                                {{-- <div class="blog-details__date">
                                    <span class="day">28</span>
                                    <span class="month">Aug</span>
                                </div> --}}
                            </div>
                            <div class="blog-details__content">
                                {{-- <ul class="list-unstyled blog-details__meta">
                                    <li><a href="news-details.html"><i class="fas fa-user-circle"></i> Admin</a> </li>
                                    <li><a href="news-details.html"><i class="fas fa-comments"></i> 02
                                            Comments</a>
                                    </li>
                                </ul> --}}
                                <h3 class="blog-details__title">{{ session()->get('locale') == 'en' ? ($result->title_en != '' ? $result->title_en : $result->title) : $result->title }}</h3>
                                {!! $result->desc !!}
                            </div>
                            {{-- <div class="blog-details__bottom">
                                <p class="blog-details__tags">
                                    <span>Tags</span>
                                    <a href="news-details.html">Business</a>
                                    <a href="news-details.html">Agency</a>
                                </p>
                                <div class="blog-details__social-list">
                                    <a href="news-details.html"><i class="fab fa-twitter"></i></a>
                                    <a href="news-details.html"><i class="fab fa-facebook"></i></a>
                                    <a href="news-details.html"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="news-details.html"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div> --}}
                           
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">โพสต์ล่าสุด</h3>
                                <ul class="sidebar__post-list list-unstyled">

                                    @foreach ($lastpost as $post)
                                    
                                    <li>
                                        <div class="sidebar__post-image">
                                            @if ($post->thumbnail)
                                                <img src="{{ url($post->thumbnail) }}" alt="">
                                            @else
                                                <img src="https://via.placeholder.com/74x73" alt="">
                                            @endif
                                            
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta">
                                                {{-- <i class="fas fa-user-circle"></i>Admin</span> --}}
                                                <a href="{{ route('promotion.desc',$post->slug) }}">{{ $post->title }}</a>
                                            </h3>
                                        </div>
                                    </li>

                                    @endforeach
                                    
                                </ul>
                            </div>
                            {{-- <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list"> <a href="#">Consulting</a> <a
                                        href="#">Agency</a> <a href="#">Business</a> <a
                                        href="#">Digital</a> <a href="#">Experience</a> <a
                                        href="#">Technology</a> </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->

        {{-- Footer --}}
        @include('layouts.footer')
    </div>
@endsection
