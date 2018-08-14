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
			<div class="wrap">
				<div style="padding: 100px 0;">
					<h1 style="font-size: 45px; margin-bottom: 20px;">Templates:</h1>
					<ul style="padding: 0 20px; font-size: 20px; color: #141517; line-height: 1.8em;">
						<li>
							<span> Stranice koje imaju nizak prioritet su: 1, 10, 4, 11 i 12</span>
						</li>
						<li>
							<a href="homepage">01. Homepage</a>
						</li>
						<li>
							<a href="product-overview">02. Product overview</a>
						</li>
						<li>
							<a href="product-page">03. Product page</a>
						</li>
						<li>
							<a href="gallery-page-rows">04. Gallery page - Rows</a>
						</li>
						<li>
							<a href="checkout-page-mybag">05.a) Checkout page mybag</a>
						</li>
						<li>
							<a href="checkout-page">05.b) Checkout page</a>
						</li>
						<li>
							<a href="thank-you-page">05.c) Thank you page (finish)</a>
						</li>
						<li>
							<a href="my-account">06. My Account</a>
						</li>
						<li>
							<a href="my-account-account-info">07. My Account - account info</a>
						</li>
						<li>
							<a href="my-account-account-info-edit">08. My Account - account info / edit</a>
						</li>
						<li>
							<a href="my-account-orders">09. My Account - orders</a>
						</li>
						<li>
							<a href="login-page">10. Login page</a>
						</li>
						<li>
							<a href="create-account">11. Create account page</a>
						</li>
					</ul>
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
