@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        {{-- Head Menu --}}
        @include('layouts.menu')

        <!-- Start main-content -->
        <section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
            <h1 class="large-title">Services</h1>
            <div class="image-curve"></div>
            <div class="auto-container">
                <div class="title-outer text-center">
                    <h1 class="title">Service Details</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Services Details</li>
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
                                        <li class="{{ (Str::contains(URL::current(),'hair-salon') ? 'current' : '') }}">
                                            <a href="{{ route('services.desc','hair-salon') }}">
                                                <i class="fas fa-angle-right"></i>
                                                <span>Hair Salon</span>
                                            </a>
                                        </li>
                                        
                                        <li class="{{ (Str::contains(URL::current(),'facial-tretments') ? 'current' : '') }}">
                                            <a href="{{ route('services.desc','facial-tretments') }}"><i
                                                class="fas fa-angle-right"></i>
                                                <span>Facial Treatments</span>
                                            </a>
                                        </li>
                                        <li class="{{ (Str::contains(URL::current(),'india-head-massage') ? 'current' : '') }}">
                                            <a href="{{ route('services.desc','india-head-massage') }}">
                                                <i class="fas fa-angle-right"></i>
                                                <span>India Head Massage</span>
                                            </a>
                                        </li>
                                        <li class="{{ (Str::contains(URL::current(),'nail-care') ? 'current' : '') }}">
                                            <a href="{{ route('services.desc','nail-care') }}">
                                                <i class="fas fa-angle-right"></i>
                                                <span>Nail Care</span>
                                            </a>
                                        </li>
                                        
                                        <li class="{{ (Str::contains(URL::current(),'lashs-services') ? 'current' : '') }}">
                                            <a href="{{ route('services.desc','lashs-services') }}">
                                                <i class="fas fa-angle-right"></i>
                                                <span>Lashs Services</span>
                                            </a>
                                        </li>
                                        
                                        <li class="{{ (Str::contains(URL::current(),'wax-perron-rigot-II') ? 'current' : '') }}">
                                            <a href="{{ route('services.desc','wax-perron-rigot-II') }}" class="current">
                                                <i class="fas fa-angle-right"></i>
                                                <span>Wax by PERRON RIGOT II</span>
                                            </a>
                                        </li>
                                        
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
                                        <a href="tel:12463330079">+892 ( 123 ) 112 - 9999</a>
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
                            <img src="{{ url('assets/images/nail-care.jpg') }}" alt="">
                            <h3 class="mt-4">Service Overview</h3>
                            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem
                                ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem
                                Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make </p>
                            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit
                            </p>
                            <div class="content mt-40">
                                <div class="text">
                                    <h3>Service Center</h3>
                                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                        dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                                        sunt explicabo.</p>
                                    <blockquote class="blockquote-one">Lorem ipsum dolor sit amet, consectetur notted
                                        adipisicing elit sed do eiusmod remaining essentially unchanged Lorem ipsum dolor
                                        sit amet consec tetur</blockquote>
                                </div>
                                <div class="feature-list mt-4">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <img class="mb-3" src="https://via.placeholder.com/270x225" alt="images" />
                                            <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur
                                                temporibus doloribus hic conse quatur copy typing refreshing</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <img class="mb-3" src="https://via.placeholder.com/270x225" alt="images" />
                                            <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur
                                                temporibus doloribus hic conse quatur copy typing refreshing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" mt-25">
                                <h3>Frequently Asked Question</h3>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                    dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                                    explicabo.</p>
                                <ul class="accordion-box wow fadeInRight">
                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn">Is my technology allowed on tech?
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">There are many variations of passages the majority have
                                                    suffered alteration in some fo injected humour, or randomised words
                                                    believable.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">How to soft launch your business?
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">There are many variations of passages the majority have
                                                    suffered alteration in some fo injected humour, or randomised words
                                                    believable.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn">How to turn visitors into contributors
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">There are many variations of passages the majority have
                                                    suffered alteration in some fo injected humour, or randomised words
                                                    believable.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn">How can i find my solutions?
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">There are many variations of passages the majority have
                                                    suffered alteration in some fo injected humour, or randomised words
                                                    believable.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
