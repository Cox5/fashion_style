<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>

	{{-- includes nav-bar  --}}
	@include('layouts.nav')

	<div class="container">

		<span class="page-overlay"></span>

		<div class="content block">

			<div class="block login-wrap">
				<div class="block-half">
					<div class="img-wrap">
						<img class="full-width" src="{{ URL::asset('img/content/login-image.jpg') }}" alt="">
					</div>
				</div>
				<div class="block-half">
					<div class="login-form-wrap">
						<h2>Log in</h2>
						<h6>Manage your orders, newsletter subscription and more</h6>
						<form action="/login" method="POST">
							{{ csrf_field() }}
						<div class="login-form clearfix">
							<h6>Don't have an account?</h6>
							<a class="btn btn-big create-account-btn" href="javascript:;">Create an account</a>
							<h6>Log in</h6>
							<div class="form-item form-item-full">
								<input class="form-item-text" type="email" name="email" id="email" placeholder="E-mail address">
							</div>
							<div class="form-item form-item-full">
								<input class="form-item-text" type="password" name="password" id="password" placeholder="Password">
							</div>
							<a class="forgot-password" href="javascript:;">Forgot your password?</a>
							<button type="submit" class="btn btn-black btn-big login-btn">Log in</button>
						</div>
					</form>
					</div>
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
