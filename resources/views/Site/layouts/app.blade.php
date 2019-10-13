




<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        
        @yield('title')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/favicon.png">
    <link rel="shortcut icon" href="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/logo/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
   

    <link rel="stylesheet" href="{{ url('assets/Site/'.Config::get('app.locale')) }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('assets/Site/'.Config::get('app.locale')) }}/css/plugins.css">
    <link rel="stylesheet" href="{{ url('assets/Site/'.Config::get('app.locale')) }}/css/style.css">

    <link rel="stylesheet" href="{{ url('assets/Site/'.Config::get('app.locale')) }}/css/custom.css">
    @yield('header')

</head>

<body>

  
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        @include('Site.layouts.header')

        <!--// Header -->

       
        @yield('content')


        @include('Site.layouts.footer')

       
    </div>
    <!--// Wrapper -->

    <!-- Js Files -->
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/modernizr-3.6.0.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/jquery.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/popper.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/bootstrap.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/plugins.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/jquery.ripples.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/chart.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/chart-active.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/main.js"></script>
    <!--// Js Files -->

    
<!-- FOOTER -->


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="{{url('node_modules/sweetalert/dist')}}/sweetalert.min.js"></script>
@include('Site/layouts/message')


@yield('footer')
<!-- /FOOTER -->

</body>

</html>


















