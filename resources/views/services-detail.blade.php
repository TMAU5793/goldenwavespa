@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        {{-- Head Menu --}}
        @include('layouts.menu')

        <!-- Start main-content -->
        <section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
            <h1 class="large-title">{{ session()->get('locale') == 'en' ? ($result->title_en != '' ? $result->title_en : $result->title) : $result->title }}</h1>
            <div class="image-curve"></div>
            <div class="auto-container">
                <div class="title-outer text-center">
                    <h1 class="title">{{ session()->get('locale') == 'en' ? ($result->title_en != '' ? $result->title_en : $result->title) : $result->title }}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">{!! __('messages.home') !!}</a></li>
                        <li>{!! __('messages.detail') !!}</li>
                    </ul>
                </div>
            </div>
        </section>

        <!--Start Services Details-->
        <section class="services-details">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-sidebar">
                            <!--Start Services Details Sidebar Single-->
                            <div class="sidebar-widget service-sidebar-single">

                                <div class="sidebar-service-list">
                                    <ul>
                                        @foreach ($services as $item)
                                        
                                        <li class="{{ (Str::contains(URL::current(), $item->slug) ? 'current' : '') }}">
                                            <a href="{{ route('services.desc', $item->slug) }}">
                                                <i class="fas fa-angle-right"></i>
                                                <span>{{ session()->get('locale') == 'en' ? ($item->title_en != '' ? $item->title_en : $item->title) : $item->title }}</span>
                                            </a>
                                        </li>

                                        @endforeach
                                        
                                    </ul>
                                </div>

                                <div class="service-details-help">
                                    <div class="help-shape-1"></div>
                                    <div class="help-shape-2"></div>
                                    <h2 class="help-title">Contact with <br> us for any <br> advice</h2>
                                    <div class="help-icon">
                                        <span class=" lnr-icon-phone-handset"></span>
                                    </div>
                                    <div class="help-contact">
                                        <p>Need help? Talk to an expert</p>
                                        <a href="tel:0655091666">065 509 1666</a>
                                    </div>
                                </div>

                                <!--Start Services Details Sidebar Single-->
                                {{-- <div class="sidebar-widget service-sidebar-single mt-4">
                                    <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s"
                                        data-wow-duration="1200m">
                                        <a href="#" class="theme-btn btn-style-one d-grid"><span
                                                class="btn-title"><span class="fas fa-file-pdf"></span> download pdf
                                                file</span></a>
                                    </div>
                                </div> --}}
                            </div>
                            <!--End Services Details Sidebar-->
                        </div>
                    </div>

                    <!--Start Services Details Content-->
                    <div class="col-xl-8 col-lg-8">
                        <div class="services-details__content">

                            @if (file_exists('uploads/services/'.$result->slug.'.jpg'))
                                <img src="{{ url('uploads/services/'.$result->slug.'.jpg') }}" alt="">
                            @endif

                            <h3 class="mt-4 h4">ภาพรวมบริการ</h3>
                            {!! $result->desc !!}
                        </div>
                    </div>
                    <!--End Services Details Content-->
                </div>
            </div>
        </section>
        <!--End Services Details-->

        {{-- Footer --}}
        @include('layouts.footer')
    </div>
@endsection
