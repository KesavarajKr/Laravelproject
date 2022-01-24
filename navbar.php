<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!---- Custom CSS--->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Theme default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Slick Theme CSS -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <!-- Magnific POpup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!---------------------Font Awesome------------------------------>
    <script src="https://kit.fontawesome.com/cdcced96ff.js" crossorigin="anonymous"></script>

    <!-- Title -->
    <title>Pestokil</title>

    <!-- Favicon Link -->
    <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png">       -->

    <style>
        .about-style-three .about-img {
            position: relative;
            z-index: 0;
        }
        .about-style-three .about-img::before{
            animation: rotate infinite 10s linear
        }
    </style>
</head>

<body>

    <!-- Pre Loader Start -->
    <div class="loader-content">
        <div class="d-table">
            <div class="d-table-cell">
                <div id="loading-center">
                    <div id="loading-center-absolute">
                        <div class="object" id="object_one"></div>
                        <div class="object" id="object_two"></div>
                        <div class="object" id="object_three"></div>
                        <div class="object" id="object_four"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre Loader End -->

    <!-- Header Section Start -->
    <div class="header-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="header-widget">
                        <!-- <ul>
                                <li>
                                    <i class="icofont-clock-time"></i>
                                    Sun - Thu : 10:00AM - 06:00PM
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    No, Address, City Name
                                </li>
                                <li>
                                    <i class="icofont-phone"></i>
                                    <a href="tel:+91-9874563210">
                                        +91-9874563210
                                    </a>
                                </li>
                            </ul> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="header-social text-end">
                        <ul>
                            <li>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </li>
                            <!-- <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li> -->
                            <li>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section End -->

    <!-- Navbar Section Start -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="assets/img/logo1.png" alt="logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php" style="margin-left:20px">
                        <img src="assets/img/logo1.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link dropdown-toggle <?php if($pageid == "home"){?> active <?php }?> ">
                                    Home
                                    <!-- <i class="icofont-rounded-right"></i> -->
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link <?php if($pageid == "about"){?> active <?php }?> ">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="whyus.php" class="nav-link dropdown-toggle <?php if($pageid == "whyus"){?> active <?php }?> ">
                                    Why Us

                                </a>

                            </li>

                            <li class="nav-item">
                                <a href="pestwecover.php" class="nav-link dropdown-toggle <?php if($pageid == "pestwecover"){?> active <?php }?> ">
                                    Pest we cover
                                    <!-- <i class="icofont-rounded-right"></i> -->
                                </a>
                                <!-- <ul class="dropdown-menu" style="width:600px;margin-left:-300px">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Ants</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Bed bugs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Beetles</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Booklice</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Butterflies & Moths</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Cockroaches</a>
                                            </li>
                                        </div>
                                        <div class="col-lg-6">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Flies</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Mosquitoes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Rodents</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Silverfish</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Termites</a>
                                            </li>

                                        </div>
                                    </div>

                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a href="service.php" class="nav-link <?php if($pageid == "service"){?> active <?php }?> ">Specialized Services</a>
                            </li>

                            <li class="nav-item">
                                <a href="contact.php" class="nav-link <?php if($pageid == "contact"){?> active <?php }?> ">Contact Us</a>
                            </li>
                        </ul>
                        <div class="navbar-button">
                            <a href="#"><i class="icofont-phone"></i>&nbsp;&nbsp;1800-4000-250</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar Section End -->