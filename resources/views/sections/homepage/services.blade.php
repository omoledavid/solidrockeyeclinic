@if($services->count())
    <div class="our-services">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Hight Quality</span> Services for
                            You.
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability. eco-friendly
                            initiatives.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach($services as $service)
                    <x-solidrock.service-card :$service/>
                @endforeach
                @if($services->count() > 3)
                    <div class="col-lg-12">
                        <!-- Service Box Footer Start -->
                        <div class="services-box-footer wow fadeInUp" data-wow-delay="1s">
                            <p>We believe in using the latest technology and techniques to ensure the best outcomes for
                                our
                                patients.</p>
                            <a href="{{route('services')}}" class="btn-default">view all service</a>
                        </div>
                        <!-- Service Box Footer End -->
                    </div>
                @endif
            </div>
        </div>

        <!-- Intro Clinic Video Section Start -->
        <div class="intro-clinic-video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Visit Clinic Start -->
                        <div class="visit-clinic parallaxie">
                            <!-- Visit Clinic Content Start -->
                            <div class="visit-clinic-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">visit clinic</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Comprehensive eye Care For All
                                        Ages</h2>
                                </div>
                                <!-- Section Title End -->

                                <!-- Visit Clinic Btn Start -->
                                <div class="visit-clinic-btn wow fadeInUp" data-wow-delay="0.25s"
                                     data-cursor-text="Play">
                                    <a href="javascript:void()" class="popup-video play-btn">play video</a>
                                </div>
                                <!-- Visit Clinic Btn End -->
                            </div>
                            <!-- Visit Clinic Content End -->
                        </div>
                        <!-- Visit Clinic End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Clinic Video Section End -->

        <!-- Our Counter Section Start -->
        <div class="our-counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">75</span>+</h2>
                                <h3>insurance covered</h3>
                            </div>
                            <!-- Counter Title End -->

                            <!-- Counter Content Start -->
                            <div class="counter-content">
                                <p>peace of mind, protection, and financial safety net.</p>
                            </div>
                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">02</span>K</h2>
                                <h3>Vision Achieved</h3>
                            </div>
                            <!-- Counter Title End -->

                            <!-- Counter Content Start -->
                            <div class="counter-content">
                                <p>Successful treatments restoring sight and enhancing patient eye health.</p>
                            </div>
                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">11</span>K</h2>
                                <h3>happy customers</h3>
                            </div>
                            <!-- Counter Title End -->

                            <!-- Counter Content Start -->
                            <div class="counter-content">
                                <p>Smiling faces, clear vision, and trusted eye care services.</p>
                            </div>
                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">18</span>+</h2>
                                <h3>experience doctors</h3>
                            </div>
                            <!-- Counter Title End -->

                            <!-- Counter Content Start -->
                            <div class="counter-content">
                                <p>Skilled professionals providing expert eye care and trusted treatments.</p>
                            </div>
                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Counter Section End -->

        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="{{ asset('assets/images/icon-star.svg')}}" alt="">
        </div>
        <!-- Icon Start Image End -->
    </div>
@endif
