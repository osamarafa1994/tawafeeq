<div class="header sticky-header">

            <!-- Header Top Area -->
            <div class="header-toparea">
                <div class="container">
                     <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="header-topinfo">
                                <ul style="font-size: 20px;">
                                    <li><i class="fa fa-clock-o"></i> موقع بيع منتجات</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="header-topinfo">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone"></i> {{$main_data->phone}}</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i>
                                            {{$main_data->email}}</a></li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!--// Header Top Area -->

            <!-- Header Bottom Area -->
            <div class="header-bottomarea">
                <div class="container">
                    <div class="header-bottominner">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img src="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/logo/logo.png" alt="deconsult logo">
                            </a>
                        </div>
                        <nav class="tm-navigation">
                            <ul>
                                <li><a href="{{url('/')}}">الرئيسية</a>
                                    
                                </li>
                                <li><a href="{{url('/aboutUs')}}">من نحن</a></li>
                                <li><a href="{{url('/products')}}">المنتجات</a></li>
                                <li><a href="{{url('/buyProduct')}}">شراء منتج</a></li>
                               <li><a href="{{url('/usePolicy')}}">سياسة الإستخدام</a></li>
                                <li><a href="{{url('/contactUs')}}">اتصل بنا</a></li>
                            </ul>
                        </nav>
                  

                     

                    </div>
                    <div class="header-mobilemenu clearfix">
                        <div class="tm-mobilenav"></div>
                    </div>
                </div>
            </div>
            <!--// Header Bottom Area -->

</div>