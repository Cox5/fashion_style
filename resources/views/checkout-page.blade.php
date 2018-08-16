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
					<img src="{{URL::asset('img/logo.jpg')}}" width="50" alt="Fashion/Style" />
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
							@if (Auth::check())
								<h5>You are logged in as {{ Auth::user()->name }}</h5>
								<h4>Shipping address</h4>
							@else
								You are currently not logged in.
								<a class="btn btn-black" href="/login-page">Login</a>
							{{-- <a class="registered-customer" href="javascript:;">Already a client?</a> --}}
							@endif
						</div>
						<form action="" method="POST">
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="" placeholder="First name" value="{{ $user->customer->firstname }}" readonly>
							@else
								<input class="form-item-text" type="text" name="" placeholder="First name">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="" placeholder="Last name" value="{{ $user->customer->lastname }}" readonly>
							@else
								<input class="form-item-text" type="text" name="" placeholder="Last name">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="email" name="" placeholder="E-mail address" value="{{ Auth::user()->email }}" readonly>
							@else
								<input class="form-item-text" type="email" name="" placeholder="E-mail address">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="" placeholder="Phone number" value="{{ $user->customer->phone }}">
							@else
								<input class="form-item-text" type="text" name="" placeholder="Phone number">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="" placeholder="Street & number" value="{{ $user->customer->ship_address }}">
							@else
								<input class="form-item-text" type="text" name="" placeholder="Street & number">
							@endif
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="" placeholder="Apartement, unit (optional)">
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="" placeholder="Town / city" value="{{ $user->customer->bill_city }}">
							@else
								<input class="form-item-text" type="text" name="" placeholder="Town / city">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="" placeholder="Postcode" value="{{ $user->customer->bill_zip }}">
							@else
								<input class="form-item-text" type="text" name="" placeholder="Postcode">
							@endif
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
					</form>
					</div>
					<div class="shipping-methods block">
						<h6>Shipping method</h6>
						<div class="radio">
							<input id="rd1" type="radio" name="shipping-method" value="1" checked>
							<label class="form-radio" for="rd1">
								<span class="shipping-merchant"><img src="{{URL::asset('img/dpd-shipping.png')}}" width="87" alt=""></span> <span class="text">Standard<br/> (3 open days)</span> <strong>Free</strong>
							</label>
						</div>
						<div class="radio">
							<input id="rd2" type="radio" name="shipping-method" value="2">
							<label class="form-radio" for="rd2">
								<span class="shipping-merchant"><img src="{{URL::asset('img/dpd-shipping.png')}}" width="87" alt=""></span> <span class="text">Pick up point<br/> (2 open days)</span> <strong>Free</strong>
							</label>
						</div>
					</div>
					<div class="payment-methods block">
						<h6>Payment</h6>
						<div class="radio">
							<input id="pay1" type="radio" name="payment-method" value="1" checked>
							<label class="form-radio" for="pay1">
								<span class="payment-merchant">
									<img src="{{URL::asset('img/master-card-bw.svg')}}" alt="">
								</span>
								Mastercard
							</label>
						</div>
						<div class="radio">
							<input id="pay2" type="radio" name="payment-method" value="2">
							<label class="form-radio" for="pay2">
								<span class="payment-merchant">
									<img src="{{URL::asset('img/master-card-bw.svg')}}" alt="">
								</span>
								Amex
							</label>
						</div>
						<div class="radio">
							<input id="pay3" type="radio" name="payment-method" value="2">
							<label class="form-radio" for="pay3">
								<span class="payment-merchant">
									<img src="{{URL::asset('img/visa-bw.svg')}}" alt="">
								</span>
								Visa
							</label>
						</div>
						<div class="radio">
							<input id="pay4" type="radio" name="payment-method" value="2">
							<label class="form-radio" for="pay4">
								<span class="payment-merchant">
									<img src="{{URL::asset('img/visa-bw.svg')}}" alt="">
								</span>
								Bancontact
							</label>
						</div>
						<div class="radio">
							<input id="pay5" type="radio" name="payment-method" value="3">
							<label class="form-radio" for="pay5">
								<span class="payment-merchant">
									<img src="{{URL::asset('img/paypal-bw.svg')}}" alt="">
								</span>
								Paypal
							</label>
						</div>
						<div class="radio">
							<input id="pay6" type="radio" name="payment-method" value="2">
							<label class="form-radio" for="pay6">
								<span class="payment-merchant">
									<img src="{{URL::asset('img/paypal-bw.svg')}}" alt="">
								</span>
								Direct transfer
							</label>
						</div>
					</div>
					<a class="btn btn-black btn-big confirm-purchase" href="/thank-you-page">Confirm</a>
				</div>
				<div class="block-half checkout-orders">
					<h6>My order</h6>
					<div class="checkout-orders-list clearfix">
						@foreach (Cart::content() as $item)
						<div class="checkout-order">
							<div class="order-thumbnail">
								<a href="javascript:;">
									<img src="{{URL::asset('img/content/table-item1.jpg')}}" alt="">
								</a>
							</div>
							<div class="order-description">
								<h6><a href="javascript:;">{{ $item->name }}</a></h6>
								<span class="small-text">Size {{ $item->model->size }}</span>
								<span class="small-text">Quantity {{ $item->qty }}</span>
							</div>
							<span class="order-price">{{ $item->model->price }} €</span>
						</div>
						@endforeach
					</div>
					<div class="subtotal-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Sub total</span>
							<span class="price">{{ Cart::subtotal() }} €</span>
						</div>
						<div class="price-row">
							<span class="price-label">Shipping</span>
							<span class="price">Free</span>
						</div>
					</div>
					<div class="total-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Total(TVA<sup>Inc.</sup>)</span>
							<span class="price">{{ Cart::total() }}€</span>
						</div>
					</div>
					<form action="{{ route('coupon.store') }}" method="POST">
					<div class="discount-code-form form-item form-item-full">
						<label for="dsc" class="form-label">Use a discount code</label>
						<input class="form-item-text" type="text" name="dsc" id="dsc" placeholder="Discount code (eg. AFX8912)">
					</div>
						{{ csrf_field() }}
						<button type="submit" class="btn btn-black btn-big confirm-purchase show-mobile">Confirm</button>
					</form>
					@include('layouts.errors')
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
