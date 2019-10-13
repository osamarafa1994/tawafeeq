<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('admin/dashboard') }}"><p>E-commerce </p></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            {{--  <li class="dropdown language-switch">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ url('assets/Admin') }}/images/flags/gb.png" class="position-left" alt="">
                    @if(Config::get('app.locale') == 'ar' ) <img src="{{ url('assets/Admin/images/flag/en.png') }}" alt=""> English @else <img src="{{ url('Admin/images/flag/ar.png') }}" alt=""> Arabic @endif
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    @if(Config::get('app.locale') == 'ar' )
                        <li><a class="english" href="{{ url('locale/en') }}"><img src="{{ url('assets/Admin/images/flag/en.png') }}" alt=""> English</a></li>
                    @else 
                        <li><a class="arabic" href="{{ url('locale/ar') }}"><img src="{{ url('assets/Admin/images/flag/ar.png') }}" alt=""> Arabic</a></li>
                    @endif
                </ul>
            </li>  --}}
            <!--<li>@if (Config::get('app.locale') == 'ar')-->
            <!--        <a href="{{route('lang','en')}}">English</a>-->
            <!--    @else-->
            <!--        <a href="{{route('lang','ar')}}">عربى</a>-->
            <!--    @endif-->
            <!--</li>-->
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ url('assets/Admin') }}/images/demo/users/face11.jpg" alt="">
                    <span>
                            {{ Auth::user()->name }}
                    </span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __(trans('app.logout')) }}

                            <i class="icon-switch2"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
