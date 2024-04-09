@extends('layouts.app')

@section('content')

<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>
	
	{{-- Head Menu --}}
	@include('layouts.menu')

	<!-- Main Slider -->
	<section class="main-slider slider-style-two">
		<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_two_wrapper" data-source="gallery">
			<div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
				<ul>
					<!-- Slide 1 -->
					<li data-index="rs-1" data-transition="zoomout">
						<!-- MAIN IMAGE -->
						<img src="{{ url('assets/images/main-slider/bg-slider2-1.png') }}" alt="" class="rev-slidebg">


						<div class="tp-caption" 
							data-paddingbottom="[15,15,15,15]"
							data-paddingleft="[15,15,15,15]"
							data-paddingright="[0,0,0,0]"
							data-paddingtop="[10,10,10,10]"
							data-responsive_offset="on"
							data-type="text" data-height="none"
							data-width="['100%','750','750','750']"
							data-whitespace="normal"
							data-hoffset="['-307','-20','-20','0']"
							data-voffset="['-15','380','430','580']"
							data-x="['left','left','left','left']"
							data-y="['bottom','middle','middle','middle']"
							data-textalign="['top','top','top','top']"
							data-frames='[{"delay":1100,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<figure class="image bounce-x"><img src="{{ url('assets/images/main-slider/slide2-3.png') }}" alt="Image"></figure>
						</div>

						<div class="tp-caption" 
							data-paddingbottom="[15,15,15,15]"
							data-paddingleft="[15,15,15,15]"
							data-paddingright="[0,0,0,0]"
							data-paddingtop="[10,10,10,10]"
							data-responsive_offset="on"
							data-type="text" data-height="none"
							data-width="['750','750','750','750']"
							data-whitespace="normal"
							data-hoffset="['0','0','0','0']"
							data-voffset="['-178','-210','-140','-150']"
							data-x="['left','left','center','left']"
							data-y="['middle','middle','middle','middle']"
							data-textalign="['top','top','top','top']"
							data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<span class="sub-title">{!! __('messages.banner1') !!}</span>
						</div>

						<div class="tp-caption" 
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[15,15,15,15]"
							data-paddingright="[15,15,15,15]"
							data-paddingtop="[0,0,0,0]"
							data-responsive_offset="on"
							data-type="text" data-height="none"
							data-width="['950','750','750','480']"
							data-whitespace="normal"
							data-hoffset="['0','0','0','0']"
							data-voffset="['-68','-90','-40','-40']"
							data-x="['left','left','center','center']"
							data-y="['middle','middle','middle','middle']"
							data-textalign="['top','top','top','top']"
							data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<h1 class="title">{!! __('messages.banner2') !!}</h1>
						</div>

						<div class="tp-caption" 
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[15,15,0,15]"
							data-paddingright="[15,15,0,15]"
							data-paddingtop="[0,0,0,0]"
							data-responsive_offset="on"
							data-type="text" data-height="none"
							data-width="['550','700','700','480']"
							data-whitespace="normal"
							data-hoffset="['0','0','0','0']"
							data-voffset="['91','80','110','100']"
							data-x="['left','left','center','left']"
							data-y="['middle','middle','middle','middle']"
							data-textalign="['top','top','top','top']"
							data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<div class="text">{!! __('messages.banner3') !!}</div>
						</div>

						{{-- <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[15,15,0,0]"
							data-paddingright="[15,15,0,0]"
							data-paddingtop="[0,0,0,0]"
							data-responsive_offset="on"
							data-type="text" data-height="none"
							data-width="['700','750','700','450']"
							data-whitespace="normal"
							data-hoffset="['0','0','0','0']"
							data-voffset="['174','180','220','210']"
							data-x="['left','left','center','center']"
							data-y="['middle','middle','middle','middle']"
							data-textalign="['top','top','top','top']"
							data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<a href="page-contact.html" class="theme-btn btn-style-one"><span class="btn-title">Book Now</span></a>
						</div> --}}

						<div class="tp-caption" data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[15,15,15,15]"
							data-paddingright="[15,15,15,15]"
							data-paddingtop="[0,0,0,0]"
							data-responsive_offset="on"
							data-type="text" data-height="none"
							data-whitespace="normal"
							data-hoffset="['425','550','820','820']"
							data-voffset="['210','200','-75','-75']"
							data-x="['left','left','center','center']"
							data-y="['middle','middle','middle','middle']"
							data-textalign="['top','top','top','top']"
							data-frames='[{"delay":1100,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<figure class="image bounce-z"><img src="{{ url('assets/images/main-slider/slide2-4.png') }}" alt="Image"></figure>
						</div>

						<div class="tp-caption" data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[15,15,15,15]"
							data-paddingright="[15,15,15,15]"
							data-paddingtop="[0,0,0,0]"
							data-responsive_offset="on"
							data-type="text" data-height="none"
							data-width="['750','750','750','750']"
							data-whitespace="normal"
							data-hoffset="['700','550','820','820']"
							data-voffset="['34','10','-75','-75']"
							data-x="['left','left','center','center']"
							data-y="['middle','middle','middle','middle']"
							data-textalign="['top','top','top','top']"
							data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<figure class="image"><img src="{{ url('assets/images/main-slider/slide2-2.png') }}" alt="Image"></figure>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</section>
	<!-- End Main Slider -->

	<!-- Services Section -->
	<section class="services-section-two">
		<div class="bg bg-image-four" style="background-image: url(./images/background/bg-service1.jpg)"></div>
		<div class="leaf3-pattrn1 bounce-x"></div>
		<div class="about2-8-pattrn2 bounce-y"></div>
		<div class="auto-container">
			<div class="outer-box">
				<div class="sec-title text-center">
					<figure class="image"><img src="{{ url('assets/images/icons/icon1.png') }}" alt="Image"></figure>
					<span class="sub-title">{!! __('messages.wedo') !!}</span>
					<h2 class="words-slide-up text-split">{!! __('messages.serviceUs') !!}</h2>
				</div>
				<div class="row">

					@foreach ( $services as $item )

                    <div class="col-lg-3 col-sm-6">
                        <!-- Service Block -->
                        <div class="service-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="bg-image" style="background-image:url({{ url('assets/images/resource/service1-1.png') }});"></div>
									<div class="bg-image-two" style="background-image:url({{ url('assets/images/resource/service1-2.png') }});"></div>
								</div>
								<div class="content-box">
									<a href="{{ route('services.desc',$item->slug) }}">
										@if ($item->thumbnail)
											<figure class="icon mb-0"><img src="{{ url($item->thumbnail) }}" alt="Image"></figure>
										@endif
										<h4 class="title">
											<a href="{{ route('services.desc',$item->slug) }}">
												{{ session()->get('locale') == 'en' ? ($item->title_en != '' ? $item->title_en : $item->title) : $item->title }}
											</a>
										</h4>
										<p class="px-3 text-2lines">
											{{ session()->get('locale') == 'en' ? ($item->shortdesc_en != '' ? $item->shortdesc_en : $item->shortdesc) : $item->shortdesc }}
										</p>
									</a>
								</div>
							</div>
                        </div>
                    </div>
                    
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section-->

	<!-- About Section -->
	<section class="about-section-two">
		<div class="about2-pattrn1 bounce-y"></div>
		<div class="auto-container">
			<div class="outer-box">
				<div class="row">
					<div class="image-column col-lg-6">
						<div class="inner-column">
							<div class="image-box">
								<div class="play-box">
									<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn-two wow zoomIn" data-fancybox="gallery" data-caption=""><i class="icon fa-solid fa-play" aria-hidden="true"></i><div class="icon-text-2"></div></a>
								</div>
								<div class="row g-0">
									<div class="col-sm-6">
										<figure class="image-one mb-0"><img src="{{ url('assets/images/home-building1.jpg') }}" alt="Image"></figure>
									</div>
									<div class="col-sm-6">
										<figure class="image-two"><img src="{{ url('assets/images/home-building2.jpg') }}" alt="Image"></figure>
										<figure class="image-two mb-0"><img src="{{ url('assets/images/home-building3.jpg') }}" alt="Image"></figure>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content-column col-lg-6">
						<div class="inner-column">
							<div class="sec-title mb-0">
								<h2 class="words-slide-up">{!! __('messages.service1') !!}</h2>
								<div class="text">{!! __('messages.service2') !!}</div>
							</div>
							<div class="row">
								<div class="list-box col-sm-4">
									<div class="inner">
										<figure class="thumb"><img src="{{ url('assets/images/resource/about2-4.png') }}" alt="Image"></figure>
										<h4 class="title">{!! __('messages.manicure') !!}</h4>
									</div>
								</div>
								<div class="list-box col-sm-4">
									<div class="inner">
										<figure class="thumb"><img src="{{ url('assets/images/resource/about-facial.png') }}" alt="Image"></figure>
										<h4 class="title">{!! __('messages.facial') !!}</h4>
									</div>
								</div>
								<div class="list-box col-sm-4">
									<div class="inner">
										<figure class="thumb"><img src="{{ url('assets/images/resource/about-hair.png') }}" alt="Image"></figure>
										<h4 class="title">{!! __('messages.salon') !!}</h4>
									</div>
								</div>
							</div>
							<div class="author-box">
								<div class="inner">
									<a href="{{ route('services') }}" class="theme-btn btn-style-two btn pricing-btn"><span class="btn-title">{!! __('messages.learnmore') !!}</span></a>
									{{-- <div class="contact-info">
										<div class="icon-box">
											<img src="{{ url('assets/images/icons/comment1.png') }}" alt="Image">
										</div>
										<div class="sign">
											<div class="text">Chat Us Anytime</div>
											<a href="tel:0655091666">065 509 1666</a>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End About Section -->


	<!-- Product Deals Section -->
	<section class="product-deals-section">
		<div class="bg bg-image" style="background-image: url({{ url('assets/images/background/bg-product-deals1.jpg') }});"></div>
		<div class="bg curved-shape-top" style="background-image: url({{ url('assets/images/resource/curved-shape-top.png') }})"></div>
		{{-- <div class="bg curved-shape-bottom" style="background-image: url({{ url('assets/images/resource/curved-shape-bottom.png') }})"></div> --}}
		<div class="auto-container">
			<div class="row">
				<div class="col-xl-6 offset-xl-6">
					<div class="outer-box">
						<div class="sec-title mb-0 text-center">
							<h1 class="words-slide-up text-split">{!! __('messages.pro1') !!}</h1>
							<span class="text-two" style="line-height: 45px;">{!! __('messages.pro2') !!}</span>
							<div class="text">{!! __('messages.pro3') !!}</div>
							<span class="text-three">{!! __('messages.pro4') !!}</span>
						</div>
						<div class="countdown-block-outer">
							<div class="countdown-block">
								<div class="inner-box">                            
									<div class="content-box">
										<div class="countdown-time">10</div>
										<div class="countdown-title">{!! __('messages.hrs') !!}</div>
									</div>
								</div>
							</div>
							<div class="countdown-block">
								<div class="inner-box">                            
									<div class="content-box">
										<div class="countdown-time">50</div>
										<div class="countdown-title">{!! __('messages.minute') !!}</div>
									</div>
								</div>
							</div>
							<div class="countdown-block">
								<div class="inner-box">                            
									<div class="content-box">
										<div class="countdown-time">20</div>
										<div class="countdown-title">{!! __('messages.second') !!}</div>
									</div>
								</div>
							</div>
							{{-- <div class="countdown-block">
								<div class="inner-box">                            
									<div class="content-box">
										<div class="countdown-time">45</div>
										<div class="countdown-title">Second</div>
									</div>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Product Deals Section -->

	<!-- Testimonial Section -->
	{{-- <section class="testimonial-section testimonial-style-two">
		<div class="instagram1-7 bounce-x"></div>
		<div class="testimonial-pattrn1-2 bounce-y"></div>
		<div class="auto-container">
			<div class="sec-title text-center">
				<figure class="image"><img src="{{ url('assets/images/icons/icon1.png') }}" alt="Image"></figure>
				<span class="sub-title">Testimonial</span>
				<h2 class="words-slide-up text-split">What they say?</h2>
			</div>
			<div class="carousel-outer col-lg-8 offset-lg-2">
				<div class="testimonial-carousel-three owl-carousel owl-theme default-dots">
					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box text-center">
							<div class="rating">
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
							</div>
							<div class="text">“  Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id. Pellentesque habitant morbi tristique senectus ”</div>
							<div class="info-box">
								<h4 class="name">Robert Fox -</h4>
								<span class="designation">Co Founder</span>
							</div>
						</div>
					</div>
					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box text-center">
							<div class="rating">
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
							</div>
							<div class="text">“  Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id. Pellentesque habitant morbi tristique senectus ”</div>
							<div class="info-box">
								<h4 class="name">Robert Fox -</h4>
								<span class="designation">Co Founder</span>
							</div>
						</div>
					</div>
					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box text-center">
							<div class="rating">
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
								<i class="icon fa fa-star"></i>
							</div>
							<div class="text">“  Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id. Pellentesque habitant morbi tristique senectus ”</div>
							<div class="info-box">
								<h4 class="name">Robert Fox -</h4>
								<span class="designation">Co Founder</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Testimonial Section -->

	<!-- Blog Section -->
	{{-- <section class="blog-section-two">
		<div class="auto-container">
			<div class="sec-title text-center">
				<figure class="image"><img src="{{ url('assets/images/icons/icon1.png') }}" alt="Image"></figure>
				<span class="sub-title">Blogs</span>
				<h2 class="words-slide-up text-split">Promotion</h2>
			</div>
			<div class="row">
				<!-- News Block -->
				<div class="blog-block col-lg-4 col-md-6">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<a href="news-details.html">
									<img src="https://via.placeholder.com/416x351" alt="Image">
									<img src="https://via.placeholder.com/416x351" alt="Image">
								</a>
							</figure>
						</div>
						<div class="content-box">
							<ul class="post-meta">
								<li class="categories"><a href="news-details.html">Trending</a></li>
								<li class="date">Aug 20, 2023</li>
							</ul>
							<h4 class="title h6"><a href="news-details.html">Spring is in the Air and So Our These Amazing Spa Offers</a></h4>
							<a class="read-more" href="news-details.html">Read More <i class="icon fa-regular fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- News Block -->
				<div class="blog-block col-lg-4 col-md-6">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<a href="news-details.html">
									<img src="https://via.placeholder.com/416x349" alt="Image">
									<img src="https://via.placeholder.com/416x349" alt="Image">
								</a>
							</figure>
						</div>
						<div class="content-box">
							<ul class="post-meta">
								<li class="categories"><a href="news-details.html">Trending</a></li>
								<li class="date">Aug 20, 2023</li>
							</ul>
							<h4 class="title"><a href="news-details.html">We giving Amazing special spa and message service for vip.</a></h4>
							<a class="read-more" href="news-details.html">Read More <i class="icon fa-regular fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- News Block -->
				<div class="blog-block col-lg-4 col-md-6 mb-0">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<a href="news-details.html">
									<img src="https://via.placeholder.com/416x349" alt="Image">
									<img src="https://via.placeholder.com/416x349" alt="Image">
								</a>
							</figure>
						</div>
						<div class="content-box">
							<ul class="post-meta">
								<li class="categories"><a href="news-details.html">Trending</a></li>
								<li class="date">Aug 20, 2023</li>
							</ul>
							<h4 class="title"><a href="news-details.html">Looks reasonable. The generate is therefore always.</a></h4>
							<a class="read-more" href="news-details.html">Read More <i class="icon fa-regular fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!--End Blog Section -->
	{{-- Footer --}}
	@include('layouts.footer')

</div><!-- End Page Wrapper -->

@endsection