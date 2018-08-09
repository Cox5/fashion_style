<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	<div class="container">
		<span class="page-overlay"></span>

		@include('layouts.nav')

		<div class="content">
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
							<a href="javascript:;" class="active">Sweatshirts</a>
						</li>
						<li>
							<a href="javascript:;">T-shirts</a>
						</li>
						<li>
							<span>Polos</span>
						</li>
						<a href="javascript:;" class="category-toggle js-category-toggle"></a>
					</ul>
				</div>
			</div>

			<div class="block product-filters-mobile-wrap">
				<button class="mobile-filter-toggle js-mobile-filter-toggle">Filter (0)</button>
				<div class="grid-switch mobile-grid-switch js-grid-switch">
					<span class="grid-trigger grid-rows">Grid rows</span>
					<span class="sep"></span>
					<span class="grid-trigger grid-columns selected">Grid columns</span>
				</div>
			</div>

			<div class="block product-filters-wrap">
				<div class="product-filters js-product-filters">
					<span class="close-filter js-close-filter"><i class="icon font-ico-close"></i></span>
					<h3>Filters</h3>
					<div class="filter">
						<span class="filter-toggle">Category</span>
						<div class="filter-body">
							<div class="filter-list clearfix">
								<ul>
									<li>
										<span class="filter-option">Option 1</span>
									</li>
									<li>
										<span class="filter-option">Option 2</span>
									</li>
									<li>
										<span class="filter-option">Option 3</span>
									</li>
								</ul>
								<ul>
									<li>
										<span class="filter-option">Option 4</span>
									</li>
									<li>
										<span class="filter-option">Option 5</span>
									</li>
								</ul>
							</div>
							<a class="btn btn-black apply-filters" href="javascript:;">Apply</a>
							<a class="reset-filters js-reset-filters" href="javascript:;">Reset filter</a>
						</div>
					</div>
					<div class="filter">
						<span class="filter-toggle">Fitting</span>
						<div class="filter-body">
							<div class="filter-list clearfix">
								<ul>
									<li>
										<span class="filter-option">Option 1</span>
									</li>
									<li>
										<span class="filter-option">Option 2</span>
									</li>
									<li>
										<span class="filter-option">Option 3</span>
									</li>
								</ul>
								<ul>
									<li>
										<span class="filter-option">Option 4</span>
									</li>
									<li>
										<span class="filter-option">Option 5</span>
									</li>
									<li>
										<span class="filter-option">Option 6</span>
									</li>
								</ul>
							</div>
							<a class="btn btn-black apply-filters" href="javascript:;">Apply</a>
							<a class="reset-filters js-reset-filters" href="javascript:;">Reset filter</a>
						</div>
					</div>
					<div class="filter">
						<span class="filter-toggle">Style</span>
						<div class="filter-body">
							<div class="filter-list clearfix">
								<ul>
									<li>
										<span class="filter-option">Option 1</span>
									</li>
									<li>
										<span class="filter-option">Option 2</span>
									</li>
									<li>
										<span class="filter-option">Option 3</span>
									</li>
								</ul>
								<ul>
									<li>
										<span class="filter-option">Option 4</span>
									</li>
									<li>
										<span class="filter-option">Option 5</span>
									</li>
									<li>
										<span class="filter-option">Option 6</span>
									</li>
								</ul>
							</div>
							<a class="btn btn-black apply-filters" href="javascript:;">Apply</a>
							<a class="reset-filters js-reset-filters" href="javascript:;">Reset filter</a>
						</div>
					</div>
					<div class="filter">
						<span class="filter-toggle">Size</span>
						<div class="filter-body">
							<div class="filter-list clearfix">
								<ul>
									<li>
										<span class="filter-option">XS - Extra Small</span>
									</li>
									<li>
										<span class="filter-option">S - Small</span>
									</li>
									<li>
										<span class="filter-option">M - Medium</span>
									</li>
								</ul>
								<ul>
									<li>
										<span class="filter-option">L - Large</span>
									</li>
									<li>
										<span class="filter-option">XL - Extra Large</span>
									</li>
									<li>
										<span class="filter-option">XXL - Extra Extra Large</span>
									</li>
								</ul>
							</div>
							<a class="btn btn-black apply-filters" href="javascript:;">Apply</a>
							<a class="reset-filters js-reset-filters" href="javascript:;">Reset filter</a>
						</div>
					</div>
					<div class="filter">
						<span class="filter-toggle">Fabric</span>
						<div class="filter-body">
							<div class="filter-list clearfix">
								<ul>
									<li>
										<span class="filter-option">Option 1</span>
									</li>
									<li>
										<span class="filter-option">Option 2</span>
									</li>
									<li>
										<span class="filter-option">Option 3</span>
									</li>
								</ul>
								<ul>
									<li>
										<span class="filter-option">Option 4</span>
									</li>
									<li>
										<span class="filter-option">Option 5</span>
									</li>
									<li>
										<span class="filter-option">Option 6</span>
									</li>
								</ul>
							</div>
							<a class="btn btn-black apply-filters" href="javascript:;">Apply</a>
							<a class="reset-filters js-reset-filters" href="javascript:;">Reset filter</a>
						</div>
					</div>
					<div class="filter">
						<span class="filter-toggle">Colors</span>
						<div class="filter-body">
							<div class="filter-list clearfix">
								<ul>
									<li>
										<span class="filter-option">Option 1</span>
									</li>
									<li>
										<span class="filter-option">Option 2</span>
									</li>
									<li>
										<span class="filter-option">Option 3</span>
									</li>
								</ul>
								<ul>
									<li>
										<span class="filter-option">Option 4</span>
									</li>
									<li>
										<span class="filter-option">Option 5</span>
									</li>
								</ul>
							</div>
							<a class="btn btn-black apply-filters" href="javascript:;">Apply</a>
							<a class="reset-filters js-reset-filters" href="javascript:;">Reset filter</a>
						</div>
					</div>
					<div class="filter">
						<span class="filter-toggle">Patterns</span>
						<div class="filter-body">
							<div class="filter-list clearfix">
								<ul>
									<li>
										<span class="filter-option">Option 1</span>
									</li>
									<li>
										<span class="filter-option">Option 2</span>
									</li>
									<li>
										<span class="filter-option">Option 3</span>
									</li>
								</ul>
								<ul>
									<li>
										<span class="filter-option">Option 4</span>
									</li>
									<li>
										<span class="filter-option">Option 5</span>
									</li>
									<li>
										<span class="filter-option">Option 6</span>
									</li>
								</ul>
							</div>
							<a class="btn btn-black apply-filters" href="javascript:;">Apply</a>
							<a class="reset-filters js-reset-filters" href="javascript:;">Reset filter</a>
						</div>
					</div>
					<div class="filter-actions block">
						<a class="btn btn-black apply-filters" href="javascript:;">Apply</a>
						<a class="btn reset-filters js-reset-all-filters" href="javascript:;">Reset filters</a>
					</div>
					<div class="grid-switch js-grid-switch">
						<span class="grid-trigger grid-rows selected">Grid rows</span>
						<span class="sep"></span>
						<span class="grid-trigger grid-columns">Grid columns</span>
					</div>
				</div>
			</div>

			<div class="block product-gallery js-product-gallery gallery-rows">
				<ul class="clearfix">
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-1.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-2.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-3.jpg" alt="">
							</a>
							<span class="product-tag">New</span>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-4.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-5.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-1.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-2.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-3.jpg" alt="">
							</a>
							<span class="product-tag">New</span>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-4.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-5.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-1.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-2.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-3.jpg" alt="">
							</a>
							<span class="product-tag">New</span>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-4.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
					<li class="product">
						<div class="product-wrap">
							<a class="product-thumbnail" href="javascript:;">
								<img src="assets/img/content/gallery-product-5.jpg" alt="">
							</a>
							<div class="product-info">
								<h6><a href="javascript:;">Womens t-shirt flannel</a></h6>
								<!-- reusable product-colors block from product page -->
								<div class="product-colors">
									<ul class="clearfix">
										<li>
											<a href="javascript:;" data-color="brown light">
												<img src="assets/img/content/product-colors/color-brown-light.png" alt="">
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
									<a class="more-colors" href="javascript:;">+ More colors</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="centered">
					<a class="btn btn-big" href="javascript:;">Load more</a>
				</div>
			</div>
		</div>

		@include('layouts.footer')

	</div>
	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>
</body>
</html>
