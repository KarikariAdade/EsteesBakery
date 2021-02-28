<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Estees Bakery - @yield('main-title')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
	<!-- Rev slider css -->
	<link href="{{ asset('js/revolution/css/settings.css') }}" rel="stylesheet">
	<link href="{{ asset('js/revolution/css/layers.css') }}" rel="stylesheet">
	<link href="{{ asset('js/revolution/css/navigation.css') }}" rel="stylesheet">
	<!-- <link href="js/animate-css/animate.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
	<link href="{{ asset('js/magnifc-popup/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('js/lightbox/simpleLightbox.css') }}" rel="stylesheet">
	<style type="text/css">
		.page-bottom{
			display: none;
		}
	</style>
</head>
<body>
	<div id="preloader"></div>
	<!--================Main Header Area =================-->
	<header class="main_header_area">
		<div class="top_header_area row m0">
			<div class="container">
				<div class="float-left">
					<a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> +233548876922</a>
					<a href=""><i class="fa fa-envelope" aria-hidden="true"></i> info@esteesbakery.com</a>
				</div>
				<div class="float-right">
					<ul class="h_social list_style">
						<li><a href="#"><i class="fab fa-facebook"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>
					<ul class="h_search list_style">
						<li class="shop_cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu_two">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.html"><img src="img/logo-2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="my_toggle_menu">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav justify-content-end">
							<li><a href="{{ route('website.home') }}">Home</a></li>
							<li><a href="{{ route('website.about') }}">About Us</a></li>
							<li class="dropdown submenu">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pastries</a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('website.pastries') }}">Chips</a></li>
								<li><a href="{{ route('website.pastries') }}">Pie</a></li>
								<li><a href="{{ route('website.pastries') }}">Category 3</a></li>
							</ul>
						</li>
							<li><a href="{{ route('website.pizza') }}">Pizza</a></li>
							{{-- <li><a href="{{ route('website.cakes') }}">Cakes</a></li> --}}
							<li class="dropdown submenu">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cakes</a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('website.cakes') }}">Birthday Cakes</a></li>
								<li><a href="{{ route('website.cakes') }}">Wedding Cakes</a></li>
								<li><a href="{{ route('website.cakes') }}">Cupcakes</a></li>
							</ul>
						</li>

						<li><a href="{{ route('website.gallery') }}">Gallery</a></li>
						<li><a href="{{ route('website.contact') }}">Contact Us</a></li>

						<li class="dropdown submenu">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                            @if(!auth('member')->id())
                            <ul class="dropdown-menu">
								<li><a href="{{ route('member_login') }}">Login</a></li>
								<li><a href="{{ route('signup') }}">Sign Up</a></li>
							</ul>
                            @else
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('client.dashboard') }}">Dashboard</a></li>
                                <li>
                                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                                @endif
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!--================End Main Header Area =================-->

@yield('content')

<section style="position: relative;">
	<div class="page-bottom"></div>
</section>
<footer class="footer_area">
	<div class="footer_widgets">
		<div class="container">
			<div class="row footer_wd_inner">
				<div class="col-lg-3 col-6">
					<aside class="f_widget f_about_widget">
						<img src="img/footer-logo.png" alt="">
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
						<ul class="nav">
							<li><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-6">
					<aside class="f_widget f_link_widget">
						<div class="f_title">
							<h3>Quick links</h3>
						</div>
						<ul class="list_style">
							<li><a href="#">Your Account</a></li>
							<li><a href="#">View Order</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms &amp; Conditionis</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-6">
					<aside class="f_widget f_link_widget">
						<div class="f_title">
							<h3>Work Times</h3>
						</div>
						<ul class="list_style">
							<li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
							<li><a href="#">Sat. : 9am - 4pm</a></li>
							<li><a href="#">Sun. : Closed</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-6">
					<aside class="f_widget f_contact_widget">
						<div class="f_title">
							<h3>Contact Info</h3>
						</div>
						<h4>(+233) 548 876 922</h4>
						<p>Estees Bakery <br> Plot 235, Block K, Agona, Ashanti</p>
						<h5>cakebakery@contact.co.in</h5>
					</aside>
				</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/all.min.js') }}"></script>
<script src="{{ asset('js/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('js/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('js/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/isotope/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/magnifc-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/lightbox/simpleLightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@stack('script')
</body>
</html>
