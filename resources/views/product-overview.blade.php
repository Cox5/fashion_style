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

			<div class="block login-wrap">
					<div class="block-half" >
					<form action="{{ route('product.filter') }}" method="GET">  
						{{ csrf_field() }}
						<div class="form-item">
							<span class="form-label">Size</span>
							<select class="form-item-select" name="size">
								<option value="XS">XS - Extra Small</option>
								<option value="S">S - Small</option>
								<option value="M">M - Medium</option>
								<option value="L">L - Large</option>
								<option value="XL">XL - Extra Large</option>
							</select>
							<button class="btn btn-black" type="submit">Apply</button>
						</div>
					</form>
					</div>
				</div>
			

			<div class="block products-list">

				
				<ul class="clearfix">
						

					{{-- start listing products dynamically --}}
					@foreach ($products as $product)

						<li class="product">
						<div class="product-wrap">
								<a class="product-thumbnail" href="/product/{{$product->id}}">
								<img src="{{URL::asset('img/content/products/'.$product->image_front.'.jpg')}}" alt="{{$product->product_name}}" class="front">
								<img src="{{URL::asset('img/content/products/'.$product->image_front.'.jpg')}}" alt="{{$product->product_name}}" class="back">
							</a>
							<div class="product-info">
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
                                        <ul class="slider-wrap">
                                            <li>
                                                <a href="javascript:;" data-color="brown light">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-white-smoke.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="grey smoke">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-dark-blue.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="dark blue">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-granite.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="brown light">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-red.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li class="selected">
                                                <a href="javascript:;" data-color="grey smoke">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-orange.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="dark blue">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-mineral-blue.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="brown light">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-sea-blue.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="grey smoke">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-blood-red.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="dark blue">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-brown-light.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="brown light">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-gravel-dark.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="grey smoke">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-grey-smoke.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="dark blue">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-dark-blue.png')}}" alt="">
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
								<form action="{{ route('cart.store') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $product->id }}">
									<input type="hidden" name="product_name" value= "{{ $product->product_name }}">
									<input type="hidden" name="price" value= "{{ $product->price }}">
									<button class="btn btn-black" type="submit">add to bag</button>
								</form>
							</div>
						</div>
						<div class="product-bottom">
							<h6><a href="/product/{{$product->id}}">{{ $product->product_name }}</a></h6>
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
