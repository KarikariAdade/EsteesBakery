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

	<!--================Cart Table Area =================-->
        <section class="cart_table_area">
        	<div class="container">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Preview</th>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/product/cart-img.jpg" alt="">
								</td>
								<td>Wheel Axel</td>
								<td>$25.00</td>
								<td>
									<select class="product_select">
										<option data-display="1">1</option>
										<option value="1">2</option>
										<option value="2">3</option> 
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>$25.00</td>
							</tr>
							<tr>
								<td colspan="1">
									<form class="form-inline"> 
										<div class="form-group"> 
											<input type="text" class="form-control" placeholder="Coupon code">
										</div>
								</td>
								<td colspan="1">
									<button type="submit" class="pest_btn">Apply Coupon</button>
								</td>
								<td colspan="3"></td>
								</form>
							</tr>
						</tbody>
					</table>
				</div>
       			<div class="row cart_total_inner">
        			<div class="col-lg-7"></div>
        			<div class="col-lg-5">
        				<div class="cart_total_text">
        					<div class="cart_head">
        						Cart Total
        					</div>
        					<div class="sub_total">
        						<h5>Sub Total <span>$25.00</span></h5>
        					</div>
        					<div class="total">
        						<h4>Total <span>$25.00</span></h4>
        					</div>
        					<div class="cart_footer">
        						<a class="pest_btn" href="#">Proceed to Checkout</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>


         <section class="similar_product_area">
        	<div class="container">
        		<div class="main_title">
        			<h2 class="default-color">Our Featured Cakes</h2>
        		</div>
        		<div class="row similar_product_inner">
        			<div class="col-lg-3 col-md-4">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="{{ asset('images/special-1.png') }}" alt="">
							</div>
							<div class="cake_text">
								<h4>&cent29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-md-4">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="{{ asset('images/special-1.png') }}" alt="">
							</div>
							<div class="cake_text">
								<h4>&cent29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-md-4">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="{{ asset('images/special-1.png') }}" alt="">
							</div>
							<div class="cake_text">
								<h4>&cent29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-md-4">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="{{ asset('images/special-1.png') }}" alt="">
							</div>
							<div class="cake_text">
								<h4>&cent29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
        			</div>
        		</div>
        	</div>
        </section>

@endsection