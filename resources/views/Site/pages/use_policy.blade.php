@extends('Site.layouts.app')

@section('title')
    | سياسة الإستخدام
@endsection



@section('content')


     <!-- Breadcrumb Area -->
     <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/bg/bg-breadcrumb.jpg">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2 class="tm-breadcrumb-title">{{$usePolicy->title}}</h2>
                   
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
                      
                        <div class="col-xl-12 col-lg-12">
                            <div class="tm-about-content">
                            <h4>{{$usePolicy->title}}</h4>
                            <span class="divider"><i class="fa fa-superpowers"></i></span>
                            {!! $usePolicy->description !!}
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// About Us Area -->

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

