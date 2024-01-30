<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Page with Fixed Footer</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('coloradmin/css/vendor.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('coloradmin/css/default/app.min.css') }}" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
    <!-- ================== BEGIN extra-css ================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("admin/css/vendors/datatables.css") }}">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.jqueryui.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/sweetalert2.css')}}"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/leaflet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/prism.css') }}">
    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        span.txt-danger:empty {
            display: none;
        }

    </style>
	<style>
		.table th,
		.table td {
		  padding: 0.25rem 0.25rem;
		}
	  </style>
    @yield('style')
    <!-- ================== END extra-css ================== -->
</head>
<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed app-content-full-height">
        <livewire:components.color-admin.partials.header />
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar" data-bs-theme="dark">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                <livewire:components.color-admin.partials.sidebar />
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg" data-bs-theme="dark"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
        </div>
		<!-- END #sidebar -->
		<!-- BEGIN #content -->
		<div id="content" class="app-content d-flex flex-column p-0">
			<!-- BEGIN content-container -->
			<div class="app-content-padding flex-grow-1 overflow-hidden" data-scrollbar="true" data-height="100%">
                <livewire:components.color-admin.partials.breadcrumb />
				{{ $slot }}
			</div>
			<!-- END content-container -->
			<livewire:components.color-admin.partials.footer />
		</div>
		<!-- END #content -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('coloradmin/js/vendor.min.js') }}"></script>
	<script src="{{ asset('coloradmin/js/app.min.js') }}"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('coloradmin/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
	<script src="{{ asset('coloradmin/js/demo/render.highlight.js') }}"></script>
	<!-- ================== END page-js ================== -->

	<!-- ================== BEGIN extra-js ================== -->
	<script type="text/javascript" src="{{asset('admin/js/toastr.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script> --}}
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> --}}
	
	<script type="text/javascript" src="{{ asset("admin/js/datatable/datatables/jquery.dataTables.min.js") }}"></script>
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script> --}}
	<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.buttons.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/jszip.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/pdfmake.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/vfs_fonts.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/buttons.html5.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/buttons.print.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.bootstrap4.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/buttons.bootstrap4.min.js") }}"></script>
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/responsive.bootstrap4.min.js") }}"></script> --}}
    {{-- <script src="{{ asset("admin/js/datatable/datatable-extension/custom.js") }} "></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/buttons.colVis.min.js") }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.autoFill.min.js") }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.select.min.js") }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.responsive.min.js") }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.keyTable.min.js") }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.colReorder.min.js") }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.fixedHeader.min.js") }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.rowReorder.min.js") }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset("admin/js/datatable/datatable-extension/dataTables.scroller.min.js") }}"></script> --}}
	<script src="{{ asset('admin/js/map-js/leaflet.js') }}"></script>
    <script src="{{ asset('admin/js/prism/prism.min.js') }}"></script>
	<script>
        window.addEventListener("popstate", function (event) {
            window.location.reload();
        });

    </script>
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
    @livewireScripts
    @yield('script')
    @stack('scripts')
</body>
</html>