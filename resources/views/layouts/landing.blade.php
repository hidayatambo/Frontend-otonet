<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba landing is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with
        unlimited possibilities.">
    <meta name="keywords" content="landing template, Cuba landing template,responsive landing
        template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('landing-page/images/favicon.webp') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('landing-page/images/favicon.webp') }}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&amp;display=swap" rel="stylesheet">
    <!-- Swiper css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/vendors/swiper/swiper-bundle.min.css') }}">

    <!-- Font awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/vendors/fontawesome/all.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/vendors/animate.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/style.css') }}">
</head>

<body class="layout-3">
    {{-- <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div><svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div> --}}
    <div class="tap-top"><i class="fa-solid fa-angles-up"></i></div>
    {{ $slot }}

    <!-- bootstrap js -->
    <script src="{{ asset('landing-page/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- swiper js -->
    <script src="{{ asset('landing-page/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/custom-swiper.js') }}"></script>

    <!-- font awesome js -->
    <script src="{{ asset('landing-page/js/vendors/fontawesome/all.min.js') }}"></script>


    <script src="{{ asset('landing-page/js/script.js') }}"></script>

</body>

</html>
