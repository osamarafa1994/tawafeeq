@extends('Site.layouts.app')

@section('title')
    |  طلب المنتجات
@endsection



@section('content')

        <!-- Breadcrumb Area -->
        <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/bg/bg-breadcrumb.jpg">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2 class="tm-breadcrumb-title">طلب المنتجات </h2>
                   
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="main-content">

            <!-- Contact Us -->
            <div class="tm-section contact-us-area tm-padding-section bg-white">
               
                <div class="container ">
                    <div class="row no-gutters">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="tm-contact-formwrapper">
                                <h5 style="text-align: center;font-weight: bold">يمكنك شراء المتنجات الآن</h5>
                                <form action="{{url('storeClientsOrders')}}" method="post" id="tm-contactform" class="tm-form">
                                    @csrf
                                    <div class="tm-form-inner">
                                        <div class="tm-form-field">
                                            <input type="text" name="name" placeholder="الإسم *">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="email" name="email" placeholder="البريد الالكتروني *">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="text" name="phone" placeholder=" رقم الهاتف *">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="text" name="product_name" placeholder="اسم المنتج *">
                                        </div>
                                        <div class="tm-form-field">
                                            <textarea name="details" cols="30" rows="5" placeholder="التفاصيل *"></textarea>
                                        </div>
                                        <div class="tm-form-field">
                                            <button type="submit" class="tm-button">إرسال <b></b></button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messages"></p>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
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
   

  
  
@endsection

