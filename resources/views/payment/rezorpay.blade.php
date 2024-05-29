<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="icon" href="https://skardtech.com/daanPay/public/assets/front/img/favicon.png">


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
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/bootstrap.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/nice-select.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/font-awesome.min.css">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/icofont.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/slicknav.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/owl-carousel.css">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/datepicker.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/animate.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/magnific-popup.css">

	<!-- Medipro CSS -->
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/normalize.css">
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/style.css">
	<link rel="stylesheet" href="https://skardtech.com/daanPay/public/assets/front/css/responsive.css">
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">-->


</head>

<body>
    <div class="container d-none">
        <div class="row">
        <div class="col-md-6 mb-4" style="cursor: pointer">
                <div class="card">
                    <div class="card-body" style="height: 100px">
                        <form action="" method="POST">
                        @csrf

						@php
						$amount = $data->amount * 100;
						@endphp
                        <!-- Note that the amount is in paise = 50 INR -->
                            <!--amount need to be in paisa-->
                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key="rzp_test_H7oJK9aYUXcje5"
                                    data-amount="{{$amount}}"
                                    data-buttontext="Pay {{$amount}} INR"
                                    data-name="daanPay"
                                    data-description="daanPay"
                                    data-image="khjhj"
                                    data-prefill.name="{{$data->fname}} {{$data->lname}}"
                                    data-prefill.email="{{$data->email}}"
                                    data-theme.color="#ff7529">
                            </script>
                        </form>

                        <button class="btn btn-block click-if-alone" type="button"
                                onclick="$('.razorpay-payment-button').click()">
                            <!-- <img width="150"
                                 src="{{asset('public/assets/front-end/img/razor.png')}}"/> -->
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      document.querySelector('.razorpay-payment-button').click();

    </script>
            	<!-- jquery Min JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/jquery.min.js"></script>
	<!-- jquery Migrate JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/jquery-migrate-3.0.0.js"></script>
	<!-- jquery Ui JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/jquery-ui.min.js"></script>
	<!-- Easing JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/easing.js"></script>
	<!-- Color JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/colors.js"></script>
	<!-- Popper JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/popper.min.js"></script>
	<!-- Bootstrap Datepicker JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/bootstrap-datepicker.js"></script>
	<!-- Jquery Nav JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/jquery.nav.js"></script>
	<!-- Slicknav JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/slicknav.min.js"></script>
	<!-- ScrollUp JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/jquery.scrollUp.min.js"></script>
	<!-- Niceselect JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/niceselect.js"></script>
	<!-- Tilt Jquery JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/tilt.jquery.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/owl-carousel.js"></script>
	<!-- counterup JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/jquery.counterup.min.js"></script>
	<!-- Steller JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/steller.js"></script>
	<!-- Wow JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/wow.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up CDN JS -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/bootstrap.min.js"></script>
	<!-- Main JS -->
	<script src="https://skardtech.com/daanPay/public/assets/front/js/main.js"></script>
</body>

</html>