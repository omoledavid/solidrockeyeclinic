<x-app-layout pageName="{{$pageName}}">
    <x-head-banner pageName="{{$pageName}}"></x-head-banner>
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Service Categories List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>our services</h3>
                            <ul>
                                @if($services->count())
                                    @foreach($services as $service)
                                        <li><a href="{{route('services.show', $service->slug)}}">{{$service->name}}</a>
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

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Service Featured Image Start -->
                        <div class="service-featured-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset($service->image)}}" alt="">
                            </figure>
                        </div>
                        <!-- Service Featured Image End -->

                        <!-- Service Entry Content Start -->
                        <div class="service-entry">
                            {!! $service->content !!}
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
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        what is orthodontics?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Orthodontics is a dental specialty focused on diagnosing, preventing, and
                                            treating dental and facial irregularities, such as misaligned teeth and
                                            jaws.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        what are dental sealants?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Dental sealants are thin, protective coatings applied to the chewing surfaces
                                            of molars to prevent cavities.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        are teeth whitening treatments safe?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, teeth whitening treatments performed by a dentist or with
                                            dentist-approved products are safe and effective.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        what is cosmetic dentistry?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Cosmetic dentistry focuses on improving the appearance of teeth, gums, and
                                            smile through procedures like whitening, veneers, and bonding.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        how can i whiten my teeth at home?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>At-home whitening options include over-the-counter whitening strips, gels,
                                            toothpaste, and custom trays provided by your dentist.</p>
                                    </div>
                                </div>
                            </div>
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
