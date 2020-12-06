@extends('layouts.website.main')
@section('main-title')
Taste the Difference
@endsection
@section('content')
<section class="page-banner" style="background: url({{ asset('images/home-slider/slider-3.jpg') }});">
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
<section>
	<div class="container contact_us_container text-center">
		<div class="row">
			<div class="col-md-4">
				<h1>Phone</h1>
			</div>
			<div class="col-md-4">
				<h1>Email</h1>
			</div>
			<div class="col-md-4">
				<h1>Location</h1>
			</div>
		</div>
	</div>
</section>
@endsection