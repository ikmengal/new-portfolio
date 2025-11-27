@extends('admin.layouts.master')
@section('content')
    <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="description-title">Contact</span>
                    <h2>Contact</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            <!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>R 57/58 A Section Gulshan e Zahoor Lines Area Karachi, Sindh, Pakistan</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-4">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+923342859730</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-4">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>imranalibrohi148@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

                <form id="contact-form" action="{{ route('contact_us') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                            <span class="text-danger error-text name_error"></span>
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                            <span class="text-danger error-text email_error"></span>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                            <span class="text-danger error-text subject_error"></span>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                            <span class="text-danger error-text message_error"></span>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="form-group d-none" id="loadingBtn">
                                <button class="btn py-2 px-4" id="loadingg">
                                    <div class="spinner-border spinner-border-sm" role="status"></div>&nbsp; &nbsp;
                                    <span class="visually">Loading...</span>
                                </button>
                            </div>
                            <div class="response-message"></div>
                            <button type="submit" id="submitBtn">Send Message</button>
                        </div>
                    </div>
                </form><!-- End Contact Form -->
            </div>
        </section>
    <!-- /Contact Section -->
@endsection
