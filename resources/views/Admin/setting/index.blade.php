@extends('Admin.layouts.app')

@section('title')
    Fekra| {{ trans('app.Settings') }}
@endsection

@section('header')

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
                <li><a href="{{ url('/work') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="active">{{ trans('app.Settings') }}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ trans('app.Settings') }}</h5>
            <a href="{{ url('admin/add_setting') }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>{{ trans('app.New') }}</a>
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

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>{{ trans('app.Id') }}</th>
                    <th>facebook</th>
                    <th>twitter</th>
                    <th>email</th>
                    <th>youtube</th>
                    {{-- <th>{{ trans('app.contact_image') }}</th>
                    <th>{{ trans('app.gmail') }}</th>
                    <th>{{ trans('app.location_map') }}</th>
                    <th>{{ trans('app.contact_description_ar') }}</th>
                    <th>{{ trans('app.contact_description_en') }}</th>
                    <th>{{ trans('app.facebook') }}</th>
                    <th>{{ trans('app.whatsapp') }}</th>
                    <th>{{ trans('app.twitter') }}</th>
                    <th>{{ trans('app.instegram') }}</th>
                    <th>{{ trans('app.linkedin') }}</th>
                     --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $setting)
                    <tr>
                        <td>{{ $setting->id}}</td>
                        <td>{{ $setting->facebook}}</td>
                        <td>{{ $setting->twitter}}</td>
                        <td>{{ $setting->email}}</td>
                        <td>{{ $setting->youtube}}</td>
                        {{-- <td>
                            <img src="{{ url('Admin/images/setting/'.$setting->image) }}" style="width:50px;height:50px;border-radius:50%;"/>
                        </td>
                        <td>
                            @if ($setting->status == 'active')
                                <span class="label label-success label-rounded">{{ trans('app.Active') }}</span>
                            @else
                                <span class="label label-danger label-rounded">{{ trans('app.Not Active') }}</span>
                            @endif
                        </td> --}}
                        <td>
                            <a href="{{ url('admin/'.$setting->id.'/edit_setting') }}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                            <a href="{{ url('admin/'.$setting->id.'/delete_setting') }}"  id="delete">
                                <span class="label label-danger label-rounded label-icon"><i class="icon-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('footer')

    @include('Admin/layouts/message')

    <script src="{{ url('assets/Admin') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ url('assets/Admin') }}/js/demo_pages/datatables_advanced.js"></script>

    <!-- Theme JS files -->
	<script src="{{ url('assets/Admin') }}/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="{{ url('assets/Admin') }}/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
    <script src="{{ url('assets/Admin') }}/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#delete").click(function(){
                {{--  if( !confirm('Are you sure you want to continue?')) {
                    return false;
                }  --}}
            });
        });
    </script>
@endsection
