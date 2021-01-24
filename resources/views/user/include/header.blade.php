<header class="header_area">
    <div class="container-fluid d-flex">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="/" class="logo"><img style="height: 80px" src="{{Setting::get('site_logo', '')}}" alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('dashboard')}}">@lang('user.dashboard')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('profile')}}">@lang('user.my_profile')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('trips')}}">@lang('user.history')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('upcoming/trips')}}">@lang('user.upcoming_trips')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/promotions')}}">@lang('user.Coupons')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/wallet')}}">@lang('user.my_wallet')</a></li>
                </ul>
            </div>
        </nav>
        <div class="menu_btn">
            <a href="{{ url('/logout') }}" class="book_btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('user.profile.logout')</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</header>
