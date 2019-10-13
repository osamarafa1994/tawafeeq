<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{ url('assets/Admin/') }}/images/demo/users/face11.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">
                            {{ Auth::user()->name }} 
                        </span>
                        <div class="text-size-mini text-muted">
                            {{ Auth::user()->email }} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <br><br>
                <ul class="navigation navigation-main navigation-accordion">
                    <li >
                        <a href="#" ><i class="icon-wrench"></i> <span>{{ trans('app.Settings') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/1/edit_setting') }}">{{ trans('app.All Settings') }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class=" icon-users"></i> <span>@lang('app.Users')</span></a>
                        <ul>
                            <li><a href="{{ url('admin/user') }}">{{ trans('app.All Users') }}</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class=" icon-location4"></i> <span>{{ trans('app.Image Slider') }}</span> </a>
                        <ul>
                            <li><a href="{{ url('admin/19/edit_about') }}"><span></span>{{ trans('app.Image Slider') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-grid2"></i> <span>{{ trans('app.Products') }}</span></a>
                        
                        <ul>
                            <li><a href="{{ url('admin/products') }}">{{ trans('app.Products') }}</a></li>
                        </ul>
                    </li>




                     <li>
                        <a href="#"><i class="icon-info3"></i> <span>{{ trans('app.About Us') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/17/edit_about') }}">{{ trans('app.About Us') }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-info3"></i> <span> سياسة الاستخدام</span></a>
                        <ul>
                            <li><a href="{{ url('admin/18/edit_about') }}">سياسة الاستخدام</a></li>
                        </ul>
                    </li>

                    


                     <li>
                        <a href="#"><i class=" icon-info3"></i>{{trans('app.all_clients_orders')}}</a>
                        <ul>
                            <li><a href="{{ url('admin/allOrders') }}">{{trans('app.all_clients_orders')}}</a></li>
                        </ul>

                    </li>                

                    <li>
                        <a href="#"><i class="icon-envelope"></i> <span>{{ trans('app.Contact Us') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/message') }}">{{ trans('app.All Messages') }}</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
