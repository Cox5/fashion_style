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
								<a href="javascript:;">Edit</a>
							</div>
							<div class="form-item form-item-full">
								<input id="cbX" type="checkbox" name="cb" value="">
								<label class="form-checkbox" for="cbX">Use default shipping address infos</label>
							</div>
							<div class="account-block-form clearfix">
								<div class="form-item">
									<label for="input1" class="form-item-label">first name</label>
									<input id="input1" class="form-item-text" type="text" name="" value="John">
								</div>
								<div class="form-item">
									<label for="input2" class="form-item-label">last name</label>
									<input id="input2" class="form-item-text" type="text" name="" value="Smith">
								</div>
								<div class="form-item">
									<label for="input3" class="form-item-label">Email address</label>
									<input id="input3" class="form-item-text" type="text" name="" value="johnsmith@gmail.com">
								</div>
								<div class="form-item">
									<label for="input4" class="form-item-label">Phone number</label>
									<input id="input4" class="form-item-text" type="text" name="" value="+32 678202087">
								</div>
								<div class="form-item">
									<label for="input5" class="form-item-label">Birthday</label>
									<input id="input5" class="form-item-text" type="date" name="" value="12 décembre 1985">
								</div>
								<div class="form-item">
									<label for="select1" class="form-item-label">Gender</label>
									<select id="select1" class="form-item-select" name="">
										<option value="">Male</option>
										<option value="">Female</option>
									</select>
								</div>
							</div>
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
