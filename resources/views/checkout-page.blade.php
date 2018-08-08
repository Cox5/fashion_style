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
<body>

	<div class="container">

		<span class="page-overlay"></span>

		<!-- checkout header is different than normal -->
		<header class="header checkout-header">
			<div class="wrap">
				<a href="/" class="logo">
					<img src="assets/img/logo.png" width="162" alt="Fashion/Style" />
				</a>
				<ul class="main-nav checkout-links">
					<li>
						<a href="javascript:;">Faq</a>
					</li>
					<li>
						<a href="javascript:;">Contact us</a>
					</li>
				</ul>
			</div>
		</header>

		<div class="content block">

			<div class="checkout-blocks block">
				<div class="block-half checkout-form-wrap">
					<div class="checkout-login-form block">
						<h2>Check out</h2>
						<div class="checkout-block-header clearfix">
							<h6>Shipping address</h6>
							<a class="btn btn-black" href="javascript:;">Login</a>
							<a class="registered-customer" href="javascript:;">Already a client?</a>
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="" placeholder="First name">
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="" placeholder="Last name">
						</div>
						<div class="form-item">
							<input class="form-item-text form-error" type="text" name="" placeholder="E-mail address">
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="" placeholder="Phone number">
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="" placeholder="Street & number">
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="" placeholder="Apartement, unit (optional)">
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="" placeholder="Town / city">
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="" placeholder="Postcode">
						</div>
						<div class="form-item">
							<span class="form-label">Country</span>
							<select class="form-item-select" name="">
								<option value="1">Belgium</option>
								<option value="2">France</option>
								<option value="3">Netherlands</option>
								<option value="4">Germany</option>
								<option value="5">United Kingdom</option>
							</select>
						</div>
						<div class="checkbox-list block">
							<div class="form-item form-item-full checkbox">
								<input id="cb1" type="checkbox" name="cb" value="">
								<label class="form-checkbox" for="cb1">Send the bill to a different address</label>
							</div>
							<div class="form-item form-item-full checkbox">
								<input id="cb2" type="checkbox" name="cb" value="">
								<label class="form-checkbox" for="cb2">Create an account</label>
							</div>
						</div>
					</div>
					<div class="shipping-methods block">
						<h6>Shipping method</h6>
						<div class="radio">
							<input id="rd1" type="radio" name="shipping-method" value="1" checked>
							<label class="form-radio" for="rd1">
								<span class="shipping-merchant"><img src="assets/img/dpd-shipping.png" width="87" alt=""></span> <span class="text">Standard<br/> (3 open days)</span> <strong>Free</strong>
							</label>
						</div>
						<div class="radio">
							<input id="rd2" type="radio" name="shipping-method" value="2">
							<label class="form-radio" for="rd2">
								<span class="shipping-merchant"><img src="assets/img/dpd-shipping.png" width="87" alt=""></span> <span class="text">Pick up point<br/> (2 open days)</span> <strong>Free</strong>
							</label>
						</div>
					</div>
					<div class="payment-methods block">
						<h6>Payment</h6>
						<div class="radio">
							<input id="pay1" type="radio" name="payment-method" value="1" checked>
							<label class="form-radio" for="pay1">
								<span class="payment-merchant">
									<img src="assets/img/master-card-bw.svg" alt="">
								</span>
								Mastercard
							</label>
						</div>
						<div class="radio">
							<input id="pay2" type="radio" name="payment-method" value="2">
							<label class="form-radio" for="pay2">
								<span class="payment-merchant">
									<img src="assets/img/master-card-bw.svg" alt="">
								</span>
								Amex
							</label>
						</div>
						<div class="radio">
							<input id="pay3" type="radio" name="payment-method" value="2">
							<label class="form-radio" for="pay3">
								<span class="payment-merchant">
									<img src="assets/img/visa-bw.svg" alt="">
								</span>
								Visa
							</label>
						</div>
						<div class="radio">
							<input id="pay4" type="radio" name="payment-method" value="2">
							<label class="form-radio" for="pay4">
								<span class="payment-merchant">
									<img src="assets/img/visa-bw.svg" alt="">
								</span>
								Bancontact
							</label>
						</div>
						<div class="radio">
							<input id="pay5" type="radio" name="payment-method" value="3">
							<label class="form-radio" for="pay5">
								<span class="payment-merchant">
									<img src="assets/img/paypal-bw.svg" alt="">
								</span>
								Paypal
							</label>
						</div>
						<div class="radio">
							<input id="pay6" type="radio" name="payment-method" value="2">
							<label class="form-radio" for="pay6">
								<span class="payment-merchant">
									<img src="assets/img/paypal-bw.svg" alt="">
								</span>
								Direct transfer
							</label>
						</div>
					</div>
					<a class="btn btn-black btn-big confirm-purchase" href="javascript:;">Confirm</a>
				</div>
				<div class="block-half checkout-orders">
					<h6>My order</h6>
					<div class="checkout-orders-list clearfix">
						<div class="checkout-order">
							<div class="order-thumbnail">
								<a href="javascript:;">
									<img src="assets/img/content/table-item1.jpg" alt="">
								</a>
							</div>
							<div class="order-description">
								<h6><a href="javascript:;">Long Sleave Shirt / XYZ</a></h6>
								<span class="small-text">Size XL</span>
								<span class="small-text">Quantity 1</span>
							</div>
							<span class="order-price">65,<sup>00€</sup></span>
						</div>
						<div class="checkout-order">
							<div class="order-thumbnail">
								<a href="javascript:;">
									<img src="assets/img/content/table-item1.jpg" alt="">
								</a>
							</div>
							<div class="order-description">
								<h6><a href="javascript:;">Long Sleave Shirt / XYZ</a></h6>
								<span class="small-text">Size XL</span>
								<span class="small-text">Quantity 1</span>
							</div>
							<span class="order-price">65,<sup>00€</sup></span>
						</div>
					</div>
					<div class="subtotal-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Sub total</span>
							<span class="price">130,<sup>00€</sup></span>
						</div>
						<div class="price-row">
							<span class="price-label">Shipping</span>
							<span class="price">Free</span>
						</div>
					</div>
					<div class="total-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Total (TVA <sup>Inc.</sup>)</span>
							<span class="price">130,<sup>00€</sup></span>
						</div>
					</div>
					<div class="discount-code-form form-item form-item-full">
						<label for="dsc" class="form-label">Use a discount code</label>
						<input class="form-item-text" type="text" name="" id="dsc" placeholder="Discount code (eg. AFX8912)">
					</div>
					<a class="btn btn-black btn-big confirm-purchase show-mobile" href="javascript:;">Confirm</a>
				</div>
			</div>

		</div>

	</div>

	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>

</body>
</html>
