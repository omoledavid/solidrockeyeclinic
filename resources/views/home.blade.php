<x-app-layout pageName="{{$pageName}}">
    <!-- Hero Section Start -->
    @include('sections.homepage.hero')
    <!-- Hero Section end -->

    <!-- CTA Section Start -->
    @include('sections.homepage.cta')
    <!-- CTA Section end -->

    <!-- About Us Section Start -->
    @include('sections.homepage.about-us')
    <!-- About Us Section end -->
    <!--Mission Vision and Mission -->
    @include('sections.homepage.mission-vision-goal')

    <!-- Services Section Start -->
    @include('sections.homepage.services')
    @include('sections.homepage.blog')
    <!-- Services Section end -->
</x-app-layout>
