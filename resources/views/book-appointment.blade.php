
<x-app-layout pageName="{{$pageName}}">
    <x-head-banner pageName="{{$pageName}}"></x-head-banner>
    <div class="page-book-appointment">
        <div class="container">
            <div class="book-appointment-form">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">booking</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Book</span> Appointment</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="appointment-form wow fadeInUp">
                            <!-- Form Start -->
                            <form id="appointmentForm" action="{{'appointment'}}" method="POST" data-toggle="validator">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Enter Email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <input type="hidden" id="url" value="{{route('appointment')}}"/>

                                    <div class="form-group col-md-6 mb-4">
                                        <select name="service" class="form-control form-select" id="service" required>
                                            <option value="" disabled selected>Select Service</option>
                                            <option value="general_eye_care">General Eye Care</option>
                                            <option value="vision_correction">Vision Correction</option>
                                            <option value="laser_eye_surgery">Laser Eye Surgery</option>
                                            <option value="contact_lens_fitting">Contact Lens Fitting</option>
                                            <option value="pediatric_eye_care">Pediatric Eye Care</option>
                                            <option value="advanced_eye_treatment">Advanced Eye Treatment</option>
                                            <option value="dry_eye_treatment">Dry Eye Treatment</option>
                                            <option value="eye_exams">Comprehensive Eye Exams</option>
                                            <option value="glaucoma_screening">Glaucoma Screening</option>
                                            <option value="cataract_surgery">Cataract Surgery</option>

                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <input type="date" name="date" class="form-control" id="date" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">book appointment</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
