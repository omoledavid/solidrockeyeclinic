<div class="cta-box">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Cta Box Item Start -->
                <div class="cta-box-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/icon-cta-phone.svg')}}" alt="">
                    </div>
                    <div class="cta-box-content">
                        <h3>need eyecare services ?</h3>
                        <p>Call on : {{$general->phone}}, {{$general->alt_phone}}</p>
                    </div>
                </div>
            </div>
            <!-- Cta Box Item End -->

            <!-- Cta Box Item Start -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="cta-box-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/icon-cta-time.svg')}}" alt="">
                    </div>
                    <div class="cta-box-content">
                        <h3>opening hours</h3>
                        <p>Mon to Sat 9:00AM to 5:00PM</p>
                        <p>Sun : Based on Appointment</p>
                    </div>
                </div>
            </div>
            <!-- Cta Box Item End -->

            <div class="col-lg-4 col-md-12 col-12">
                <!-- Cta Box Btn Start -->
                <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{route('book-appointment')}}" class="btn-default btn-highlighted">make an appointment</a>
                </div>
                <!-- Cta Box Btn End -->
            </div>
        </div>
    </div>
</div>
