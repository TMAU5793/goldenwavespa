@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    {{-- Head Menu --}}
	 @include('layouts.menu')
   
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ url('assets/images/background/page-title-bg.png') }});">
        <h1 class="large-title">Services</h1>
        <div class="image-curve"></div>
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Services</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!-- Services Section Two -->
    <section class="services-section pt-100">
        <div class="service1-pattrn1 bounce-y"></div>
        <div class="auto-container">
            <div class="outer-box">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="bg-image"
                                        style="background-image:url({{ url('assets/images/resource/service1-1.png') }});"></div>
                                    <div class="bg-image-two"
                                        style="background-image:url({{ url('assets/images/resource/service1-2.png') }});"></div>
                                </div>
                                <div class="content-box">
                                    <figure class="icon mb-0"><img src="{{ url('assets/images/icons/i-hair.png') }}" alt="Image">
                                    </figure>
                                    <h4 class="title"><a href="{{ route('services.desc','hair-salon') }}">Hair Salon</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="bg-image"
                                        style="background-image:url({{ url('assets/images/resource/service1-1.png') }});"></div>
                                    <div class="bg-image-two"
                                        style="background-image:url({{ url('assets/images/resource/service1-2.png') }});"></div>
                                </div>
                                <div class="content-box">
                                    <figure class="icon mb-0"><img src="{{ url('assets/images/icons/i-facial.png') }}" alt="Image">
                                    </figure>
                                    <h4 class="title"><a href="{{ route('services.desc','facial-tretments') }}">Facial Tretments</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                              <div class="image-box">
                                 <div class="bg-image"
                                     style="background-image:url({{ url('assets/images/resource/service1-1.png') }});"></div>
                                 <div class="bg-image-two"
                                     style="background-image:url({{ url('assets/images/resource/service1-2.png') }});"></div>
                             </div>
                             <div class="content-box">
                                 <figure class="icon mb-0"><img src="{{ url('assets/images/icons/i-india-head.png') }}" alt="Image">
                                    </figure>
                                    <h4 class="title"><a href="{{ route('services.desc','india-head-massage') }}">India Head Massage</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                              <div class="image-box">
                                 <div class="bg-image"
                                     style="background-image:url({{ url('assets/images/resource/service1-1.png') }});"></div>
                                 <div class="bg-image-two"
                                     style="background-image:url({{ url('assets/images/resource/service1-2.png') }});"></div>
                             </div>
                             <div class="content-box">
                                    <figure class="icon mb-0"><img src="{{ url('assets/images/icons/i-nail.png') }}" alt="Image">
                                    </figure>
                                    <h4 class="title"><a href="{{ route('services.desc','nail-care') }}">Nail Care</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                              <div class="image-box">
                                 <div class="bg-image"
                                     style="background-image:url({{ url('assets/images/resource/service1-1.png') }});"></div>
                                 <div class="bg-image-two"
                                     style="background-image:url({{ url('assets/images/resource/service1-2.png') }});"></div>
                             </div>
                             <div class="content-box">
                                    <figure class="icon mb-0"><img src="{{ url('assets/images/icons/i-lashs.png') }}" alt="Image">
                                    </figure>
                                    <h4 class="title"><a href="{{ route('services.desc','lashs-services') }}">Lashs Services</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="bg-image"
                                        style="background-image:url({{ url('assets/images/resource/service1-1.png') }});"></div>
                                    <div class="bg-image-two"
                                        style="background-image:url({{ url('assets/images/resource/service1-2.png') }});"></div>
                                </div>
                                <div class="content-box">
                                    <figure class="icon mb-0"><img src="{{ url('assets/images/icons/i-wax.png') }}" alt="Image">
                                    </figure>
                                    <h4 class="title"><a href="{{ route('services.desc','wax-perron-rigot-II') }}">Wax by PERRON RIGOT II</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Instagram Section -->
    <section class="instagram-section">
        <div class="icon-instagram1-6 bounce-x"></div>
        <div class="icon-instagram1-7 bounce-y"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <h4 class="words-slide-up text-split">Follow On Instagram</h4>
            </div>
            <div class="row">
                <!-- pricing-block -->
                <div class="instagram-block col-lg-2 col-md-3 col-sm-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="#"><img src="https://via.placeholder.com/196x196" alt="Image"></a>
                            </figure>
                            <i class="icon fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
                <!-- pricing-block -->
                <div class="instagram-block col-lg-2 col-md-3 col-sm-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="#"><img src="https://via.placeholder.com/196x196" alt="Image"></a>
                            </figure>
                            <i class="icon fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
                <!-- pricing-block -->
                <div class="instagram-block col-lg-2 col-md-3 col-sm-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="#"><img src="https://via.placeholder.com/196x196" alt="Image"></a>
                            </figure>
                            <i class="icon fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
                <!-- pricing-block -->
                <div class="instagram-block col-lg-2 col-md-3 col-sm-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="#"><img src="https://via.placeholder.com/196x196" alt="Image"></a>
                            </figure>
                            <i class="icon fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
                <!-- pricing-block -->
                <div class="instagram-block col-lg-2 col-md-3 col-sm-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="#"><img src="https://via.placeholder.com/196x196" alt="Image"></a>
                            </figure>
                            <i class="icon fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
                <!-- pricing-block -->
                <div class="instagram-block col-lg-2 col-md-3 col-sm-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="#"><img src="https://via.placeholder.com/196x196" alt="Image"></a>
                            </figure>
                            <i class="icon fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Instagram Section -->

    {{-- Footer --}}
	 @include('layouts.footer')
</div>

@endsection