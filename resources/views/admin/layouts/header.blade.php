@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Auth;
@endphp
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">Imran Ali Brohi</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
            <li><a href="{{ route('hero') }}" class="{{ Route::is('hero') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('aboutus',Auth::id()) }}" class="{{ Route::is('aboutus') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('resume') }}" class="{{ Route::is('resume') ? 'active' : '' }}">Resume</a></li>
            <li><a href="{{ route('services') }}" class="{{ Route::is('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="{{ route('portfolio') }}" class="{{ Route::is('portfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="{{ route('contact') }}" class="{{ Route::is('portfolio') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</header>
