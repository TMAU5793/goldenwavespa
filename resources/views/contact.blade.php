@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        {{-- Head Menu --}}
        @include('layouts.menu')

        <!-- Start main-content -->
        <section class="page-title" style="background-image: url({{ url('assets/images/background/page-title-bg.png') }});">
            <h1 class="large-title"></h1>
            <div class="image-curve"></div>
            <div class="auto-container">
                <div class="title-outer text-center">
                    <h1 class="title">{!! __('messages.contactUs') !!}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">{!! __('messages.home') !!}</a></li>
                        <li>{!! __('messages.contactUs') !!}</li>
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
                            <span class="sub-title"></span>
                            <h4>{!! __('messages.contactformtitle') !!}</h4>
                        </div>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action=""
                            method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_name" class="form-control" type="text"
                                            placeholder="{!! __('messages.contactname') !!}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_email" class="form-control required email" type="email"
                                            placeholder="{!! __('messages.contactmail') !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_subject" class="form-control required" type="text"
                                            placeholder="{!! __('messages.contactsubject') !!}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_phone" class="form-control" type="text"
                                            placeholder="{!! __('messages.contactphone') !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea name="form_message" class="form-control required" rows="7" placeholder="{!! __('messages.contactmessage') !!}"></textarea>
                            </div>
                            <div class="mb-5">
                                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="theme-btn btn-style-one mb-3 mb-sm-0"
                                    data-loading-text="Please wait..."><span class="btn-title">{!! __('messages.sendmessage') !!}</span></button>
                                <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span
                                        class="btn-title">{!! __('messages.reset') !!}</span></button>
                            </div>
                        </form>
                        <!-- Contact Form Validation-->
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-details__right">
                            <div class="sec-title">
                                <span class="sub-title"></span>
                                <h4>{!! __('messages.contactother') !!}</h4>
                            </div>
                            <ul class="list-unstyled contact-details__info">
                                <li class="d-block d-sm-flex align-items-sm-center ">
                                    <div class="icon">
                                        <span class="lnr-icon-phone-plus"></span>
                                    </div>
                                    <div class="text ml-xs--0 mt-xs-10">
                                        <h6>{!! __('messages.tel') !!}</h6>
                                        <a href="tel:0655091666">065 509 1666</a>
                                    </div>
                                </li>
                                <li class="d-block d-sm-flex align-items-sm-center ">
                                    <div class="icon">
                                        <span class="lnr-icon-envelope1"></span>
                                    </div>
                                    <div class="text ml-xs--0 mt-xs-10">
                                        <h6>{!! __('messages.email') !!}</h6>
                                        <a href="mailto:goldenwavespa8@gmail.com">goldenwavespa8@gmail.com</a>
                                    </div>
                                </li>
                                <li class="d-block d-sm-flex align-items-sm-center ">
                                    <div class="icon">
                                        <span class="lnr-icon-location"></span>
                                    </div>
                                    <div class="text ml-xs--0 mt-xs-10">
                                        <h6>{!! __('messages.addresstitle') !!}</h6>
                                        <p>{!! __('messages.addressdetail') !!}</p>
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
            <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15504.66211803763!2d100.5097198!3d13.7084225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e299005c1fd39b%3A0x1f37ff04e09237dd!2zR29sZGVuIFdhdmUgU3BhIC0g4LmA4LiI4Lij4Li04LiN4LiB4Lij4Li44LiH!5e0!3m2!1sth!2sth!4v1712131631811!5m2!1sth!2sth" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!--End Map Section-->


        {{-- Footer --}}
        @include('layouts.footer')
    </div>
@endsection
