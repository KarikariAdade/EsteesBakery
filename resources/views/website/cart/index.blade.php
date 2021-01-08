@extends('layouts.website.main')
@section('main-title')
Taste the Difference
@endsection
@section('content')
<section class="page-banner" style="background: url({{ asset('images/home-slider/slider-3.jpg') }});">
		<div class="banner-content">
			<h1>Shopping Cart</h1>
			<ul>
				<li>
					<a href="">Home</a>
				</li>
				<li>
					<a href="">Shopping Cart</a>
				</li>
			</ul>
		</div>
	</section>

@endsection