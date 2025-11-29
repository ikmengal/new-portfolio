@extends('admin.layouts.master')
@section('content')
    <!-- Resume Section -->
    <section id="resume" class="resume section">
        <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="description-title">My Resume</span>
                <h2>My Resume</h2>
                <p>Experienced PHP Laravel developer skilled in web apps and RESTful APIs, delivering efficient, scalable, and secure backend solutions.</p>
            </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>Imran Ali Brohi</h4>
                        <p><em>I’m a PHP Laravel developer with 4 years of experience building dynamic web applications and RESTful APIs. I specialize in backend development, database design, and scalable architecture. Known for writing clean code, solving complex problems, and delivering reliable solutions, I’m dedicated to building high-quality, performance-driven web projects.</em></p>
                        <ul>
                            <li>R 57/58 A Section Gulshan e Zahoor Lines Area Karachi, Sindh, Pakistan</li>
                            <li>+923342859730</li>
                            <li>imranalibrohi@gmail.com</li>
                        </ul>
                    </div><!-- Edn Resume Item -->

                    <h3 class="resume-title">Education</h3>
                    @if (isset($user['hasEducations']) && !empty($user['hasEducations']) && count($user['hasEducations']) > 0)
                        @foreach ($user['hasEducations'] as $userEducation)
                            <div class="resume-item">
                                <h4>{{ $userEducation->degree ?? '' }} &nbsp; {{ $userEducation->title ?? '' }}</h4>
                                <h5>{{ $userEducation->start_date ?? '' }} - {{ $userEducation->end_date ?? '' }}</h5>
                                <p><em>{{ $userEducation->university ?? '' }}</em></p>
                                <p>{!! $userEducation->description ?? 'Gained strong foundations in software development, algorithms, databases, and web technologies, preparing for real-world challenges in backend development.' !!}</p>
                            </div><!-- Edn Resume Item -->
                        @endforeach
                    @else
                        <div class="resume-item">
                            <h4>Bachelor's &amp; Degree of Computer Science</h4>
                            <h5>2016 - 2020</h5>
                            <p><em>University of Sindh Jamshoro, Pakistan</em></p>
                            <p>Gained strong foundations in software development, algorithms, databases, and web technologies, preparing for real-world challenges in backend development.</p>
                        </div><!-- Edn Resume Item -->
                    @endif
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="resume-title">Professional Experience</h3>
                    @if (isset($user['hasExperiences']) && !empty($user['hasExperiences']) && count($user['hasExperiences']) > 0)
                        @foreach ($user['hasExperiences'] as $userExperience)
                            <div class="resume-item">
                                <h4>{{ $userExperience->title ?? '' }}</h4>
                                <h5>{{ $userExperience->start_date ?? '' }} | Present</h5>
                                <p><em>{{ $userExperience->company ?? '' }}, {{ $userExperience->City ?? '' }} </em></p>
                                <ul>
                                    <li> {!! $userExperience->description ?? 'Managing projects, and delivering scalable web solutions using Laravel, APIs, and modern development practices.' !!}</li>
                                </ul>
                            </div><!-- Edn Resume Item -->
                        @endforeach
                    @else
                        <div class="resume-item">
                            <h4>Assistant Manager Software Engineering</h4>
                            <h5>Oct-2024 | Present</h5>
                            <p><em>Swyft Cube Private Limited Karachi, Pakistan</em></p>
                            <ul>
                                <li>Managing projects, and delivering scalable web solutions using Laravel, APIs, and modern development practices.</li>
                            </ul>
                        </div><!-- Edn Resume Item -->
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- /Resume Section -->
@endsection
