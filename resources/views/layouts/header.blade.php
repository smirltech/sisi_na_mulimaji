@include('App.app')

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
                        <img src="assets/img/2024/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="assets/img/2024/logo.png" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown">
                        <a href="#" class="active" data-toggle="dropdown" >Accueil</a>
                    </li>
                    <li class="dropdown">
                        <a href="#"  data-toggle="dropdown" >Mission</a>
                    </li>
                    <li class="dropdown">
                        <a href="project.html"  data-toggle="dropdown" >Objectifs</a>
                    </li>
                    <li class="dropdown">
                        <a href="#"  data-toggle="dropdown" >Realisation</a>
                    </li>
                    <li class="dropdown">
                        <a href="#"  data-toggle="dropdown" >Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" >Partage d'experience</a>
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

