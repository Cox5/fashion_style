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
	<script src="https://js.stripe.com/v3/"></script>
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
							@auth
								<h5>You are logged in as {{ Auth::user()->name }}</h5>
								<h4>Shipping address</h4>
							@endauth
							@guest
								You are currently not logged in.
								<a class="btn btn-black" href="/login-page">Login</a>
							{{-- <a class="registered-customer" href="javascript:;">Already a client?</a> --}}
							@endguest
						</div>
					<form action="{{ route('checkout.store') }}" id="payment-form" method="POST">
						{{ csrf_field() }}
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="firstname" placeholder="First name" value="{{ $user->customer->firstname }}" readonly>
							@else
								<input class="form-item-text" type="text" name="firstname" placeholder="First name">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="lastname" placeholder="Last name" value="{{ $user->customer->lastname }}" readonly>
							@else
								<input class="form-item-text" type="text" name="lastname" placeholder="Last name">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="email" name="email" placeholder="E-mail address" value="{{ Auth::user()->email }}" readonly>
							@else
								<input class="form-item-text" type="email" name="email" placeholder="E-mail address">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="phone" placeholder="Phone number" value="{{ $user->customer->phone }}">
							@else
								<input class="form-item-text" type="text" name="phone" placeholder="Phone number">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="shipping_address" placeholder="Street & number" value="{{ $user->address->ship_address }}">
							@else
								<input class="form-item-text" type="text" name="shipping_address" placeholder="Street & number">
							@endif
						</div>
						<div class="form-item">
							<input class="form-item-text" type="text" name="shipping_address_apt" placeholder="Apartement, unit (optional)">
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="shipping_city" placeholder="Town / city" value="{{ $user->address->ship_city }}">
							@else
								<input class="form-item-text" type="text" name="shipping_city" placeholder="Town / city">
							@endif
						</div>
						<div class="form-item">
							@if (Auth::check())
								<input class="form-item-text" type="text" name="shipping_zip" placeholder="Postcode" value="{{ $user->address->ship_zip }}">
							@else
								<input class="form-item-text" type="text" name="shipping_zip" placeholder="Postcode">
							@endif
						</div>
						<div class="form-item">
							<span class="form-label">Country</span>
							<select class="form-item-select" name="country">
								<option value="Belgium">Belgium</option>
								<option value="France">France</option>
								<option value="Netherlands">Netherlands</option>
								<option value="Germany">Germany</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Serbia">Serbia</option>
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

					<div class="checkout-login-form block">
						
						{{-- <div class="form-item">
							<label for="card-element">Credit or debit card</label>
								<div id="card-element">
										
								</div>
						</div>

						<div id="card-errors" role="alert"></div>
						</form> --}}

						<button type="submit" class="btn btn-black btn-big confirm-purchase" href="">Confirm</a>
					</form>

					</div>

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
						<div class="price-row">
								<span class="price-label">Discount</span>
						
						<div class="price-row">
							<hr></hr>
						</div>
								<span class="price-label">Coupon</span>
								<span class="price"> - {{ $discount }} €</span>
						</div>
						<div class="price-row">
							<span class="price-label">Subscribe</span>
							<span class="price"> - {{ $subscribe_discount }}</span>
					</div>
					</div>
					<div class="total-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Total(TVA<sup>Inc.</sup>)</span>
							<span class="price">{{ $newTotal }}€</span>
						</div>
					</div>

					@if ($user->customer->subscribed)
						<h5>You are eligible for a 10% discount</h5>
					@endif

					<hr></hr>

					@if (! session()->has('coupon'))
					<form action="{{ route('coupon.store') }}" method="POST">
					<div class="discount-code-form form-item form-item-full">
						<label for="dsc" class="form-label">Use a discount code</label>
						<input class="form-item-text" type="text" name="dsc" id="dsc" placeholder="Discount code (eg. AFX8912)" required>
						
					</div>
						{{ csrf_field() }}
						<button type="submit" class="btn btn-black btn-big confirm-purchase show-mobile">Confirm</button>
					</form>
					@endif
					<div class="discount-code-form form-item form-item-full">
					@if(session()->has('coupon'))
						<br>
							<label class="form-label"> Coupon is applied - {{ session()->get('coupon')['name']  }}</label>
							<form action="{{ route('coupon.destroy') }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('delete') }}
								<button class="btn btn-black" type="submit">Remove coupon</button>
							</form>
					@endif

					
					</div>

					@include('layouts.errors')
				</div>
			</div>

		</div>

	</div>

	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>

	<script>
		(function() {

			// Create a Stripe client.
			var stripe = Stripe('pk_test_g6do5S237ekq10r65BnxO6S0');

			// Create an instance of Elements.
			var elements = stripe.elements();

			// Custom styling can be passed to options when creating an Element.
			// (Note that this demo uses a wider set of styles than the guide below.)
			var style = {
			base: {
				color: '#32325d',
				lineHeight: '18px',
				fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
				fontSmoothing: 'antialiased',
				fontSize: '16px',
				'::placeholder': {
				color: '#aab7c4'
				}
			},
			invalid: {
				color: '#fa755a',
				iconColor: '#fa755a'
			}
			};

			// Create an instance of the card Element.
			var card = elements.create('card', {
				style: style,
				hidePostalCode: true
				});

			// Add an instance of the card Element into the `card-element` <div>.
			card.mount('#card-element');

			// Handle real-time validation errors from the card Element.
			card.addEventListener('change', function(event) {
			var displayError = document.getElementById('card-errors');
			if (event.error) {
				displayError.textContent = event.error.message;
			} else {
				displayError.textContent = '';
			}
			});

			// Handle form submission.
			var form = document.getElementById('payment-form');
			form.addEventListener('submit', function(event) {
			event.preventDefault();

			stripe.createToken(card).then(function(result) {
				if (result.error) {
				// Inform the user if there was an error.
				var errorElement = document.getElementById('card-errors');
				errorElement.textContent = result.error.message;
				} else {
				// Send the token to your server.
				stripeTokenHandler(result.token);
				}
			});
		});

			function stripeTokenHandler(token) {
				// Insert the token ID into the form so it gets submitted to the server
				var form = document.getElementById('payment-form');
				var hiddenInput = document.createElement('input');
				hiddenInput.setAttribute('type', 'hidden');
				hiddenInput.setAttribute('name', 'stripeToken');
				hiddenInput.setAttribute('value', token.id);
				form.appendChild(hiddenInput);

				// Submit the form
				//form.submit();
}

		})();
	</script>

</body>
</html>
