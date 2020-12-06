@extends('layouts.website.main')
@section('main-title')
Our Gallery
@endsection
@section('content')
    <section class="page-banner" style="background: url({{ asset('images/home-slider/slider-10.jpg') }});">
        <div class="banner-content">
            <h1>Our Gallery</h1>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Our Gallery</a>
                </li>
            </ul>
        </div>
    </section>

     <!--================Portfolio Area Area =================-->
        <section class="portfolio_area pt-5 pb-5">
            <div class="container">
                <div class="portfolio_filter">
                    <ul class="list_style">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        <li data-filter=".cake"><a href="#">Cakes</a></li>
                        <li data-filter=".bakery"><a href="#">Bakery</a></li>
                        <li data-filter=".past"><a href="#">Pastries</a></li>
                        <li data-filter=".choco"><a href="#">Chocolates</a></li>
                        <li data-filter=".bread"><a href="#">Breads</a></li>
                                                        
                    </ul>
                </div>
                <div class="row grid_portfolio_area imageGallery1">
                    <div class="col-md-4 col-6 cake bakery bread">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 bakery choco">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 cake choco">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 cake choco">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 bakery past bread">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 past choco">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 bakery bread">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 past bread">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 bakery past bread">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <a class="light" href="{{ asset('images/6.jpg') }}">
                                    <img class="img-fluid" src="{{ asset('images/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4>Chocolate Pastry</h4></a>
                            </div>
                        </div>
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