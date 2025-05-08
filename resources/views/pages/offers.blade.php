<x-app-layout pageName="{{ $pageName }}">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-5 fw-bold">Special Offers at Our Eye Clinic</h1>
            <p class="lead">Experience world-class eye care at discounted rates. Limited time only!</p>
        </div>
    </section>

    <!-- Offer Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <div class="offer-icon mb-3">👁️</div>
                        <h5>Free Eye Test</h5>
                        <p>Get a professional eye test at no cost. Walk in today!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <div class="offer-icon mb-3">🕶️</div>
                        <h5>30% Off Frames & Lenses</h5>
                        <p>Enjoy a 30% discount on all prescription glasses.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <div class="offer-icon mb-3">👨‍⚕️</div>
                        <h5>Consultation Discount</h5>
                        <p>First-time consultation with our specialists at half price.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers Slider -->
    <section class="offers-slider py-5">
        <div class="container">
            <div id="offersCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/images/frontend/offer.jpg')}}" class="d-block w-100" alt="Offer 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Special Offer 1</h5>
                            <p>Details about the first special offer.</p>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <img src="/images/offer2.jpg" class="d-block w-100" alt="Offer 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Special Offer 2</h5>
                            <p>Details about the second special offer.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/offer3.jpg" class="d-block w-100" alt="Offer 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Special Offer 3</h5>
                            <p>Details about the third special offer.</p>
                        </div>
                    </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#offersCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#offersCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section text-center">
        <div class="container">
            <h2>Book Your Appointment Today</h2>
            <p>Call us or visit our clinic to redeem these amazing offers.</p>
            <a href="tel:{{$general->phone}}" class="btn btn-light mt-3">Call Now</a>
        </div>
    </section>
</x-app-layout>
<style>
    .hero {
        background: #e9f5ff;
        padding: 60px 0;
        text-align: center;
    }

    .offer-icon {
        font-size: 3rem;
        color: #0d6efd;
    }

    .cta-section {
        background: #1e84b5;
        color: white;
        padding: 40px 0;
    }
</style>
