<?php

include('../server/connection.php')

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
	<title><?php  echo $sitename ?></title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="<?php echo $domain ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="<?php echo $domain ?>assets/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="<?php echo $domain ?>assets/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="<?php echo $domain ?>assets/css/all.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="<?php echo $domain ?>assets/css/animate.css" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="<?php echo $domain ?>assets/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="<?php echo $domain ?>assets/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="<?php echo $domain ?>assets/css/custom.css" rel="stylesheet" media="screen">
	<!-- Include SweetAlert2 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>

	


	<!-- Preloader Start -->
	<!-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="<?php echo $domain ?>assets/images/loader.svg" alt=""></div>
		</div>
	</div> -->
	<!-- Preloader End -->

	<?php include('../includes/navbar.php') ?>

	<!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Page Contact Start -->
	<div class="page-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="<?php echo $domain ?>assets/images/icon-green-location.svg" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Contact Info Content Start -->
						<div class="contact-info-content">
							<h3>location</h3>
							<p>At Caversham House, 18 Kingston Gardens Beddington surrey cr0 4tx </p>
						</div>
						<!-- Contact Info Content End -->
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="<?php echo $domain ?>assets/images/icon-green-mail.svg" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Contact Info Content Start -->
						<div class="contact-info-content">
							<h3>email</h3>
							<p>info@domainname.com</p>
							<p>circlesmith880@gmail.com</p>
						</div>
						<!-- Contact Info Content End -->
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="<?php echo $domain ?>assets/images/icon-green-phone.svg" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Contact Info Content Start -->
						<div class="contact-info-content">
							<h3>phone</h3>
							<p>+234 744 3961 597</p>
							<p>+234 781 0556 515</p>
						</div>
						<!-- Contact Info Content End -->
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="<?php echo $domain ?>assets/images/icon-green-hour.svg" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Contact Info Content Start -->
						<div class="contact-info-content">
							<h3>working hours</h3>
							<p>Mon to Fri : 10:00 To 6:00</p>
							<p>Sat : 10:00AM To 3:00PM</p>
						</div>
						<!-- Contact Info Content End -->
					</div>
					<!-- Contact Info Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Contact End -->

	<!-- Contact Form Start -->
	<div class="contact-us-form">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- Contact Us Image Start -->
					<div class="contact-us-img">
						<figure class="reveal image-anime">
							<img src="<?php echo $domain ?>assets/images/contact-us-img.jpg" alt="">
						</figure>
					</div>
					<!-- Contact Us Image End -->
				</div>
				<div class="col-lg-6">
					<div class="contact-form">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">contact us</h3>
							<h2 class="text-anime-style-2" data-cursor="-opaque"><span>Get</span> In Touch with Us</h2>
						</div>
						<!-- Section Title End -->

						<form form id="contactForm"  method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
							<div class="row">
								<div class="form-group col-md-6 mb-4">
									<input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Name" required="">
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required="">
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required="">
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="">
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-12 mb-5">
									<textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Your Message" required=""></textarea>
									<div class="help-block with-errors"></div>
								</div>

								<div class="col-md-12">
									<button type="submit" class="btn-default disabled">send message</button>
									<div id="msgSubmit" class="h3 hidden"></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Form End -->

	

	<!-- Our Scrolling Ticker Section Start -->
	<div class="our-scrolling-ticker">
		<!-- Scrolling Ticker Start -->
		<div class="scrolling-ticker-box">
			<div class="scrolling-content">
				<span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Emergency No. :+234 781 0556 515</span>
				<span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">For any additional inqueries :circlesmith880@gmail.com</span>
				<span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Book Appointment:+234 744 3961 597</span>
				<span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Working Hours : Mon to Fri : 10:00 To 6:00 </span>
			</div>

			<div class="scrolling-content">
				<span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Emergency No. : +234 781 0556 515</span>
				<span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">For any additional inqueries : circlesmith880@gmail.com</span>
				<span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Book Appointment: +234 744 3961 597</span>
				<span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">hours : Mon to Fri : 10:00 To 6:00 </span>
			</div>
		</div>
	</div>
	<!-- Scrolling Ticker Section End -->

	<!-- Footer Start -->
	<?php include('../includes/footer.php') ?>
	<!-- Footer End -->
	<!-- Include SweetAlert2 JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>

	<!-- Jquery Library File -->
	<script src="<?php echo $domain ?>assets/js/jquery-3.7.1.min.js"></script>
	<!-- Bootstrap js file -->
	<script src="<?php echo $domain ?>assets/js/bootstrap.min.js"></script>
	<!-- Validator js file -->
	<script src="<?php echo $domain ?>assets/js/validator.min.js"></script>
	<!-- SlickNav js file -->
	<script src="<?php echo $domain ?>assets/js/jquery.slicknav.js"></script>
	<!-- Swiper js file -->
	<script src="<?php echo $domain ?>assets/js/swiper-bundle.min.js"></script>
	<!-- Counter js file -->
	<script src="<?php echo $domain ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo $domain ?>assets/js/jquery.counterup.min.js"></script>
	<!-- Magnific js file -->
	<script src="<?php echo $domain ?>assets/js/jquery.magnific-popup.min.js"></script>
	<!-- SmoothScroll -->
	<script src="<?php echo $domain ?>assets/js/SmoothScroll.js"></script>
	<!-- Parallax js -->
	<script src="<?php echo $domain ?>assets/js/parallaxie.js"></script>
	<!-- MagicCursor js file -->
	<script src="<?php echo $domain ?>assets/js/gsap.min.js"></script>
	<script src="<?php echo $domain ?>assets/js/magiccursor.js"></script>
	<!-- Text Effect js file -->
	<script src="<?php echo $domain ?>assets/js/SplitText.js"></script>
	<script src="<?php echo $domain ?>assets/js/ScrollTrigger.min.js"></script>
	<!-- YTPlayer js File -->
	<script src="<?php echo $domain ?>assets/js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Wow js file -->
	<script src="<?php echo $domain ?>assets/js/wow.js"></script>
	<!-- Main Custom js file -->
	<script src="<?php echo $domain ?>assets/js/function.js"></script>
	<script src="../../assets/<?php echo $domain ?>assets/js/theme-panel.js"></script>
</body>

<!-- Mirrored from demo.awaikenthemes.com/html-preview/physiocare/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:50:20 GMT -->

</html>