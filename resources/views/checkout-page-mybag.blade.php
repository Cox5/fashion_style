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
	<div class="container">

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
			<div class="checkout-blocks block">
				<div class="block-half checkout-orders">
					<h3>My <span>shopping</span> bag</h3>
					<span class="subtitle"><i class="icon font-ico-basket"></i> My shopping bag</span>
					<div class="checkout-orders-list clearfix">
						<div class="checkout-order">
							<div class="order-thumbnail">
								<a href="javascript:;">
									<img src="assets/img/content/bag-item2.jpg" alt="" class="desktop-img">
									<img src="assets/img/content/bag-item-mob1.jpg" alt="" class="mobile-img">
									<span class="img-ratio">image vignette ratio <span>800x1000</span></span>
								</a>
							</div>
							<div class="order-description">
								<h6><a href="javascript:;">Jacket XYZ</a></h6>
								<span class="order-price">65<sup>,00€</sup></span>
								<span class="small-text color">Grey</span>
								<div class="form-item">
									<span class="form-label">Size</span>
									<select class="form-item-select" name="">
										<option value="M">M</option>
										<option value="L">L</option>
										<option value="XL">XL</option>
										<option value="XXL">XXL</option>
									</select>
								</div>
								<div class="form-item">
									<span class="form-label">Quantity</span>
									<select class="form-item-select" name="">
										<option value="1">1X</option>
										<option value="2">2X</option>
										<option value="3">3X</option>
										<option value="4">4X</option>
									</select>
								</div>
							</div>
							<a class="remove-product" href="javascript:;"><i class="icon font-ico-recycle-bin"></i></a>
						</div>
						<div class="checkout-order">
							<div class="order-thumbnail">
								<a href="javascript:;">
									<img src="assets/img/content/bag-item2.jpg" alt="" class="desktop-img">
									<img src="assets/img/content/bag-item-mob1.jpg" alt="" class="mobile-img">
									<span class="img-ratio">image vignette ratio <span>800x1000</span></span>
								</a>
							</div>
							<div class="order-description">
								<h6><a href="javascript:;">Jacket XYZ</a></h6>
								<span class="order-price">65<sup>,00€</sup></span>
								<span class="small-text color">Grey</span>
								<div class="form-item">
									<span class="form-label">Size</span>
									<select class="form-item-select" name="">
										<option value="M">M</option>
										<option value="L">L</option>
										<option value="XL">XL</option>
										<option value="XXL">XXL</option>
									</select>
								</div>
								<div class="form-item">
									<span class="form-label">Quantity</span>
									<select class="form-item-select" name="">
										<option value="1">1X</option>
										<option value="2">2X</option>
										<option value="3">3X</option>
										<option value="4">4X</option>
									</select>
								</div>
							</div>
							<a class="remove-product" href="javascript:;"><i class="icon font-ico-recycle-bin"></i></a>
						</div>
					</div>
					<div class="subtotal-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Sub-total</span>
							<span class="price">130,<sup>00€</sup></span>
						</div>
					</div>
				</div>
				<div class="block-half checkout-form-wrap">
					<p>You need help finding the right size? <br>Check out our <a href="javascript:;">size guide</a>.</p>
					<div class="discount-code-form form-item form-item-full">
						<label for="dsc" class="form-label subtitle">Use a discount code</label>
						<div class="disc-field-wrap">
							<input class="form-item-text" type="text" name="" id="dsc" placeholder="Discount code (eg. AFX8912)">
							<button type="submit" class="btn btn-black">Validate</button>
						</div>
					</div>
					<div class="shipping-methods block">
						<span class="subtitle">Shipping method</span>
						<div class="form-item full-width">
							<span class="form-label">Country</span>
							<select class="form-item-select" name="">
								<option value="1">Belgium</option>
								<option value="2">France</option>
								<option value="3">Netherlands</option>
								<option value="4">Germany</option>
								<option value="5">United Kingdom</option>
							</select>
						</div>
						<div class="radio">
							<input id="rd1" type="radio" name="shipping-method" value="1" checked>
							<label class="form-radio" for="rd1">
								<span class="shipping-merchant"><img src="assets/img/dpd-shipping.png" width="87" alt=""></span> <span class="text">Standard<br/> (3 open days)</span> <span class="order-price">5<sup>,00€</sup></span>
							</label>
						</div>
						<div class="radio">
							<input id="rd2" type="radio" name="shipping-method" value="2">
							<label class="form-radio" for="rd2">
								<span class="shipping-merchant"><img src="assets/img/dpd-shipping.png" width="87" alt=""></span> <span class="text">Express<br/> (24h)</span> <span class="order-price">10<sup>,00€</sup></span>
							</label>
						</div>
						<div class="radio">
							<input id="rd3" type="radio" name="shipping-method" value="2">
							<label class="form-radio" for="rd3">
								<span class="shipping-merchant"><img src="assets/img/dpd-shipping.png" width="87" alt=""></span> <span class="text">Pick up point<br/> (2 open days)</span> <span class="order-price">5<sup>,00€</sup></span>
							</label>
						</div>
					</div>
					<div class="subtotal-prices order-prices block">
						<div class="price-row sub-total-row">
							<span class="price-label">Sub total</span>
							<span class="price">135<sup>,00€</sup></span>
						</div>
						<div class="price-row shipping-row">
							<span class="price-label">Shipping</span>
							<span class="price">5<sup>,00€</sup></span>
						</div>
						<div class="price-row discount-row">
							<span class="price-label">Discount</span>
							<span class="price">-3<sup>,00€</sup></span>
						</div>
					</div>
					<div class="total-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Total</span>
							<span class="total-price">132<sup>,00€</sup></span>
						</div>
					</div>
					<a class="btn btn-black btn-medium confirm-purchase" href="javascript:;">proceed to checkout</a>
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
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>
</body>
</html>
