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

    <!-- Services Section Start -->
    @include('sections.homepage.services')
    <!-- Services Section end -->
</x-app-layout>
