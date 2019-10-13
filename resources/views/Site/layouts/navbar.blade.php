<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav
            @if(request()->segment(1) != '')
            show-on-click
            @endif
                        ">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">

                    @foreach($mainCategories as $category)

                        <li class="
                        @if($category->childs1->count() == 0  && $category->category_type == 0)
                        dropdown side-dropdown
                        @endif
                        "
                        >
                            @if(  $category->category_type == 0 && $category->childs1->count() == 0 )
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$category->title}} <i class="fa fa-angle-right"></i></a>
                                <div class="custom-menu">
                                    <div class="row">
                                         
                                            @if(count($category->childs) == 0)
                                            Sorry not sub categories found in this category
                                            @endif
                                        @if(count($category->childs))

                                        @foreach($category->childs as $category_level1)

                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                    
                                                @if(  $category_level1->category_type == 0 && $category_level1->childs1->count() <= 0 )

                                                <li><a href="{{ url('categoriesByCategory/'.$category_level1->id) }}"><h3 class="list-links-title">{{$category_level1->title}}</h3></a></li>
                                                    @if(count($category_level1->childs))

                                                    @foreach($category_level1->childs as $category_level2)

                                                        <li><a href="{{ url('productsByCategory/'.$category_level2->id) }}">{{$category_level2->title}}</a></li>
                                                    @endforeach
                                                        <hr class="hidden-md hidden-lg">

                                                    @endif
                                                @else
                                                    <li><a href="{{ url('productsByCategory/'.$category_level1->id) }}">{{$category_level1->title}}</a></li>

                                                @endif
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            @else
                                <a href="{{ url('productsByCategory/'.$category->id) }}">{{$category->title}}</a>
                            @endif



                    @endforeach
                    <li><a href="{{ url('allProducts') }}">{{trans('app.view_all')}}</a></li>
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="{{ url('/') }}">{{trans('app.home')}}</a></li>
                    <li><a href="{{ url('allProducts') }}">{{trans('app.Products')}}</a></li>
                    @foreach($mainCategories as $category)

                    <li class="
                        @if($category->childs1->count() == 0  && $category->category_type == 0)
                            dropdown mega-dropdown
                            @endif
                                ">
                        @if(  $category->category_type == 0 && $category->childs1->count() == 0 )
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$category->title}} <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                        @if(count($category->childs) == 0)
                                        Sorry not sub categories found in this category
                                        @endif
                                    @if(count($category->childs))
                                        @foreach($category->childs as $category_level1)
                                            <div class="col-md-4">
                                                <ul class="list-links">
                                                    @if(  $category_level1->category_type == 0 && $category_level1->childs1->count() <= 0 )

                                                        <li><a href="{{ url('categoriesByCategory/'.$category_level1->id) }}"><h3 class="list-links-title">{{$category_level1->title}}</h3></a></li>
                                                        @if(count($category_level1->childs))

                                                            @foreach($category_level1->childs as $category_level2)

                                                                <li><a href="{{ url('productsByCategory/'.$category_level2->id) }}">{{$category_level2->title}}</a></li>
                                                            @endforeach
                                                            <hr class="hidden-md hidden-lg">

                                                        @endif
                                                    @else
                                                        <li><a href="{{ url('productsByCategory/'.$category_level1->id) }}">{{$category_level1->title}}</a></li>

                                                    @endif
                                                </ul>
                                                <hr class="hidden-md hidden-lg">
                                        </div>
                                        @endforeach
                                    @endif
                                </div>

                            </div>
                        @else
                            <a href="{{ url('productsByCategory/'.$category->id) }}">{{$category->title}}</a>
                        @endif

                    </li>
                    @endforeach

                    <li><a href="{{ url('checkout') }}">{{trans('app.checkout')}}</a></li>



                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
