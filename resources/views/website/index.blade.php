@extends('layouts.website.main')
@section('main-title')
Taste the Difference
@endsection
@section('content')
@include('layouts.website.slider')
	<div class="" style="position: relative; background: #000;" >
   <div class="home-intro">
    <div class="container">
      <div class="row">
       <div class="col-md-6">
        <h1 class="default-color">Welcome to Our Bakery</h1>
        <h5>"Efficiently syndicate cross functional web-readiness before business niches. Uniquely reinvent ethical testing procedures before ethical leadership skills"</h5>
        <p class="s-18 pt-2">
         Efficiently syndicate cross functional web-readiness before business niches. Uniquely reinvent ethical testing procedures before ethical leadership skills
         Efficiently syndicate cross functional web-readiness before business niches. Uniquely reinvent ethical testing procedures before ethical leadership skills
       </p>
     </div>
     <div class="col-md-6 special-image">
      <img src="{{ asset('images/special-1.png') }}" class="img-fluid">
    </div>
  </div>
</div>
<!--================Welcome Area =================-->
<section class="welcome_bakery_area cake_feature_main p_100">
 <div class="container">
  <div class="main_title">
   <h2 class="pb-4 default-color">Our Featured Cakes</h2>
 </div>
 <div class="cake_feature_slider owl-carousel owl-theme">
   <div class="feature_item">
    <div class="cake_feature_item">
     <div class="cake_img">
      <img src="{{ asset('images/special-1.png') }}" alt="">
    </div>
    <div class="cake_text">
      <h4>$29</h4>
      <h3>Strawberry Cupcakes</h3>
      <a class="pest_btn" href="#">Add to cart</a>
    </div>
  </div>
</div>
<div class="feature_item">
  <div class="cake_feature_item">
   <div class="cake_img">
    <img src="{{ asset('images/special-1.png') }}" alt="">
  </div>
  <div class="cake_text">
    <h4>&cent 29</h4>
    <h3>Strawberry Cupcakes</h3>
    <a class="pest_btn" href="#">Add to cart</a>
  </div>
</div>
</div>
</div>
</div>
</section>
<!--================End Welcome Area =================-->
</div>
</div>
<section class="service_we_offer_area gray_service white_bg p_100">
 <div class="container">
  <div class="header-title text-center pt-5 pb-5">
   <h1 class="default-color">Services We Offer</h1>
 </div>
 <div class="row we_offer_inner">
   <div class="col-lg-4">
    <div class="s_we_item gray_s_item">
     <div class="media">
      <div class="d-flex">
       <i class="flaticon-food-6"></i>
     </div>
     <div class="media-body">
       <a href="#"><h4>Cookies Cakes</h4></a>
       <p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
     </div>
   </div>
 </div>
</div>
<div class="col-lg-4">
  <div class="s_we_item gray_s_item">
   <div class="media">
    <div class="d-flex">
     <i class="flaticon-food-5"></i>
   </div>
   <div class="media-body">
     <a href="#"><h4>Tasty Cupcakes</h4></a>
     <p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
   </div>
 </div>
</div>
</div>
<div class="col-lg-4">
  <div class="s_we_item gray_s_item">
   <div class="media">
    <div class="d-flex">
     <i class="flaticon-food-3"></i>
   </div>
   <div class="media-body">
     <a href="#"><h4>Wedding Cakes</h4></a>
     <p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
   </div>
 </div>
</div>
</div>
<div class="col-lg-4">
  <div class="s_we_item gray_s_item">
   <div class="media">
    <div class="d-flex">
     <i class="flaticon-book"></i>
   </div>
   <div class="media-body">
     <a href="#"><h4>Awesome Recipes</h4></a>
     <p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
   </div>
 </div>
</div>
</div>
<div class="col-lg-4">
  <div class="s_we_item gray_s_item">
   <div class="media">
    <div class="d-flex">
     <i class="flaticon-food-4"></i>
   </div>
   <div class="media-body">
     <a href="#"><h4>Menu Planner</h4></a>
     <p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
   </div>
 </div>
</div>
</div>
<div class="col-lg-4">
  <div class="s_we_item gray_s_item">
   <div class="media">
    <div class="d-flex">
     <i class="flaticon-transport"></i>
   </div>
   <div class="media-body">
     <a href="#"><h4>Home Delivery</h4></a>
     <p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
   </div>
 </div>
