<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/backend')}}/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="{{asset('public/backend')}}/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('public/backend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('public/backend')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('public/backend')}}/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('public/backend')}}/css/custom.min.css" rel="stylesheet" type="text/css" />
       


    </head>

    <body>
        <!-- auth-page wrapper -->
        <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
            <div class="bg-overlay"></div>
            <!-- auth-page content -->
            <div class="auth-page-content overflow-hidden" style="margin-bottom:-48px">
                <div class="container">
                    {{ $slot }}

                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0">&copy;
                                    <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('public/backend')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('public/backend')}}/libs/feather-icons/feather.min.js"></script>
        <script src="{{asset('public/backend')}}/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="{{asset('public/backend')}}/js/plugins.js"></script>
     

        <!-- password-addon init -->
        <script src="{{asset('public/backend')}}/js/pages/password-addon.init.js"></script>
    </body>
</html>
