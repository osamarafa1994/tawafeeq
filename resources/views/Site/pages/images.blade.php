@extends('Site.layouts.app')

@section('title')
    | البوم الصور
@endsection


@section('content')


    <div class="breadcrumb-banner-area ptb-120 bg-opacity" style="background-image:url(assets/Site/img/bg/6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text text-center">
                        <h2>البوم الصور</h2>
                        <!--<p>Lorem Ipsum is simply dummy text of. </p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-banner-area-end -->
    <!-- portfolio-area-start -->
    <div class="portfolio-area pt-120 pb-110">
        <div class="container">
            <div class="portfolio-menu text-center mb-50">
                <button class="active" data-filter="*">كل الصور</button>
                <!--<button data-filter=".cat1">Maintain  </button>
                <button data-filter=".cat2">Improve</button>
                <button data-filter=".cat3">Repair</button>-->
            </div>
            <div class="grid">
                 @foreach($images as $image)

                <div class="col-md-3 col-sm-6 grid-item cat1 pl-5 pr-5">
                    <div class="work-wrapper mb-10">
                        <div class="work-img">
                            <a class="image-link" href="{{$image->image}}"><img src="{{url('/').'/'.$image->image}}" alt="{{$image->title}}" style="width: 275px!important;height: 240px!important;"  title="{{$image->title}}"></a>
                            <!--<div class="work-text">
                                <h3><a href="project-details.html">Wall Paintings</a></h3>
                                <span>www.devitems.com</span>
                            </div>-->
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>



@endsection

