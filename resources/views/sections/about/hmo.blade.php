<div class="insurance-company-carousel">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="insurance-carousel-title">
                    <h3>Our trusted HMO Partners</h3>
                </div>
            </div>

            <div class="col-lg-8">
                <!-- company Carousel Start -->
                <div class="company-carousel">
                    <div class="swiper companies_logo_slider">
                        <div class="swiper-wrapper">
                            @foreach ($hmos as $hmo)
                                <!-- company Logo Start -->
                                <div class="swiper-slide">
                                    <div style="background-image: url('{{ asset('storage/' . $hmo->logo) }}'); background-size: contain; background-repeat: no-repeat; background-position: center;"
                                        class="company-logo"></div>
                                </div>
                            @endforeach
                            <!-- company Logo End -->
                        </div>
                    </div>
                </div>
                <!-- company Carousel End -->
            </div>
        </div>
    </div>
</div>
<style>
    .company-logo {
        width: 200px;
        height: 77px;
    }

    @media (max-width: 768px) {
        .company-logo {
            width: 100%;
            height: auto;
            aspect-ratio: 200 / 77;
        }
    }
</style>