<!-- Main Footer -->
<footer class="main-footer footer-style-two">
   <div class="bg bg-image" style="background-image:url({{ url('assets/images/background/bg-footer1.jpg') }});"></div>

   <!--Widgets Section-->
   <div class="widgets-section">
      <div class="footer1-1 bounce-x"></div>
      <div class="footer-pattrn1 bounce-y"></div>
      <div class="auto-container">
         <div class="row">

            <!--Footer Column-->
            <div class="footer-column col-xl-3  col-lg-6 col-md-6 col-sm-6">
               <div class="footer-widget about-widget">
                  <div class="logo"><img src="{{ url('assets/images/logo-2.png') }}" alt=""></div>
                  <div class="text"></div>
                  <div class="subscribe-form">
                     <form method="post" action="#">
                        <div class="form-group">
                           <input type="email" name="email" class="email" value="" placeholder="{!! __('messages.yourmail') !!}" required="">
                           <button type="button" class="theme-btn"><span class="btn-title"><i class="fa-sharp fa-thin fa-paper-plane"></i></span></button>
                        </div>
                     </form>
                  </div>
                  <ul class="social-icon">
                     <li><a href="https://www.facebook.com/profile.php?id=61556356442627" target="_blank"><i class="icon fab fa-facebook-f"></i></a></li>
                     <li><a href="https://www.tiktok.com/@goldenwavespa2029" target="_blank"><i class="icon fab fa-tiktok"></i></a></li>
                     <li><a href="https://line.me/ti/p/v95JqpZRe_" target="_blank"><i class="icon fab fa-line"></i></a></li>
                  </ul>
               </div>
            </div>

            <!--Footer Column-->
            <div class="footer-column col-xl-3  col-lg-6 col-md-6 col-sm-6">
               <div class="footer-widget links-widget">
                  <h3 class="widget-title">{!! __('messages.link') !!}</h3>
                  <ul class="user-links">
                     <li><a href="{{ route('services') }}">{!! __('messages.service') !!}</a></li>
                     <li><a href="{{ route('promotion') }}">{!! __('messages.promotion') !!}</a></li>
                     <li><a href="{{ route('contact') }}">{!! __('messages.contact') !!}</a></li>
                  </ul>
               </div>
            </div>

            <!--Footer Column-->
            <div class="footer-column col-xl-3  col-lg-6 col-md-6 col-sm-6">
               <div class="footer-widget timetable-widget">
                  <h3 class="widget-title">{!! __('messages.openhours') !!}</h3>
                  <ul class="timetable">
                     <li>{!! __('messages.mondaytofriday') !!} : <span>09:00-20:00</span></li>
                     <li>{!! __('messages.saturday') !!}: <span>09:00-20:00</span></li>
                     <li>{!! __('messages.sunday') !!}: <span>09:00-20:00</span></li>
                  </ul>
               </div>
            </div>

            <!--Footer Column-->
            <div class="footer-column col-xl-3  col-lg-6 col-md-6 col-sm-6">
               <div class="footer-widget contacts-widget">
                  <h3 class="widget-title">{!! __('messages.contact') !!}</h3>
                  <div class="text">{!! __('messages.addressdetail') !!}</div>
                  <ul class="contact-info">
                     <li><a class="text-style-two" href="tel:0655091666">065 509 1666</a></li>
                     <li><a class="text-style-one" href="mailto:goldenwavespa8@gmail.com">goldenwavespa8@gmail.com</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--Footer Bottom-->
   {{-- <div class="footer-bottom">
      <div class="auto-container">
         <div class="inner-container">
            <div class="copyright-text">&copy; Purerelax, <a href="{{ route('home') }}">Reserved By Kodesolution</a></div>
         </div>
      </div>
   </div> --}}
</footer>
<!--End Main Footer -->