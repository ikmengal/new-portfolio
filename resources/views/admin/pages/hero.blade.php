@extends('admin.layouts.master')
@section('content')
    <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('laura/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

            <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
                <h2>{{ isset($user->name) && !empty($user->name) ? $user->name : 'Imran Ali Brohi' }}</h2>
                <p>I'M A PROFESSIONAL WEB DEVELOPER IN KARACHI CITY</p>
                <a href="#about" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
            </div>
        </section>
    <!-- /Hero Section -->
@endsection
