<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SiqWare - @yield('page-title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/main_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('dashboard/material/main_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('dashboard/material/main_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script src="{{asset('dashboard/material/assets/js/app.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/demo_pages/login.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Form card -->
            @yield('page-form')
            <!-- /Form card -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
