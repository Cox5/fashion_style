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
			<div class="block breadcrumbs">
				<h1>My account</h1>
				<div class="category-overlay">
					<ul class="category">
						<li>
							<a href="javascript:;">Account info</a>
						</li>
						<li>
							<a href="javascript:;">Address</a>
						</li>
						<li>
							<a href="javascript:;" class="active">My orders</a>
						</li>
						<li>
							<a href="javascript:;">Log Out</a>
						</li>
						<li class="btn-close js-close-category">
							<a href="javascript:;">
								<i class="icon font-ico-close"></i>
							</a>
						</li>
					</ul>
					<ul class="sub-category">
						<li>
							<a href="javascript:;">Account info</a>
						</li>
						<li>
							<a href="javascript:;">Address</a>
						</li>
						<li class="selected">
							<a href="javascript:;">My orders</a>
						</li>
						<li>
							<a href="javascript:;">Log Out</a>
						</li>
						<a href="javascript:;" class="category-toggle js-category-toggle"></a>
					</ul>
				</div>
			</div>
			<div class="account-blocks account-orders">
				<div class="wrap">
					<div class="account-header hide-phablet clearfix">
						<h2>My orders</h2>
						<input class="input-search" type="search" name="" value="" placeholder="Search an order">
					</div>
					<div class="account-table ongoing-table">
						<a href="#" class="fright hide-tablet-up search-order-link">Search order</a>
						<h3>Ongoing orders</h3>
						<div class="table-header">
							<div class="table-item">
								<h6>Date</h6>
							</div>
							<div class="table-item">
								<h6>Order n°</h6>
							</div>
							<div class="table-item">
								<h6>Amount</h6>
							</div>
							<div class="table-item">
								<h6>Tracking n°</h6>
							</div>
							<div class="table-item">
								<h6>Status</h6>
							</div>
						</div>
						<div class="table-body">
							<div class="table-row">
								<div class="table-item">
									<h6>20/02/2017</h6>
								</div>
								<div class="table-item">
									<h6>£STSM608</h6>
								</div>
								<div class="table-item">
									<span class="item-price">279,<sup>90€</sup></span>
								</div>
								<div class="table-item">
									<h6>2356</h6>
								</div>
								<div class="table-item">
									<h6>Shipped</h6>
								</div>
								<div class="table-item toggle-subrow">
									<h6>
										<span class="hide-phablet">Detail of your articles</span>
										<span class="hide-tablet-up" data-hide="Hide ">details</span>
									</h6>
								</div>
								<div class="table-content">
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="table-item">
									<h6>20/02/2017</h6>
								</div>
								<div class="table-item">
									<h6>£STSM608</h6>
								</div>
								<div class="table-item">
									<span class="item-price">279,<sup>90€</sup></span>
								</div>
								<div class="table-item">
									<h6>2356</h6>
								</div>
								<div class="table-item">
									<h6>Shipped</h6>
								</div>
								<div class="table-item toggle-subrow">
									<h6>
										<span class="hide-phablet">Detail of your articles</span>
										<span class="hide-tablet-up" data-hide="Hide ">details</span>
									</h6>
								</div>
								<div class="table-content">
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="account-table">
						<h3>Delivery History</h3>
						<div class="table-header">
							<div class="table-item">
								<h6>Date</h6>
							</div>
							<div class="table-item">
								<h6>Order n°</h6>
							</div>
							<div class="table-item">
								<h6>Amount</h6>
							</div>
							<div class="table-item">
								<h6>Tracking n°</h6>
							</div>
							<div class="table-item">
								<h6>Status</h6>
							</div>
						</div>
						<div class="table-body">
							<div class="table-row">
								<div class="table-item">
									<h6>20/02/2017</h6>
								</div>
								<div class="table-item">
									<h6>£STSM608</h6>
								</div>
								<div class="table-item">
									<span class="item-price">279,<sup>90€</sup></span>
								</div>
								<div class="table-item">
									<h6>2356</h6>
								</div>
								<div class="table-item">
									<h6>Shipped</h6>
								</div>
								<div class="table-item toggle-subrow">
									<h6>
										<span class="hide-phablet">Detail of your articles</span>
										<span class="hide-tablet-up" data-hide="Hide ">details</span>
									</h6>
								</div>
								<div class="table-content">
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="table-item">
									<h6>20/02/2017</h6>
								</div>
								<div class="table-item">
									<h6>£STSM608</h6>
								</div>
								<div class="table-item">
									<span class="item-price">279,<sup>90€</sup></span>
								</div>
								<div class="table-item">
									<h6>2356</h6>
								</div>
								<div class="table-item">
									<h6>Shipped</h6>
								</div>
								<div class="table-item toggle-subrow">
									<h6>
										<span class="hide-phablet">Detail of your articles</span>
										<span class="hide-tablet-up" data-hide="Hide ">details</span>
									</h6>
								</div>
								<div class="table-content">
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
									<div class="table-subrow">
										<div class="subrow-item">
											<img src="assets/img/content/table-item1.jpg" alt="">
										</div>
										<div class="subrow-item">
											<div class="item-desc">
												<h6>XYZ Jacket</h6>
												<span class="small-text">Cranberry Red - XL</span>
												<span class="small-text">QUANTITY 1</span>
												<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
											</div>
										</div>
										<div class="subrow-item">
											<span class="item-price">65,<sup>00€</sup></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="centered">
						<a class="btn btn-black btn-big hide-tablet-up" href="javascript:;">previous orders</a>
					</div>
				</div>
			</div>
			<div class="block feed hide-phablet">
				<h2>Share your style <span class="fright">#ST</span></h2>
				<div class="feed-item">
					<a href="javascript:;">
						<img src="assets/img/content/feed1.jpg" alt="">
						<h4 class="feed-title">style in<br/>cotton</h4>
					</a>
				</div>
				<div class="feed-item">
					<a href="javascript:;">
						<img src="assets/img/content/feed2.jpg" alt="">
						<h4 class="feed-title">style in<br/>cotton</h4>
					</a>
				</div>
				<div class="feed-item">
					<a href="javascript:;">
						<img src="assets/img/content/feed3.jpg" alt="">
						<h4 class="feed-title">style in<br/>cotton</h4>
					</a>
				</div>
				<div class="feed-item">
					<a href="javascript:;">
						<img src="assets/img/content/feed4.jpg" alt="">
						<h4 class="feed-title">style in<br/>cotton</h4>
					</a>
				</div>
				<div class="centered">
					<a class="btn btn-big" href="javascript:;">Share your style</a>
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
