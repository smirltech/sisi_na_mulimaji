@include('layouts.header')

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