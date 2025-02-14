<?php

include('./server/connection.php')

?>


<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/physiocare/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:49:57 GMT -->
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

     <?php include('./includes/navbar.php') ?>

    <!-- Hero Section Start -->
	<div class="hero bg-image parallaxie">
		<div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">welcome to physiocare</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Destination</span> For Relief & Wellness</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted the readable content of a page when looking at layout the point of using lorem the Ipsum less normal distribution of letters.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="btn-default">explore services</a>
                            <a href="#" class="btn-default btn-highlighted">book appointment</a>
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
	</div>
	<!-- Hero Section End -->

    <!-- Home Contact Us Start -->
    <div class="home-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-home-contact-us-1.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>expert therapists</h3>
                            <p>Our team of licensed and certified physiotherapists</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-home-contact-us-2.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>emergency service</h3>
                            <p>Our emergency physiotherapy services are designed to address</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-home-contact-us-3.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>free consultant</h3>
                            <p>Our mission is to enhance the quality of life of our patients</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>
            </div>
        </div>
        </div>
    <!-- Home Contact Us End -->

    <!-- About Us Start -->
    <div class="about-us">
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

    <!-- Gallery Carousel Section Start -->
    <div class="gallery-carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Scrolling Content Start -->
                    <div class="gallery-carousel-box">
                        <div class="gallery-scrolling-content">
                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-4.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-5.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-6.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->
                        </div>

                        <div class="gallery-scrolling-content">
                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-4.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-5.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/gallery-6.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->
                        </div>
                    </div>
                    <!-- Scrolling Content End -->
                </div>
            </div>
        </div>

    </div>
    <!-- Gallery Carousel Section End -->

    <!-- Our Service Start -->
     <div class="our-service">
        <div class="container">
            <div class="row align-items-center section-row">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">theraphist team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>We Provide</span> The Best Services</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="#" class="btn-default">view all services</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-service-1.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <h3>manual therapy</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-service-2.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <h3>chronic pain</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-service-3.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <h3>hand therapy</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-service-4.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <h3>sports therapy</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-service-5.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <h3>cupping therapy</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-service-6.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <h3>laser therapy</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-6">
                    <!-- Service Item Start -->
                    <div class="service-item service-cta-item wow fadeInUp" data-wow-delay="1.2s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-cta.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <h3>ready to start your journey to recovery?</h3>
                            <p>We understand that injuries and acute pain can  unexpectedly. Our emergency physiotherapy.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-cta-btn">
                            <a href="#" class="btn-default">Book Appointment</a>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>                
            </div>
        </div>
     </div>
    <!-- Our Service End -->

    <!-- Solution Your Plan Start -->
    <div class="solution-your-plan">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Solution Plan Image Start -->
                    <div class="solution-plan-image">
                        <div class="solution-plan-img-1">
                            <figure class="image-anime reveal">
                                <img src="<?php echo $domain ?>assets/images/solution-plan-img-1.jpg" alt="">
                            </figure>
                        </div>

                        <div class="solution-plan-img-2">
                            <figure class="image-anime reveal">
                                <img src="<?php echo $domain ?>assets/images/solution-plan-img-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- Solution Plan Image End -->
                </div>
                <div class="col-lg-6">
                    <!-- Solution Plan Content Start -->
                    <div class="solution-plan-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">solution to your plan</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">  <span>We Proudly</span> Give Quality Treatment</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt and effective care to help you manage.</p>
                         </div>
                        <!-- Section Title End -->

                         <!-- Solution Plan Body Start -->
                        <div class="solution-plan-body wow fadeInUp"  data-wow-delay="0.5s">
                            <ul>
                                <li>We understand that injuries.</li>
                                <li>can happen unexpectedly Our emergency.</li>
                                <li>We understand that injuries.</li>
                            </ul>
                        </div>
                        <!-- Solution Plan Body End -->

                        <!-- Solution Plan Counter Start -->
                        <div class="solution-plan-counter">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <!-- Solution Counter Item Start -->
                                    <div class="solution-counter-item">
                                        <div class="icon-box">
                                            <img src="<?php echo $domain ?>assets/images/icon-solution-counter-1.svg" alt="">
                                        </div>

                                        <div class="solution-counter-content">
                                            <h3><span class="counter">78</span>+</h3>
                                            <p>skilled therapist</p>
                                        </div>
                                    </div>
                                    <!-- Solution Counter Item End -->
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <!-- Solution Counter Item Start -->
                                    <div class="solution-counter-item">
                                        <div class="icon-box">
                                            <img src="<?php echo $domain ?>assets/images/icon-solution-counter-2.svg" alt="">
                                        </div>

                                        <div class="solution-counter-content">
                                            <h3><span class="counter">98</span>%</h3>
                                            <p>success rate</p>
                                        </div>
                                    </div>
                                    <!-- Solution Counter Item End -->
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <!-- Solution Counter Item Start -->
                                    <div class="solution-counter-item">
                                        <div class="icon-box">
                                            <img src="<?php echo $domain ?>assets/images/icon-solution-counter-3.svg" alt="">
                                        </div>

                                        <div class="solution-counter-content">
                                            <h3><span class="counter">950</span>+</h3>
                                            <p>patients treated</p>
                                        </div>
                                    </div>
                                    <!-- Solution Counter Item End -->
                                </div>
                            </div>
                        </div>  
                        <!-- Solution Plan Counter End -->
                    </div>
                </div>
                <!-- Solution Plan Content End -->
            </div>
        </div>
    </div>
    <!-- Solution Your Plan End -->

    <!-- Why Choose Us Start -->
     <div class="why-choose-us">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">why us</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Excellence In</span> Care And Rehabilitation</h2>
                    </div>
                <!-- Section Title End -->
            </div>

            <!-- Why Choose Us Box Start -->
            <div class="why-choose-us-box">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-6">
                        <!-- Why Choose Box Start -->
                        <div class="why-choose-box-1">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-why-us-1.svg" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>experienced team</h3>
                                    <p>We understand that injuries and acute pain can  unexpectedly.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
    
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-why-us-2.svg" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>patient-centered approach</h3>
                                    <p>We understand that injuries and acute pain can  unexpectedly.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
    
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-why-us-3.svg" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>expertise and experience</h3>
                                    <p>We understand that injuries and acute pain can  unexpectedly.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Box End -->
                    </div>
    
                    <div class="col-lg-6">
                        <!-- Why Choose Box Start -->
                        <div class="why-choose-box-2">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-why-us-4.svg" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>advanced technology</h3>
                                    <p>We understand that injuries and acute pain can  unexpectedly.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
    
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-why-us-5.svg" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>convenient and accessible</h3>
                                    <p>We understand that injuries and acute pain can  unexpectedly.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
    
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-why-us-6.svg" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>community involvement</h3>
                                    <p>We understand that injuries and acute pain can  unexpectedly.</p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Box End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image">
                            <img src="<?php echo $domain ?>assets/images/why-us-img.png" alt="">
                        </div>
                        <!-- Why Choose Image End -->
                    </div>
                </div>
            </div>
            <!-- Why Choose Us Box End -->
        </div>
     </div>
    <!-- Why Choose Us End -->

    <!-- Need Attention Start -->
     <div class="need-attention parallaxie">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">need attention</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Where Do You Need Attention?</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt and effective care to help you manage.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                     <div class="need-attention-list wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-1.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>neck pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                     </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-2.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>shoulder pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-3.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>hip pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-4.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>knee pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-5.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>elbow pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-6.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>tricep pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-7.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>hand pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-8.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>foot pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-need-attention-9.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>ankle pain</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>
            </div>
        </div>
     </div>
    <!-- Need Attention End -->

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
                    <div class="team-member-item wow fadeInUp"  data-wow-delay="0.5s">
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
    
    <!-- Our Blog Section End -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">news & blog</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Latest</span> Insights And Updates</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-3">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="#" class="btn-default">view all blog</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a href="#" class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/post-1.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">10 essential benefits of regular physiotherapy</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a href="#" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a href="#" class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/post-2.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">How to choose the right physiotherapist for you</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a href="#" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a href="#" class="image-anime">
                                    <img src="<?php echo $domain ?>assets/images/post-3.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">Importance of correct posture and how to improve it</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a href="#" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog End -->

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
     <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="<?php echo $domain ?>assets/images/footer-logo.svg" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy.</p>
                        </div>
                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>                                                                
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->
                        
                    </div>
                    <!-- About Footer End -->
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="about-working-hour">
                        <h3>working hours</h3>
                        <ul>
                            <li>mon to fri : 10:00 to 6:00</li>
                            <li>sat : 10:00AM to 3:00PM</li>
                            <li>sun : closed</li>
                        </ul>
                    </div>
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="about-service-list">
                        <h3>more services</h3>
                        <ul>
                            <li><a href="#">manual therapy</a></li>
                            <li><a href="#">chronic pain</a></li>
                            <li><a href="#">hand therapy</a></li>
                        </ul>
                    </div>
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="footer-contact">
                        <h3>contact</h3>
                        <!-- Footer Contact Details Start -->
                        <div class="footer-contact-details">
                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-phone.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>(+0) 789 3456 012</p>
                                </div>                                
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-mail.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>domain@gmail.com</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-location.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>24/11 Robert Road,New York,USA</p>
                                </div>                                
                            </div>
                            <!-- Footer Info Box End -->
                        </div>
                        <!-- Footer Contact Details End -->
                    </div>
                    <!-- About Links End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright 2024 Physiocare. All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <!-- Footer Social Link Start -->
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
     </footer>
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
</html>