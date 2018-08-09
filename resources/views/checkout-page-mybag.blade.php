<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	<div class="container">

		<span class="page-overlay"></span>

		@include('layouts.nav')

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

		@include('layouts.footer')

	</div>
	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>
</body>
</html>
