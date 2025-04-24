@props([
    'technology' => '',
])
@php
    $subtitle = $technology->subtitle;
    $words = explode(" ", $subtitle);

    $firstWord = $words[0] ?? '';
    $secondWord = $words[1] ?? '';
    if (count($words) >= 2) {
        $twoWord = true;
    } else {
        $twoWord = false;
    }
@endphp
<div style="background: #eff8ff; border-radius: 50px; padding: 15px 0" class="row techonology-item align-items-center">
    <div class="col-lg-6">
        <!-- Techonology Image Box Start -->
        <div class="techonology-image-box">
            <!-- Techonology Image Start -->
            <div class="techonology-image-1">
                <figure style="height: 300px" class="image-anime reveal">
                    <img src="{{asset('storage/'.$technology->first_image)}}" alt="">
                </figure>
            </div>
        </div>
        <!-- Techonology Image Box End -->
    </div>

    <div class="col-lg-6">
        <!-- Techonology Content Start -->
        <div class="techonology-content">
            <!-- Section Title Start -->
            <div class="section-title">
                <h3 class="wow fadeInUp">{{$subtitle}}</h3>
                @if(false)
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{$firstWord}}</span> {{$secondWord}}
                    </h2>
                @else
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{$technology->title}}</h2>
                @endif
                <p class="wow fadeInUp" data-wow-delay="0.25s">{{$technology->description}}</p>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Techonology Content End -->
    </div>
</div>
