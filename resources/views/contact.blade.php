@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        {{-- Head Menu --}}
        @include('layouts.menu')

        <!-- Start main-content -->
        <section class="page-title" style="background-image: url({{ url('assets/images/background/page-title-bg.png') }});">
            <h1 class="large-title">Contact</h1>
            <div class="image-curve"></div>
            <div class="auto-container">
                <div class="title-outer text-center">
                    <h1 class="title">Contact Us</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end main-content -->

        <!--Contact Details Start-->
        <section class="contact-details">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="sec-title">
                            <span class="sub-title">Send us email</span>
                            <h2>Feel free to write</h2>
                        </div>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php"
                            method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_name" class="form-control" type="text"
                                            placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_email" class="form-control required email" type="email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_subject" class="form-control required" type="text"
                                            placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_phone" class="form-control" type="text"
                                            placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="mb-5">
                                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="theme-btn btn-style-one mb-3 mb-sm-0"
                                    data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                                <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span
                                        class="btn-title">Reset</span></button>
                            </div>
                        </form>
                        <!-- Contact Form Validation-->
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-details__right">
                            <div class="sec-title">
                                <span class="sub-title">Need any help?</span>
                                <h2>Get in touch</h2>
                                <div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur
                                    notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>
                            </div>
                            <ul class="list-unstyled contact-details__info">
                                <li class="d-block d-sm-flex align-items-sm-center ">
                                    <div class="icon">
                                        <span class="lnr-icon-phone-plus"></span>
                                    </div>
                                    <div class="text ml-xs--0 mt-xs-10">
                                        <h6>Have any question?</h6>
                                        <a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
                                    </div>
                                </li>
                                <li class="d-block d-sm-flex align-items-sm-center ">
                                    <div class="icon">
                                        <span class="lnr-icon-envelope1"></span>
                                    </div>
                                    <div class="text ml-xs--0 mt-xs-10">
                                        <h6>Write email</h6>
                                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                    </div>
                                </li>
                                <li class="d-block d-sm-flex align-items-sm-center ">
                                    <div class="icon">
                                        <span class="lnr-icon-location"></span>
                                    </div>
                                    <div class="text ml-xs--0 mt-xs-10">
                                        <h6>Visit anytime</h6>
                                        <span>66 broklyn golden street. New York</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Details End-->

        <!-- Map Section-->
        <section class="map-section">
            <iframe  class="map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.846584292412!2d100.50500667586478!3d13.727736497848715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29964ecf9415d%3A0xb8ff12d7dc1bf7a!2sGrasp%20Asia!5e0!3m2!1sth!2sth!4v1711617358506!5m2!1sth!2sth" style="border:0;" height="600" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!--End Map Section-->


        {{-- Footer --}}
        @include('layouts.footer')
    </div>
@endsection
