@extends('layout.base')

@section('content')

<section class="contact_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 map_area">
				<iframe class="actAsDiv" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83087.77843910031!2d72.54264778122969!3d23.023929255098253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1602238009154!5m2!1sen!2sin"></iframe>
				<div class="app_contact_info">
					<span class="triangle"></span>
					<div class="info_item">
						<i class="ti-location-pin"></i>
						<h6>Address:</h6>
						<p>{{Setting::get('contact_address', '')}}</p>
					</div>
					<div class="info_item">
						<i class="ti-mobile"></i>
						<h6>Phone:</h6>
						<p><a href="tel:{{Setting::get('contact_phone', '')}}">{{Setting::get('contact_number', '')}}</a></p>
					</div>
					<div class="info_item">
						<i class="ti-email"></i>
						<h6>Email:</h6>
						<p><a href="mailto:{{Setting::get('contact_phone', '')}}">{{Setting::get('contact_email', '')}}</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 p0">
				<div class="contact_info">
					<div class="section_title">
						<h5>HOW CAN WE HELP YOU?</h5>
						<h2>Have a Questions?</h2>
					</div>
					<form action="/contact-form.php" id="contact-form" class="contact_form" data-pickme="contact">
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
							<label class="border_line"></label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="email" name="email" placeholder="Your Email" required>
							<label class="border_line"></label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
							<label class="border_line"></label>
						</div>
						<div class="form-group">
							<textarea id="message" name="content" cols="30" rows="10" class="form-control" placeholder="Your Message" required></textarea>
							<label class="border_line"></label>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="slider_btn yellow_hover">Send Message</button>
						</div>


						<div class="form-result alert">
							<div class="content"></div>
						</div>
						<!-- /.form-result-->
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection