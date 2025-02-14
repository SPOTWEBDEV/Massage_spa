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
	<title>Physiocare - Physiotherapy HTML Template</title>
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
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="<?php echo $domain ?>assets/images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="#"><img src="<?php echo $domain ?>assets/images/icon-phone.svg" alt=""> +(123) 698-5245</a></li>
                            <li><a href="#"><img src="<?php echo $domain ?>assets/images/icon-mail.svg" alt=""> info@domain.com</a></li>
                            <li class="hide-mobile"><a href="#"><img src="<?php echo $domain ?>assets/images/icon-location.svg" alt=""> 24/11 Robert Road, New York, USA</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-lg-3 col-md-0">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="index-2.html">
						<img src="<?php echo $domain ?>assets/images/logo.svg" alt="Logo">
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item submenu"><a class="nav-link" href="index-2.html">Home</a>
                                    <ul class="sub-menu">
                                        <li class="nav-item"><a class="nav-link" href="index.html">Home - Hero Version 1</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-3.html">Home - Hero Version 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-4.html">Home - Hero Version 3</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-5.html">Home - Hero Version 4</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-6.html">Home - Hero Version 5</a></li>
                                    </ul>
                                </li>                                
                                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>                                        
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">Service Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="therapist.html">Our Therapist</a></li>                                        
                                        <li class="nav-item"><a class="nav-link" href="therapist-single.html">Therapist Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="testimonials.html">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faqs.html">FAQ's</a></li>
                                        <li class="nav-item"><a class="nav-link" href="appointment.html">Book Appointment</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>                                
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="#" class="btn-default">+(123) 698-5245</a>
                        </div>
                        <!-- Let’s Start Button End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">About Us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">about us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- About Us Start -->
    <div class="about-us page-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-us-image">
                        <div class="about-img">
                            <figure class="reveal image-anime">
                                <img src="<?php echo $domain ?>assets/images/about-img.jpg" alt="">
                            </figure>

                            <!-- Company Experience Box Start -->
                            <div class="company-experience">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-experience.svg" alt="">
                                </div>
                                <div class="company-experience-content">
                                    <h3><span class="counter">15</span>+</h3>
                                    <p>years of experience</p>
                                </div>
                            </div>
                            <!-- Company Experience Box End -->
                        </div>
                    </div>
                    <!-- About Image End -->
                </div>
                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                        <div class="about-content">
                        <!-- Section Title Start -->
                            <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">We Are The Best For <span>Physiotherapy</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt and effective care to help you manage pain, prevent further injury, and start your recovery process as quickly as possible.</p>
                            </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-about-us-1.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>nutrition strategies</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-about-us-2.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>be pro active</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-about-us-3.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>workout routines</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-about-us-4.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>support & motivation</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer">
                            <!-- Doctor Info Start -->
                            <div class="doctor-info wow fadeInUp" data-wow-delay="1s">
                                <div class="doctor-info-item">
                                    <div class="image-box">
                                        <figure class="image-anime">
                                            <img src="<?php echo $domain ?>assets/images/about-doctor-img.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="doctor-info-content">
                                        <h3>dr. jamie smith</h3>
                                        <p>Physiotherapy</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Doctor Info End -->

                            <!-- Appointment Button Start -->
                            <div class="appointment-btn wow fadeInUp" data-wow-delay="1s">
                                <a href="#" class="btn-default">Make an appointment</a>
                            </div>
                            <!-- Appointment Button End -->
                        </div>
                        <!-- About Us Footer End -->
                        </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
        </div>
    <!--  About Us End -->

    <!-- Company Counter Start -->
    <div class="company-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-counter-1.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Company Counter Content Start -->
                        <div class="company-counter-content">
                            <h3><span class="counter">78</span>+</h3>
                            <p>skilled therapist</p>
                        </div>
                        <!-- Company Counter Content End -->
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-counter-2.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Company Counter Content Start -->
                        <div class="company-counter-content">
                            <h3><span class="counter">98</span>%</h3>
                            <p>success rate</p>
                        </div>
                        <!-- Company Counter Content End -->
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-counter-3.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Company Counter Content Start -->
                        <div class="company-counter-content">
                            <h3><span class="counter">950</span>+</h3>
                            <p>patients treated</p>
                        </div>
                        <!-- Company Counter Content End -->
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-counter-4.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Company Counter Content Start -->
                        <div class="company-counter-content">
                            <h3><span class="counter">78</span>+</h3>
                            <p>Skilled Therapist</p>
                        </div>
                        <!-- Company Counter Content End -->
                    </div>
                    <!-- Company Counter Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Company Counter End -->

    <!-- Mission Vision Start -->
    <div class="mission-vision">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">vision to victory</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>We're a Recognized </span> & Quality Leader</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Mva Item Start -->
                    <div class="our-mva-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-our-mission.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Mva Content Start -->
                        <div class="mva-item-content">
                            <h3>our mission</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.derstand that injuries and acute pain can  unexpectedly.</p>
                        </div>
                        <!-- Mva Content End -->
                    </div>
                    <!-- Mva Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Mva Item Start -->
                    <div class="our-mva-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-our-vision.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Mva Content Start -->
                        <div class="mva-item-content">
                            <h3>our vision</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.derstand that injuries and acute pain can  unexpectedly.</p>
                        </div>
                        <!-- Mva Content End -->
                    </div>
                    <!-- Mva Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Mva Item Start -->
                    <div class="our-mva-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-our-approch.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Mva Content Start -->
                        <div class="mva-item-content">
                            <h3>our approch</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.derstand that injuries and acute pain can  unexpectedly.</p>
                        </div>
                        <!-- Mva Content End -->
                    </div>
                    <!-- Mva Item End -->
                </div>
            </div>
            
            <!-- Call To Action Start -->
            <div class="cta-infobar wow fadeInUp" data-wow-delay="0.75s">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Cta Content Start -->
                        <div class="cta-info-content">
                            <div class="icon-box">
                                <img src="<?php echo $domain ?>assets/images/icon-cta.svg" alt="">
                            </div>

                            <div class="cta-content">
                                <h3>ready to start your journey to recovery?</h3>
                                <p>Contact us today to schedule your initial consultation and take the first step towards a pain-free life.</p>
                            </div>
                        </div>
                        <!-- Cta Content End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Cta Appointment Button Start -->
                        <div class="cta-appointment-btn">
                            <a href="#" class="btn-default">book appointment</a>
                        </div>
                        <!-- Cta Appointment Button End -->
                    </div>
                </div>
            </div>
            <!-- Call To Action End -->
        </div>
    </div>
    <!-- Mission Vision End -->

    <!-- Quality Treatment Section Start -->
    <div class="quality-treatment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Video Treatment Video Start -->
                    <div class="quality-treatment-video" data-cursor-text="Play">
                        <!-- Video Image Start -->
                        <div class="video-image">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/quality-treatment-video-img.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Video Image End -->
                    
                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Video Treatment Video End -->
                </div>

                <div class="col-lg-6">
                    <!-- Quality Treatment Content Start -->
                    <div class="quality-treatment-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">solution to your plan</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">  <span>We Proudly</span> Give Quality Treatment</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt and effective care to help you manage.</p>
                         </div>
                        <!-- Section Title End -->

                         <!-- Quality Treatment Body Start -->
                        <div class="quality-treatment-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>We understand that injuries.</li>
                                <li> can happen unexpectedly. Our emergency .</li>
                                <li>We understand that injuries.</li>
                            </ul>
                        </div>
                        <!-- Quality Treatment Body End -->
                    </div>
                    <!-- Quality Treatment Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quality Treatment Section End -->

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
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>									
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
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
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
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
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
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
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

    <!-- Our Team Start -->
    <div class="our-team">
        <div class="container">
            <div class="row align-items-center section-row">
                <div class="col-lg-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">theraphist team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Dedicated</span> & Experienced Therapist Team</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-3">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="#" class="btn-default">view all team</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="<?php echo $domain ?>assets/images/team-1.jpg" alt="">
                            </figure>
                
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>dr. emily brown</h3>
                            <p>senior physiotherapist</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="<?php echo $domain ?>assets/images/team-2.jpg" alt="">
                            </figure>
                
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>dr. lisa johnson</h3>
                            <p>pediatric theraphist</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="<?php echo $domain ?>assets/images/team-3.jpg" alt="">
                            </figure>
                
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>dr. jessica wilson</h3>
                            <p>neurological theraphist</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="<?php echo $domain ?>assets/images/team-4.jpg" alt="">
                            </figure>
                
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>dr. linda thomas</h3>
                            <p>orthopedic theraphist</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
        </div>
    <!-- Our Team End -->

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

<!-- Mirrored from demo.awaikenthemes.com/html-preview/physiocare/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:50:06 GMT -->
</html>