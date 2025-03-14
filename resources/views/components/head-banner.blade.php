@props(['pageName'])
@php
    if($pageName == 'About Us')
        {
            $words = explode(" ", $pageName);

            $firstWord = $words[0]; // "About"
            $secondWord = $words[1]; // "Us"
        }
@endphp
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">
                        @if($pageName == 'About Us')
                            <span>{{ $firstWord }}</span> {{ $secondWord }}
                        @else
                            {{ $pageName }}
                        @endif
                    </h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">home / </a></li>
                            <li>{{$pageName}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
