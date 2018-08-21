<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>

		<script src="{{ asset('js/app.js') }}"></script>
		<script>
			(function(){
				const classname = document.querySelectorAll('.form-item-select');
	
				Array.from(classname).forEach(function(element)) {
					element.addEventListener('change', function() {
						alert('changed');
					})
				})
			})();
		</script>

	<div class="container">

		<span class="page-overlay"></span>

		@include('layouts.nav')

		<div class="content block">
			<div class="checkout-blocks block">
				<div class="block-half checkout-orders">
					<h3>My <span>shopping</span> bag</h3>
					@if(Cart::count() > 0)
						<span class="subtitle"><i class="icon font-ico-basket"></i> My shopping bag, {{ Cart::count() }} item(s)</span>
					@else 
						<span class="subtitle"><i class="icon font-ico-basket"></i> Shopping bag is empty</span>
					@endif
					<div class="checkout-orders-list clearfix">
						{{-- add product to cart dynamically down below --}}
						
						@foreach (Cart::content() as $item)
						<div class="checkout-order">
							<div class="order-thumbnail">
								<a href="javascript:;">
									<img src="{{URL::asset('img/content/bag-item2.jpg')}}" alt="" class="desktop-img">
									<img src="{{URL::asset('img/content/bag-item-mob1.jpg')}}" alt="" class="mobile-img">
									<span class="img-ratio">image vignette ratio <span>800x1000</span></span>
								</a>
							</div>
							<div class="order-description">
								<h6><a href="/product/{{$item->model->id}}"> {{$item->name}}</a></h6>
								<span class="order-price">{{ $item->price }}<sup>,00€</sup></span>
								<span class="small-text color">{{$item->model->color}}</span>
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
							<form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit"><i class="icon font-ico-recycle-bin"></i></button>
								{{-- <a class="remove-product" href=";"><i class="icon font-ico-recycle-bin"></i></a> --}}
							</form>
						</div>
						@endforeach
					</div>
					<div class="subtotal-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Sub-total</span>
							<span class="price">{{ Cart::subtotal() }}€</span>
						</div>
					</div>
				</div>
				<div class="block-half checkout-form-wrap">
					<p>You need help finding the right size? <br>Check out our <a href="javascript:;">size guide</a>.</p>
					<div class="subtotal-prices order-prices block">
						<div class="price-row sub-total-row">
							<span class="price-label">Sub total</span>
							<span class="price">{{ Cart::subtotal() }}€</span>
						</div>
						<div class="price-row shipping-row">
							<span class="price-label">Shipping</span>
							{{-- <span class="price">5<sup>,00€</sup></span> --}}
							<span class="price">Free</span>
						</div>
						{{-- <div class="price-row discount-row">
							<span class="price-label">Discount</span>
							<span class="price">-{{session()->get('coupon')['discount']}}€</sup></span>
						</div> --}}
					</div>
					<div class="total-prices order-prices block">
						<div class="price-row">
							<span class="price-label">Total</span>
							<span class="total-price">{{ Cart::subtotal() }} €</span>
						</div>
					</div>
					<a class="btn btn-black btn-medium confirm-purchase" href="{{ route('checkout.index') }}">proceed to checkout</a>
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
