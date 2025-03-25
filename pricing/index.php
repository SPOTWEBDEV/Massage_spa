<?php

include '../server/connection.php';

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

    <?php include '../includes/navbar.php'?>


    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Pricing</h1>
						
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Faq Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="faq-sidebar">
                        <div class="faq-catagery-list wow fadeInUp" data-wow-delay="0.25s">
                            <ul>
                                <li><a href="#manual_therapy">manual therapy</a></li>
                                <li><a href="#chronic_therapy">chronic pain</a></li>
                                <li><a href="#hand_therapy">hand therapy</a></li>
                                <li><a href="#sports_therapy">sports therapy</a></li>
                                <li><a href="#cupping_therapy">cupping therapy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- FAQs section start -->
                    <div class="faqs-section" id="manual_therapy">
                        <div class="faqs-section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Manual Therapy</h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What is manual therapy?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        What conditions can manual therapy treat?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Is manual therapy painful?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Is manual therapy safe?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Can manual therapy help with postural problems?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section start -->
                    <div class="faqs-section" id="chronic_therapy">
                        <div class="faqs-section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Chronic Therapy</h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion1">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading11">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                        What is Chronic therapy?
                                    </button>
                                </h2>
                                <div id="collapse11" class="accordion-collapse collapse show" aria-labelledby="heading11"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="heading12">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                        What conditions can chronic therapy treat?
                                    </button>
                                </h2>
                                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading13">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                        Is chronic therapy painful?
                                    </button>
                                </h2>
                                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="heading14">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                        Is chronic therapy safe?
                                    </button>
                                </h2>
                                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                <h2 class="accordion-header" id="heading15">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                        Can chronic therapy help with postural problems?
                                    </button>
                                </h2>
                                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                                    data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section start -->
                    <div class="faqs-section" id="hand_therapy">
                        <div class="faqs-section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Hand Therapy</h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion2">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading21">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse21" aria-expanded="true" aria-controls="collapse21">
                                        What is Hand therapy?
                                    </button>
                                </h2>
                                <div id="collapse21" class="accordion-collapse collapse show" aria-labelledby="heading21"
                                    data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="heading22">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                        What conditions can and therapy treat?
                                    </button>
                                </h2>
                                <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22"
                                    data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading23">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                        Is hand therapy painful?
                                    </button>
                                </h2>
                                <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23"
                                    data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="heading24">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                        Is hand therapy safe?
                                    </button>
                                </h2>
                                <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24"
                                    data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                <h2 class="accordion-header" id="heading25">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                        Can hand therapy help with postural problems?
                                    </button>
                                </h2>
                                <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25"
                                    data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section start -->
                    <div class="faqs-section" id="sports_therapy">
                        <div class="faqs-section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Sports Therapy</h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion3">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading31">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse31" aria-expanded="true" aria-controls="collapse31">
                                        What is sports therapy?
                                    </button>
                                </h2>
                                <div id="collapse31" class="accordion-collapse collapse show" aria-labelledby="heading31"
                                    data-bs-parent="#accordion3">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="heading32">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                        What conditions can sports therapy treat?
                                    </button>
                                </h2>
                                <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="heading32"
                                    data-bs-parent="#accordion3">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading33">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                        Is sports therapy painful?
                                    </button>
                                </h2>
                                <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33"
                                    data-bs-parent="#accordion3">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="heading34">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                        Is sports therapy safe?
                                    </button>
                                </h2>
                                <div id="collapse34" class="accordion-collapse collapse" aria-labelledby="heading34"
                                    data-bs-parent="#accordion3">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                <h2 class="accordion-header" id="heading35">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                        Can sports therapy help with postural problems?
                                    </button>
                                </h2>
                                <div id="collapse35" class="accordion-collapse collapse" aria-labelledby="heading35"
                                    data-bs-parent="#accordion3">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section start -->
                    <div class="faqs-section" id="cupping_therapy">
                        <div class="faqs-section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Cupping Therapy</h2>
                        </div>
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion4">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading41">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse41" aria-expanded="true" aria-controls="collapse41">
                                        What is cupping therapy?
                                    </button>
                                </h2>
                                <div id="collapse41" class="accordion-collapse collapse show" aria-labelledby="heading41"
                                    data-bs-parent="#accordion4">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="heading42">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                        What conditions can cupping therapy treat?
                                    </button>
                                </h2>
                                <div id="collapse42" class="accordion-collapse collapse" aria-labelledby="heading42"
                                    data-bs-parent="#accordion4">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading43">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
                                        Is cupping therapy painful?
                                    </button>
                                </h2>
                                <div id="collapse43" class="accordion-collapse collapse" aria-labelledby="heading43"
                                    data-bs-parent="#accordion4">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="heading44">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                        Is cupping therapy safe?
                                    </button>
                                </h2>
                                <div id="collapse44" class="accordion-collapse collapse" aria-labelledby="heading44"
                                    data-bs-parent="#accordion4">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                <h2 class="accordion-header" id="heading45">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                        Can cupping therapy help with postural problems?
                                    </button>
                                </h2>
                                <div id="collapse45" class="accordion-collapse collapse" aria-labelledby="heading45"
                                    data-bs-parent="#accordion4">
                                    <div class="accordion-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faq End -->

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
    <?php include('../includes/footer.php')   ?>
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
	<script src="<?php echo $domain ?>assets/js/theme-panel.js"></script>
</body>


</html>