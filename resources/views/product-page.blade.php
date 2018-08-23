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

			{{-- @foreach ($products as $product) --}}
				 {{-- @foreach ($product->$images as $image) --}}
			<div class="block product-page-shop">
				<a class="back-link" href="/product-overview"><i class="icon font-ico-arrow-left"></i> Back to products</a>
				<div class="product-image">
					<div class="product-thumbnails">
						<div class="thumb selected">
							<a href="{{URL::asset('img/content/products/'.$product->image_front.'.jpg')}}">
								<img src="{{URL::asset('img/content/products/'.$product->image_front.'.jpg')}}" alt="">
							</a>
							<span class="thumb-size">thumb size <span>70X86</span></span>
						</div>
						<div class="thumb">
							<a href="{{URL::asset('img/content/products/'.$product->images->image1.'.jpg')}}">
								<img src="{{URL::asset('img/content/products/'.$product->images->image1.'.jpg')}}" alt="">
							</a>
							<span class="thumb-size">thumb size <span>70X86</span></span>
						</div>
						<div class="thumb">
							<a href="{{URL::asset('img/content/products/'.$product->images->image2.'.jpg')}}">
								<img src="{{URL::asset('img/content/products/'.$product->images->image2.'.jpg')}}" alt="">
							</a>
							<span class="thumb-size">thumb size <span>70X86</span></span>
						</div>
						<div class="thumb">
							<a href="{{URL::asset('img/content/products/'.$product->images->image3.'.jpg')}}">
								<img src="{{URL::asset('img/content/products/'.$product->images->image3.'.jpg')}}" alt="">
							</a>
							<span class="thumb-size">thumb size <span>70X86</span></span>
						</div>
					</div>
					<div class="img-wrap">
						<img class="full-width" src="{{URL::asset('img/content/products/'.$product->image_front.'.jpg')}}" alt="">
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
					@include('layouts.block-product-colors')
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
						<form action="{{ route('cart.store') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="id" value="{{ $product->id }}">
							<input type="hidden" name="product_name" value= "{{ $product->product_name }}">
							<input type="hidden" name="price" value= "{{ $product->price }}">
							<button class="btn btn-black btn-big add-to-cart" type="submit">Add to bag</button>
						</form>
						<div class="right">
							<p>Is your size or color out of stock?</p>
							<a href="javascript:;" class="link">Get notified when it’s back</a>
						</div>
					</div>
				</div>
			</div>
			{{-- @endforeach --}}
		 

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
