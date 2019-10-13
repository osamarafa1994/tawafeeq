@extends('Admin.layouts.app')

@section('title')
    {{ trans('app.home') }}
@endsection

@section('header')

@endsection

@section('content')

<!-- Quick stats boxes -->

    <div class="home" style="margin: 20px;">


        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #9a8160;border: 1px solid #9a8160;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800" style="font-size:20px;">{{ $users }}</span>
                    </div>
    
                    <h3 class="no-margin"><a href="{{ url('admin/user') }}" style="color:#fff;">{{trans('app.All Users')}}</a></h3>
                    
                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/user') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
   
      
            
    <div class="col-lg-4">
            <!-- Members online -->
           
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #2d995b;border: 1px solid purple;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800" style="font-size:20px;">{{ $products }}</span>
                    </div>

                    <h3 class="no-margin"><a href="{{ url('admin/products') }}" style="color:#fff;">{{ trans('app.Products') }}</a></h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/products') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>

 <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color:03a9f4;border: 1px solid purple;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800" style="font-size:20px;">{{ $orders }}</span>
                    </div>

                    <h3 class="no-margin"><a href="{{ url('admin/allOrders') }}" style="color:#fff;">{{ trans('app.all_clients_orders') }} </a></h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/allOrders') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>

        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color:black;border: 1px solid purple;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800" style="font-size:20px;">{{ $contact_message }}</span>
                    </div>

                    <h3 class="no-margin"><a href="{{ url('admin/message') }}" style="color:#fff;">{{ trans('app.Contact Form Messages') }} </a></h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/message') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>


   
    </div>

    <!-- /quick stats boxes -->

@endsection

@section('footer')

    @include('Admin/layouts/message')

    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
