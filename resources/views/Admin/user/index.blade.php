@extends('Admin.layouts.app')

@section('title')
    Fekra| {{ trans('app.Users') }}
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Users') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('admin/dashboard') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="active">{{ trans('app.Users') }}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ trans('app.All Users') }}</h5>
            <a href="{{ url('admin/add_user') }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>{{ trans('app.New') }}</a>
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
                    <th>{{ trans('app.Name') }}</th>
                    <th>{{ trans('app.Email') }}</th>
                    <th>{{ trans('app.Phone') }}</th>
{{--                    <th>{{ trans('app.Image') }}</th>--}}
                    <th>{{ trans('app.Role') }}</th>
                    <th>{{ trans('app.Status') }}</th>
                    <th>{{ trans('app.Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->user['email']}}</td>
                        <td>{{ $user->phone}}</td>
                        {{--<td>--}}
                            {{--<img src="{{ url('assets/Admin/images/user/'.$user->image) }}" style="width:50px;height:50px;border-radius:50%;"/>--}}
                        {{--</td>--}}
                        <td>
                            @if ($user->user['role_id'] == 1)
                                    <span class="label label-success label-rounded">{{ trans('app.Admin') }}</span>
                                @elseif($user->user['role_id'] == 2)
                                    <span class="label label-primary label-rounded">{{ trans('app.Supervisor') }}</span>
                                @elseif($user->user['role_id'] == 3)
                                    <span class="label label-warning label-rounded">{{ trans('app.Writer') }}</span>
                                @elseif($user->user['role_id'] == 4)
                                    <span class="label label-default label-rounded">{{ trans('app.Editor') }}</span>
                                @else
                                    <span class="label label-danger label-rounded">{{ trans('app.Default User') }}</span>
                            @endif
                        </td>
                        <td>
                            @if ($user->user['status'] == 1)
                                <span class="label label-success label-rounded">{{ trans('app.Active') }}</span>
                            @else
                                <span class="label label-danger label-rounded">{{ trans('app.Not Active') }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/'.$user->id.'/edit_user') }}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                            <a href="{{ url('admin/'.$user->id.'/delete_user') }}"  id="delete">
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
