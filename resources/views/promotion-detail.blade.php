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
                    <h1 class="title">Promotion Details</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Promotion Details</li>
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
                                <img src="https://via.placeholder.com/771x488" alt="">
                                <div class="blog-details__date">
                                    <span class="day">28</span>
                                    <span class="month">Aug</span>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                <ul class="list-unstyled blog-details__meta">
                                    <li><a href="news-details.html"><i class="fas fa-user-circle"></i> Admin</a> </li>
                                    <li><a href="news-details.html"><i class="fas fa-comments"></i> 02
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title">Delivering the best web design agency</h3>
                                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                    amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                    nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                    interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                    pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
                                </p>
                                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                    amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                    nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                    interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                    pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
                                </p>
                                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                    amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                    nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                    interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                    pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
                                </p>
                            </div>
                            <div class="blog-details__bottom">
                                <p class="blog-details__tags"> <span>Tags</span> <a href="news-details.html">Business</a> <a
                                        href="news-details.html">Agency</a> </p>
                                <div class="blog-details__social-list"> <a href="news-details.html"><i
                                            class="fab fa-twitter"></i></a> <a href="news-details.html"><i
                                            class="fab fa-facebook"></i></a> <a href="news-details.html"><i
                                            class="fab fa-pinterest-p"></i></a> <a href="news-details.html"><i
                                            class="fab fa-instagram"></i></a> </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image"> <img src="https://via.placeholder.com/74x73"
                                                alt=""> </div>
                                        <div class="sidebar__post-content">
                                            <h3> <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Admin</span> <a
                                                    href="news-details.html">Top crypto exchange influencers</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image"> <img src="https://via.placeholder.com/74x73"
                                                alt=""> </div>
                                        <div class="sidebar__post-content">
                                            <h3> <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Admin</span> <a
                                                    href="news-details.html">Necessity may give us best virtual court</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image"> <img src="https://via.placeholder.com/74x74"
                                                alt=""> </div>
                                        <div class="sidebar__post-content">
                                            <h3> <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Admin</span> <a
                                                    href="news-details.html">You should know about business plan</a> </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list"> <a href="#">Consulting</a> <a
                                        href="#">Agency</a> <a href="#">Business</a> <a
                                        href="#">Digital</a> <a href="#">Experience</a> <a
                                        href="#">Technology</a> </div>
                            </div>
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
