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
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
        rel="stylesheet">
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

    <?php include '../includes/navbar.php' ?>


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
                            <ul id="catagery">
                                <!-- <li><a href="#manual_therapy">manual therapy</a></li>
                                <li><a href="#chronic_therapy">chronic pain</a></li>
                                <li><a href="#hand_therapy">hand therapy</a></li>
                                <li><a href="#sports_therapy">sports therapy</a></li>
                                <li><a href="#cupping_therapy">cupping therapy</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" id="type">
                    <!-- FAQs section start -->

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
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Emergency No. : (+01) 789
                    856 258</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">For any additional
                    inqueries : info@domainname.com</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Book Appointment: (+01) 879
                    526 789</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Working Hourse : Mon to Fri
                    : 10:00 To 6:00 </span>
            </div>

            <div class="scrolling-content">
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Emergency No. : (+01) 789
                    856 258</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">For any additional
                    inqueries : info@domainname.com</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Book Appointment: (+01) 879
                    526 789</span>
                <span><img src="<?php echo $domain ?>assets/images/icon-sparkles.svg" alt="">Working Hourse : Mon to Fri
                    : 10:00 To 6:00 </span>
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





    <script>
    const services = [ 
        {
            category: "Classic Massages",
            type: "massage",
            services: [{
                name: "Aromatherapy Massage",
                price: "from £55",
                duration: [{
                        time: "1 hour",
                        price: "55"
                    },
                    {
                        time: "1 hour 30 min",
                        price: "70"
                    }
                ]
            },
            {
                name: "Mini Facial",
                price: "from £25",
                duration: [{
                        time: "30 minute",
                        price: "25"
                    },
                    {
                        time: "1 hour",
                        price: "40"
                    }
                ]
            }
        ]
        },
        {
            category: "Therapeutic Massages",
            type: "massage",
            services: [{
                    name: "Sports Massage",
                    duration: [{
                        time: "1 hour",
                        price: "60"
                    }, {
                        time: "1 hour 30 min",
                        price: "80"
                    }]
                },
                {
                    name: "Deep Tissue Massage",
                    duration: [{
                        time: "1 hour",
                        price: "55"
                    }, {
                        time: "1 hour 30 min",
                        price: "80"
                    }]
                },
                {
                    name: "Swedish Massage",
                    duration: [{
                        time: "1 hour",
                        price: "55"
                    }, {
                        time: "1 hour 30 min",
                        price: "80"
                    }]
                },
                {
                    name: "Back, Neck & Shoulders Massage",
                    duration: [{
                        time: "30 minutes",
                        price: "40"
                    }, {
                        time: "1 hour",
                        price: "55"
                    }, {
                        time: "1 hour 30 min",
                        price: "80"
                    }]
                },
                {
                    name: "Back Massage",
                    duration: [{
                        time: "30 minutes",
                        price: "40"
                    }, {
                        time: "1 hour",
                        price: "55"
                    }, {
                        time: "1 hour 30 min",
                        price: "80"
                    }]
                },
                {
                    name: "Relaxing Massage",
                    duration: [{
                        time: "1 hour",
                        price: "55"
                    }, {
                        time: "1 hour 30 min",
                        price: "80"
                    }]
                },
                {
                    name: "Full Body Massage",
                    duration: [{
                        time: "1 hour",
                        price: "55"
                    }, {
                        time: "1 hour 30 min",
                        price: "80"
                    }]
                },
                {
                    name: "Hand Massage",
                    duration: [{
                        time: "30 mins",
                        price: "40"
                    }, {
                        time: "1 hour",
                        price: "80"
                    }]
                },
                {
                    name: "Foot & Leg Massage",
                    duration: [{
                        time: "30 mins",
                        price: "40"
                    }, {
                        time: "1 hour",
                        price: "80"
                    }]
                },
              
            ]
        },
        {
            category: "Weight Loss & Cellulite Treatments",
            type: "massage",
            services: [{
                    name: "Anti-Cellulite Massage",
                    duration: [{
                        time: "30 mins- 1 hour",
                        price: "45"
                    }]
                },
                {
                    name: "cupping",
                    duration: [{
                        time: "1 hour-1 hour 30 min",
                        price: "80"
                    }]
                },

            ]
        }
    ];

    services.forEach((element, theindex) => {
        document.getElementById("catagery").innerHTML +=
            `<li><a href="#manual_therapy">${element.category}</a></li>`;

        let html = `<div class="faqs-section" id="manual_therapy">
                        <div class="faqs-section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">${element.category}</h2>
                        </div>
                        <div class="faq-accordion" id="accordion">`;

        element.services.forEach((el, index) => {
            html += `<div class="accordion-item wow fadeInUp">
                        <h2 class="accordion-header" id="heading${index}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
                                ${el.name}
                            </button>
                        </h2>
                        <div id="collapse${index}" class="accordion-collapse collapse show" aria-labelledby="heading${index}"
                            data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Pricing and duration:</p>
                                <ul>`;
            el.duration.forEach(dur => {
                html += `<li>${dur.time} - £${dur.price}</li>`;
            });
            html += `</ul>
                            <div class="d-flex gap-2 justify-content-end mt-3">
                                 <button class="btn btn-primary service-btn" get="${el.name}-${el.duration[0].price}-${el.duration[0].time}" id="service-btn-${index}">Book Now £${el.duration[0].price}</button>
                                <button class="btn btn-primary service-btn" get="${el.name}-${el.duration[1].price}-${el.duration[1].time}"   id="service-btn-${index}">Book Now £${el.duration[1].price}</button>
                            </div>
                            </div>
                        </div>
                    </div>`;

        });

        html += `</div></div>`;
        document.getElementById("type").innerHTML += html;


        let btns = document.querySelectorAll('.service-btn');

        btns.forEach(el => {
            el.onclick = function() {
                let collection = el.getAttribute('get').split(
                    '-'); // Assuming 'get' contains 'serviceName-price-hour'
                
                let serviceName = collection[0];
                let price = collection[1];
                let hour = collection[2];

                let appointmentData = {
                    service: serviceName,
                    amount: price,
                    hour: hour,
                };


                $.ajax({
                    url: "book_appointment.php",
                    method: "POST",
                    data: {
                        service: serviceName,
                        amount: price,
                        hour: hour,
                        from:'firstclass'
                    },
                    success(res){
                        console.log(res)

                        const data = JSON.parse(res)

                        if (data.status === "success") {
                                window.location.href = `../booking/?user=${data.data}`
                            } else {
                                alert("Error: " + data.message);
                            }
                        

                    }
                })

               
                   
                    
                    
            };
        })

    })
    </script>








</body>


</html>