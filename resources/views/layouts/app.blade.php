<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/sweetalert2.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width:100%;
            background-image: url("{{ asset('internal/background/landing page-4 full.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-attachment: fixed; /* Optional: set the background fixed */
        }
        @media (max-width: 991px) {
            body, html {
                background-image: none; /* Hides the background image */
            }
            .login-left{
                display: none;
            }
        }

        .container-fluid {
            height: 100vh; /* Viewport Height */
            /* overflow: hidden; Prevents scrolling if content is larger than the viewport */
        }
        /* Apply overflow: hidden for screens wider than 768px (typically tablets and desktops) */
        @media (min-width: 992px) {
            .container-fluid {
                overflow: hidden;
            }
        }

        .img-fluid {
            max-height: 100vh; /* Maximum height to fit in the viewport */
            width: auto; /* Maintain aspect ratio */
            display: block; /* Removes bottom space under the image */
            margin: auto; /* Center the image if it's smaller than the viewport */
        }
        .full-width-image-container {
            position: relative;
            width: 100%; /* Adjust this as needed */
            height: 1000px; /* Adjust the height as needed */
            overflow: hidden;
        }

        .full-width-image-container img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the aspect ratio is maintained while covering the area */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


    </style>
    @livewireStyles
  </head>
  <body style="">
    <div class="container-fluid p-0">
        {{ $slot }}
    </div>

    <!-- latest jquery-->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('admin/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('admin/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('admin/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{asset('admin/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin/js/form-validation-custom.js') }}"></script>

    <script src="{{asset('admin/js/sidebar-menu.js')}}"></script>
    {{-- <script src="{{asset('admin/js/sidebar-pin.js')}}"></script> --}}
    <script src="{{asset('admin/js/slick/slick.min.js')}}"></script>
    <script src="{{asset('admin/js/slick/slick.js')}} "></script>
    <script src="{{asset('admin/js/header-slick.js')}}"></script>
    {{-- <script src="{{asset('admin/js/sweet-alert/sweetalert.min.js')}}"></script> --}}
    {{-- <script src="{{asset('admin/js/sweet-alert/app.js')}}"></script> --}}
    <script src="{{asset('admin/js/height-equal.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('admin/js/script.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- scrollbar js-->
    <script src="{{asset('admin/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('admin/js/scrollbar/custom.js')}}"></script>

    {{-- <script src="../assets/js/theme-customizer/customizer.js"></script> --}}


  </body>
</html>