</div>
</div>
</div>
</div>
</section>
<section class="special_recipe_area mt-5">
 <div class="container">
  <div class="special_recipe_slider owl-carousel">
   <div class="item">
    <div class="media d-flex">
     <div class="d-flex">
      <img src="{{ asset('images/special-1.png') }}" alt="">
    </div>
    <div class="media-body">
      <h4>Special Cupcakes</h4>
      <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
      <a class="pest_btn" href="#">View Details</a>
    </div>
  </div>
</div>
<div class="item">
  <div class="media d-flex">
   <div class="d-flex">
    <img src="{{ asset('images/special-1.png') }}" class="recipe-image" alt="">
  </div>
  <div class="media-body">
    <h4>Special Cupcakes</h4>
    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
    <a class="pest_btn" href="#">View Details</a>
  </div>
</div>
</div>
<div class="item">
  <div class="media d-flex">
   <div class="d-flex">
    <img src="{{ asset('images/special-1.png') }}" class="recipe-image" alt="">
  </div>
  <div class="media-body">
    <h4>Special Cupcakes</h4>
    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
    <a class="pest_btn" href="#">View Details</a>
  </div>
</div>
</div>
<div class="item">
  <div class="media d-flex">
   <div class="d-flex">
    <img src="{{ asset('images/special-1.png') }}" class="recipe-image" alt="">
  </div>
  <div class="media-body">
    <h4>Special Cupcakes</h4>
    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
    <a class="pest_btn" href="#">View Details</a>
  </div>
</div>
</div>
</div>
</div>
</section>
<section class="discover_menu_area">
  <div class="discover_menu_inner">
    <div class="container">
     <div class="header-title text-center pt-5 pb-5">
       <h1 class="f-bold default-color">What We Make</h1>
     </div>
     <div class="row">
      <div class="col-lg-6">
        <div class="discover_item_inner">
          <div class="discover_item">
            <h4>Double Chocolate Pie</h4>
            <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
          </div>
          <div class="discover_item">
            <h4>Double Chocolate Pie</h4>
            <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
          </div>
          <div class="discover_item">
            <h4>Double Chocolate Pie</h4>
            <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
          </div>
          <div class="discover_item">
            <h4>Double Chocolate Pie</h4>
            <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="discover_item_inner">
          <div class="discover_item">
            <h4>Double Chocolate Pie</h4>
            <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
          </div>
          <div class="discover_item">
            <h4>Double Chocolate Pie</h4>
            <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
          </div>
          <div class="discover_item">
            <h4>Double Chocolate Pie</h4>
            <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
          </div>
          <div class="discover_item">
            <h4>Double Chocolate Pie</h4>
            <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <a class="pest_btn" href="#">View Full Menu</a>
      </div>
    </div>
  </div>
</div>
</section>
<section class="client_says_area">
  <div class="container">
    <div class="client_says_inner">
      <div class="c_says_title">
        <h1 class="default-color">What Our Clients Say</h1>
      </div>
      <div class="client_says_slider owl-carousel">
        <div class="item">
          <div class="media row">
            <div class="d-flex col-lg-3">
              <img src="{{ asset('images/special-1.png') }}" alt="" style="width: 130px !important;height: 130px !important; border-radius: 50%;">
              <h3>“</h3>
            </div>
            <div class="media-body col-lg-7">
              <p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
              <h5>- Robert joe</h5>
            </div>
          </div>
        </div>
        <div class="item">
         <div class="media row">
          <div class="d-flex col-lg-3">
            <img src="{{ asset('images/special-1.png') }}" alt="" style="width: 130px !important;height: 130px !important; border-radius: 50%;">
            <h3>“</h3>
          </div>
          <div class="media-body col-lg-7">
            <p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
            <h5>- Robert joe</h5>
          </div>
        </div>
      </div>
      <div class="item">
       <div class="media row">
        <div class="d-flex col-lg-3">
          <img src="{{ asset('images/special-1.png') }}" alt="" style="width: 130px !important;height: 130px !important; border-radius: 50%;">
          <h3>“</h3>
        </div>
        <div class="media-body col-lg-7">
          <p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
          <h5>- Robert joe</h5>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection
@push('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('.cake_feature_slider').owlCarousel({
      loop:true,
      margin:20,
      center: false,
      nav:true,
      autoplay: true,
      smartSpeed: 1500,
      navContainerClass: 'client_says_slider',
      navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1000:{
          items:4
        }
      }
    });
  });
</script>
@endpush