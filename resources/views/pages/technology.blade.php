<x-app-layout pageName="{{$pageName}}">
    <x-head-banner pageName="{{$pageName}}" :style="true"></x-head-banner>
    <!-- Page Techonology Start -->
    <div class="page-techonology">
        <div class="container">
            @if($technologies->count())
                <!-- Techonology Item Start -->
                @foreach($technologies as $technology)
                    <x-technology.tech-card :$technology/>
                @endforeach
                <!-- Techonology Item End -->
            @else
                <div class="row techonology-item align-items-center">
                    <div class="col-lg-12">
                        <p class="text-center">No Technology</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Page Techonology End -->
</x-app-layout>

