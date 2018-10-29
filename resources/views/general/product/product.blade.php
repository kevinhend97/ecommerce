@extends('general.welcome')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('onlineShopTemplate/styles/product.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('onlineShopTemplate/styles/product_responsive.css') }}">
@stop
@section('content')
	<!-- Home -->
	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(../images/categories.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Smart Phones<span>.</span></div>
								<div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="{{ asset('images/product/'.$product->slug.'.jpg') }}" alt=""><div class="product_extra product_new"><a href="{{ route('shop.index') }}">New</a></div></div>
						<div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
							<div class="details_image_thumbnail active" data-image="{{ asset('images/details_1.jpg') }}"><img src=" {{ asset('images/details_1.jpg') }} " alt=""></div>
							<div class="details_image_thumbnail" data-image=" {{ asset('images/details_2.jpg') }}"><img src="{{ asset('images/details_2.jpg') }}" alt=""></div>
							<div class="details_image_thumbnail" data-image="{{ asset('images/details_3.jpg') }}"><img src="{{ asset('images/details_3.jpg') }}" alt=""></div>
							<div class="details_image_thumbnail" data-image="{{ asset('images/details_4.jpg') }}"><img src="{{ asset('images/details_4.jpg') }}" alt=""></div>
						</div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name">{{ $product->name }}</div>
						{{-- <div class="details_discount">IDR 0 </div> --}}
						<div class="details_price">IDR {{ $product->presentPrice() }}</div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>{{ $product->details }}</p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<form action="{{ route('cart.store') }}" method="post">
								{{ csrf_field() }}
								<div class="product_quantity clearfix">
									<span>Qty</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="1" name="qty">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
								<input type="hidden" value="{{ $product->id }}" name="id">
								<input type="hidden" value="{{ $product->name }}" name="name">
								<input type="hidden" value="{{ $product->price }}" name="price">
								<div class="button cart_button"><a href="#"><button style="background-color: white; border-color: white; border-right: none;" type="submit">Add to cart</button></a></div>
							</form>
						</div>

						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
						<div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
					</div>
					<div class="description_text">
						<p>{{ $product->description }} </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="products_title">Related Products</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">
						@foreach($relatedProducts as $data )
							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="{{ asset('images/product/'.$data->slug.'.jpg') }}" alt="" height="180"></div>
								<div class="product_extra product_new"><a href="#">New</a></div>
								<div class="product_content">
									<div class="product_title"><a href="{{ route('shop.show', $data->slug) }}">{{ $data->name }}</a></div>
									<div class="product_price">IDR {{ $data->presentPrice() }}</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
@section('script')
	<script type="text/javascript" src="{{ asset('onlineShopTemplate/js/product.js') }}"></script>
@stop