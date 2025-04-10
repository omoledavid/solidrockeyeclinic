<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Image Start -->
                <div class="about-image">
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/about-us-img-1.jpg')}}" alt="">
                        </figure>
                    </div>

                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/frontend/roomtech.png')}}" alt="">
                        </figure>
                    </div>

                    <!-- About Experience Circle Start -->
                    <div class="about-experience">
                        <figure>
                            <img src="{{ asset('assets/images/about-experience-circle.png')}}" alt="">
                        </figure>
                    </div>
                    <!-- About Experience Circle End -->
                </div>
                <!-- About Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Your Journey</span> to a Better
                            Vision Begins Here</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">The goal of our clinic is to provide friendly,
                            caring eye care and the highest level of general, specialized, and advanced vision
                            treatments. With eye care practices throughout the world..</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Body Start -->
                    <div class="about-us-body wow fadeInUp" data-wow-delay="0.5s">
                        <ul>
                            <li>experienced team</li>
                            <li>comprehensive services</li>
                            <li>state of the art technology</li>
                            <li>emergency eye services</li>
                        </ul>
                    </div>
                    <!-- About Us Body End -->

                    <!-- About Us Footer Start -->
                    @if(!Route::is('about'))
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{route('about')}}" class="btn-default">read more about us</a>
                        </div>
                    @endif
                    <!-- About Us Footer End -->
                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>
