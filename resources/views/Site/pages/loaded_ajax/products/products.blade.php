@if(count($products) == 0 )
                        <div class="col-md-12 ">
                        <diV class="alert text-center" style="color:white;background-color:rosybrown"> Not Products found in this category</diV> 
                        </div>
                        @endif
                           
                        @foreach($products as $one_product_main_details)
                            @php(
                                               $beforePrice = $one_product_main_details->price
                                               )
                            @php(
                            $afterPrice = $one_product_main_details->price
                            )
                            @if($one_product_main_details->discount > 0)
                                @php($afterPrice =$beforePrice - ($beforePrice*$one_product_main_details->discount)/100)
                            @endif

                            <!-- Product Single -->
                                <div class="col-md-4 col-sm-6 col-xs-6">

                                    <div class="product product-single" data-price = "{{round($afterPrice, 2)}}">
                                        <div class="product-thumb">
                                            <div class="product-label">
                                                @if($one_product_main_details->status == 1)
                                                    <span>New</span>
                                                @endif
                                                @if($one_product_main_details->discount > 0)
    
                                                    <span class="sale">-{{$one_product_main_details->discount}}%</span>
                                                @endif
    
                                                @php(
                                                $updatedAt = Carbon::parse($one_product_main_details->updated_at)
                                                )
                                                {{--{{dd($one_product_main_details->images()->first())}}--}}
                                            </div>

                                            <a href="{{ url('productProfile/'.$one_product_main_details->id) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</a>
                                            <img src="{{ url(''.$one_product_main_details->images()->first()['image']) }}" alt="" style="width: 263px;height: 350.66px">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">

                                                <div class="price_filter" ></div>${{round($afterPrice, 2)}}
                                                @if($one_product_main_details->discount > 0)
                                                    <del class="product-old-price">${{$beforePrice}}</del>
                                                @endif
                                            </h3>
                                            @include('Site.layouts.product_rating',['avg' => $one_product_main_details->averageRating()])


                                            <h2 class="product-name"><a href="{{ url('productProfile/'.$one_product_main_details->id) }}">{{$one_product_main_details->title}}</a></h2>
                                            <div class="product-btns">
                                                @if(isset(Auth::user()->id))
                                                @php($like_link = 'makeLike')
                                                @if(isset($one_product_main_details->like()->first()->user['id']))
                                                    @php($like_link = 'removeLike')
                                                @endif
                                                <a href="{{url("$like_link/$one_product_main_details->id")}}" class="main-btn icon-btn {{(isset($one_product_main_details->like()->first()->user['id'])) ? 'primary-btn' : ''}}"><i class="fa fa-heart"></i></a>
                                                @endif
                                                <button class="addToCart primary-btn add-to-cart"
                                                        data-ID="{{$one_product_main_details->id}}"
                                                        data-name="{{$one_product_main_details->title}}"
                                                        data-price="{{round($afterPrice, 2)}}"
                                                        data-image="{{ url(''.$one_product_main_details->images()->first()['image'])}}"
                                                        data-size="{{explode(",", $one_product_main_details->sizes)[0]}}"
                                                        data-color="{{$one_product_main_details->images()->first()['color']}}"
                                                        type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Single -->

                                <div class="clearfix visible-sm visible-xs"></div>

                        @endforeach

{{-- <script src="{{ url('assets/Site/'.Config::get('app.locale')) }}/js/shoppingCart.js"></script> --}}
@include('Site.layouts.customScripts')
                    