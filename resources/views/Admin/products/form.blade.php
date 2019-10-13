@extends('Admin.layouts.app')

@section('title')
    Fekra| {{ isset($find) ? trans('app.Edit') : trans('app.add') }}
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Products') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.Products') }}</li>
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

        <form action="{{ isset($find) ? url('admin/edit_product/'.$find->id) : url('admin/add_product') }}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:20px;">
            @csrf

            <div class="form-group">
                <label class="control-label col-sm-3" for="title">{{ trans('app.Name') }}</label>
                <div class="col-md-9">
                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ isset($find->title) ? $find->title : ''}}" required placeholder="{{ trans('app.title_ar') }}">

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="price">{{ trans('app.Price') }}</label>
                <div class="col-md-9">
                    <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ isset($find->price) ? $find->price : ''}}"  placeholder="{{ trans('app.Price') }}">

                    @if ($errors->has('price'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="available">{{ trans('app.availability') }}</label>
                <div class="col-md-9">
                    @php(
                    $availabilities = array(
                                '1'=>trans('app.In Stock'),
                                '0'=>trans('app.Not Available'),
                                )
                    )

                    <select id="available" class="form-control {{ $errors->has('available') ? ' is-invalid' : '' }}" name="available" >
                        @foreach($availabilities as $key=>$value)
                            <?php
                            $selected = '';
                            if(isset($find) && $find->available == $key){
                                $selected = 'selected';
                            }else{
                                $selected = '';
                            }
                            ?>
                            <option {{$selected}} value="{{$key}}">{{$value}}</option>
                        @endforeach

                    </select>

                    @if ($errors->has('availability'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('availability') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="description">{{ trans('app.Description') }}</label>
                <div class="col-md-9">
                    <textarea id="article-ckeditor" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="6" placeholder="{{ trans('app.Description') }}" >{{ isset($find->description) ? $find->description : ''}}</textarea>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="benefits">فوائد المنتج</label>
                <div class="col-md-9">
                    <textarea id="article-ckeditor2" class="form-control{{ $errors->has('benefits') ? ' is-invalid' : '' }}" name="benefits" rows="6" placeholder="فوائد المنتج" >{{ isset($find->benefits) ? $find->benefits : ''}}</textarea>

                    @if ($errors->has('benefits'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('benefits') }}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="image">{{ trans('app.Image') }}</label>
                <div class="col-md-9">
                    <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default" value="{{ isset($find) ? $find->image : '' }}" name="image">


                    @if(isset($find))
                        <img src="{{ url(''.$find->image) }}" name="df_image" style="width:80px;height:80px;"/>
                        <input type="hidden" name="df_image" value="{{ $find->image }}" />
                    @endif

                    @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
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

    <script src="{{ asset('') }}vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script>
        CKEDITOR.replace( 'article-ckeditor2' );
    </script>


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
