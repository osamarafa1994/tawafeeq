@extends('Admin.layouts.app')

@section('title')
    Fekra| {{ isset($find) ? trans('app.Edit') : trans('app.add') }}
@endsection

@section('header')

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{url('/')}}/templateEditor/ckeditor/ckeditor.js"></script>

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Settings') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('admin/dashboard') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.Settings') }}</li>
                {{--  @if(isset($find))
                    <li class="active">{{ trans('app.Edit') }}: $find->title_ar </li>
                @endif  --}}
            </ul>
        </div>
    </div>


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ isset($find) ? trans('app.Edit') : trans('app.add') }}</h5>
        </div>

        <br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{ isset($find) ? url('admin/edit_setting/'.$find->id) : url('admin/add_setting') }}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:20px;">
                @csrf


                 {{-- <div class="form-group">
                    <label class="control-label col-sm-3" for="location_map">{{ trans('app.location_map') }}</label>
                    <div class="col-md-9">
                        <textarea id="location_map" class="form-control{{ $errors->has('location_map') ? ' is-invalid' : '' }}" name="location_map" rows="5" placeholder="{{ trans('app.location_map') }}" >{{ isset($find->location_map) ? $find->location_map : ''}}</textarea>

                        @if ($errors->has('location_map'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('location_map') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}


                     <div class="form-group">
                        <label class="control-label col-sm-3" for="phone">{{ trans('app.phone') }}</label>
                        <div class="col-md-9">
                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ isset($find->phone) ? $find->phone : ''}}"  placeholder="{{ trans('app.phone') }}">
    
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                        <div class="form-group">
                                <label class="control-label col-sm-3" for="address">{{trans('app.address')}}</label>
                                <div class="col-md-9">
                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ isset($find->address) ? $find->address : ''}}"  placeholder="العنوان">
            
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
             

                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">{{ trans('app.email') }}</label>
                    <div class="col-md-9">
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ isset($find->email) ? $find->email : ''}}"  placeholder="{{ trans('app.email') }}">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="facebook">{{ trans('app.facebook') }}</label>
                    <div class="col-md-9">
                        <input id="facebook" type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ isset($find->facebook) ? $find->facebook : ''}}"  placeholder="{{ trans('app.facebook') }}">

                        @if ($errors->has('facebook'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('facebook') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="whatsapp">{{ trans('app.whatsapp') }}</label>
                    <div class="col-md-9">
                        <input id="whatsapp" type="text" class="form-control{{ $errors->has('whatsapp') ? ' is-invalid' : '' }}" name="whatsapp" value="{{ isset($find->whatsapp) ? $find->whatsapp : ''}}"  placeholder="{{ trans('app.whatsapp') }}">

                        @if ($errors->has('whatsapp'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('whatsapp') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="twitter">{{ trans('app.twitter') }}</label>
                    <div class="col-md-9">
                        <input id="twitter" type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" value="{{ isset($find->twitter) ? $find->twitter : ''}}"  placeholder="{{ trans('app.twitter') }}">

                        @if ($errors->has('twitter'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('twitter') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="linkedin">{{ trans('app.linkedin') }}</label>
                    <div class="col-md-9">
                        <input id="linkedin" type="text" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" name="linkedin" value="{{ isset($find->linkedin) ? $find->linkedin : ''}}"  placeholder="{{ trans('app.linkedin') }}">

                        @if ($errors->has('linkedin'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('linkedin') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                {{-- <div class="form-group">
                    <label class="control-label col-sm-3" for="instegram">instegram</label>
                    <div class="col-md-9">
                        <input id="instegram" type="text" class="form-control{{ $errors->has('instegram') ? ' is-invalid' : '' }}" name="instegram" value="{{ isset($find->instegram) ? $find->instegram : ''}}"  placeholder="instegram">

                        @if ($errors->has('instegram'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('instegram') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
 --}}

                
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="youtube">Youtube</label>
                    <div class="col-md-9">
                        <input id="youtube" type="text" class="form-control{{ $errors->has('youtube') ? ' is-invalid' : '' }}" name="youtube" value="{{ isset($find->youtube) ? $find->youtube : ''}}"  placeholder="youtube">

                        @if ($errors->has('youtube'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('youtube') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-3" for="products_number"> عدد المنتجات </label>
                    <div class="col-md-3">
                        <input id="products_number" type="text" class="form-control{{ $errors->has('products_number') ? ' is-invalid' : '' }}" name="products_number" value="{{ isset($find->products_number) ? $find->products_number : ''}}"  placeholder=" عدد المنتجات">

                        @if ($errors->has('products_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('products_number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="control-label col-sm-3" for="happy_clients_number">عدد العملاء السعداء</label>
                    <div class="col-md-3">
                        <input id="happy_clients_number" type="text" class="form-control{{ $errors->has('happy_clients_number') ? ' is-invalid' : '' }}" name="happy_clients_number" value="{{ isset($find->happy_clients_number) ? $find->happy_clients_number : ''}}"  placeholder="عدد العملاء السعداء">

                        @if ($errors->has('happy_clients_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('happy_clients_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
             


                <div class="form-group">
                    <label class="control-label col-sm-3" for="clients_number"> عدد  العملاء </label>
                    <div class="col-md-3">
                        <input id="clients_number" type="text" class="form-control{{ $errors->has('clients_number') ? ' is-invalid' : '' }}" name="clients_number" value="{{ isset($find->clients_number) ? $find->clients_number : ''}}"  placeholder="عدد العملاء">

                        @if ($errors->has('clients_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('clients_number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="control-label col-sm-3" for="visitors_number">عدد الزوار</label>
                    <div class="col-md-3">
                        <input id="visitors_number" type="text" class="form-control{{ $errors->has('visitors_number') ? ' is-invalid' : '' }}" name="visitors_number" value="{{ isset($find->visitors_number) ? $find->visitors_number : ''}}"  placeholder="عدد الزوار">

                        @if ($errors->has('visitors_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('visitors_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
             




                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">{{ trans('app.Save') }} </button>
                </div>
            </form>

    </div>
    <!-- /horizontal form modal -->


@endsection

@section('footer')

    @include('Admin/layouts/message')

    {{--<script src="{{ asset('') }}vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>--}}
    {{--<script>--}}
        {{--CKEDITOR.replace( 'article-ckeditor' );--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--CKEDITOR.replace( 'article-ckeditor2' );--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--CKEDITOR.replace( 'article-ckeditor3' );--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--CKEDITOR.replace( 'article-ckeditor4' );--}}
    {{--</script>--}}

    <script src="{{ url('assets/Admin') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ url('assets/Admin') }}/js/demo_pages/datatables_advanced.js"></script>

    <!-- Theme JS files -->
	<script src="{{ url('assets/Admin') }}/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="{{ url('assets/Admin') }}/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
    <script src="{{ url('assets/Admin') }}/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
