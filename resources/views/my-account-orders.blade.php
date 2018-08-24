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
							<a href="{{route('order.show')}}">My orders</a>
						</li>
						<li>
							<a href="{{route('logout')}}">Log Out</a>
						</li>
						<li class="btn-close js-close-category">
							<a href="javascript:;">
								<i class="icon font-ico-close"></i>
							</a>
						</li>
					</ul>
					<ul class="sub-category">
						<li>
							<a href="{{route('account-info.show')}}">Account info</a>
						</li>
						<li>
							<a href="javascript:;">Address</a>
						</li>
						<li class="selected">
							<a href="{{route('order.show')}}">My orders</a>
						</li>
						<li>
							<a href="{{route('logout')}}">Log Out</a>
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
							@forelse($orders as $order)
								@if (! $order->shipped)
									<div class="table-row">
										<div class="table-item">
											<h6>{{ $order->created_at }}</h6>
										</div>
										<div class="table-item">
											<h6>{{ $order->id }}</h6>
										</div>
										<div class="table-item">
											<span class="item-price">{{ $order->total }}€</span>
										</div>
										<div class="table-item">
											<h6>{{ $order->tracking_number }}</h6> 
										</div>
										<div class="table-item">
											<h6>
												@if ($order->shipped == 0)
													Not shipped
												@else
													Shipped
												@endif
											</h6>
										</div>
										
										
										<div class="table-item toggle-subrow">
											<h6>
												<span class="hide-phablet">Detail of your articles</span>
												<span class="hide-tablet-up" data-hide="Hide ">details</span>
											</h6>
										</div>
										<div class="table-content">
											@foreach ($order->products as $product)
											<div class="table-subrow">
												<div class="subrow-item">
													<img src="{{URL::asset('img/content/products/'.$product->image_front.'.jpg')}}" width="100px" alt="">
												</div>
												<div class="subrow-item">
													<div class="item-desc">
														<h6> {{$product->product_name}}</h6>
														<span class="small-text">{{ $product->color }} - {{$product->size}}</span>
														<span class="small-text">Quantity: {{ $product->pivot->quantity }}</span>
														<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
													</div>
												</div>
												<div class="subrow-item">
													<span class="item-price">{{ $product->price }}€</span>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								@endif
							@empty
							<h4>You have no ongoing orders</h4>
							@endforelse
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
							@forelse($orders as $order)
								@if ($order->shipped)
									<div class="table-row">
										<div class="table-item">
											<h6> {{ $order->created_at}} </h6>
										</div>
										<div class="table-item">
											<h6>{{ $order->id }}</h6>
										</div>
										<div class="table-item">
											<span class="item-price">{{ $order->total }}€</span>
										</div>
										<div class="table-item">
											<h6>{{ $order->tracking_number }}</h6>
										</div>
										<div class="table-item">
												@if ($order->shipped)
													<h6>Shipped</h6>
												@else 
													<h6>Not shipped</h6>
												@endif
										</div>
										<div class="table-item toggle-subrow">
											<h6>
												<span class="hide-phablet">Detail of your articles</span>
												<span class="hide-tablet-up" data-hide="Hide ">details</span>
											</h6>
										</div>
										<div class="table-content">
											@foreach($order->products as $product)
											<div class="table-subrow">
												<div class="subrow-item">
													<img src="{{URL::asset('img/content/products/'.$product->image_front.'.jpg')}}" width="100px" alt="">
												</div>
												<div class="subrow-item">
													<div class="item-desc">
														<h6>{{ $product->product_name }}</h6>
														<span class="small-text">{{ $product->color}} - {{ $product->size}}</span>
														<span class="small-text">Quantity:  {{ $product->pivot->quantity}}</span>
														<a href="javascript:;" class="small-text hide-tablet-up">Viev article</a>
													</div>
												</div>
												<div class="subrow-item">
													<span class="item-price">{{ $product->price }}€</span>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								@endif
							@empty
								<h5>You don't have any completed orders yet. </h5>
							@endforelse

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
						<img src="{{ URL::asset('img/content/feed1.jpg')}}" alt="">
						<h4 class="feed-title">style in<br/>cotton</h4>
					</a>
				</div>
				<div class="feed-item">
					<a href="javascript:;">
						<img src="{{ URL::asset('img/content/feed2.jpg')}}" alt="">
						<h4 class="feed-title">style in<br/>cotton</h4>
					</a>
				</div>
				<div class="feed-item">
					<a href="javascript:;">
						<img src="{{ URL::asset('img/content/feed3.jpg')}}" alt="">
						<h4 class="feed-title">style in<br/>cotton</h4>
					</a>
				</div>
				<div class="feed-item">
					<a href="javascript:;">
						<img src="{{ URL::asset('img/content/feed4.jpg')}}" alt="">
						<h4 class="feed-title">style in<br/>cotton</h4>
					</a>
				</div>
				<div class="centered">
					<a class="btn btn-big" href="javascript:;">Share your style</a>
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
