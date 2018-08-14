<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	<div class="container products-page">
		<span class="page-overlay"></span>

		@include('layouts.head_product')

		<div class="content">
			
			@include('layouts.filters')

			<div class="block breadcrumbs">
				<h1>Home</h1>
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
							<a href="javascript:;">woman</a>
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

			<div class="block product-filters-mobile-wrap">
				<button class="mobile-filter-toggle js-mobile-filter-toggle">Filters (0)</button>
			</div>

			<div class="block products-list">
				<ul class="clearfix">

					{{-- start listing products dynamically --}}
					@foreach ($products as $product)

						<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/overview-product-1.jpg" alt="" class="front">
								<img src="assets/img/content/overview-product-7.jpg" alt="" class="back">
							</a>
							<div class="product-info">
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="slider-wrap">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-white-smoke.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="grey smoke">
												<img src="assets/img/content/product-colors/color-dark-blue.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="dark blue">
												<img src="assets/img/content/product-colors/color-granite.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-red.png" alt="">
											</a>
										</li>
										<li class="selected">
											<a href="javascript:;" data-color="grey smoke">
												<img src="assets/img/content/product-colors/color-orange.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="dark blue">
												<img src="assets/img/content/product-colors/color-mineral-blue.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-sea-blue.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="grey smoke">
												<img src="assets/img/content/product-colors/color-blood-red.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="dark blue">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-gravel-dark.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="grey smoke">
												<img src="assets/img/content/product-colors/color-grey-smoke.png" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-color="dark blue">
												<img src="assets/img/content/product-colors/color-dark-blue.png" alt="">
											</a>
										</li>
									</ul>
								</div>
								<!-- reusable product-sizes block from product page -->
								<div class="product-sizes">
									<ul class="slider-wrap">
										<li class="disabled"><a href="javascript:;">xs</a></li>
										<li><a href="javascript:;">s</a></li>
										<li class="selected"><a href="javascript:;">m</a></li>
										<li><a href="javascript:;">l</a></li>
										<li><a href="javascript:;">xl</a></li>
										<li><a href="javascript:;">xxl</a></li>
									</ul>
								</div>
								<a href="javascript:;" class="btn btn-black">add to bag</a>
							</div>
						</div>
						<div class="product-bottom">
							<h6><a href="/product/{{$product->product_id}}">{{ $product->product_name }}</a></h6>
							<span class="price">{{$product->price}}<sup>,00€</sup></span>
						</div>
					</li>

					@endforeach
				</ul>
				<div class="centered">
					<a class="btn btn-big load-more" href="javascript:;">Load more</a>
				</div>
			</div>
		</div>

		@include('layouts.footer')

	</div>
	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery.slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>
</body>
</html>
