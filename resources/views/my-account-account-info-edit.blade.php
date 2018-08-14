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
						<div class="account-block-full">
							<div class="account-block-header">
								<h6>Contact infos</h6>
								<a href="">Edit</a>
							</div>
						<form action="/save-changes" method="POST">
							{{ csrf_field() }}
							<div class="form-item form-item-full">
								<input id="cbX" type="checkbox" name="cb" value="">
								<label class="form-checkbox" for="cbX">Use default shipping address infos</label>
							</div>
							<div class="account-block-form clearfix">
								<div class="form-item">
									<label for="firstname" class="form-item-label">first name</label>
									<input id="firstname" class="form-item-text" type="text" name="firstname" value="{{$user->customer->firstname}}">
								</div>
								<div class="form-item">
									<label for="lastname" class="form-item-label">last name</label>
									<input id="lastname" class="form-item-text" type="text" name="lastname" value="{{$user->customer->lastname}}">
								</div>
								<div class="form-item">
									<label for="email" class="form-item-label">Email address</label>
									<input id="email" class="form-item-text" type="text" name="email" value="{{$user->email}}">
								</div>
								<div class="form-item">
									<label for="phone" class="form-item-label">Phone number</label>
									<input id="phone" class="form-item-text" type="text" name="phone" value="{{$user->customer->phone}}">
								</div>
								<div class="form-item">
									<label for="date_of_birth" class="form-item-label">Birthday</label>
									<input id="date_of_birth" class="form-item-text" type="date" name="date_of_birth" value="{{$user->customer->date_of_birth}}">
								</div>
								<div class="form-item">
									<label for="gender" class="form-item-label">Gender</label>
									<select id="gender" class="form-item-select" name="gender">
										<option selected="{{$user->customer->gender}}">{{$user->customer->gender}}</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<button type="submit" class="btn btn-small btn-black">Save changes</button>
							</div>
						</form>
						</div>
						<div class="account-block-full">
							<div class="account-block-header">
								<h6>Password</h6>
								<a href="javascript:;">Edit</a>
							</div>
							<div class="account-block-form no-margin clearfix">
								<a class="btn btn-small btn-black" href="javascript:;">Change password</a>
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
