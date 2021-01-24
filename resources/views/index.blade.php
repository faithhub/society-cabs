@extends('layout.base')
@section('content')
<section class="slider_area d-flex align-items-center">
	<div class="ovarlay"></div>
	<div class="background_slider slick">
		<div class="bg_img" style="background: url(mainindex/img/slider/slider1.jpg) center center / cover no-repeat scroll;"></div>
		<div class="bg_img" style="background: url(mainindex/img/slider/slider2.jpg) center center / cover no-repeat scroll;"></div>
		<div class="bg_img" style="background: url(mainindex/img/slider/slider3.jpg) center center / cover no-repeat scroll;"></div>
	</div>
	<div class="container">
		<div class="slider_text text-center">
			<h1>{{Setting::get('site_title', '')}} <br>Move Beyond Your Choice</h1>
			<a href="#" class="btn slider_btn yellow_hover">Ride Now</a>
		</div>
	</div>
</section>
<section class="booking_form_area bg_one">
	<div class="container">
		<div class="booking_slider slick">
			<div class="booking_form_info">
				<div class="tab_img">
					<div class="b_overlay_bg"></div>
					<img src="mainindex/img/slider/booking_car.png" alt="">
				</div>
				<div class="boking_content">
					<h2>Booking Taxi Online</h2>
					<form action="booking-form.php" class="row booking_form" data-pickme="contact-froms">
						<div class="col-md-12">
							<div class="form-group choose_item">
								<label>
									<input type="radio" value="Economy" name="radio_group" checked>
									<span>Economy</span>
								</label>
								<label>
									<input type="radio" value="Luxury" name="radio_group">
									<span>Luxury</span>
								</label>
								<label>
									<input type="radio" value="Extra Seat" name="radio_group">
									<span>Extra Seat</span>
								</label>
								<label>
									<input type="radio" value="Outstation" name="radio_group">
									<span>Outstation</span>
								</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="&#xe08a  Your Name">
								<label class="border_line"></label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="number" class="form-control" name="phone" placeholder="&#xe090  Phone">
								<label class="border_line"></label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="sdestination" placeholder="&#xe01d  Start Destination">
								<label class="border_line"></label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="edestination" placeholder="&#xe01d  End Destination">
								<label class="border_line"></label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control date-input-css" name="date" placeholder="&#xe06b Date">
								<label class="border_line"></label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="type" placeholder="&#xe0db;  Car Type">
								<label class="border_line"></label>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<button type="submit" name="submit" class="btn slider_btn dark_hover">Request Now !</button>
							</div>

							<div class="form-result alert">
								<div class="content"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="featured_area bg_one">
	<div class="container">
		<div class="section_title text-center">
			<h5>What we Offer</h5>
			<h2>We’re a Company of Talented</h2>
		</div>
		<div class="row featured_info slick">
			<div class="col-lg-12">
				<div class="featured_item">
					<i class="flaticon-map icon"></i>
					<h3>Fast & Easy Transport</h3>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="featured_item">
					<i class="flaticon-hotel icon"></i>
					<h3>Move Anywhere You Want</h3>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="featured_item">
					<i class="flaticon-hotel icon"></i>
					<h3>Rapid City Transfer</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="get_app_area sec_pad">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="get_app_content">
					<div class="section_title">
						<h5>Search {{Setting::get('site_title', '')}} App</h5>
						<h2>Get {{Setting::get('site_title', '')}} APP Now</h2>
					</div>
					<ul>
						<li>Quick & Easy Booking</li>
						<li>24/7 Service Available</li>
						<li>Reliable GPS Enabled</li>
						<li>Cost Effective</li>
					</ul>
					<a href="{{Setting::get('f_u_url', '')}}" class="app_btn slider_btn"><img src="mainindex/img/icon/play-store.png" alt="">Google Play</a>
					<a href="{{Setting::get('f_ui_url', '')}}" class="app_btn_two slider_btn"><img src="mainindex/img/icon/apple-store.png" alt="">App Store</a>
				</div>
			</div>
			<div class="col-lg-5 app_image">
				<div class="image_first">
					<img src="mainindex/img/phone_one.png" alt="">
					<div class="shadow_bottom"></div>
				</div>
				<div class="image_two">
					<img src="mainindex/img/phone_two.png" alt="">
					<div class="shadow_bottom"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="advantage_area bg_one">
	<div class="container">
		<div class="section_title text-center">
			<h5>Main Features</h5>
			<h2>Our Advantages</h2>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="advantage_item">
					<i class="flaticon-gear"></i>
					<h3>100% Pleasure</h3>
					<p>Get 100% Pleasure in your ride without any hesitions</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="advantage_item">
					<i class="flaticon-travel"></i>
					<h3>Lots of locations</h3>
					<p>Available almost everywhere in your city, Explore now</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="advantage_item">
					<i class="flaticon-car"></i>
					<h3>Luxury Cars</h3>
					<p>Get Luxury cars for ride as per your demands</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="advantage_item">
					<i class="flaticon-bag"></i>
					<h3>Additional Services</h3>
					<p>Get additional services as you need to travel</p>
				</div>
			</div>
		</div>
		<div class="car_img">
			<img class="car_one wow caranimationTwo" data-wow-delay="0.3s" src="mainindex/img/car/car_01.png" alt="">
			<img class="car_two wow caranimationOne" data-wow-delay="1s" src="mainindex/img/car/car_02.png" alt="">
		</div>
	</div>
</section>
<section class="call_action_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="action_img">
					<div class="overlay_bg"></div>
					<img src="mainindex/img/action_img.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-5 d-flex align-items-center">
				<div class="action_content">
					<h3>Call us to Book a Taxi</h3>
					<a href="tel:{{Setting::get('contact_number', '')}}" class="call_btn">{{Setting::get('contact_number', '')}}</a>
					<p>The operator will call back immediately and report the cost of travel</p>
					<a href="contact" class="slider_btn dark_hover">Discover <i class="icon_plus"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
