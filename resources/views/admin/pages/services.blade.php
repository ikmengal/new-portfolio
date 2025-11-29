@extends('admin.layouts.master')
@section('content')
    <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="description-title">My Services</span>
                    <h2>My Services</h2>
                    <p>I offer professional web development services, specializing in PHP Laravel applications, RESTful APIs, and dynamic web solutions tailored to your business needs. Whether you're starting from scratch or enhancing an existing system, I deliver scalable, secure, and efficient solutions that bring your ideas to life—no matter how far they seem.</p>
                </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @if (isset($user['hasServices']) && !empty($user['hasServices']) && count($user['hasServices']) > 0)
                        @foreach ($user['hasServices'] as $userService)
                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item position-relative">
                                    <div class="icon"><i class="bi bi-code icon"></i></div>
                                    <h4><a href="javascript:;" class="stretched-link">{{ $userService->title ?? '' }}</a></h4>
                                    <p> {!! $userService->description ?? 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi' !!}</p>
                                </div>
                            </div><!-- End Service Item -->
                        @endforeach
                    @else
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-code icon"></i></div>
                                <h4><a href="javascript:;" class="stretched-link">Web Developer</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div><!-- End Service Item -->
                    @endif

                    {{-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="javascript:;" class="stretched-link">REST APIs Developer</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-phone icon"></i></div>
                            <h4><a href="javascript:;" class="stretched-link">App Developer</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="javascript:;" class="stretched-link">Web Designer</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div><!-- End Service Item --> --}}
                </div>
            </div>
        </section>
    <!-- /Services Section -->
@endsection
