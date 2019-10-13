@extends('Site.layouts.app')

@section('title')
    | عنا
@endsection



@section('content')


    
        <!-- Breadcrumb Area -->
        <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/bg/bg-breadcrumb.jpg">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2 class="tm-breadcrumb-title">من نحن</h2>
                   
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="main-content">

            <!-- About Us Area -->
            <div class="tm-section about-us-area bg-white tm-padding-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5">
                            <div class="tm-about-image">
                                <img class="wow fadeInLeft" src="{{ url(''.$about->image) }}" alt="deconsult image">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="tm-about-content">
                            <h2>{{$about->title}}</h2>
                            <span class="divider"><i class="fa fa-superpowers"></i></span>
                            {!! $about->description !!}
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// About Us Area -->

  
            <!-- Funfact Area -->
            <div class="tm-section funfact-area tm-padding-section tm-parallax" data-bgimage="assets/images/bg/bg-image-1.jpg"
                data-overlay="9">
                <div class="container">
                    <div class="row tm-funfact-wrapper">

                        <!-- Single Funfact -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="tm-funfact wow fadeInUp">
                                <span class="tm-funfact-icon">
                                    <i class="flaticon-group"></i>
                                </span>
                                <div class="tm-funfact-content">
                                    <span class="odometer" data-count-to="{{$main_data->products_number}}"></span>
                                    <h5>عدد المنتجات</h5>
                                </div>
                            </div>
                        </div>
                        <!--// Single Funfact -->

                        <!-- Single Funfact -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="tm-funfact wow fadeInUp">
                                <span class="tm-funfact-icon">
                                    <i class="flaticon-success"></i>
                                </span>
                                <div class="tm-funfact-content">
                                    <span  class="odometer text-right" data-count-to="{{$main_data->happy_clients_number}}"></span>
                                    <h5>العملاء السعداء</h5>
                                </div>
                            </div>
                        </div>
                        <!--// Single Funfact -->

                        <!-- Single Funfact -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="tm-funfact wow fadeInUp">
                                <span class="tm-funfact-icon">
                                    <i class="flaticon-trophy"></i>
                                </span>
                                <div class="tm-funfact-content">
                                    <span class="odometer" data-count-to="{{$main_data->clients_number}}"></span>
                                    <h5>عدد العملاء</h5>
                                </div>
                            </div>
                        </div>
                        <!--// Single Funfact -->

                        <!-- Single Funfact -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="tm-funfact wow fadeInUp">
                                <span class="tm-funfact-icon">
                                    <i class="flaticon-like"></i>
                                </span>
                                <div class="tm-funfact-content">
                                    <span class="odometer" data-count-to="{{$main_data->visitors_number}}"></span>
                                    <h5>الزوار</h5>
                                </div>
                            </div>
                        </div>
                        <!--// Single Funfact -->

                    </div>
                </div>
            </div>
            <!--// Funfact Area -->
            
           <!-- Call To Action Area -->
            <div class="tm-section call-to-action-area bg-theme">
                <div class="container">
                    <div class="row align-items-center tm-cta">
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="tm-cta-content">
                                <h3> لشراء المنتجات اضغط هنا</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="tm-cta-button">
                                <a href="{{url('buyProduct')}}" class="tm-button tm-button-white">شراء منتج <b></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Call To Action Area -->

        </main>
        <!--// Main Content -->


@endsection

@section('footer')
   

  
  
@endsection

