<x-app-layout pageName="{{ $pageName }}">
    <x-head-banner pageName="{{ $pageName }}"></x-head-banner>
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Service Categories List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>our services</h3>
                            <ul>
                                @if ($services->count())
                                    @foreach ($services as $serviceS)
                                        <li><a
                                                href="{{ route('services.show', $serviceS->slug) }}">{{ $serviceS->name }}</a>
                                        </li>
                                    @endforeach
                                @else
                                    <li>No Services available right now</li>
                                @endif
                            </ul>
                        </div>
                        <!-- Service Categories List End -->

                        <!-- Sidebar Cta Box Start -->
                        <x-solidrock.cta />
                        <!-- Sidebar Cta Box End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>

                <div class="col-lg-8 order-1 order-lg-2">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Service Featured Image Start -->
                        <div class="service-featured-image">
                            <figure class="reveal image-anime">
                                <img src="{{ asset('storage/' . $service->image) }}" alt="">
                            </figure>
                        </div>
                        <!-- Service Featured Image End -->

                        <!-- Service Entry Content Start -->
                        <div class="service-entry">
                            {!! tiptap_converter()->asHTML($service->content, toc: true, maxDepth: 3) !!}
                        </div>
                        <!-- Service Entry Content End -->
                    </div>
                    <!-- Service Single Content End -->

                    <!-- Service Accordian Start -->
                    <div class="service-faqs">
                        <div class="faqs-section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently Asked Questions</h2>
                        </div>

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            @foreach ($faqs as $index => $faq)
                                <x-solidrock.faq-card :faq="$faq" :isFirst="$index === 0" />
                            @endforeach

                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Service Accordian End -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
