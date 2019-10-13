@extends('Admin.layouts.app')

@section('title')
    Fekra| {{ isset($find) ? trans('app.Edit') : trans('app.add') }}
@endsection

@section('header')

@endsection

@section('content')

<div class="panel-heading">
    <h6 class="panel-title">{{ trans('app.All Messages') }}</h6>
</div>

<!-- Mail details -->
<div class="media stack-media-on-mobile mail-details-read">
    <div class="media-body">
        <h6 class="media-heading"><span style="color:red;">Name:</span> <a>{{ $find->name }}</a></h6>
        <div class="letter-icon-title text-semibold"><span style="color:red;">Email:</span> <a href="#">{{ $find->email }}</a></div>
    </div>
    <div class="media-right media-middle text-nowrap text-center">

        <ul class="list-inline list-inline-condensed no-margin">
            <li><a><span style="color:red;">Date: </span> {{ $find->created_at->diffForHumans() }}</a></li>
        </ul>
    </div>
</div>
<!-- /mail details -->

<div class="one_message" style="background-color: #f67b7c;height: auto;margin:10px 40px 0px 40px;padding: 50px;text-align: center;color:#FFF;overflow:auto;">
    <h3 style="font-size:30px;margin-bottom: 30px;">Welcome: <span style="font-size:35px; ">{{ $find->name }}</span></h3>
    <p style="font-size:14px;">
            {{ $find->message }}
    </p>
</div>
<div class="one_message_footer" style="background-color: #344b61;height: 30px;margin:0px 40px;text-align:center;color:#FFF;">

</div>

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
