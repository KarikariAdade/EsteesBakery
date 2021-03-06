@extends('layouts.website.main')
@section('main-title')
Our Cakes
@endsection
@section('content')
    <section class="page-banner" style="background: url({{ asset('images/home-slider/slider-2.jpg') }});">
        <div class="banner-content">
            <h1>Our Cakes</h1>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Our Cakes</a>
                </li>
            </ul>
        </div>
    </section>
    <!--================Product Area =================-->
    <section class="product_area pt-5">
     <div class="container">
      <div class="row product_inner_row">
       <div class="col-lg-9">
        <div class="row m0 product_task_bar"> 
           <div class="product_task_inner"> 
            <div class="float-left">
             <a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
             <a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
             <span>Showing 1 - 10 of 55 results</span>
         </div>
         <div class="float-right">
             <h4>Sort by :</h4>
             <select class="short">
              <option data-display="Default">Default</option>
              <option value="1">Default</option>
              <option value="2">Default</option>
              <option value="4">Default</option>
          </select>
      </div>
  </div>
</div>
<div class="row product_item_inner">
 <div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-6">
  <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/cakes/5.jpg') }}" class="img-fluid" alt="">
  </div>
  <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
</div>
<div class="product_pagination mb-5">
 <div class="left_btn">
  <a href="#"><i class="lnr lnr-arrow-left"></i> New posts</a>
</div>
<div class="middle_list">
    <nav aria-label="Page navigation example">
     <ul class="pagination">
         <li class="page-item"><a class="page-link" href="#">1</a></li>
         <li class="page-item active"><a class="page-link" href="#">2</a></li>
         <li class="page-item"><a class="page-link" href="#">3</a></li>
         <li class="page-item"><a class="page-link" href="#">...</a></li>
         <li class="page-item"><a class="page-link" href="#">12</a></li>
     </ul>
 </nav>
</div>
<div class="right_btn"><a href="#">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
</div>
</div>
<div class="col-lg-3">
    <div class="product_left_sidebar">
     <aside class="left_sidebar search_widget">
      <div class="input-group">
         <input type="text" class="form-control" placeholder="Enter Search Keywords">
         <div class="input-group-append">
          <button class="btn" type="button"><i class="icon icon-Search"></i></button>
      </div>
  </div>
</aside>
<aside class="left_sidebar p_catgories_widget">
  <div class="p_w_title">
   <h3>Product Categories</h3>
</div>
<ul class="list_style">
   <li><a href="#">Cupcake (17)</a></li>
   <li><a href="#">Chocolate (15)</a></li>
   <li><a href="#">Celebration (14)</a></li>
   <li><a href="#">Wedding Cake (8)</a></li>
   <li><a href="#">Desserts (11)</a></li>
</ul>
</aside>
<aside class="left_sidebar p_sale_widget">
  <div class="p_w_title">
   <h3>Top Sale Products</h3>
</div>
<div class="media">
   <div class="" style="display: inline-flex;">
    <img src="images/cakes/5.jpg" style="width: 40px; height: 40px;" alt="">
</div>
<div class="media-body">
    <a href="#"><h4>Brown Cake</h4></a>
    <ul class="list_style">
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
 </ul>
 <h5>$29</h5>
</div>
</div>
<div class="media">
   <div class="d-flex">
    <img src="img/product/sale-product/s-product-2.jpg" alt="">
</div>
<div class="media-body">
    <a href="#"><h4>Brown Cake</h4></a>
    <ul class="list_style">
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
 </ul>
 <h5>$29</h5>
</div>
</div>
<div class="media">
   <div class="d-flex">
    <img src="img/product/sale-product/s-product-3.jpg" alt="">
</div>
<div class="media-body">
    <a href="#"><h4>Brown Cake</h4></a>
    <ul class="list_style">
      <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
 </ul>
 <h5>$29</h5>
</div>
</div>
<div class="media">
   <div class="d-flex">
    <img src="img/product/sale-product/s-product-4.jpg" alt="">
</div>
<div class="media-body">
    <a href="#"><h4>Brown Cake</h4></a>
    <ul class="list_style">
      <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
     <li><a href="#"><i class="fa fa-star"></i></a></li>
 </ul>
 <h5>$29</h5>
</div>
</div>
</aside>
</div>
</div>
</div>
</div>
</section>
@endsection