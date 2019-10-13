@extends('Site.layouts.app')

@section('title')
    | {{trans('app.Products')}}
@endsection

@section('header')
  

@endsection

@section('content')

 <!-- Breadcrumb Area -->
 <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="assets/images/bg/bg-breadcrumb.jpg">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2 class="tm-breadcrumb-title">تفاصيل المنتج</h2>
           
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Main Content -->
<main class="main-content">

    <!-- Shop Page Area -->
    <div class="tm-section shop-page-area bg-white tm-padding-section">
        <div class="container">
            <div class="tm-prodetails">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">

                        <!-- Product Details Images -->
                        <div class="tm-prodetails-images">
                            <img src="{{url(''.$productDetails->image)}}" alt="product image">
                            
                        </div>
                        <!--// Product Details Images -->

                    </div>

                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="tm-prodetails-content">
                            <h3 class="tm-prodetails-title">{{$productDetails->title}}</h3>
                            <div class="tm-rating">
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                            </div>
                            <p class="tm-prodetails-availability">الحالة :  <span style="color: green;font-weight: bold"> {{ ($productDetails->available == 1)? "متاح": "غير متاح حاليا"}}</span></p>
                            <div class="tm-prodetails-price" style="color: green">
                                <span ><span style="color: red">السعر : </span> {{$productDetails->price}}</span><span>  دولار </span>
                            </div>
                            <p>{!! $productDetails->description !!} </p>
                           

                        </div>
                    </div>
                </div>

                <!-- Product Details Description & Review -->
                <div class="tm-prodetails-desreview tm-padding-section-sm-top">
                    <ul class="nav tm-tabgroup2" id="prodetails" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="prodetails-area1-tab" data-toggle="tab" href="#prodetails-area1"
                                role="tab" aria-controls="prodetails-area1" aria-selected="true">فوائد المنتج </a>
                        </li>
                       
                    </ul>
                    <div class="tab-content" id="prodetails-content">
                        <div class="tab-pane fade show active" id="prodetails-area1" role="tabpanel"
                            aria-labelledby="prodetails-area1-tab">
                            <div class="tm-prodetails-description">
                                <b>فوائد المنتج :</b>
                                       {!! $productDetails->benefits !!} 

                            </div>
                        </div>
                      </div>
                </div>
                <!--// Product Details Description & Review -->
            </div>
        </div>
    </div>
    <!--// Shop Page Area -->

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
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js//shoppingCart.js"></script>
    @include('Site.layouts.customScripts')

    <script src="https://shop-peak.com/asisst/web_asset/js/jquery.form-validator.js"></script>



@endsection

