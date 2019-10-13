@extends('Site.layouts.app')

@section('title')
    | {{trans('app.Products')}}
@endsection

@section('header')


    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .pagination{
            margin: 0;
        }
        .pagination > .page-item span.page-link, a.page-link{
            border: none !important;
            background-color: white !important;
            color: black;
            margin-right: 6px;
            display: inline-block;

        }
        .store-pages li.active span.page-link{
            color: #F8694A !important;
        }
    </style>


@endsection

@section('content')


    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">{{trans('app.home')}}</a></li>
                <li class="active">{{trans('app.register')}}</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" action="{{url('/sendRegister')}}" method="post" class="clearfix">
                    @csrf
                        <div class="col-md-6 pull-right-lg">
                            <div class="billing-details">

                                <div class="section-title">
                                    <h3 class="title">Register Details</h3>
                                </div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group">

                                    <input class="input" type="text" name="fname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="country" placeholder="Country">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="zip_code" placeholder="ZIP Code">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="tel" name="phone" placeholder="Telephone">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                </div>


                                <div class="form-group">
                                    <div class="pull-right">
                                        <button type="submit" name="submit" value="submit" class="primary-btn">{{trans('app.register')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->


@endsection

@section('footer')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    @include('Site/layouts/message')
    <script src="{{url('node_modules/sweetalert/dist')}}/sweetalert.min.js"></script>


    <script>

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );


    </script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js//shoppingCart.js"></script>
    @include('Site.layouts.customScripts')
    @if (Session::has('success'))
        <script>
            shoppingCart.clearCart();
            displayCart();
        </script>
    @endif

    <script src="https://shop-peak.com/asisst/web_asset/js/jquery.form-validator.js"></script>


@endsection

