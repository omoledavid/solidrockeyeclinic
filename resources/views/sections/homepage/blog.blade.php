<!-- Our Blog Start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">blogs</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Check Our</span> Latest Articles</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to keeping your informed.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @foreach($posts as $post)
                <x-solidrock.blog-card :$post/>
            @endforeach
        </div>
    </div>
    <!-- Icon Start Image Start -->
    <div class="icon-star-image">
        <img src="images/icon-star.svg" alt="">
    </div>
    <!-- Icon Start Image End -->
</div>
<!-- Our Blog End -->
