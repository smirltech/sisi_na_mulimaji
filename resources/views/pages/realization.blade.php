@include('layouts.header')

<div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
    <!-- Slider main container -->
    <div class="banner-fade">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <!-- Single Item -->
            <div class="swiper-slide banner-style-one">
                <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/3.jpg);"></div>
                <div class="shape">
                    <img src="assets/img/shape/2.png" alt="Image Not Found">
                </div>
                <div class="container">
                    <div class="row align-center">
                        <div class="col-xl-9">
                            <div class="content">
                                <div class="badge">
                                    <div class="curve-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                            <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                            <text><textPath href="#textPath">100% Organic Product</textPath></text>
                                        </svg>
                                        <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ" class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h2><strong>Agriculture</strong> Farming Products</h2>
                                    <p>
                                        Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme btn-md radius animation" href="about-us.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="swiper-slide banner-style-one">
                <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/4.jpg);"></div>
                <div class="shape">
                    <img src="assets/img/shape/2.png" alt="Image Not Found">
                </div>
                <div class="container">
                    <div class="row align-center">
                        <div class="col-xl-9">
                            <div class="content">
                                <div class="badge">
                                    <div class="curve-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                            <path id="textPath2" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                            <text><textPath href="#textPath">100% Organic Product</textPath></text>
                                        </svg>
                                        <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ" class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h2><strong>Homemade</strong> Organic Product</h2>
                                    <p>
                                        Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme btn-md radius animation" href="about-us.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->

        </div>

        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</div>



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
                <!-- Single Item -->
                <!-- End Single Item -->
                <!-- Single Item -->

                @foreach($realizations as $realization)
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <img src="assets/img/blog/3.jpg" alt="Image Not Found">
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