@extends('admin.layouts.master')
@section('content')
    <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="description-title">About me</span>
                    <h2>About Me</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('laura/assets/img/profile-img.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>{{ isset($about->title) && !empty($about->title) ? $about->title : 'PHP &amp; Laravel Developer' }}</h2>
                        <p class="fst-italic py-3">
                            @if (isset($about->description) && !empty($about->description))
                                {{ $about->description }}
                            @else
                               I’m a PHP Laravel developer with 4 years of experience building dynamic web applications and RESTful APIs. I specialize in backend development, database design, and scalable architecture. Known for writing clean code, solving complex problems, and delivering reliable solutions, I’m dedicated to building high-quality, performance-driven web projects.
                            @endif
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span> {{ isset($about->birthday) && !empty($about->birthday) ? $about->birthday : '15 Nov 1996' }} </span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ isset($about->website) && !empty($about->website) ? $about->website : 'www.example.com' }} </span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ isset($about->Phone) && !empty($about->Phone) ? $about->Phone : '+92 334 2859 730' }} </span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ isset($about->City) && !empty($about->City) ? $about->City : 'Karachi, Pakistan' }} </span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ isset($about->Age) && !empty($about->Age) ? $about->Age : '28' }} </span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ isset($about->Degree) && !empty($about->Degree) ? $about->Degree : 'Bachelors' }} </span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ isset($about->Email) && !empty($about->Email) ? $about->Email : 'imranalibrohi148@gmail.com' }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ isset($about->Freelance) && !empty($about->Freelance) ? $about->Freelance : 'Available' }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- /About Section -->
@endsection
