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
	<link href="{{ url('assets/Admin') }}/css_{{Config::get('app.locale')}}/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css_{{Config::get('app.locale')}}/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css_{{Config::get('app.locale')}}/core.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css_{{Config::get('app.locale')}}/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css_{{Config::get('app.locale')}}/colors.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/Admin') }}/css_{{Config::get('app.locale')}}/style.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Changa:500|El+Messiri|Harmattan|Mada:600|Tajawal:700" rel="stylesheet">


    @yield('header')
</head>

<body class="login-container">


        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Content area -->
                    <div class="content">

                        <!-- Simple login form -->
                        <form method="POST" action="{{ url('login') }}">
                            @csrf
                            <div class="panel panel-body login-form">
                                <div class="text-center">
                                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                    <h5 class="content-group">{{ trans('app.Login') }} <small class="display-block">{{ trans('app.Enter Your Email And Password') }}</small></h5>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ trans('app.Email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ trans('app.Password') }}" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">{{ trans('app.Login') }} <i class="icon-circle-left2 position-right"></i></button>
                                </div>

                                {{--<div class="text-center">--}}
                                    {{--<a href="login_password_recover.html">Forgot password?</a>--}}
                                {{--</div>--}}
                            </div>
                        </form>
                        <!-- /simple login form -->


                        <!-- Footer -->

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
