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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Make An Appointment</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">make an appointment</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Appointment Start -->
    <div class="page-book-appointment">
        <div class="container">
			<div class="book-appointment-form">
				<div class="row section-row">
					<div class="col-lg-12">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">booking</h3>
							<h2 class="text-anime-style-2" data-cursor="-opaque"><span>Book</span> Appointment</h2>
						</div>
						<!-- Section Title End -->
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="appointment-form wow fadeInUp">
							<!-- Form Start -->
							<form id="appointmentForm"  method="POST" data-toggle="validator">
								<div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="email" name ="email" class="form-control" id="email" placeholder="Enter Email" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<select name="services" class="form-control form-select" id="services" required>
											<option value="" disabled selected>Select Service</option>
											<option value="manual_therapy">manual therapy</option>
											<option value="chronic_pain">chronic pain</option>
											<option value="hand_therapy">hand therapy</option>
											<option value="sports_therapy">sports therapy</option>
											<option value="cupping_therapy">cupping therapy</option>
											<option value="ultrasound_therapy">ultrasound therapy</option>
											<option value="laser_therapy">laser therapy</option>
											<option value="craniosacral_therapy">craniosacral therapy</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-5">
										<input type="date" name="date" class="form-control" id="date" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="col-md-12 form-group">
										<button type="submit" class="btn-default">book appointment</button>
										<div id="msgSubmit" class="h3 hidden"></div>
									</div>
								</div>
							</form>
							<!-- Form End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Page Appointment End -->
    
    <!-- Client Testimonial Start -->
    <div class="our-testimonial parallaxie">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">review</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What</span> Our Client Say</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency professionals therapist services are designed to provide prompt.</p>									
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo $domain ?>assets/images/author-1.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>johan duo</h3>
                                                <p>professional athlete</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
            
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency professionals therapist services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo $domain ?>assets/images/author-2.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>jane smith</h3>
                                                <p>retired teacher</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency professionals therapist services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo $domain ?>assets/images/author-3.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>robert lee</h3>
                                                <p>construction worker</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency professionals therapist services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo $domain ?>assets/images/author-4.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>banson doe</h3>
                                                <p>marathon runner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Client Testimonial End -->
    
    <!-- Therapy Process Start -->
    <div class="therapy-process">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">therapy process</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What</span> is Therapy Process</h2>
                    </div>
                    <!-- Section Title End -->
                </div>  
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Therapy Process Item Start -->
                    <div class="therapy-process-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="<?php echo $domain ?>assets/images/therapy-process-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Therapy Process Content Start -->
                        <div class="therapy-process-content">
                            <h3>get paired with a therapist</h3>
                            <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                        </div>
                        <!-- Therapy Process Content End -->
                    </div>
                    <!-- Therapy Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Therapy Process Item Start -->
                    <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="<?php echo $domain ?>assets/images/therapy-process-2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Therapy Process Content Start -->
                        <div class="therapy-process-content">
                            <h3>choose your preferred way to receive care</h3>
                            <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                        </div>
                        <!-- Therapy Process Content End -->
                    </div>
                    <!-- Therapy Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Therapy Process Item Start -->
                    <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="<?php echo $domain ?>assets/images/therapy-process-3.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Therapy Process Content Start -->
                        <div class="therapy-process-content">
                            <h3>we help you get better, faster!</h3>
                            <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                        </div>
                        <!-- Therapy Process Content End -->
                    </div>
                    <!-- Therapy Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Therapy Process Item Start -->
                    <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="<?php echo $domain ?>assets/images/therapy-process-4.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Therapy Process Content Start -->
                        <div class="therapy-process-content">
                            <h3>what psychotherapy can help with</h3>
                            <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                        </div>
                        <!-- Therapy Process Content End -->
                    </div>
                    <!-- Therapy Process Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Therapy Process End -->

    <!-- Our Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Emergency No. : (+01) 789 856 258</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">For any additional inqueries : info@domainname.com</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Book Appointment: (+01) 879 526 789</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Working Hourse : Mon to Fri : 10:00 To 6:00 </span>
            </div>

            <div class="scrolling-content">
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Emergency No. : (+01) 789 856 258</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">For any additional inqueries : info@domainname.com</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Book Appointment: (+01) 879 526 789</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Working Hourse : Mon to Fri : 10:00 To 6:00 </span>
            </div>
        </div>
    </div>
	<!-- Scrolling Ticker Section End -->  

    <!-- Footer Start -->
    <?php include('../includes/footer.php') ?>
    <!-- Footer End -->
    
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

<!-- Mirrored from demo.awaikenthemes.com/html-preview/physiocare/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:50:18 GMT -->
</html>