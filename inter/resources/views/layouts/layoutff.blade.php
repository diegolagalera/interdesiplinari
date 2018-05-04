
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Render &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('public2/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('public2/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('public2/css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{asset('public2/css/superfish.css')}}">

	<link rel="stylesheet" href="{{asset('public2/css/style.css')}}">


	<!-- Modernizr JS -->
	<script src="{{asset('public2/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<div class="top">
				<div class="container">
					<span> <a href="#"><i>@</i> info@freehtml5.co</a></span>
					<span> <a href="tel://+12345678910"><i class="icon-mobile3"></i> 123 4567 8910</a></span>
				</div>
			</div>
			<!-- end:top -->
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">Render</a></h1>
						<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="portfolio.html">Portfolio</a>
							</li>
							<li>
								<a href="services.html" class="fh5co-sub-ddown">Services</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="left-sidebar.html">Web Development</a></li>
								 	<li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">Free HTML5</a>
										<ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
											<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
											<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
											<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
										</ul>
									</li>
									<li><a href="#">UI Animation</a></li>
									<li><a href="#">Copywriting</a></li>
									<li><a href="#">Photography</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
					</div>
				</div>
			</header>
		</div>


		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" style="background-image: url({{asset('public2/images/work-1.jpg')}});">
				<div class="desc animate-box">
					<h2>Cluttered-Free Template</h2>
					<span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name"></a></span>
					<span><a class="btn btn-primary" href="#">Hire Us</a></span>
				</div>
			</div>

		</div>
		<!-- end:header-top -->
		<div id="fh5co-work-section">
			<div class="container">
				@yield('content')
			</div>
		</div>


		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>Copyright 2016  <a href="#">Render</a>. All Rights Reserved. <br>Made with by <a href="http://freehtml5.co/"></a> / Demo Images: <a href="https://unsplash.com/">Unsplash</a></p>
						</div>
						<div class="col-md-6">
							<ul class="footer-menu">
								<li><a href="#">Home</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="{{asset('public2/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('public2/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('public2/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('public2/js/jquery.waypoints.min.js')}}"></script>
	<!-- Superfish -->
	<script src="{{asset('public2/js/hoverIntent.js')}}"></script>
	<script src="{{asset('public2/js/superfish.js')}}"></script>

	<!-- Main JS (Do not remove) -->
	<script src="{{asset('public2/js/main.js')}}"></script>

	</body>
</html>
