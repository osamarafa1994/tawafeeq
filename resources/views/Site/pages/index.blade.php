@extends('Site.layouts.app')

@section('title')
    | {{trans('app.home')}}
@endsection

@section('header')

@endsection

@section('content')

 <!-- Heroslider -->
<div class="heroslider">

<!-- Heroslider Item -->
<div class="heroslider-single tm-rippple-active" data-bgimage="{{ url(''.$slider->image) }}"
    data-black-overlay="8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="heroslider-content text-center">
                    <div class="heroslider-animatebox">
                        <h1>
                            <span>أهلا بكم في </span>
                            <b>{{$slider->title}}</b>
                        </h1>
                    </div>
                    <div class="heroslider-animatebox">
                        <p>{!! $slider->description !!}</p>
                    </div>
                    <div class="heroslider-animatebox">
                        <div class="tm-buttongroup">
                            <a href="{{url('/products')}}" class="tm-button"> تصفح المنتجات<b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Heroslider Item -->

</div>
<!--// Heroslider -->

<!-- Main -->
<main class="page-content">

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
                    <a href="{{url('/aboutUs')}}" class="tm-button">من نحن<b></b></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// About Us Area -->

<!-- product Area -->
<div class="tm-section product-details-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="widgets sidebar-widgets-2 sticky-sidebar" style=""><div class="inner-wrapper-sticky" style="position: relative;">

                    <!-- Single Widget -->
                    <div class="single-widget widget-relatedproduct">
                        <h3  style="padding: 7px;background-color: #3f51b5;text-align: center;color: #ffffff;">قسم المنتجات</h3>
                       <div class="tm-shop-products">
                        <div class="row mt-30-reverse">
                            @foreach($products as $product)
                            <!-- Single Product -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                <div class="tm-product wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="tm-product-image">
                                        <a class="tm-product-imagelink" href="{{url('productProfile/'.$product->id)}}">
                                            <img src="{{ url(''.$product->image) }}" alt="product image">
                                        </a>
                                       
                                    </div>
                                    <div class="tm-product-content">
                                        <h5 class="tm-product-title"><a href="product-details.html">
                                                {{ $product->title }}</a></h5>
                                     
                                        <h6 class="tm-product-price" style="color: green;font-weight: bold"><span>السعر :</span> ${{ $product->price }}</h6>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Product -->
                            
                            @endforeach
                             
                             

                          
                         </div>
                    </div>
                      
                        
                    </div>
                    <!--// Single Widget -->

                  
                </div>
                </div>
            </div>
            <div style="margin-right: 24%;" class="tm-pagination mt-50 mb-30">
                       {{ $products->links() }}
                        <!-- <ul>
                            <li class="is-active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">الصفحة التالية</a></li>
                        </ul> -->
                    </div>
        </div>
    </div>
</div>
<!--// Services Area -->


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
<!--// Main -->

@endsection

@section('footer')

    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js//shoppingCart.js"></script>
    @include('Site.layouts.customScripts')

    <script src="https://shop-peak.com/asisst/web_asset/js/jquery.form-validator.js"></script>


@endsection
