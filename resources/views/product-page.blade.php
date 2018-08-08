<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<link href="favicon.ico" rel="icon" />
	<title>Fashion/Style</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
	<div class="container products-page">
		<span class="page-overlay"></span>

		<header class="header">
			<div class="wrap">
				<a href="/" class="logo">
					<img src="assets/img/logo.png" width="162" alt="Fashion/Style" />
				</a>
				<span class="filters-toggle js-toggle-filters">Filters</span>
				<ul class="main-nav">
					<li>
						<a href="javascript:;">Women</a>
						<div class="nav-submenu">
							<div class="wrap">
								<a class="nav-submenu-item" href="javascript:;">
									Tee-shirt
								</a>
								<a class="nav-submenu-item" href="javascript:;">
									Sweat-shirt
								</a>
								<a class="nav-submenu-item" href="javascript:;">
									Jogging
								</a>
								<a class="nav-submenu-item" href="javascript:;">
									Jacket
								</a>
								<a class="nav-submenu-item" href="javascript:;">
									Accessories
								</a>
							</div>
						</div>
					</li>
					<li>
						<a href="javascript:;">Men</a>
					</li>
					<li>
						<a href="javascript:;">Kids</a>
					</li>
				</ul>
				<div class="header-actions">
					<ul>
						<li class="subnav-desktop">
							<a href="javascript:;" class="js-subnav-toggle">
								...
							</a>
						</li>
						<li class="search-link">
							<a href="javascript:;" class="js-search-toggle">
								<i class="icon font-ico-search"></i>
							</a>
							<div class="header-search">
								<div class="wrap">
									<form action="" method="post">
										<div class="search-form">
											<input type="text" name="search-form" />
											<button class="btn btn-black btn-big" type="submit">Search</button>
										</div>
									</form>
									<div class="search-suggestions block">
										<h6><i class="icon font-ico-arrow-right"></i> Suggestions</h6>
										<ul>
											<li>
												<a href="javascript:;">
													<img src="assets/img/content/suggestion-01.jpg" alt="">
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<img src="assets/img/content/suggestion-02.jpg" alt="">
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<img src="assets/img/content/suggestion-03.jpg" alt="">
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<img src="assets/img/content/suggestion-04.jpg" alt="">
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<img src="assets/img/content/suggestion-05.jpg" alt="">
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<img src="assets/img/content/suggestion-06.jpg" alt="">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="basket-link">
							<a href="javascript:;" class="js-basket-subnav-toggle">
								<i class="icon font-ico-basket"></i>
								<span class="basket-items">2</span>
							</a>
							<div class="basket-subnav header-subnav">
								<a href="/" class="logo">
									<img src="assets/img/logo.png" width="162" alt="Fashion/Style">
								</a>
								<span class="close-subnav js-close-subnav"><i class="icon font-ico-close"></i></span>
								<h3>My bag</h3>
								<div class="basket-item">
									<div class="basket-thumbnail">
										<a href="javascript:;">
											<img src="assets/img/content/bag-item1.jpg" alt="">
										</a>
									</div>
									<div class="basket-description">
										<h6>
											<a href="javascript:;">Jacket XYZ</a>
											<a class="remove-product" href="javascript:;"><i class="icon font-ico-recycle-bin"></i></a>
										</h6>
										<span class="price">65,<sup>00 €</sup></span>
										<div class="variations">
											<span class="select-size">M</span>
											<span class="separator"> - </span>
											<span class="color">Grey</span>
											<span class="separator"> - </span>
											<span class="quantity"></span>1</span>
										</div>
									</div>
								</div>
								<div class="basket-item">
									<div class="basket-thumbnail">
										<a href="javascript:;">
											<img src="assets/img/content/bag-item1.jpg" alt="">
										</a>
									</div>
									<div class="basket-description">
										<h6>
											<a href="javascript:;">Jacket XYZ</a>
											<a class="remove-product" href="javascript:;"><i class="icon font-ico-recycle-bin"></i></a>
										</h6>
										<span class="price">65,<sup>00 €</sup></span>
										<div class="variations">
											<span class="select-size">M</span>
											<span class="separator"> - </span>
											<span class="color">Black</span>
											<span class="separator"> - </span>
											<span class="quantity"></span>1</span>
										</div>
									</div>
								</div>
								<div class="basket-prices block">
									<span class="price-label">Total</span>
									<span class="price">130,<sup>00 €</sup></span>
								</div>
								<a class="btn btn-black btn-big" href="javascript:;">See shoping bag</a>
							</div>
						</li>
						<li class="profile-link">
							<a href="javascript:;" class="js-login-subnav-toggle">
								<i class="icon font-ico-profile"></i>
							</a>
							<div class="login-subnav header-subnav">
								<span class="close-subnav js-close-subnav"><i class="icon font-ico-close"></i></span>
								<div class="login-form-wrap">
									<h3>Log in</h3>
									<h6>Manage your orders, newsletter are like saving shipping address...</h6>
									<div class="login-form clearfix">
										<h6>Don't have an account?</h6>
										<a class="btn btn-big create-account-btn" href="javascript:;">Create an account</a>
										<h6>Log in</h6>
										<div class="form-item form-item-full">
											<input class="form-item-text" type="text" name="" placeholder="E-mail address">
										</div>
										<div class="form-item form-item-full">
											<input class="form-item-text" type="password" name="" placeholder="Password">
										</div>
										<a class="forgot-password" href="javascript:;">Forgot your password?</a>
										<a class="btn btn-black btn-big login-btn" href="javascript:;">Log in</a>
									</div>
								</div>
							</div>
						</li>
						<li class="currency-language">
							<a href="javascript:;" class="cl-toggle js-cl-toggle">
								<span class="c-label">€</span><span class="l-label">FR</span>
							</a>
							<div class="cl-dropdown">
								<div class="c-dropdown">
									<label for="currency">choose currency</label>
									<select name="" id="currency" class="c-dropdown">
										<option value="">€ EUR</option>
										<option value="">£ Pound</option>
									</select>
								</div>
								<div class="l-dropdown">
									<label for="language">choose language</label>
									<div class="select-list">
										<span class="selected"><img src="assets/svg/ico-flag-uk.svg" alt="English flag">English</span>
										<div class="dest-dropdown js-dest-overlay">
											<ul>
												<li><span class="primary"><img src="assets/svg/ico-flag-uk.svg" alt="English flag">English</span></li>
												<li><span class="primary"><img src="assets/svg/ico-flag-belgium.svg" alt="Belgium flag">Belgium</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="menu-toggle-wrap">
							<a class="menu-toggle js-subnav-toggle" href="javascript:;">
								<span class="hamburger"></span>
							</a>
							<div class="subnav header-subnav">
								<div class="subnav-links">
									<ul>
										<li>
											<a href="javascript:;">About us</a>
										</li>
										<li>
											<a href="javascript:;">Edito</a>
										</li>
										<li>
											<a href="javascript:;">Events</a>
										</li>
										<li>
											<a href="javascript:;">Collabs</a>
										</li>
										<li>
											<a href="javascript:;">Store</a>
										</li>
										<li>
											<a href="javascfript:;">Jobs</a>
										</li>
										<li>
											<a href="javascfript:;">Contact</a>
										</li>
										<li>
											<a href="javascfript:;">Professionals</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="mobile-nav">
					<div class="mobile-nav-products">
						<a href="javascript:;">
							<span class="text">Men</span>
						</a>
						<a href="javascript:;">
							<span class="text">Women</span>
						</a>
						<a href="javascript:;">
							<span class="text">Kids</span>
						</a>
					</div>
					<div class="links-list">
						<form action="" method="post">
							<div class="search-form">
								<input type="text" name="search-form" placeholder="Your search">
								<button class="btn" type="submit"></button>
							</div>
						</form>
						<ul>
							<li>
								<a href="javascript:;">for professionals</a>
							</li>
							<li>
								<a href="javascript:;">About us</a>
							</li>
							<li>
								<a href="javascript:;">edito</a>
							</li>
							<li>
								<a href="javascript:;">events</a>
							</li>
							<li>
								<a href="javascript:;">collabs</a>
							</li>
							<li>
								<a href="javascript:;">store</a>
							</li>
							<li>
								<a href="javascript:;">jobs</a>
							</li>
							<li>
								<a href="javascript:;">contact</a>
							</li>
						</ul>
						<div class="currency-language">
							<div class="c-dropdown">
								<label for="currency">choose currency</label>
								<select name="" id="currency" class="c-dropdown">
									<option value="">€ EUR</option>
									<option value="">£ Pound</option>
								</select>
							</div>
							<div class="l-dropdown">
								<label for="language">choose language</label>
								<div class="select-list">
									<span class="selected"><img src="assets/svg/ico-flag-uk.svg" alt="English flag">English</span>
									<div class="dest-dropdown js-dest-overlay">
										<ul>
											<li><span class="primary"><img src="assets/svg/ico-flag-uk.svg" alt="English flag">English</span></li>
											<li><span class="primary"><img src="assets/svg/ico-flag-belgium.svg" alt="Belgium flag">Belgium</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

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
						<h1 class="product-name">Organic round neck</h1>
						<span class="product-price">65,<sup>90&euro;</sup></span>
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
										<p>100% Organic ring-spun Combed Cotton dolor sit.<br/>Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</p>
									</div>
									<div class="tab">
										<p>Something about the artist</p>
									</div>
									<div class="tab">
										<p>Detailed description of the product</p>
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
									<img src="assets/img/content/product-colors/color-orange.png" alt="">
								</a>
							</li>
							<li class="disabled">
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
								<a href="javascript:;" data-color="white smoke">
									<img src="assets/img/content/product-colors/color-white-smoke.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="green blue">
									<img src="assets/img/content/product-colors/color-green-blue.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark blue">
									<img src="assets/img/content/product-colors/color-dark-blue.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark grey">
									<img src="assets/img/content/product-colors/color-dark-grey.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="light blue">
									<img src="assets/img/content/product-colors/color-light-blue.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="gravel">
									<img src="assets/img/content/product-colors/color-gravel.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="gravel dark">
									<img src="assets/img/content/product-colors/color-gravel-dark.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark wood">
									<img src="assets/img/content/product-colors/color-dark-wood.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="wood">
									<img src="assets/img/content/product-colors/color-wood.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="red">
									<img src="assets/img/content/product-colors/color-red.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="blood red">
									<img src="assets/img/content/product-colors/color-blood-red.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark red">
									<img src="assets/img/content/product-colors/color-dark-red.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="brushed metal">
									<img src="assets/img/content/product-colors/color-brushed-metal.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="mineral blue">
									<img src="assets/img/content/product-colors/color-mineral-blue.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="sky blue">
									<img src="assets/img/content/product-colors/color-sky-blue.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="sea blue">
									<img src="assets/img/content/product-colors/color-sea-blue.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="blue">
									<img src="assets/img/content/product-colors/color-blue.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="blue medium">
									<img src="assets/img/content/product-colors/color-blue-medium.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="teal">
									<img src="assets/img/content/product-colors/color-teal.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="darker wood">
									<img src="assets/img/content/product-colors/color-darker-wood.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="olive">
									<img src="assets/img/content/product-colors/color-olive.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dark green">
									<img src="assets/img/content/product-colors/color-dark-green.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="dirt">
									<img src="assets/img/content/product-colors/color-dirt.png" alt="">
								</a>
							</li>
							<li>
								<a href="javascript:;" data-color="pink">
									<img src="assets/img/content/product-colors/color-pink.png" alt="">
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

		<footer class="footer">
			<div class="services">
				<div class="content-wrap">
					<div class="service-item">
						<div class="service-item-main">
							<div class="thumb"><img src="assets/img/card.svg" width="47" alt=""></div>
							<h6>Secure payments</h6>
						</div>
						<p class="service-body">Lorem ipsum dolor sit amet, consectetur dolor adipisicing dolor elitlabore.</p>
					</div>
					<div class="service-item">
						<div class="service-item-main">
							<div class="thumb"><img src="assets/img/returns.svg" width="53" alt=""></div>
							<h6>Returns</h6>
						</div>
						<p class="service-body">Lorem ipsum dolor sit amet, consectetur dolor adipisicing dolor elitlabore.</p>
					</div>
					<div class="service-item">
						<div class="service-item-main">
							<div class="thumb"><img src="assets/img/shipping.svg" width="46" alt=""></div>
							<h6>Smart shipping</h6>
						</div>
						<p class="service-body">Lorem ipsum dolor sit amet, consectetur dolor adipisicing dolor elitlabore.</p>
					</div>
					<div class="service-item">
						<div class="service-item-main">
							<div class="thumb"><img src="assets/img/customer.svg" width="53" alt=""></div>
							<h6>Customer care</h6>
						</div>
						<p class="service-body">Lorem ipsum dolor sit amet, consectetur dolor adipisicing dolor elitlabore.</p>
					</div>
				</div>
			</div>
			<div class="bg-black">
				<div class="content-wrap">
					<div class="subscribe-form">
						<form action="">
							<label for="subscribe-input">SUBSCRIBE TO OUR NEWSLETTER</label>
							<input type="email" placeholder="Your e-mail" id="subscribe-input">
							<button type="submit">OK</button>
						</form>
					</div>
					<div class="block-social">
						<h4>Follow us</h4>
						<ul>
							<li>
								<a href="javascript:;">
									<span class="icon font-ico-facebook"></span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<span class="icon font-ico-instagram"></span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<span class="icon font-ico-linkedin"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-links">
				<div class="content-wrap">
					<ul>
						<li>Copyright 2017 - VEGAIT Sourcing</li>
						<li><a href="javascript:;">About us</a></li>
						<li><a href="javascript:;">Faq</a></li>
						<li><a href="javascript:;">Carreers</a></li>
						<li><a href="javascript:;">For professionals</a></li>
						<li><a href="javascript:;">Term and Conditions</a></li>
						<li><a href="javascript:;">Confidentiality</a></li>
						<li><a href="javascript:;">Contact us</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery.slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/interact.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>
</body>
</html>
