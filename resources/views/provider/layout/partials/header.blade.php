<header class="tj-header">

<!--Header Content Start-->

    <div class="container">

        <div class="row">

            <!--Toprow Content Start-->

            <div class="col-md-9 col-sm-6 col-xs-6">

                <!--Logo Start-->

                <div class="tj-logo">

                    <!-- <h1><a href="home-1.html">{{Setting::get('site_title', '')}}</a></h1> -->

                    <img src="{{Setting::get('site_logo', '')}}" alt="" style="max-width: 80px;">

                </div>

                <!--Logo End-->

            </div>

            <!-- <div class="col-md-3 col-sm-4 col-xs-12">

            </div> -->

            <div class="col-md-3 col-sm-6 col-xs-6">

                <div class="info_box" >

                    <i class="fa fa-envelope"></i>

                    <div class="info_text">

                        <span class="info_title">Email Us</span>

                        <span><a href="mailto:primecab@booking.com">{{Setting::get('contact_email', '')}}</a></span>

                    </div>

                </div>

            </div>


        </div>

    </div>



    <div class="tj-nav-row">

        <div class="container">

            <div class="row">

                <!--Nav Holder Start-->

                <div class="tj-nav-holder">

                    <!--Menu Holder Start-->

                    <nav class="navbar navbar-default"> 

                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tj-navbar-collapse" aria-expanded="false"> 

                                <span class="sr-only">Menu</span>

                                <span class="icon-bar"></span> 

                                <span class="icon-bar"></span> 

                                <span class="icon-bar"></span>

                            </button>

                        </div>

                        <!-- Navigation Content Start -->

                        <div class="collapse navbar-collapse" id="tj-navbar-collapse">

                            <ul class="nav navbar-nav">

                            <li>

                                <a href="{{url('provider')}}">Dashboard</a>

                            </li>

                            <li>

                                <a href="{{ route('provider.profile.index') }}">My Profile</a>

                            </li>

                            <li>

                                <a href="{{url('provider/earnings')}}">History/Earnings</a>

                            </li>


                            <li>

                              <a href="{{url('provider/upcoming')}}">Upcoming Trips</a>

                            </li>
                            

                            <li>
                                <a href="{{ url('/provider/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ url('/provider/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                            </ul>

                        </div>

                        <!-- Navigation Content Start -->

                    </nav>

                    <!--Menu Holder End-->

                    <div class="book_btn">

                        

                    </div>

                </div><!--Nav Holder End-->

            </div>

        </div>

    </div>

</header>