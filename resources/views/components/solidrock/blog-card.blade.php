<div class="col-lg-4 col-md-6">
    <!-- Blog Item Start -->
    <div class="blog-item wow fadeInUp">
        <!-- Post Featured Image Start-->
        <div class="post-featured-image" data-cursor-text="View">
            <figure>
                <a href="{{route('blog.show',$post->slug)}}" class="image-anime">
                    <img src="{{ asset($post->featurePhoto) }}" alt="">
                </a>
            </figure>
        </div>
        <!-- Post Featured Image End -->

        <!-- post Item Body Start -->
        <div class="post-item-body">
            <h2><a href="{{route('blog.show',$post->slug)}}">{{ $post->title }}</a></h2>
            <p>{{ Str::limit($post->sub_title, 100) }}</p>
        </div>
        <!-- Post Item Body End-->

        <!-- Post Item Footer Start-->
        <div class="post-item-footer">
            <a href="{{route('blog.show',$post->slug)}}" class="read-more-btn">read more</a>
        </div>
        <!-- Post Item Footer End-->
    </div>
    <!-- Blog Item End -->
</div>
