<x-app-layout pageName="{{ $pageName }}">
    <x-head-banner pageName="{{ $pageName }}" :style="true" />
    <!-- Page Contact Start -->
    <div class="page-contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact info</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Connecting</span> Near & Far
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">For emergency eye care or to schedule an
                                appointment, contact our office at visit our clinic.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact US Info Start -->
                        <div class="contact-us-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>visit us on</h3>
                                            <p>{{ $general->address }}</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.25s">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>contact us</h3>
                                            <p>{{ $general->phone }}</p>
                                            @if ($general->alt_phone)
                                                <p>{{ $general->alt_phone }}</p>
                                            @endif
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.5s">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-clock.svg') }}" alt="">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>working hours</h3>
                                            <p>Mon to Sat 9:00AM to 5:00PM</p>
                                            <p>Sun : Based on Appointment</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.75s">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>email us</h3>
                                            <p>{{ $general->address }}</p>
                                            @if ($general->alt_address)
                                                <p>{{ $general->alt_address }}</p>
                                            @endif
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>
                            </div>
                        </div>
                        <!-- Contact US Info End -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Contact End -->
    <!-- Contact Form Start -->
    <div class="contact-us-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-img">
                        <figure class="reveal image-anime">
                            <img src="{{ asset('assets/images/contact-us-img.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Contact Us Image End -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Get</span> In Touch With Us</h2>
                        </div>
                        <!-- Section Title End -->

                        <form id="contactForm" action="#" method="POST" data-toggle="validator"
                            class="wow fadeInUp" data-wow-delay="0.25s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="fullname"
                                        placeholder="Enter Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter Email" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone Number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        placeholder="Subject" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Your Message" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">send message</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
</x-app-layout>
