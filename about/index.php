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

    <?php include('../includes/navbar.php')  ?>

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About Us</h1>
                        
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
                                <img src="<?php echo $domain ?>assets/images/work/1.jpg" alt="Relaxing Massage Session">
                            </figure>

                            <!-- Company Experience Box Start -->
                            <div class="company-experience">
                                <div class="icon-box">
                                    <img src="<?php echo $domain ?>assets/images/icon-experience.svg" alt="">
                                </div>
                                <div class="company-experience-content">
                                    <h3><span class="counter">6</span>+</h3>
                                    <p>years of experience in massage therapy</p>
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
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Your Trusted <span>Massage Therapy</span> Experts</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Welcome to Circle Of Beauty! We specialize in providing top-quality massage therapy designed to promote relaxation, reduce stress, and enhance overall well-being. Our experienced therapists tailor each session to your individual needs, ensuring a rejuvenating experience.</p>
                        </div>
                        <!-- Section Title End -->

                        
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
                            <p>Certified Massage Therapists</p>
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
                            <p>Client Satisfaction Rate</p>
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
                            <p>Happy Clients</p>
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
                    <h3 class="wow fadeInUp">Relaxation & Wellness</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Experience Ultimate </span> Relaxation & Healing</h2>
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
                            <p>Our mission is to provide high-quality, therapeutic massage treatments that enhance overall well-being. We believe that healing begins with touch, and we are dedicated to creating a space where relaxation, rejuvenation, and restoration come together.</p>
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
                            <p>Our vision is to create a sanctuary where clients feel safe, valued, and cared for. We want to redefine massage therapy by integrating traditional healing techniques with modern approaches for a truly transformative experience.  </p>
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
                            <h3>our approach</h3>
                            <p>Our approach goes beyond just physical relief. We believe in the connection between the mind and body, offering holistic treatments that promote deep relaxation and stress reduction. Every touch is intentional, and every therapy is designed to restore harmony to your body.  </p>
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
                                <h3>ready to relax and rejuvenate?</h3>
                                <p>Book a session with us today and experience the healing power of professional massage therapy.</p>
                            </div>
                        </div>
                        <!-- Cta Content End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Cta Appointment Button Start -->
                        <div class="cta-appointment-btn">
                            <a href="<?php echo $domain ?>booking/" class="btn-default">book now</a>
                        </div>
                        <!-- Cta Appointment Button End -->
                    </div>
                </div>
            </div>
            <!-- Call To Action End -->
        </div>
    </div>

    <!-- Mission Vision End -->

    <!-- Quality Massage Section Start -->
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
                                <video  class="w-full h-auto max-w-[700px]" controls>
                                    <source  src="<?php echo $domain ?>assets/videos/1.mp4" type="video/mp4">
                                </video>
                            </figure>
                        </div>
                        <!-- Video Image End -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button absolute inset-0 flex justify-center items-center">
                            <a href="<?php echo $domain ?>assets/images/work/42.mp4" class="popup-video bg-black/50 p-4 rounded-full">
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
                        </div>
                        <!-- Section Title End -->

                        
                    </div>
                    <!-- Quality Massage Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quality Massage Section End -->








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
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Working Hours : Mon to sat : 9:00 To 9:00 </span>
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