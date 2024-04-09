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

    {{--  --}}
    <script src="{{ url('assets/js/jquery.js') }}"></script>

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

    <script src="https://cdn.tiny.cloud/1/vi7ggidcim5bkvy3fd4k7qnjktkycdkidysawlyjdkjz03nn/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.tinymce',
            images_upload_url: "{{ route('tinyupload') }}",
            image_class_list: [{
                title: 'img-responsive',
                value: 'img-responsive'
            },],
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
            },
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',

            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
        });

        @if (Session::get('complete'))
            setTimeout(function() {
                $('.alert-complete').remove();
            }, 3000);
        @endif
    </script>
</body>

</html>
