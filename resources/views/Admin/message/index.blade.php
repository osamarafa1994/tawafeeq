@extends('Admin.layouts.app')

@section('title')
    Fekra| {{ trans('app.Services') }}
@endsection

@section('header')

@endsection

@section('content')

<!-- Content area -->
<div class="content">

    <!-- Single line -->
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">{{ trans('app.All Messages') }}</h6>

            <div class="heading-elements not-collapsible">
                <span class="label bg-blue heading-text" style="padding: 5px; font-size: 12px;margin: 0px 0px 10px;">Total Messages:  <span style="color:red;font-size: 16px;font-weight: bold;margin-left: 5px;background-color: #FFF;padding: 5px;">{{ count($all) }}</span></span>
            </div>
        </div>

        <div class="panel-toolbar panel-toolbar-inbox">
            <div class="navbar navbar-default">
                <ul class="nav navbar-nav visible-xs-block no-border">
                    <li>
                        <a class="text-center collapsed" data-toggle="collapse" data-target="#inbox-toolbar-toggle-single">
                            <i class="icon-circle-down2"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>{{ trans('app.Id') }}</th>
                    <th>{{ trans('app.Name') }}</th>
                    <th>{{ trans('app.email') }}</th>
                    <th>{{trans('app.Details')}}</th>
                    <th>{{ trans('app.Date') }}</th>
                    <th style="width:10%;">{{ trans('app.Actions') }}</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($all as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td style="color: red;">{{ $message->name }}</td>
                        <td style="color: gray;">
                            {{$message->email }}
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$message->id}}">
                                {{trans('app.Details')}}
                            </button>
                        </td>
                        <td>{{ $message->created_at->diffForHumans() }}</td>

                        <td>
                           
                            <a href="{{ url('admin/'.$message->id.'/delete_message') }}"  id="delete">
                                <span class="label label-danger label-rounded label-icon"><i class="icon-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @foreach ($all as $item)
        <div class="modal" id="myModal{{$item->id}}">
            <div class="modal-dialog" style="width: 50%">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h2 class="text-center" ></h2>

                        <div class=" p-5 mb-3 text-center bg-info label-rounded" >{{$item->message}}</div>
                       
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">{{trans('app.Close')}}</button>
                    </div>

                </div>
            </div>
        </div>

    @endforeach

    </div>
</div>
<!-- /content area -->

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
