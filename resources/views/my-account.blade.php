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
							<a href="javascript:;" class="active">Account info</a>
						</li>
						<li>
							<a href="javascript:;">Address</a>
						</li>
						<li>
							<a href="javascript:;" >My orders</a>
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
						<li class="selected">
							<a href="javascript:;">Account info</a>
						</li>
						<li>
							<a href="javascript:;">Address</a>
						</li>
						<li>
							<a href="javascript:;">My orders</a>
						</li>
						<li>
							<a href="javascript:;">Log Out</a>
						</li>
						<a href="javascript:;" class="category-toggle js-category-toggle"></a>
					</ul>
				</div>
			</div>
			<div class="account-blocks">
				<div class="wrap">
					<div class="account-block-wrap clearfix">
						@guest
						<div class="alert alert-warning">
							<strong>Warning!</strong> You must be logged in to see account info.
						</div>
						@endguest
						
						@auth
						<div class="account-block">
							<div class="account-block-header">
								<h6>Billing address</h6>
								<a href="javascript:;">Edit</a>
							</div>
							<div class="account-block-content">
								<p>{{ $user->name }}</p>
								<p>{{ $user->address->bill_address }}</p>
								<p>{{ $user->address->bill_city }}</p>
								<p>{{ $user->address->bill_zip }}</p>
								<p>{{ $user->address->bill_country }}</p>
						
							
							</div>
							<a class="add-more" href="javascript:;">Add an new address</a>
						</div>
						<div class="account-block">
							<div class="account-block-header">
								<h6>Shipping address</h6>
								<a href="javascript:;">Edit</a>
							</div>
							<div class="account-block-content">
								<p>{{ $user->name }}</p>
								<p>{{ $user->address->ship_address }}</p>
								<p>{{ $user->address->ship_city }}</p>
								<p>{{ $user->address->ship_zip }}</p>
								<p>{{ $user->address->ship_country }}</p>
							@endauth
						
							</div>
						</div>
					</div>
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
