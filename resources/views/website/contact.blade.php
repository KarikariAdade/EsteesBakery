@extends('layouts.website.main')
@section('main-title')
About Us
@endsection
@section('content')
<section class="page-banner" style="background: url({{ asset('images/home-slider/slider-2.jpg') }});">
		<div class="banner-content">
			<h1>Contact Us</h1>
			<ul>
				<li>
					<a href="">Home</a>
				</li>
				<li>
					<a href="">Contact Us</a>
				</li>
			</ul>
		</div>
	</section>
	<!--================Contact Form Area =================-->
        <section class="contact_form_area">
        	<div class="container">
        		<div class="main_title">
					<h2>Get In Touch</h2>
					<h5>Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</h5>
				</div>
       			<div class="row">
       				<div class="col-lg-7">
       					<form class="row contact_us_form" action="" method="post" id="contactForm">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your name">
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email address">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Wrtie message"></textarea>
							</div>
							<div class="form-group col-md-4">
								<button type="submit" value="submit" class="btn form-control pest_btn">Send Message</button>
							</div>
						</form>
       				</div>
       				<div class="col-lg-4">
       					<div class="contact_details">
       						<div class="contact_d_item">
       							<h3>Address :</h3>
       							<p>54B, Tailstoi Town 5238 <br /> La city, IA 522364</p>
       						</div>
       						<div class="contact_d_item">
       							<h5>Phone : <a href="tel:01372466790">01372.466.790</a></h5>
       							<h5>Email : <a href="">info@esteesbakery.com</a></h5>
       						</div>
       						<div class="contact_d_item">
       							<h3>Opening Hours :</h3>
       							<p>8:00 AM – 10:00 PM</p>
       							<p>Monday – Sunday</p>
       						</div>
       					</div>
       				</div>
       			</div>
        	</div>
        </section>
@endsection