<head>

	<meta charset="utf-8">

	<meta name="description" content="Prime Cab HTML5 Responsive Template">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{Setting::get('site_title', '')}}</title>



	<link href="../mainindex/css/bootstrap.css" rel="stylesheet">

	<link href="../mainindex/css/style.css" rel="stylesheet">

	<link href="../mainindex/css/fontawesome-all.min.css" rel="stylesheet">

	<link id="switcher" href="../mainindex/css/color.css" rel="stylesheet">

	<link href="../mainindex/css/color-switcher.css" rel="stylesheet">

	<link href="../mainindex/css/owl.carousel.css" rel="stylesheet">

	<link href="../mainindex/css/responsive.css" rel="stylesheet">

	<link href="../mainindex/css/icomoon.css" rel="stylesheet">

	<link href="../mainindex/css/animate.css" rel="stylesheet">



</head>

<body>

	<!--Wrapper Content Start-->

	<div class="tj-wrapper">

		<!--Style Switcher Section End-->

		<header class="tj-header">

			<!--Header Content Start-->

			<div class="container">

				<div class="row">

					<!--Toprow Content Start-->

					<div class="col-md-3 col-sm-4 col-xs-12">

						<!--Logo Start-->

                        <div class="tj-logo">

                            <!-- <h1><a href="home-1.html">{{Setting::get('site_title', '')}}</a></h1> -->

                            <img src="{{Setting::get('site_logo', '')}}" alt="" style="max-width: 80px;">

						</div>

						<!--Logo End-->

					</div>

					<div class="col-md-3 col-sm-4 col-xs-12">

					</div>

					<div class="col-md-3 col-sm-4 col-xs-12">

						<div class="info_box" >

							<i class="fa fa-envelope"></i>

							<div class="info_text">

								<span class="info_title">Email Us</span>

								<span><a href="mailto:primecab@booking.com">{{Setting::get('contact_email', '')}}</a></span>

							</div>

						</div>

					</div>

					<div class="col-md-3 col-xs-12">

						<div class="phone_info">

							<div class="phone_icon">

								<i class="fas fa-phone-volume"></i>

							</div>

							<div class="phone_text">

								<span><a href="tel:1-234-000-2345">{{Setting::get('contact_number', '')}}</a></span>

							</div>

						</div>

					</div>

					<!--Toprow Content End-->

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

										<a href="../">Home</a>

									</li>

									<li>

										<a href="../login">Ride</a>

									</li>

									<li>

										<a href="../provider/login">Drive</a>

									</li>

									<li>

										<a href="../contact">Contact Us</a>

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

		<!--Header Content End-->

		<!--Header Banner Content Start-->

		
	<!--Header Banner Content Start-->

	<section class="tj-banner-form" style="background: url('{{Setting::get('f_mainBanner', '')}}') no-repeat; background-size: cover;">

		<div class="container">

			<div class="row" style=" margin-top: -100px;">>

				<!--Header Banner Caption Content Start-->

				<div class="col-md-12 col-sm-12">

					<div class="banner-caption">

						<div class="banner-inner bounceInLeft animated delay-0s text-center">

							<h2>Partner Web Panel</h2>

							<h3 style="color: white;">Login & Register</h3></br>

							<div class="banner-btns" style="margin-bottom: -100px;">

								<a href="{{Setting::get('f_u_url', '')}}" style=" width: 155px; margin-right: 5px; " class="btn-style-1"><i class="fab fa-android"></i> User App</a>

								<a href="{{Setting::get('f_f_url', '')}}" style=" width: 155px; margin-left: 5px; " class="btn-style-2"><i class="fab fa-android"></i> Partner App</a>

							</div>

						</div>

					</div>

				</div>

			

			</div>

		</div>

	</section>



		<!--Header Banner Content End-->

		

		<!--Login Section Start-->	

        <section class="tj-login">

				<div class="container">

					<div class="row"  style="margin: auto;  padding: 10px;">

						<div class="col-md-12 col-sm-12">

							<!--Tabs Nav Start-->

							<div class="tj-tabs">

								<ul class="nav nav-tabs" role="tablist">

									<li class="active"><a href="#login" data-toggle="tab">Login</a></li>

									<li><a href="#register" data-toggle="tab">Register</a></li>

								</ul>

							</div>

							<!--Tabs Nav End-->

							<!--Tabs Content Start-->

							<div class="tab-content">

								<!--Login Tabs Content Start-->

								<div class="tab-pane active" id="login">

                                    <div class="col-md-6 col-sm-6">

                                            <div class="reg-cta">

                                                <ul class="cta-list" style="margin-top: 20px;">

                                                    <li>

                                                        <span class="icon-mail-envelope icomoon"></span>

                                                        <div class="cta-card">

                                                            <strong>24/7 Customer Support</strong>

                                                            <p>Get support for 24 hours and 7 days.</p>

                                                        </div>

                                                    </li>

                                                    <li>

                                                        <span class="icon-lock icomoon"></span>

                                                        <div class="cta-info">

                                                            <strong>100% Secure Payment</strong>

                                                            <p>3D Secure online payment system to protect your data.</p>

                                                        </div>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                        <div class="col-md-6 col-sm-6">

                                            <form style="margin-top: 20px;" class="login-frm" role="form" method="POST" action="{{ url('/provider/login') }}"> 

                                                        {{ csrf_field() }}                      

                                                        <div class="field-holder">

                                                            <span class="far fa-envelope"></span>

                                                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your Email Address" required>

                                                            @if ($errors->has('email'))

                                                            <span class="help-block">

                                                                <strong>{{ $errors->first('email') }}</strong>

                                                            </span>

                                                            @endif

                                                        </div>

                                                        <div class="field-holder">

                                                            <span class="fas fa-lock"></span>

                                                            <input id="password"  type="password" name="password" placeholder="Password" required>

                                                            @if ($errors->has('password'))

                                                            <span class="help-block">

                                                                <strong>{{ $errors->first('password') }}</strong>

                                                            </span>

                                                            @endif

                                                        </div>

                                                        <a href="#" class="forget-pass">Forget Password?</a>

                                                        <button type="submit" class="reg-btn">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>

                                                        <!-- <button type="hidden" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button> -->

                                                        <!-- <button type="hidden" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button> -->

                                                        

                                            </form>

                                        </div>

								</div>

								<!--Login Tabs Content End-->

								<!--Register Tabs Content Start-->

								<div class="tab-pane" id="register">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="reg-cta">

                                            <ul class="cta-list" style="margin-top: 20px;">

                                                <li>

                                                    <span class="icon-mail-envelope icomoon"></span>

                                                    <div class="cta-card">

                                                        <strong>24/7 Customer Support</strong>

                                                        <p>Get support for 24 hours and 7 days.</p>

                                                    </div>

                                                </li>

                                                <li>

                                                    <span class="icon-lock icomoon"></span>

                                                    <div class="cta-info">

                                                        <strong>100% Secure Payment</strong>

                                                        <p>3D Secure online payment system to protect your data.</p>

                                                    </div>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6">

                                        <form style="margin-top: 20px;" class="reg-frm" method="POST"  action="{{ url('/provider/register') }}">

                                                    {{ csrf_field() }} 

                                                    <div class="field-holder">

                                                        <div class="row field-holder">

                                                            <div class="col-sm-12 col-md-12" >

                                                                <div class="col-sm-4 col-md-4">

                                                                    <input value="+91" type="text" placeholder="+91" id="country_code" name="country_code" /> 

                                                                </div>

                                                                <div class="col-sm-8 col-md-8">

                                                                    <input type="text" autofocus id="phone_number" placeholder="Enter Phone Number" name="phone_number" value="{{ old('phone_number') }}" />

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="field-holder">

                                                        <div class="row">

                                                            <div class="col-sm-12 col-md-12">

                                                                <div class="col-md-6 col-sm-6">

                                                                    <span class="fas fa-user" style="margin-left: 10px;"></span>

                                                                    <input type="text"  placeholder="First Name" name="first_name" >



                                                                    @if ($errors->has('first_name'))

                                                                        <span class="help-block">

                                                                            <strong>{{ $errors->first('first_name') }}</strong>

                                                                        </span>

                                                                    @endif

                                                                </div>

                                                                <div class="col-md-6 col-sm-6">

                                                                    <span class="fas fa-user" style="margin-left: 10px;"></span>

                                                                    <input type="text" placeholder="Last Name" name="last_name" >



                                                                    @if ($errors->has('last_name'))

                                                                        <span class="help-block">

                                                                            <strong>{{ $errors->first('last_name') }}</strong>

                                                                        </span>

                                                                    @endif

                                                                </div>

                                                                <div class="col-md-12 col-sm-12">

                                                                    <span class="fas fa-envelope" style="margin-left: 10px;"></span>

                                                                    <input type="email"  name="email" placeholder="Email Address">



                                                                    @if ($errors->has('email'))

                                                                        <span class="help-block">

                                                                            <strong>{{ $errors->first('email') }}</strong>

                                                                        </span>

                                                                    @endif                        

                                                                </div>

                                                                <div class="col-md-12 col-sm-12">

                                                                    <span class="fas fa-lock" style="margin-left: 10px;"></span>

                                                                    <input type="password"  name="password" placeholder="Password">



                                                                    @if ($errors->has('password'))

                                                                        <span class="help-block" >

                                                                        <strong>{{ $errors->first('password') }}</strong>

                                                                        </span>

                                                                    @endif

                                                                </div>

                                                                <div class="col-md-12 col-sm-12">

                                                                    <span class="fas fa-lock" style="margin-left: 10px;"></span>

                                                                    <input type="password" placeholder="Re-type Password"  name="password_confirmation">



                                                                    @if ($errors->has('password_confirmation'))

                                                                        <span class="help-block">

                                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>

                                                                        </span>

                                                                    @endif

                                                                </div>

                                                                

                                                                <div class="col-md-12 col-sm-12">

                                                                    <select class="form-control" name="service_type" id="service_type">

                                                                        <option value="">Select Service</option>

                                                                        @foreach(get_all_service_types() as $type)

                                                                            <option value="{{$type->id}}">{{$type->name}}</option>

                                                                        @endforeach

                                                                    </select>



                                                                    @if ($errors->has('service_type'))

                                                                        <span class="help-block">

                                                                            <strong>{{ $errors->first('service_type') }}</strong>

                                                                        </span>

                                                                    @endif

                                                                </div>



                                                                <div class="col-md-12 col-sm-12" style="margin-top: 15px;">

                                                                   <input id="service-model" type="text"  name="service_model" value="{{ old('service_model') }}" placeholder="Car Model">

                                                                    @if ($errors->has('service_model'))

                                                                        <span class="help-block">

                                                                            <strong>{{ $errors->first('service_model') }}</strong>

                                                                        </span>

                                                                    @endif

                                                                </div>

                                                               

                                                                <div class="col-md-12 col-sm-12">

                                                                    <input id="service-number" type="text"  name="service_number" value="{{ old('service_number') }}" placeholder="Car Number">

                                                                    @if ($errors->has('service_number'))

                                                                        <span class="help-block">

                                                                            <strong>{{ $errors->first('service_number') }}</strong>

                                                                        </span>

                                                                    @endif

                                                                </div>



                                                                <label for="terms"  style="margin-left: 20px;">

                                                                    <input type="checkbox" name="terms" id="terms">

                                                                    I accept terms & conditions

                                                                </label>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <button type="submit" class="reg-btn">Signup <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>

                                                    <!-- <button type="hidden" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button> -->

                                                    <!-- <button type="hidden" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button> -->

                                        </form>

                                    </div>

								</div>

								<!--Register Tabs Content End-->

							</div>

							<!--Tabs Content End-->

						</div>

					</div>

				</div>

            </section>

			<!--Login Section End-->	

			

		

		<!--Footer Content Start-->

		<section class="tj-footer">

			<div class="container">

				<div class="row">

					<div class="col-md-4 text-center">

						<div class="about-widget widget">

							<h3>About {{Setting::get('site_title', '')}}</h3>

							<p>{{Setting::get('f_text27', '')}}</p>

							<ul class="fsocial-links">

								<li><a href="{{Setting::get('f_f_link', '')}}"><i class="fab fa-facebook-f"></i></a></li>

								<li><a href="{{Setting::get('f_t_link', '')}}"><i class="fab fa-twitter"></i></a></li>

								<li><a href="{{Setting::get('f_l_link', '')}}"><i class="fab fa-linkedin-in"></i></a></li>

								<li><a href="{{Setting::get('f_i_link', '')}}"><i class="fab fa-instagram"></i></a></li>

							</ul>

						</div>

					</div>

					<div class="col-md-4 text-center">

						<div class="links-widget widget">

							<h3>Explore Links</h3>

							<ul class="flinks-list">

								<li><a href="contact">Contact Us</a></li>

								<li><a href="privacy">Privacy Policy</a></li>

								<li><a href="terms">Terms & Condition</a></li>

							</ul>

						</div>

					</div>

					<div class="col-md-4 text-center">

						<div class="contact-info widget">

							<h3>Contact Info</h3>

							<ul class="contact-box">

								<li>

									<i class="fas fa-home" aria-hidden="true"></i>   {{Setting::get('contact_address', '')}}

								</li>

								<li>

									<i class="far fa-envelope-open"></i>

									<a href="mailto:primecab@booking.com">

									{{Setting::get('contact_email', '')}}</a>

								</li>

								<li>

									<i class="fas fa-phone-square"></i>

									{{Setting::get('contact_number', '')}}

								</li>

								<li>

									<i class="fas fa-globe-asia"></i>

									<a href="www.primecab.com">{{Setting::get('site_link', '')}}</a>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</section>

		<!--Footer Content End-->

		<!--Footer Copyright Start-->

		<section class="tj-copyright">

			<div class="container">

				<div class="row">

					<div class="col-md-6 col-sm-6">

						<p>{{Setting::get('site_copyright', '')}}</p>

					</div>

					<div class="col-md-6 col-sm-6">

						<ul class="payment-icons">

							<li><i class="fab fa-cc-visa"></i></li>

							<li><i class="fab fa-cc-mastercard"></i></li>

							<li><i class="fab fa-cc-paypal"></i></li>

							<li><i class="fab fa-cc-discover"></i></li>

							<li><i class="fab fa-cc-jcb"></i></li>

						</ul>

					</div>

				</div>

			</div>

		</section>

		<!--Footer Copyright End-->

	</div>

	<!--Wrapper Content End-->

	

	<!-- Js Files Start --> 

	<script src="../mainindex/js/jquery-1.12.5.min.js"></script>

	<script src="../mainindex/js/bootstrap.min.js"></script> 

	<script src="../mainindex/js/migrate.js"></script>  

	<script src="../mainindex/js/owl.carousel.min.js"></script>	

	<script src="../mainindex/js/color-switcher.js"></script>	

	<script src="../mainindex/js/jquery.counterup.min.js"></script>	

	<script src="../mainindex/js/waypoints.min.js"></script>

	<script src="../mainindex/js/tweetie.js"></script>

	<script src="../mainindex/js/custom.js"></script>

	<!-- Js Files End --> 

</body>



