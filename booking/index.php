<?php

include('../server/connection.php');


if(isset($_POST['btn'])){
    // echo "alert('welcome')";
}

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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Booking</h1>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Contact Form Start -->
    <div class="contact-us-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-img">
                        <figure class="reveal image-anime">
                            <img src="<?php echo $domain ?>assets/images/work/40.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Contact Us Image End -->
                </div>

                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Book a Massage</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Get</span> In Touch With Us</h2>
                        </div>

                        <form method="POST" id="appointmentForm">
                            <div class="row">
                                <!-- Full Name -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Full Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <!-- Email -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Adress" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <!-- Phone Number -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <!-- Service (Select Dropdown) -->
                                <div class="form-group col-md-6 mb-4">
                                    <select name="service" class="form-control" id="service" required="">
                                        <option value="" disabled selected>Select Massage Type</option>
                                        <option value="facial treatment">Facial Treatment - £55</option>
                                        <option value="facial mini">Facial Mini - £35</option>
                                        <option value="Hot Stone Massage">Hot Stone Massage - £60</option>
                                        <option value="bamboo massage">Bamboo Massage- £60</option>
                                        <option value="Aromatherapy Massage">Aromatherapy Massage - £75</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <!-- Amount (Dynamic based on Service Selection) -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="amount" class="form-control" id="amount" placeholder="Amount" readonly required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                

                                <!-- Date -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="date" name="date" class="form-control" id="date" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <!-- Message -->
                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="msg" class="form-control" id="message" rows="5" placeholder="Any Special Request?" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-md-12">
                                    <button type="submit" name="btn" class="btn-default">Book Now</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    // JavaScript to dynamically update the price based on the selected service
                    document.getElementById('service').addEventListener('change', function() {
                        var service = this.value;
                        var amountField = document.getElementById('amount');

                        if (service === 'Swedish Massage') {
                            amountField.value = '$50';
                        } else if (service === 'Deep Tissue Massage') {
                            amountField.value = '$70';
                        } else if (service === 'Hot Stone Massage') {
                            amountField.value = '$90';
                        } else if (service === 'Aromatherapy Massage') {
                            amountField.value = '$75';
                        }
                    });
                </script>


            </div>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Google Map Start -->
   
    <!-- Google Map End -->

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
    <script src="<?php echo $domain ?>assets/js/theme-panel.js"></script>
</body>

</html>