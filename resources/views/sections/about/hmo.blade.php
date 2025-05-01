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
                                    <div onclick="showImageModal('{{ asset('storage/' . $hmo->logo) }}')"
                                        style="cursor: pointer; background-image: url('{{ asset('storage/' . $hmo->logo) }}'); background-size: contain; background-repeat: no-repeat; background-position: center;"
                                        class="company-logo h-32 w-32">
                                    </div>
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
<!-- Modal for Image Preview -->
<div id="imageModal" onclick="hideImageModal()" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); justify-content: center; align-items: center; z-index: 9999;">
    <img id="modalImage" src="" style="max-width: 90%; max-height: 90%;" />
</div>
<script>
    function showImageModal(imageUrl) {
        document.getElementById('modalImage').src = imageUrl;
        document.getElementById('imageModal').style.display = 'flex';
    }

    function hideImageModal() {
        document.getElementById('imageModal').style.display = 'none';
    }
</script>
