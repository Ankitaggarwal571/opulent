<html  lang="en">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="icon" href="{{asset('assets/front/img/favicon.png')}}">


	<!-- Title -->
	<title>DAANPAY-INDIA</title>

	<!-- Favicon -->
	<link rel="android-chrome" sizes="192x192" href="img/favicon-icon/android-chrome-192x192.png">
	<link rel="android-chrome" sizes="512x512" href="img/favicon-icon/android-chrome-512x512.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon-icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-icon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon-icon/site.webmanifest">





	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/nice-select.css')}}">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/font-awesome.min.css')}}">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/icofont.css')}}">
	<!-- Slicknav -->
	<link rel="stylesheet" href="{{asset('assets/front/css/slicknav.min.css')}}">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/owl-carousel.css')}}">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/datepicker.css')}}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">

	<!-- Medipro CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('assets/front/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">

</head>

<body>

	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>

			<div class="indicator">
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div>
	<!-- Header Area -->
	<header class="header">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row text-center ">
					<!-- Start Logo -->
					<div class="logo text-center">
						<a href="index.html"><img src="{{asset('assets/front/img/images/logo.png')}}" alt="#"><br><span>DAANPAY INDIA</span></a>
					</div>
					<!-- End Logo -->
				</div>
				
			</div>
		</div>
		<!-- End Topbar -->
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container-fluid">
				<div class="inner">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12 text-center">
							<!-- Start Logo -->
							
							<!-- End Logo -->
							<ul class="social">
								<li><a href="https://www.facebook.com/daanpay/" class="facebook"><i class="icofont-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/daanpay2021/" class="instagram"><i class="icofont-instagram"></i></a></li>
								<li><a href="#" class="twitter">
								<img src="https://skardtech.com/daanPay/public/assets/front/img/images/twitter-x.svg" alt="icon"></a></li>
								<li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
							</ul>
							<!-- Mobile Nav -->
							<div class="mobile-nav"></div>
							<!-- End Mobile Nav -->
						</div>
						<div class="col-lg-6 col-md-8 col-12 text-center">
							<!-- Main Menu -->
							<div class="main-menu">
								<nav class="navigation">
									<ul class="nav menu">
										<li class="active"><a href="{{route('home')}}">Home
												<!-- <i class="icofont-rounded-down"></i> -->
											</a>
										
										</li>
										<li><a href="{{route('about')}}">About Us</a></li>
										<!-- <li><a href="#">Key Information <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="#">Act</a></li>
												<li><a href="#">Norms</a></li>
												<li><a href="#">Manual</a></li>
											</ul>
										</li> -->
										<li><a href="{{route('contact')}}">Contact Us</a></li>
										<!-- <li><a href="contact.html">Inquiry</a></li> -->
									</ul>
								</nav>
							</div>
							
						</div>
						<div class="col-lg-2 col-12">
							<div class="get-quote">
							@if(auth()->user())
							<a href="{{route('User.profile')}}">Hi, {{auth()->user()->name}}</a>
							<a href="{{route('userlogout')}}">Logout</a>
							@endif
								 <a href="#" class="btn">Donate</a>
							</div>
							<div class="change-lang">
                        <div id="google_translate_element"> </div>
                    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>

	
	<!-- End Header Area -->