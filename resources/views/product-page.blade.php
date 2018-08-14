<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	<div class="container products-page">
		<span class="page-overlay"></span>

		@include('layouts.head_product')

		<div class="content block">
			<div class="block breadcrumbs mob-only">
				<h1>Women</h1>
				<div class="category-overlay">
					<ul class="category">
						<li>
							<a href="javascript:;" class="active">woman</a>
						</li>
						<li>
							<a href="javascript:;">man</a>
						</li>
						<li>
							<a href="javascript:;">kids</a>
						</li>
						<li class="btn-close js-close-category">
							<a href="javascript:;">
								<i class="icon font-ico-close"></i>
							</a>
						</li>
					</ul>
					<ul class="sub-category">
						<li class="selected">
							<a href="javascript:;">Sweat-shirt</a>
						</li>
						<li>
							<span>Lorem ipsum</span>
						</li>
						<a href="javascript:;" class="category-toggle js-category-toggle"></a>
					</ul>
				</div>
				<div class="filter-sort">
					<i class="icon font-ico-sort"></i>
					<select name="" id="">
						<option value="">Sort by Suggestions</option>
						<option value="">lorem</option>
						<option value="">ipsum</option>
						<option value="">dolor</option>
					</select>
				</div>
			</div>

			<div class="block product-page-shop">
				<a class="back-link" href="product-overvirew.html"><i class="icon font-ico-arrow-left"></i> Back to products</a>
				<div class="product-image">
					<div class="product-thumbnails">
						<div class="thumb selected">
							<a href="assets/img/content/product-page-img-big-1.jpg">
								<img src="assets/img/content/product-thumbnail-1.jpg" alt="">
							</a>
							<span class="thumb-size">thumb size <span>70X86</span></span>
						</div>
						<div class="thumb">
							<a href="assets/img/content/product-page-img-big-back1.jpg">
								<img src="assets/img/content/product-thumbnail-back1.jpg" alt="">
							</a>
							<span class="thumb-size">thumb size <span>70X86</span></span>
						</div>
						<div class="thumb">
							<a href="assets/img/content/product-page-img-big-2.jpg">
								<img src="assets/img/content/product-thumbnail-1.jpg" alt="">
							</a>
							<span class="thumb-size">thumb size <span>70X86</span></span>
						</div>
						<div class="thumb">
							<a href="assets/img/content/product-page-img-big-3.jpg">
								<img src="assets/img/content/product-thumbnail-back1.jpg" alt="">
							</a>
							<span class="thumb-size">thumb size <span>70X86</span></span>
						</div>
					</div>
					<div class="img-wrap">
						<img class="full-width" src="assets/img/content/product-page-img-big-1.jpg" alt="">
						<span class="img-ratio">
							<span>image size <span>690x862</span></span>
							<span>Ratio <span>800x1000</span></span>
						</span>
					</div>
				</div>
				<div class="product-details">
					<div class="block">
						<h1 class="product-name">{{ $product->product_name }}</h1>
						<span class="product-price">{{$product->price}},<sup>00&euro;</sup></span>
						<div class="product-description">
							<div class="tabbed">
								<ul class="tabs clearfix">
									<li class="active">
										<span class="tab-head">Description</span>
									</li>
									<li>
										<span class="tab-head">Composition</span>
									</li>
									<li>
										<span class="tab-head">Artist</span>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab active">
										<p>{{ $product->description}} </p>
									</div>
									<div class="tab">
										<p>{{ $product->composition }}</p>
									</div>
									<div class="tab">
										<p>{{ $product->artist }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block product-colors">
						<span class="selected-color">Selected color: <span class="color-name">orange</span></span>
						<ul class="clearfix">
							<li class="selected">
								<a href="javascript:;" data-color="orange">
									<img src="{{URL::asset('img/content/product-colors/color-orange.png') }}" alt="">
								</a>
							</li>
							<li class="disabled">
								<a href="javascript:;" data-color="brown light">
									<img src="{{ URL::asset('img/content/product-colors//color-brown-light.png') }}" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="grey smoke">
									<img src="{{ URL::asset('img/content/product-colors//color-grey-smoke.png') }}" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="white smoke">
									<img src="{{URL::asset('img/content/product-colors//color-white-smoke.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="green blue">
									<img src="{{URL::asset('img/content/product-colors//color-green-blue.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark blue">
									<img src="{{URL::asset('img/content/product-colors//color-dark-blue.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark grey">
									<img src="{{URL::asset('img/content/product-colors//color-dark-grey.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="light blue">
									<img src="{{URL::asset('img/content/product-colors//color-light-blue.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="gravel">
									<img src="{{URL::asset('img/content/product-colors//color-gravel.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="gravel dark">
									<img src="{{URL::asset('img/content/product-colors//color-gravel-dark.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark wood">
									<img src="{{URL::asset('img/content/product-colors//color-dark-wood.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="wood">
									<img src="{{URL::asset('img/content/product-colors//color-wood.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="red">
									<img src="{{URL::asset('img/content/product-colors//color-red.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="blood red">
									<img src="{{URL::asset('img/content/product-colors//color-blood-red.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark red">
									<img src="{{URL::asset('img/content/product-colors//color-dark-red.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="brushed metal">
									<img src="{{URL::asset('img/content/product-colors//color-brushed-metal.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="mineral blue">
									<img src="{{URL::asset('img/content/product-colors//color-mineral-blue.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="sky blue">
									<img src="{{URL::asset('img/content/product-colors//color-sky-blue.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="sea blue">
									<img src="{{URL::asset('img/content/product-colors//color-sea-blue.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="blue">
									<img src="{{URL::asset('img/content/product-colors//color-blue.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="blue medium">
									<img src="{{URL::asset('img/content/product-colors//color-blue-medium.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="teal">
									<img src="{{URL::asset('img/content/product-colors//color-teal.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="darker wood">
									<img src="{{URL::asset('img/content/product-colors//color-darker-wood.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="olive">
									<img src="{{URL::asset('img/content/product-colors//color-olive.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark green">
									<img src="{{URL::asset('img/content/product-colors//color-dark-green.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dirt">
									<img src="{{URL::asset('img/content/product-colors//color-dirt.png') }} " alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="pink">
									<img src="{{URL::asset('img/content/product-colors//color-pink.png') }} " alt="">
								</a>
							</li>
						</ul>
					</div>
					<div class="block product-sizes">
						<ul>
							<li class="disabled"><a href="javascript:;">xs</a></li>
							<li><a href="javascript:;">s</a></li>
							<li class="selected"><a href="javascript:;">m</a></li>
							<li><a href="javascript:;">l</a></li>
							<li><a href="javascript:;">xl</a></li>
							<li><a href="javascript:;">xxl</a></li>
						</ul>
						<a class="size-guide-link" href="javascript:;">Size guide</a>
						<p>The model is 167cm for 54kg and is wearing a size M.</p>
					</div>
					<div class="block product-basket">
						<a class="btn btn-black btn-big add-to-cart" href="javascript:;">Add to bag</a>
						<div class="right">
							<p>Is your size or color out of stock?</p>
							<a href="javascript:;" class="link">Get notified when it’s back</a>
						</div>
					</div>
				</div>
			</div>

			<div class="product-sticky-header">
				<div class="flex-block">
					<div class="thumb">
						<img src="assets/img/content/sticky-product.jpg" alt="">
					</div>
					<h6 class="product-name">Mens Jacket <span class="product-price">65,00&euro;</span></h6>
					<a class="btn btn-black add-to-cart" href="javascript:;">Add to cart</a>
				</div>
			</div>

			<div class="block full-size-image">
				<span class="close-zoom-image js-close-zoom"><i class="icon font-ico-close"></i></span>
				<div class="overflow-wrap">
					<div class="slider-wrap">
						<div class="image-wrap">
							<img data-lazy="assets/img/content/product-page-img-big.jpg" alt="" />
						</div>
						<div class="image-wrap">
							<img data-lazy="assets/img/content/pdp-image-1-big.jpg" alt="" />
						</div>
						<div class="image-wrap">
							<img data-lazy="assets/img/content/pdp-image-2-big.jpg" alt="" />
						</div>
						<div class="image-wrap">
							<img data-lazy="assets/img/content/pdp-image-3-big.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('layouts.footer')
		
	</div>
	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery.slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/interact.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>
</body>
</html>
