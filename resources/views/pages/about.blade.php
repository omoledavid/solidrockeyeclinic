
<x-app-layout pageName="{{$pageName}}">
    <x-head-banner pageName="{{$pageName}}" :style="true"></x-head-banner>
    @include('sections.homepage.about-us')
    @if($hmos->count())
        @include('sections.about.hmo')
    @endif
    <!-- Why Choose Us Section Start -->
    @include('sections.about.why-choose-us')
    <!-- Why Choose Us Section End -->
</x-app-layout>
