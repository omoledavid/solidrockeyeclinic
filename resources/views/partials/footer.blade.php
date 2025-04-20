<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="{{asset('assets/images/logo-white.png')}}" alt="">
                    </div>
                    <!-- Footer Logo End -->

                    <!-- About Footer Content Start -->
                    <div class="about-footer-content">
                        <p>Our goal is to provide friendly, compassionate care and the highest standard of general, cosmetic, and specialist eye treatments.</p>
                    </div>
                    <!-- About Footer Content End -->
                </div>
                <!-- About Footer End -->
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- Footer Quick Links Start -->
                <div class="footer-links footer-quick-links">
                    <h3>quick links</h3>
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><a href="{{route('about')}}">about us</a></li>
                        <li><a href="{{route('services')}}">services</a></li>
                        <li><a href="{{route('book-appointment')}}">book apoointment</a></li>
                    </ul>
                </div>
                <!-- Footer Quick Links End -->
            </div>

            <div class="col-lg-3 col-md-4">
                <!-- Footer Social Links Start -->
                <div class="footer-links footer-social-links">
                    <h3>social media</h3>
                    <ul>
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">instagram</a></li>
                        <li><a href="#">youtube</a></li>
                        <li><a href="#">twitter</a></li>
                    </ul>
                </div>
                <!-- Footer Social Links End -->
            </div>

            <div class="col-lg-2 col-md-4">
                <!-- Footer Contact Links Start -->
                <div class="footer-links footer-contact-links">
                    <h3>contact us</h3>
                    <ul>
                        <li><a href="#">{{$general->email}}</a></li>
                        <li><a href="#">{{$general->phone}}</a></li>
                    </ul>
                </div>
                <!-- Footer Contact Links End -->
            </div>
        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        <p>Built and developed by <a href="https://smavotex.com">Smavotex</a>.</p>
                        <p>Copyright © 2025 All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>
