
@extends('layouts.main')
@section('content')
    <!-- Introduce -->
    @include('layouts.introduce')
    <!-- End Introduce -->
	<!-- Post Content -->
	<section class="content">
		<section class="content-left">
			<div class="tabbar-control">
				<a href="#">
					<span class="line-control">
						<div class="trending">Trending</div>
					</span>
				</a>
				<a href="#">
					<span class="line-control">
						<div class="trending">Colection</div>
					</span>
				</a>
				<a href="#">
					<span class="line-control">
						<div class="trending">Tags</div>
					</span>
				</a>
				<a href="#">
					<span class="line-control">
						<div class="trending">News</div>
					</span>
				</a>
			</div>
			<div class="container-main">
				<div class="container">
					<a href="#"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			    <div class="container">
					<a href="#"><img src="images/bg1.jpg" alt="" class="content-post-image"></a>
					<div class="content-post-main">
						<a href="#"><h4 class="content-post-title">Love is the moments</h4></a>
						<i class="fa fa-user content-post-user">Admin</i>
						<i class="fas fa-calendar content-post-calendar">Jun 24, 2020</i>
						<p class="content-post">What is love? I want to traveling around the world.</p>
					</div>
			    </div>
			</div>
	    </section>

		<section class="content-right">
			<a href="#"><img src="images/bg1.jpg" alt="" class="avatar-right-image"></a>
			<div class="content-avatar">
				<h3 class="content-avatar-title">Aventure</h3>
				<h5 class="content-avatar-header">Inspiring Stories Of Aventure</h5>
				<p class="content-avatar-main">Let's go! Traveling around the world.</p>
			</div>
		</section>
	</section>
	<!-- End Post Content -->

	<!-- Featured -->

	@include('layouts.featured')
	<!-- End Featured -->

	<!-- Page Wrapper -->
	@include('layouts.trendingPost')
	<!-- End Page Wrapper -->
@endsection
