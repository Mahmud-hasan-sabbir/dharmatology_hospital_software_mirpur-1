<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/backend')}}/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{asset('public/backend')}}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- Layout config Js -->
        <script src="{{asset('public/backend')}}/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('public/backend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('public/backend')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('public/backend')}}/css/app.min.css" rel="stylesheet" type="text/css" />

        <link href="{{asset('public/backend')}}/css/dataTables.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('public/backend')}}/css/custom.min.css" rel="stylesheet" type="text/css" />

        <link href="{{asset('public/backend')}}/toaster/css/toastr.min.css" rel="stylesheet">
       

        @stack('style')
    </head>
    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('layouts.partial.dashboard-header')

            <!-- Remove Notification Modal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            @include('layouts.partial.dashboard-sidebar')

            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                </div>
                <!-- End Page-content -->

                @include('layouts.partial.dashboard-footer')

            </div>
            <!-- End main content-->

        </div>


        <!-- JAVASCRIPT -->
        <script src="{{asset('public/backend')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/jQuery/jquery-3.6.0.min.js"></script>
        <script src="{{asset('public/backend')}}/js/dataTables.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/feather-icons/feather.min.js"></script>
        <script src="{{asset('public/backend')}}/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="{{asset('public/backend')}}/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="{{asset('public/backend')}}/libs/apexcharts/apexcharts.min.js"></script>
        <!-- Vector map-->
        <script src="{{asset('public/backend')}}/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/jsvectormap/maps/world-merc.js"></script>
        <!--Swiper slider js-->
        <script src="{{asset('public/backend')}}/libs/swiper/swiper-bundle.min.js"></script>
        <!-- Dashboard init -->
        <script src="{{asset('public/backend')}}/js/pages/dashboard-analytics.init.js"></script>
        <!-- form wizard init -->
        <script src="{{asset('public/backend')}}/js/pages/form-wizard.init.js"></script>

        <!-- prismjs plugin -->
        <script src="{{asset('public/backend')}}/libs/prismjs/prism.js"></script>
        <script src="{{asset('public/backend')}}/libs/list.js/list.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/list.pagination.js/list.pagination.min.js"></script>
        <!-- listjs init -->

        <!-- Sweet Alerts js -->
        <script src="{{asset('public/backend')}}/libs/sweetalert2/sweetalert2.min.js"></script>
        <script src="{{asset('public/backend')}}/toaster/js/toastr.min.js"></script>

        <!-- App js -->
        <script src="{{asset('public/backend')}}/js/app.js"></script>

        @stack('scripts')

        <script>
            @if(Session::has('messege'))
                var type="{{Session::get('alert-type','info')}}"
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('messege') }}");
                        break;
                    case 'success':
                        toastr.success("{{ Session::get('messege') }}");
                        break;
                    case 'warning':
                        toastr.warning("{{ Session::get('messege') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('messege') }}");
                        break;
                    case 'update':
                        swal("Success Message Title", "Well done, you pressed a button", "success");
                        break;
                    case 'fail':
                        swal("Error!", "{{ Session::get('messege') }}", "error");
                        break;
                }
            @endif
        </script>
        <script>
            let table = new DataTable('#myTable');
        </script>
    </body>
</html>

