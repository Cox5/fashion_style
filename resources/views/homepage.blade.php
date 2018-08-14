<!DOCTYPE html>
<html>
<head>
		@include('layouts.head')
</head>
<body>
	<div class="container">
		<span class="page-overlay"></span>

		@include('layouts.nav')

		<div class="content">
			<div class="block collections-block">
				<div class="block-wrap">
					<img src="{{URL::asset('img/content/home-collection-1.jpg')}}" alt="" class="desktop-img">
					<img src="{{URL::asset('img/content/home-collection-mob1.jpg') }}" alt="" class="mobile-img">
					<a class="btn btn-black btn-big" href="javascript:;">shop to collection</a>
				</div>
				<div class="block-wrap">
					<img src="{{URL::asset('img/content/home-collection-2.jpg')}}" alt="" class="desktop-img">
					<img src="{{URL::asset('img/content/home-collection-mob2.jpg') }}" alt="" class="mobile-img">
					<a class="btn btn-black btn-big" href="javascript:;">shop to collection</a>
				</div>
			</div>
			<!-- video -->
			<div class="block video-block">
				<div class="video-bg-wrap">
					<video loop="" muted="" autoplay="" poster="" class="video-bg">
						<source src="https://www.videvo.net/videvo_files/converted/2016_09/videos/160820_399_NYC_OutOfFocusCarLightsLOOP_1080p.mp413592.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<!-- novelties -->
			<div class="block novelties">
				<div class="wrap">
					<h2>
						<span class="back">What's new?</span>
						<span class="front">New store in Berlin</span>
					</h2>
					<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat lorem ipsum dolor sit amet.</p>
					<a href="javascript:;">Learn more</a>
				</div>
			</div>
		</div>

		@include('layouts.footer')

		<!-- subscribe block -->
		<div class="subscribe-block">
			<h2>Subscribe to our newsletter</h2>
			<p>Subscribe to our newsletter and get 10% off on your first order.</p>
			<form action="/subscribe" method="POST">
					{{ csrf_field() }}
				<input type="email" placeholder="E-mail address" id="email" name="email">
				<div class="form-item checkbox">
					<input id="man" type="checkbox" name="gender" value="M">
					<label class="form-checkbox" for="man">Man</label>
				</div>
				<div class="form-item checkbox">
					<input id="women" type="checkbox" name="gender" value="F">
					<label class="form-checkbox" for="women">Women</label>
				</div>
				<button type="submit" class="btn btn-black btn-big">Subscribe</button>
			</form>
			<a href="javascript:;" class="icon font-ico-close-big js-subscribe-close"></a>
		</div>
	</div>
	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>
</body>
</html>
