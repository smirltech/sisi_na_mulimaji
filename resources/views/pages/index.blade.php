<!DOCTYPE html>
<html lang="en">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agrica - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>Sisi na mulimaji</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/2024/logo.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="assets/css/shop.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

</head>

<body>



<!-- Start Header Top
============================================= -->

<!-- End Header Top -->

<!-- Header
============================================= -->
<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav inc-shape navbar-sticky navbar-default validnavs dark">

        <div class="container d-flex justify-content-between align-items-center">


            <div class="navbar-brand-left">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset("assets/img/2024/logo.png") }} " style="width: 90px; height: 90px; object-fit: cover" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{ asset("assets/img/logo.png") }}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown">
                        <a href="#" class="active"  >Accueil</a>
                    </li>
                    <li class="dropdown">
                        <a href="#about"    >A propos</a>
                    </li>
                    <li class="dropdown">
                        <a href="#produit">Produit</a>
                    </li>
                    <li class="dropdown">
                        <a href="#"   >Objectif</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" >Expertise</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('realization') }}">Réalisations</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->


            <!-- Main Nav -->
        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->

    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->

<!-- Start Banner Area
============================================= -->

@include('layouts.slider')
<!-- End Banner -->

<!-- Start About
============================================= -->
<div class="about-style-one-area default-padding overflow-hidden">
    <div class="container">
        <div class="row align-center">
            <div class="col-xl-6 col-lg-5">
                <div class="about-style-one-thumb">
                    <img src="assets/img/2024/home.jpeg" alt="Image Not Found">
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1" id="about">
                <div class="about-style-one-info">

                    <h2 class="title"> Sisi na mulimaji </h2>
                    <p>
                       Est une société commerciale à responsabilité limitée, œuvrant dans le domaine agricole, ayant comme objectif d’offrir des différents services à la population de sa juridiction, notamment; vente d’intrants agricoles, consultance et accompagnement technique.
                    </p>
                    <ul class="top-feature">
                        <li>
                            <div class="icon">
                                <img src="assets/img/2024/icon/img_1.png" alt="Sisi na mulimaji">
                            </div>
                            <div class="info">
                                <h4>Devise</h4>
                                <p>
                                    De la théorie à la pratique aux résultats
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="assets/img/2024/icon/img.png" alt="Image Not Found">
                            </div>
                            <div class="info">
                                <h4>Vision</h4>
                                <p>
                                    Demeurer un partenaire agricole fiable
                                </p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Services
============================================= -->
<div class="services-style-one-area bg-gray default-padding bottom-less">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="site-heading text-center">
                    <h2 class="title">Notre secteurs d’activités, Mission et Références</h2>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- Single Item -->
            <div class="col-lg-4 col-md-6 service-one-single">
                <div class="service-style-one-item">
                    <div class="thumb">
                        <img src="assets/img/2024/icon/img_2.png" alt="Image Not Found">
                    </div>
                    <div class="info">
                        <div class="top">
                            <h4>Secteurs d’activités</h4>
                        </div>
                        <p>
                            Cabinet de consultance agricole ; Vente des intrants agricoles et Services
                            Mission
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-lg-4 col-md-6 service-one-single">
                <div class="service-style-one-item">
                    <div class="thumb">
                        <img src="assets/img/2024/icon/img_3.png" alt="Image Not Found">
                    </div>
                    <div class="info">
                        <div class="top">
                            <h4>Mission</h4>
                        </div>
                        <p>
                            Accompagner les opérateurs agricole (fermiers, ménages et personnes morales)
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-lg-4 col-md-6 service-one-single">
                <div class="service-style-one-item">
                    <div class="thumb">
                        <img src="assets/img/2024/icon/img_4.png" alt="Image Not Found">
                    </div>
                    <div class="info">
                        <div class="top">
                            <h4>Références</h4>
                        </div>
                        <p>
                            YANNICK USENI SIKUZANI <br>
                            Professeur-Chercheur à la Faculté d’Agronomie
                            Université de Lubumbashi <br>
                            Tél. +243978689380 <br>
                            E-mail : sikuzaniu@unilu.ac.cd <br>

                        </p>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <!-- End Single Item -->
        </div>
    </div>
</div>
<!-- End Services -->





<!-- Start Gallery
============================================= -->
<div class="gallery-style-one-area default-padding" id="produit">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="site-heading text-center">
                    <h2 class="title">Nos Produits</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fill">
        <div class="row">
            <div class="gallery-style-one-carousel swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="assets/img/2024/1.jpg" alt="Image not Found">
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="assets/img/2024/2.jpg" alt="Image not Found">
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="assets/img/2024/4.jpg" alt="Image not Found">
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="assets/img/2024/5.jpg" alt="Image not Found">
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="gallery-style-one">
                            <img src="assets/img/2024/3.jpg" alt="Image not Found">
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>
</div>
<!-- End Gallery  -->




@include('pages.expertise')
<br>
<br>
@include('layouts.footer')
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/progress-bar.min.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/jquery.scrolla.min.js"></script>
<script src="assets/js/ScrollOnReveal.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/validnavs.js"></script>
<script src="assets/js/gsap.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from validthemes.net/site-template/agrica/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 11:12:33 GMT -->
</html>