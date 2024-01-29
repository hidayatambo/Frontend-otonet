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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <!-- Toastr css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/toastr.min.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">
    {{-- <link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset("admin/css/vendors/datatables.css") }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/sweetalert2.css')}}">
    <!-- Select2 css-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/select2.css')}}"> --}}
    <!-- Leaflet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/leaflet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/prism.css') }}">
    @yield('style')
    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        span.txt-danger:empty {
            display: none;
        }

    </style>
</head>

<body>
    <!-- loader starts-->
    {{-- <div class="loader-wrapper" style="opacity: 0.7;">
        <div class="loader-index"> <span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div> --}}
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
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="img-fluid for-light pe-4"
                                src="{{ asset('admin/images/logo/logo-techthink-hub-indonesia.png') }}" alt="">
                            <img class="img-fluid for-dark pe-4"
                                src="{{ asset('admin/images/logo/logo-techthink-hub-indonesia.png') }}" alt="">
                        </a>
                        <div>
                            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                                    data-feather="grid"> </i></div>
                        </div>
                    </div>
                    <livewire:components.sidebar />
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <livewire:components.breadcrumb />
                    </div>
                </div>
                {{ $slot }}
            </div>
            <!-- footer start-->
            <livewire:components.footer />
        </div>
    </div>
    <!-- latest jquery-->
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="{{ asset("admin/js/jquery.min.js") }}"></script> --}}
    <script>
        // Suppress console warnings
        console.warn = function () {};

        // Suppress console errors
        console.error = function () {};

    </script>
    <script type="text/javascript" src="{{ asset("admin/js/jquery-3.5.1.min.js") }}"></script>

    <script>
        function isFirefox() {
            return navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
        }

        document.addEventListener('DOMContentLoaded', function () {
            if (isFirefox()) {
                var elements = document.querySelectorAll('[wire\\:navigate]');
                elements.forEach(function (el) {
                    el.removeAttribute('wire:navigate');
                });
            }
        });

    </script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- feather icon js-->
    <script type="text/javascript" src="{{ asset('admin/js/icons/feather-icon/feather.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script type="text/javascript" src="{{ asset('admin/js/scrollbar/simplebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script type="text/javascript" src="{{ asset('admin/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script type="text/javascript" src="{{ asset('admin/js/sidebar-menu.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/sidebar-pin.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/clock.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('admin/js/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/slick/slick.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('admin/js/header-slick.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/chart/apex-chart/apex-chart.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/chart/apex-chart/stock-prices.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('admin/js/chart/apex-chart/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/notify/bootstrap-notify.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/dashboard/default.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('admin/js/notify/index.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/typeahead/handlebars.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/typeahead/typeahead.bundle.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/typeahead/typeahead.custom.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/typeahead-search/handlebars.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/typeahead-search/typeahead-custom.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('admin/js/height-equal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/animation/wow/wow.min.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script type="text/javascript" src="{{ asset('admin/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/theme-customizer/customizer.js') }}"></script>

    <!-- Toastr jquery-->
    <script type="text/javascript" src="{{asset('admin/js/toastr.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Select2 jquery-->
    {{-- <script src="{{asset('admin/js/select2/select2.full.min.js')}}"></script> --}}
    {{-- Own script --}}
    <script src="{{asset('admin/js/custom.js')}}"></script>

    <script>
        $(document).ready(function () {
            displayFlashMessages();
        });

        function flashMessageRedirect(messages, type = 'success') {
            sessionStorage.setItem('flashMessages', JSON.stringify({
                messages,
                type
            }));
        }

        function displayFlashMessages() {
            var flashMessages = sessionStorage.getItem('flashMessages');

            if (flashMessages) {
                flashMessages = JSON.parse(flashMessages);
                var messages = flashMessages.messages;
                var type = flashMessages.type;

                if (Array.isArray(messages)) {
                    messages.forEach(function (message) {
                        createAndShowMessage(message, type);
                    });
                } else {
                    createAndShowMessage(messages, type);
                }

                // Clear the messages from session storage
                sessionStorage.removeItem('flashMessages');
            }
        }

        function createAndShowMessage(message, type) {
            var messageElement = $('<div class="alert alert-' + type + '" role="alert"></div>')
                .text(message)
                .hide()
                .fadeIn(400)
                .delay(3000)
                .fadeOut(400, function () {
                    $(this).remove();
                });
            $('#flash-message').append(messageElement);
        }

        function flashMessage(messages, type = 'success') {
            if (Array.isArray(messages)) {
                messages.forEach(function (message) {
                    // Create the message element for each message
                    var messageElement = $('<div class="alert alert-' + type + '" role="alert"></div>')
                        .text(message)
                        .hide()
                        .fadeIn(1000)
                        .delay(3000)
                        .fadeOut(1000, function () {
                            $(this).remove(); // Remove the element after hiding it
                        });

                    // Append the message element to the flash message container
                    $('#flash-message').append(messageElement);
                });
            } else {
                // Handle a single message
                var messageElement = $('<div class="alert alert-' + type + '" role="alert"></div>')
                    .text(messages)
                    .hide()
                    .fadeIn(400)
                    .delay(3000)
                    .fadeOut(400, function () {
                        $(this).remove(); // Remove the element after hiding it
                    });

                // Append the message element to the flash message container
                $('#flash-message').append(messageElement);
            }
        }

    </script>
    <script>
        new WOW().init();

    </script>

    <script>
        $(document).ready(function () {
            $("#fullScreenToggle").click(function () {
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

    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatables/jquery.dataTables.min.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.buttons.min.js") }}"></script>
    {{-- <script src="{{ asset("admin/js/datatable/datatable-extension/custom.js") }} "></script> --}}
    <script type="text/javascript"
        src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/jszip.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/buttons.colVis.min.js") }}">
    </script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/pdfmake.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/vfs_fonts.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.autoFill.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.select.min.js") }}">
    </script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/buttons.bootstrap4.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/buttons.html5.min.js") }}">
    </script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/buttons.print.min.js") }}">
    </script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.bootstrap4.min.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.responsive.min.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/responsive.bootstrap4.min.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.keyTable.min.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.colReorder.min.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.fixedHeader.min.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.rowReorder.min.js") }}"></script>
    <script type="text/javascript"
        src="{{ asset("admin/js/datatable/datatable-extension/dataTables.scroller.min.js") }}"></script>
    <script>
        window.addEventListener('openModal', event => {
            new bootstrap.Modal(document.getElementById(event.detail.id)).show();
        });

    </script>
    <script>
        window.addEventListener("popstate", function (event) {
            window.location.reload();
        });

    </script>
    <!-- Leaflet -->
    <script src="{{ asset('admin/js/map-js/leaflet.js') }}"></script>
    <script src="{{ asset('admin/js/prism/prism.min.js') }}"></script>
    @livewireScripts
    @yield('script')
    @stack('scripts')
    {{-- <script>
        Livewire.on('modalClosed', () => {
            bootstrap.Modal.getInstance(document.getElementById('exampleModalCenter1')).hide();
        });
    </script> --}}
</body>

</html>
