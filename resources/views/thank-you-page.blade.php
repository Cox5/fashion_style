<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	<div class="container">
		<span class="page-overlay"></span>

		<header class="header">
			<div class="wrap">
				<a href="/" class="logo">
					<img src="assets/img/logo.png" width="162" alt="Fashion/Style" />
				</a>
			</div>
		</header>

		<div class="content block confirmation-block">
			<div class="checkout-blocks-wrap">
				<div class="wrap">
					<div class="checkout-block-full">
						<div class="checkout-subheading">
							<h3>Thank you!</h3>
							<div class="right">
								<a href="javascript:;" class="print-link"><i class="icon font-ico-print"></i><span>Print your invoice</span></a>
							</div>
						</div>
						<div class="checkout-block-form clearfix mob-border">
							<p>Your order has been placed successfully. <br>You’ll receive a confirmation e-mail.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer footer-simple">
			<div class="footer-links">
				<div class="content-wrap">
					<ul>
						<li><a href="javascript:;">Condition</a></li>
						<li><a href="javascript:;">Security</a></li>
						<li><a href="javascript:;">Privacy</a></li>
					</ul>
					<p>Need help to complete your order? <a href="javascript:;">Contact us</a></p>
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
