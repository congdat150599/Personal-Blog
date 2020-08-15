<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
	<!--<link rel="stylesheet" href="style.css">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- fonts -->
	<script src="https://kit.fontawesome.com/6e4540c13e.js" crossorigin="anonymous"></script>

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">

	<!-- slick carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<!-- AOS library -->
	<link rel="stylesheet" href="/css/aos.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- 	custom styling -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="/css/footer.css" type="text/css" rel="stylesheet">
    <link href="/css/reset.css" type="text/css" rel="stylesheet">
    <link href="/css/shared.css" type="text/css" rel="stylesheet">
    <link href="/css/post.css" type="text/css" rel="stylesheet">
    <link href="/css/footer.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/css/blog.css">
</head>
<body>
	<!-- header -->
    <header>
		<div class="logo">
			<h1 class="logo-text"><span>Travel</span>Blog</hi>
		</div>
		<i class="fa fa-bars menu-toggle"></i>
		<ul class="nav">
			<li><a href="{{route('home')}}">Home</a></li>
			<li><a href="{{route('blog')}}">Blog</a></li>
			<li><a href="#">About</a></li>	
			<li class="account-toggle">
				<a href="#">
					<i class="fa fa-user"></i>
					Cong Dat
					<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
				</a>
				<ul>
					<li><a href="#">Dashboard</a></li>
			        <li><a href="#" class="logout">Logout</a></li>
				</ul>
			</li>
		</ul>
	</header>
	<!-- End header -->
	

	@yield('content')
    <!-- footer -->
	<footer class="footer">
	    <div class="slogan" data-aos="zoom-out-left" data-aos-delay="200">The World most Interesting Blog!</div>
	    <div class="logo" data-aos="flip-right" data-aos-delay="200">
	        <img src="/images/logo-placeholder.png">
	    </div>
	    <hr />
	    <div class="bottom">
	        <div class="social-group">
	            <div class="social-icon facebook"></div>
	            <div class="social-icon twitter"></div>
	            <div class="social-icon linked"></div>
	            <div class="social-icon youtube"></div>
	        </div>
	        <div class="copyrights">Made by Anbcdeptraivkl and Cong Dat © Copyrights 2020</div>
	    </div>
    </footer>	
    <!-- end footer -->

<!--Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- slick carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- aos js -->
<script type="text/javascript" src="/js/aos.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	  AOS.init();
</script>

<script src="/js/script.js"></script>
<script src="../../js/script.js"></script>
<script src="../../../public/js/script.js"></script>
<script src="/js/parallax.min.js"></script>
<script>
  var rellax = new Rellax('.rellax');
</script>
</body>
</html>