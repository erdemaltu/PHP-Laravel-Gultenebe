<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets')}}/images/64.png">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- tui charts Css -->
        <link href="{{ asset('assets')}}/libs/tui-chart/tui-chart.min.css" rel="stylesheet" type="text/css" />
        @yield('css')
        @yield('javascript')
        @toastr_css
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    </head>

    <body data-topbar="dark" data-layout="horizontal">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <div id="layout-wrapper">
        @include('admin._header')
        @include('admin._sidebar')
        @yield('content')
        @include('admin._footer')
        @yield('footer')
    </body>

</html>
