@extends('layouts.website.main')
@section('main-title')
About Us
@endsection
@section('content')
	<section class="page-banner" style="background: url({{ asset('images/home-slider/slider-2.jpg') }});">
		<div class="banner-content">
			<h1>About Us</h1>
			<ul>
				<li>
					<a href="">Home</a>
				</li>
				<li>
					<a href="">About Us</a>
				</li>
			</ul>
		</div>
	</section>
	<section class="about-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-8 col-xs-8 abouttextp wow fadeIn" data-wow-duration="3s">
					<h1>About Estees Bakery</h1>
					<p id="aboutTextParagraph1">Efficiently syndicate cross functional web-readiness before business niches. Uniquely reinvent ethical testing procedures before ethical leadership skills
					</p>
					<p id="aboutTextParagraph2">Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.
					</p>
				</div>
				<div class="col-md-6 col-sm-8 col-xs-8 about-intro-images" style="position: relative;">
					<div class="aboutImg1">
						<img class="img-fluid aboutImage1" src="{{ asset('images/cakes/1.jpg') }}">
					</div>
					<div class="aboutImg2">
						<img class="img-fluid aboutImage2" src="{{ asset('images/cakes/2.jpg') }}">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="what_we_make_section">
		<div class="container">
			<h1 align="center" class="h1-size">What We Make</h1>
			<div class="row">
				<div class="col-md-4">
					<figure>
						<img src="images/cakes/1.jpg" class="img-fluid">
						<h4>Meat Turnover</h4>
					</figure>
				</div>
				<div class="col-md-4">
					<figure>
						<img src="images/cakes/1.jpg" class="img-fluid">
						<h4>Meat Turnover</h4>
					</figure>
				</div>
				<div class="col-md-4">
					<figure>
						<img src="images/cakes/1.jpg" class="img-fluid">
						<h4>Meat Turnover</h4>
					</figure>
				</div>
				<div class="col-md-4">
					<figure>
						<img src="images/cakes/1.jpg" class="img-fluid">
						<h4>Meat Turnover</h4>
					</figure>
				</div>
				<div class="col-md-4">
					<figure>
						<img src="images/cakes/1.jpg" class="img-fluid">
						<h4>Meat Turnover</h4>
					</figure>
				</div>
				<div class="col-md-4">
					<figure>
						<img src="images/cakes/1.jpg" class="img-fluid">
						<h4>Meat Turnover</h4>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section class="about-contact-section">
		<div class="container">
			<div class="row">
			<div class="col-md-8">
				<h3>Do You want to Contact Us? Then Don't Hesitate!</h3>
			</div>
			<div class="col-md-4">
				<a class="btn pest_btn" href="">Contact Us</a>
			</div>
		</div>
	</section>
	@endsection