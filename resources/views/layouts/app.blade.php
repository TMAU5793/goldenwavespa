<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>{{ (isset($title)? $title : 'Golden wave spa') }}</title>

   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="icon" type="image/x-icon" href="{{ url('assets/images/favicon-32x32.png') }}">

   <!-- Stylesheets -->
   <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ url('assets/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
   <link href="{{ url('assets/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
   <link href="{{ url('assets/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
   <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
   <link href="{{ url('assets/customStyle/css/style.css') }}" rel="stylesheet">

</head>
<body>
   
   @yield('content')

   <!-- Scroll To Top -->
   <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

   <script src="{{ url('assets/js/jquery.js') }}"></script> 
   <script src="{{ url('assets/js/popper.min.js') }}"></script>
   <!--Revolution Slider-->
   <script src="{{ url('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
   <script src="{{ url('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
   <script src="{{ url('assets/js/main-slider-script.js') }}"></script>
   <!--Revolution Slider-->
   <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ url('assets/js/jquery.fancybox.js') }}"></script>
   <script src="{{ url('assets/js/jquery-ui.js') }}"></script>
   <script src="{{ url('assets/js/gsap.min.js') }}"></script>
   <script src="{{ url('assets/js/ScrollTrigger.min.js') }}"></script>
   <script src="{{ url('assets/js/splitType.js') }}"></script>
   <script src="{{ url('assets/js/wow.js') }}"></script>
   <script src="{{ url('assets/js/select2.min.js') }}"></script>
   <script src="{{ url('assets/js/appear.js') }}"></script>
   <script src="{{ url('assets/js/owl.js') }}"></script>
   <script src="{{ url('assets/js/script.js') }}"></script>
</body>
</html>