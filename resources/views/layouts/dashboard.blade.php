<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('admin/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/animate.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">
</head>

<body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <div class="page-wrapper compact-wrapper">
        <livewire:Components.Header />

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" sidebar-layout="stroke-svg">
                <div>
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                                src="{{ asset('admin/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                                src="{{ asset('admin/images/logo/logo_dark.png') }}" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                                src="{{ asset('admin/images/logo/logo-icon.png') }}" alt=""></a></div>
                    {{-- sidebar --}}
                    <livewire:components.sidebar />
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            {{ $slot }}
            <livewire:components.footer />
        </div>


    </div>
    <!-- latest jquery-->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('admin/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('admin/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('admin/js/clock.js') }}"></script>
    <script src="{{ asset('admin/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/js/slick/slick.js') }}"></script>
    <script src="{{ asset('admin/js/header-slick.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('admin/js/notify/index.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('admin/js/height-equal.js') }}"></script>
    <script src="{{ asset('admin/js/animation/wow/wow.min.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/js/theme-customizer/customizer.js') }}"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>
