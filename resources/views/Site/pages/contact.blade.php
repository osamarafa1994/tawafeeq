@extends('Site.layouts.app')

@section('title')
    | تواصل معنا
@endsection

@section('header')

@endsection

@section('content')

  <!-- Breadcrumb Area -->
  <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/bg/bg-breadcrumb.jpg">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2 class="tm-breadcrumb-title">للتواصل معنا</h2>
                   
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="main-content">

            <!-- Contact Us -->
            <div class="tm-section contact-us-area tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center mt-30-reverse">

                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-pin"></i>
                                </span>
                                <h5>العنوان</h5>
                                <p>{{$main_data->address}}</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-phone"></i>
                                </span>
                                <h5>الهاتف</h5>
                                <p><a href="#">{{$main_data->phone}}</a></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-mail"></i>
                                </span>
                                <h5>البريد الالكتروني</h5>
                                <p> <a href="#">{{$main_data->email}}</a></p>
                                
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container tm-padding-section-top">
                    <div class="row no-gutters">
                        <div class="col-lg-9">
                            <div class="tm-contact-formwrapper">
                                <h5>لا تتردد تواصل معنا الآن</h5>
                                <form action="{{url('storeContactUs')}}" method="post" id="tm-contactform" class="tm-form">
                                @csrf
                                    <div class="tm-form-inner">
                                        <div class="tm-form-field">
                                            <input type="text" name="name" placeholder="الإسم *">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="email" name="email" placeholder="البريد الالكتروني *">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="text" name="subject" placeholder="الموضوع *">
                                        </div>
                                        <div class="tm-form-field">
                                            <textarea name="message" cols="30" rows="5" placeholder="الرسالة *"></textarea>
                                        </div>
                                        <div class="tm-form-field">
                                            <button type="submit" class="tm-button">إرسال <b></b></button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messages"></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--// Contact Us -->

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
    @include('Site/layouts/message')


@endsection
