<?php

include './server/connection.php';

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
    <title><?php echo $sitename ?></title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/images/work/21.jpg">
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">

    </div>
    <!-- Preloader End -->

    <?php include './includes/navbar.php' ?>

    <style>
        .parallaxie {
            background: url('assets/images/work/42.jpg');
            background-repeat: no-repeat;
        }
    </style>

    <!-- Hero Section Start -->
    <div class="hero bg-image parallaxie">


        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">welcome to <?php echo $sitename  ?></h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Holistic Health And Wellbeing Practitioner </span></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We offer range of treatments to help you active optimal physical, emotional and sporitual well-being. Holistic massage swedish, Deep tissue, Refexology(foot) massage, Physio streaaching</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="<?php echo $domain ?>about/" class="btn-default">explore</a>
                            <a href="<?php echo $domain ?>pricing/" class="btn-default btn-highlighted">book appointment</a>
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
                            <p>An Certified therapists</p>
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
                                <img src="<?php echo $domain ?>assets/images/work/24.jpg" alt="">
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
                            <h2 class="text-anime-style-2" data-cursor="-opaque">We Are The Best For <span>professionals therapist</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We understand that injuries and acute pain can happen unexpectedly. Our emergency professionals therapist services are designed to provide prompt and effective care to help you manage pain, prevent further injury, and start your recovery process as quickly as possible.</p>
                            <a href="<?php echo $domain ?>pricing/" class="btn-default mt-3">book appointment</a>
                        </div>
                        <!-- Section Title End -->

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
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/7.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/4.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/28.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->
                        </div>

                        <div class="gallery-scrolling-content">
                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/29.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/5.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/23.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/25.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/30.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img style="height:400px" src="<?php echo $domain ?>assets/images/work/6.jpg" alt="">
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
                        <h3 class="wow fadeInUp">Meet Our Expert Therapists</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Experience</span> Ultimate Relaxation & Healing</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <!-- <a href="#" class="btn-default">View All Services</a> -->
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
                            <h3>Deep Tissue Massage</h3>
                            <p>Relieve chronic muscle tension and pain with our deep tissue massage, designed to penetrate deeper layers of muscle and fascia.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <!-- <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt=""> -->
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
                            <h3>Swedish Massage</h3>
                            <p>Unwind with a soothing Swedish massage that enhances circulation, eases muscle tension, and promotes overall relaxation.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <!-- <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                          </a> -->
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
                            <h3>Hot Stone Massage</h3>
                            <p>Experience deep relaxation as heated stones melt away stress and tension, promoting physical and mental well-being.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <!-- <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a> -->
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
                            <h3>Sports Massage</h3>
                            <p>Improve flexibility, prevent injuries, and enhance recovery with a targeted sports massage tailored for athletes and active individuals.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <!-- <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a> -->
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
                            <h3>Aromatherapy Massage</h3>
                            <p>Indulge in a sensory experience with essential oils designed to enhance relaxation, reduce stress, and promote healing.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <!-- <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a> -->
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
                            <h3>Reflexology</h3>
                            <p>Balance your body's energy and promote relaxation with targeted foot and hand reflexology techniques.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <!-- <a href="#" class="service-btn"><img src="<?php echo $domain ?>assets/images/arrow-white.svg" alt="">
                            </a> -->
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
                            <h3>Ready to Relax and Rejuvenate?</h3>
                            <p>Book an appointment today and let our skilled therapists help you unwind, heal, and feel your best.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-cta-btn">
                            <a href="<?php echo $domain ?>pricing/" class="btn-default">Book Now</a>
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
                                <img style="height:400px" src="<?php echo $domain ?>assets/images/work/8.jpg" alt="">
                            </figure>
                        </div>

                        <div class="solution-plan-img-2">
                            <figure class="image-anime reveal">
                                <img style="height:400px" src="<?php echo $domain ?>assets/images/work/9.jpg" alt="">
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
                            <h3 class="wow fadeInUp">Your Path to Relaxation</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"> <span>Experience</span> Ultimate Healing & Wellness</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We understand that stress and muscle tension can affect your well-being. Our expert massage therapy services are designed to relax, rejuvenate, and restore your body and mind.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Solution Plan Body Start -->
                        <div class="solution-plan-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Relieve stress and tension.</li>
                                <li>Improve blood circulation and flexibility.</li>
                                <li>Experience deep relaxation and healing touch.</li>
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
                                            <h3><span class="counter">50</span>+</h3>
                                            <p>Certified Massage Therapists</p>
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
                                            <h3><span class="counter">95</span>%</h3>
                                            <p>Customer Satisfaction</p>
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
                                            <h3><span class="counter">1300</span>+</h3>
                                            <p>Happy Clients Served</p>
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



    <!-- Need Attention Start -->
    <div class="need-attention parallaxie">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Relax & Rejuvenate</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Where Do You Need Relief?</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">Whether you're experiencing muscle tension, stress, or chronic pain, our expert massage therapists provide targeted relief to restore your body’s natural balance.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-neck.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Neck Tension</p>
                        </div>
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="need-attention-list wow fadeInUp">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-shoulder.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Shoulder Stiffness</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="need-attention-list wow fadeInUp">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-lowerback.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Lower Back Pain</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-leg.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Leg Fatigue</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-hands.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Hand & Wrist Strain</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-foot.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Foot Pain & Tension</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-hip.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Hip & Sciatica Pain</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-elbow.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Elbow & Arm Strain</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="<?php echo $domain ?>assets/images/icon-massage-ankle.svg" alt="">
                        </div>
                        <div class="need-attention-content">
                            <p>Ankle Stress</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Need Attention End -->


    <div class="quality-treatment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <style>
                        .quality-treatment-video {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .video-image video {
                            width: 100%;
                            height: auto;
                            object-fit: cover;
                            border-radius: 10px;
                        }
                    </style>
                    <!-- Video Massage Treatment Start -->
                    <div class="quality-treatment-video relative">
                        <!-- Video Image Start -->
                        <div class="video-image">
                            <figure class="image-anime relative">
                                <video class="w-full h-auto max-w-[700px]" controls>
                                    <source src="<?php echo $domain ?>assets/images/work/50.mp4" type="video/mp4">
                                </video>
                            </figure>
                        </div>
                        <!-- Video Image End -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button absolute inset-0 flex justify-center items-center">
                            <a href="<?php echo $domain ?>assets/images/work/50.mp4" class="popup-video bg-black/50 p-4 rounded-full">
                                <i class="fa-solid fa-play text-black text-3xl"></i>
                            </a>
                        </div>


                        <!-- Video Play Button End -->
                    </div>
                    <!-- Video Massage Treatment End -->
                </div>

                <div class="col-lg-6">
                    <!-- Quality Massage Content Start -->
                    <div class="quality-treatment-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Relaxation & Wellness</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"> <span>We Proudly</span> Offer Quality Massage Therapy</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                We are a team of certified and passionate massage therapists dedicated to your well-being. Our expertise spans various massage techniques, including Swedish, deep tissue, hot stone, and aromatherapy, ensuring that every session is customized to meet your specific needs.
                            </p>
                            <a href="<?php echo $domain ?>pricing/" class="btn-default mt-3">book appointment</a>

                        </div>
                        <!-- Section Title End -->


                    </div>
                    <!-- Quality Massage Content End -->
                </div>
            </div>
        </div>
    </div>



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
                                                <p>"I enjoyed the massage with Susan and she made me feel at ease from the outset. She checked in just enough as to whether the pressure etc was what I wanted (it was), and was a skilled professional. Very pleasantly surprised by how calm the setting was too once you get up to the 6th floor of the building—it's a whole world away from the noisy street/gym complex."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Felicia Okoye</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"Susan was highly skilled; it was an amazing massage. They have created a lovely space with music, incense, an electric blanket, and lemon water. Wonderful experience, will book again soon."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Genevieve</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"Susan was fantastic. I booked her because I read her previous reviews and she didn't disappoint! I can highly recommend Susan. I felt really relaxed afterwards. I will be a repeat customer."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Mrs Ali</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"Susan is really professional, friendly, and down to earth. The room was so calm and welcoming. Susan always asked if I was okay and suggested the best treatment for after my first session."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Florence</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"Susan was very friendly and the reflexology was so relaxing that I almost fell asleep — complete success!"</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Benedeth</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"Lovely massage."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Gladys</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"I loved Susan's treatment, I felt really relaxed and I had a glorious sleep the night after."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Cora</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"Another great experience at the health spa. The team are great and Susan's reflexology is highly recommended."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Pauline</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"I loved Susan’s treatment, I felt really relaxed and I had a glorious sleep the night after."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Bose</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <p>"Great service! I highly recommend! Susan was lovely and knowledgeable."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Violence</h3>
                                                <p>Treatment by Susan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="swiper-slide">
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
                                                <p>"I’ve never felt more relaxed! The deep tissue massage helped release so much tension in my muscles. Highly recommend <?php echo $sitename ?> for an unforgettable experience!"</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Johan Duo</h3>
                                                <p>Professional Athlete</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <!-- <div class="swiper-slide">
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
                                                <p>"The hot stone massage at <?php echo $sitename ?> was exactly what I needed to relieve my chronic back pain. The staff is so professional and the atmosphere is so soothing!"</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Jane Smith</h3>
                                                <p>Retired Teacher</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <!-- <div class="swiper-slide">
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
                                                <p>"I had an amazing experience at <?php echo $sitename ?>! The Swedish massage was so relaxing, and I felt completely rejuvenated after the session. Highly recommend it!"</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Robert Lee</h3>
                                                <p>Construction Worker</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <!-- <div class="swiper-slide">
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
                                                <p>"The massage at <?php echo $sitename ?> helped me recover from my marathon training. The therapists really understand the importance of muscle recovery!"</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>Banson Doe</h3>
                                                <p>Marathon Runner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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



    <!-- Our Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Emergency No. : <?php echo $sitephone ?></span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">For any additional inqueries : <?php echo $siteemail ?></span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Book Appointment: <?php echo $sitephone2 ?></span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Working Hours : Mon to sat : 9:00 To 9:00 </span>
            </div>

            <div class="scrolling-content">
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Emergency No. : <?php echo $sitephone ?></span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">For any additional inqueries : <?php echo $siteemail ?></span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Book Appointment: <?php echo $sitephone2 ?></span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Working hours: Mon to Fri : 9:00 To 9:00 </span>
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- Footer Start -->
    <?php include('./includes/footer.php')   ?>
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