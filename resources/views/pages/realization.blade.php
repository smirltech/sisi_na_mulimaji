@include('App.app')

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
                    <a class="navbar-brand" href="{{ route('home') }}">
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
                        <a href="{{ route('home') }}" class="active"  >Accueil</a>
                    </li>
                    <li class="dropdown">
                        <a href="/#mission"   >Mission</a>
                    </li>
                    <li class="dropdown">
                        <a href="/#produit">Produits</a>
                    </li>
                    <li class="dropdown">
                        <a href="/#objectif"   >Objectif</a>
                    </li>
                    <li class="dropdown">
                        <a href="/#expertise" >Expertise</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Réalisations</a>
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


@include('layouts.slider')




    <div class="blog-area home-blog default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="title">Nos réalisations</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                @foreach($realizations as $realization)
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <img src="{{ $realization->image }}" alt="Image Not Found">
                            <div class="date"> <span> {{ $realization->date }}</span></div>
                        </div>
                        <div class="info">
                            <h3 class="post-title">{{ $realization->title }}</h3>
                            <span>{{ $realization->content }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@include('layouts.footer')