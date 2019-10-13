<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from demo.interface.club/limitless/demo/bs3/Template/layout_1/RTL/default/full/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 08:59:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
        @yield('title')
    </title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css/colors.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css/style.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Changa:500|El+Messiri|Harmattan|Mada:600|Tajawal:700" rel="stylesheet">


    @yield('header')
</head>

<body class="login-container" style="background-color: #e8e6e6;padding: 20px 0px;border-radius: 5px;">


        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content" >

                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Content area -->
                    <div class="content">

                        <!-- Error title -->
                        <div class="text-center content-group">
                            <h1 class="error-title offline-title" style="font-size: 40px;margin: 50px auto 20px;background-color: #e8e6e6;padding: 20px 0px;border-radius: 5px;">Not Allow To Login This Page</h1>
                            <a href="/" style="color:red;font-size: 20px;text-decoration: underline;">Back To Home</a>
                        </div>
                        <!-- /error title -->


                        <!-- Error content -->
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                                <form action="" class="main-search">
                                    <div class="input-group content-group">
                                        <input type="text" class="form-control input-lg" placeholder="Search">

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn bg-slate-600 btn-icon btn-lg"><i class="icon-search4"></i></button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-primary btn-block content-group"><i class="icon-circle-left2 position-left"></i> Go to dashboard</a>
                                        </div>

                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-default btn-block content-group"><i class="icon-menu7 position-left"></i> Advanced search</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /error wrapper -->


                        <!-- Footer -->
                        <div class="footer text-muted text-center">
                            &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                        </div>
                        <!-- /footer -->

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->



    <!-- Core JS files -->
	<script src="{{ url('assets/Admin') }}/js/plugins/loaders/pace.min.js"></script>
	<script src="{{ url('assets/Admin') }}/js/core/libraries/jquery.min.js"></script>
	<script src="{{ url('assets/Admin') }}/js/core/libraries/bootstrap.min.js"></script>
	<script src="{{ url('assets/Admin') }}/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ url('assets/Admin') }}/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="{{ url('assets/Admin') }}/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="{{ url('assets/Admin') }}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="{{ url('assets/Admin') }}/js/plugins/ui/moment/moment.min.js"></script>
	<script src="{{ url('assets/Admin') }}/js/plugins/pickers/daterangepicker.js"></script>

    <!-- Theme JS files -->
    <script src="{{ url('assets/Admin') }}/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="{{ url('assets/Admin') }}/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{ url('assets/Admin') }}/js/plugins/forms/styling/switch.min.js"></script>

    <!-- Theme JS files -->
	<script src="{{ url('assets/Admin') }}/js/plugins/notifications/noty.min.js"></script>
	<script src="{{ url('assets/Admin') }}/js/plugins/notifications/jgrowl.min.js"></script>

    <script src="{{ url('assets/Admin') }}/js/app.js"></script>
    <script src="{{ url('assets/Admin') }}/js/demo_pages/components_notifications_other.js"></script>
    <script src="{{ url('assets/Admin') }}/js/demo_pages/form_checkboxes_radios.js"></script>
    <script src="{{ url('assets/Admin') }}/js/demo_pages/uploader_bootstrap.js"></script>
	<script src="{{ url('assets/Admin') }}/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('footer')

</body>

</html>
