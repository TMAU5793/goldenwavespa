<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบจัดการข้อมูล Goldenwavespa</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/favicon-32x32.png') }}">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ url('assets/argon-dashboard/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/argon-dashboard/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.min.css') }}">
    <link href="{{ url('assets/argon-dashboard/css/argon-dashboard.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/customStyle/css/adminstyle.css') }}" rel="stylesheet">
</head>

<body class="g-sidenav-show   bg-gray-100">

    {{-- Section Sidebar --}}
    @include('admin.sidebar')

    {{-- Section Content --}}
    @yield('content')

    <!--   Core JS Files   -->
    <script src="{{ url('assets/argon-dashboard/js/core/popper.min.js') }}"></script>
    <script src="{{ url('assets/argon-dashboard/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/argon-dashboard/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/argon-dashboard/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="{{ url('assets/argon-dashboard/js/argon-dashboard.min.js') }}"></script>
</body>

</html>
