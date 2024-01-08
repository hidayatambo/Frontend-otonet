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

<body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <livewire:components.header />
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('admin/images/logo/logo-techthink-hub-indonesia.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('admin/images/logo/logo-techthink-hub-indonesia.png') }}" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../admin/images/logo/logo-icon.png" alt=""></a></div>
            <livewire:components.sidebar />
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>Dashboard</h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                        <svg class="stroke-icon">
                          <use href="../admin/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          {{ $slot }}
        </div>
        <!-- footer start-->
        <livewire:components.footer />
      </div>
    </div>
    <!-- latest jquery-->
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    <!-- Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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
    {{-- <script src="{{ asset('admin/js/clock.js') }}"></script> --}}
    <script src="{{ asset('admin/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/js/slick/slick.js') }}"></script>
    <script src="{{ asset('admin/js/header-slick.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/chart/apex-chart/apex-chart.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/chart/apex-chart/stock-prices.js') }}"></script> --}}
    <script src="{{ asset('admin/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/notify/bootstrap-notify.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/dashboard/default.js') }}"></script> --}}
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
    <script>
        $(document).ready(function() {
    $("#fullScreenToggle").click(function() {
        toggleFullScreen();
    });
});

function toggleFullScreen() {
    if (!document.fullscreenElement) {
        // Enter full screen on the document body, or a specific element like document.getElementById('content')
        document.documentElement.requestFullscreen().catch(err => {
            console.log(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
        });
    } else {
        // Exit full screen
        if (document.exitFullscreen) {
            document.exitFullscreen();
        }
    }
}

    </script>
</body>

</html>
