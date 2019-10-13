@extends('Site.layouts.app')

@section('title')
    | {{trans('app.Products')}}
@endsection

@section('content')


    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/bg/bg-breadcrumb.jpg">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2 class="tm-breadcrumb-title">المنتجات الخاصة بنا</h2>
                    
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="main-content">

            <!-- product Area -->
           <div class="tm-section product-details-area bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1"></div>
                      <div class="col-lg-11">
                            <div class="tm-shop-productsarea sticky-sidebar"><div class="inner-wrapper-sticky" style="position: relative;">
                                <form action="#" class="tm-shop-header">
                                  
                                </form>
                                <div class="tm-shop-products">
                                    <div class="row mt-30-reverse">

                                        @foreach($products as $product)
                                        <!-- Single Product -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                            <div class="tm-product wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="tm-product-image">
                                                    <a class="tm-product-imagelink" href="product-details.html">
                                                        <img src="{{ url(''.$product->image) }}" alt="product image">
                                                    </a>
                                                
                                                </div>
                                                <div class="tm-product-content">
                                                    <h5 class="tm-product-title"><a href="{{url('productProfile/'.$product->id)}}">
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
                          </div>
                        </div>
                        <div style="margin-right: 24%;" class="tm-pagination mt-50 mb-30">
                                 {{ $products->links() }}    
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
        <!--// Main Content -->

@endsection

@section('footer')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="https://shop-peak.com/asisst/web_asset/js/jquery.form-validator.js"></script>


@endsection

