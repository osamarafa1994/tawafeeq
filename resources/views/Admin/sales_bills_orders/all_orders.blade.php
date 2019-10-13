@extends('Admin.layouts.app')

@section('title')
    Fekra| {{trans('app.all_orders')}}
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{trans('app.all_orders')}}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/work') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="active">{{trans('app.all_orders')}}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{trans('app.all_orders')}}</h5>
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
                <th>{{trans('app.client_name')}} </th>
                <th>{{trans('app.Phone')}}</th>
                <th> {{trans('app.email')}}</th>
                <th>{{trans('app.Details')}}</th>
                <th>  {{trans('app.product_name')}}</th>
                <th>{{ trans('app.Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @php($x = 0)
            @php(
                $statuses = array(
                            '0'=>'When Receiving',
                            '1'=>'Payment Done',
                            )
                )
            @foreach ($all as $item)
               
                <tr>
                    <td>{{ ++$x }}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->phone}}</td>
                    <td>{{ $item->email}}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$item->id}}">
                            {{trans('app.Details')}}
                        </button>
                    </td>
                    <td>{{ $item->product_name}}</td>

                    <td> 


                        <a href="{{ url('admin/'.$item->id.'/delete_category') }}"  id="delete">
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

                            <div class=" p-5 mb-3 text-center bg-info rounded-circle" >{{$item->details}}</div>
                           
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
