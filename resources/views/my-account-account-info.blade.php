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
							<a href="javascript:;">My orders</a>
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
							<a href="{{route('account-info.show')}}">Account info</a>
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
						<a href="javascript:;" class="category-toggle js-category-toggle"></a>
					</ul>
				</div>
			</div>
			<div class="account-blocks">
				<div class="wrap">
					<div class="account-block-wrap clearfix">
						<div class="account-block-full">
							<div class="account-block-header">
							@auth
								<h6>Contact infos</h6>
								<a href="/my-account-account-info-edit">Edit</a>
							</div>
							<div class="account-block-form clearfix">
								<div class="form-item">
									<span class="form-item-label">first name</span>
									<p class="form-item-text">{{ $user->customer->firstname }}</p>
								</div>
								<div class="form-item">
									<span class="form-item-label">last name</span>
									<p class="form-item-text">{{ $user->customer->lastname}}</p>
								</div>
								<div class="form-item">
									<span class="form-item-label">Email address</span>
									<p class="form-item-text">{{ $user->email }}</p>
								</div>
								<div class="form-item">
									<span class="form-item-label">Phone number</span>
									<p class="form-item-text">{{ $user->customer->phone }}</p>
								</div>
								<div class="form-item">
									<span class="form-item-label">Birthday</span>
									<p class="form-item-text">{{$user->customer->date_of_birth}}</p>
								</div>
								<div class="form-item">
									<span class="form-item-label">Gender</span>
									<p class="form-item-text">{{$user->customer->gender}}</p>
								</div>
							</div>
						</div>
						<div class="account-block-full">
							<div class="account-block-header">
								<h6>Password</h6>
								<a href="javascript:;">Edit</a>
							</div>
							<div class="account-block-form no-margin clearfix">
								<a class="btn btn-black" href="/change-password">Change password</a>
							</div>
							@endauth
							@guest
								<h3>You must be logged in to see this page</h3>
							@endguest
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
