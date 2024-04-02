@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        {{-- Head Menu --}}
        @include('layouts.menu')

        <!-- Start main-content -->
        <section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
            <h1 class="large-title">Promotion</h1>
            <div class="image-curve"></div>
            <div class="auto-container">
                <div class="title-outer text-center">
                    <h1 class="title">Promotion</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Promotion</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end main-content -->

        <!-- News Section -->
        <section class="blog-section-two">
            <div class="auto-container">
                <div class="row">
                    <!-- News Block -->
                    <div class="blog-block col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('promotion.desc','1') }}">
                                        <img src="https://via.placeholder.com/416x351" alt="Image">
                                        <img src="https://via.placeholder.com/416x351" alt="Image">
                                    </a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li class="categories"><a href="{{ route('promotion.desc','1') }}">Trending</a></li>
                                    <li class="date">Aug 20, 2023</li>
                                </ul>
                                <h4 class="title h6">
                                    <a href="{{ route('promotion.desc','1') }}">Spring is in the Air and So Our These Amazing Spa Offers</a>
                                </h4>
                                <a class="read-more" href="{{ route('promotion.desc','1') }}">Read More <i class="icon fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- News Block -->
                    <div class="blog-block col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('promotion.desc','1') }}">
                                        <img src="https://via.placeholder.com/416x349" alt="Image">
                                        <img src="https://via.placeholder.com/416x349" alt="Image">
                                    </a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li class="categories"><a href="{{ route('promotion.desc','1') }}">Trending</a></li>
                                    <li class="date">Aug 20, 2023</li>
                                </ul>
                                <h4 class="title h6"><a href="{{ route('promotion.desc','1') }}">We giving Amazing special spa and message
                                        service for vip.</a></h4>
                                <a class="read-more h6" href="{{ route('promotion.desc','1') }}">Read More <i
                                        class="icon fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- News Block -->
                    <div class="blog-block col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('promotion.desc','1') }}">
                                        <img src="https://via.placeholder.com/416x349" alt="Image">
                                        <img src="https://via.placeholder.com/416x349" alt="Image">
                                    </a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li class="categories"><a href="{{ route('promotion.desc','1') }}">Trending</a></li>
                                    <li class="date">Aug 20, 2023</li>
                                </ul>
                                <h4 class="title h6"><a href="{{ route('promotion.desc','1') }}">Looks reasonable. The generate is therefore
                                        always.</a></h4>
                                <a class="read-more h6" href="{{ route('promotion.desc','1') }}">Read More <i
                                        class="icon fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- News Block -->
                    <div class="blog-block col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('promotion.desc','1') }}">
                                        <img src="https://via.placeholder.com/416x349" alt="Image">
                                        <img src="https://via.placeholder.com/416x349" alt="Image">
                                    </a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li class="categories"><a href="{{ route('promotion.desc','1') }}">Trending</a></li>
                                    <li class="date">Aug 20, 2023</li>
                                </ul>
                                <h4 class="title h6"><a href="{{ route('promotion.desc','1') }}">Looks reasonable. The generate is therefore
                                        always.</a></h4>
                                <a class="read-more h6" href="{{ route('promotion.desc','1') }}">Read More <i
                                        class="icon fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- News Block -->
                    <div class="blog-block col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('promotion.desc','1') }}">
                                        <img src="https://via.placeholder.com/416x351" alt="Image">
                                        <img src="https://via.placeholder.com/416x351" alt="Image">
                                    </a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li class="categories"><a href="{{ route('promotion.desc','1') }}">Trending</a></li>
                                    <li class="date">Aug 20, 2023</li>
                                </ul>
                                <h4 class="title h6"><a href="{{ route('promotion.desc','1') }}">Spring is in the Air and So Our These
                                        Amazing Spa Offers</a></h4>
                                <a class="read-more h6" href="{{ route('promotion.desc','1') }}">Read More <i
                                        class="icon fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- News Block -->
                    <div class="blog-block col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('promotion.desc','1') }}">
                                        <img src="https://via.placeholder.com/416x349" alt="Image">
                                        <img src="https://via.placeholder.com/416x349" alt="Image">
                                    </a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li class="categories"><a href="{{ route('promotion.desc','1') }}">Trending</a></li>
                                    <li class="date">Aug 20, 2023</li>
                                </ul>
                                <h4 class="title h6"><a href="{{ route('promotion.desc','1') }}">We giving Amazing special spa and message
                                        service for vip.</a></h4>
                                <a class="read-more h6" href="{{ route('promotion.desc','1') }}">Read More <i
                                        class="icon fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End News Section -->

        {{-- Footer --}}
        @include('layouts.footer')
    </div>
@endsection
