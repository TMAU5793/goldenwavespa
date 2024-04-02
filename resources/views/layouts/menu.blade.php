<!-- Main Header-->
<header class="main-header header-style-two">

    <div class="header-lower">
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href="{{ route('home') }}"><img src="{{ url('assets/images/logo.png') }}"
                            alt="Logo" title="Transtex"></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li class="{{ Route::is('home')  ? 'current' : '' }}">
                            <a href="{{ route('home') }}">หน้าหลัก</a>
                        </li>

                        <li class="{{ Route::is('services') || Route::is('services.*') ? 'current' : '' }}">
                            <a href="{{ route('services') }}">บริการ</a>
                        </li>

                        <li class="{{ Route::is('promotion') || Route::is('promotion.*')  ? 'current' : '' }}">
                            <a href="{{ route('promotion') }}">โปรโมชั่น</a>
                        </li>
                        <li class="{{ Route::is('contact')  ? 'current' : '' }}">
                            <a href="{{ route('contact') }}">ติดต่อ</a>
                        </li>
                    </ul>
                </nav>
                <div class="mobile-nav-toggler">
                    <span class="icon lnr-icon-bars"></span>
                </div>
            </div>

            <!-- Outer Box -->
            <div class="outer-box">

                {{-- <button class="ui-btn cart-btn">
               <i class="icon fal fa-shopping-cart"></i>
               <span class="count">01</span>
            </button>

            <div class="divider"></div> --}}

                <!-- Mobile Nav toggler -->
                <div class="mobile-nav-toggler"><span class="icon fa-thin fa-bars-staggered fa-rotate-180"></span></div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ url('assets/images/logo-2.png') }}"
                            alt="" title=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <i class="icon lnr-icon-envelope1"></i>
                    <span class="title">Send Email</span>
                    <div class="text"><a href="mailto:grasp@grasp.asia">grasp@grasp.asia</a></div>
                </li>
            </ul>
            <ul class="social-links">
                <li><a href="#"><i class="icon fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="icon fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="icon fab fa-vimeo-v"></i></a></li>
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="{{ route('home') }}">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="{{ route('home') }}" title=""><img src="{{ url('assets/images/logo.png') }}"
                            alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->
</header>
<!--End Main Header -->
