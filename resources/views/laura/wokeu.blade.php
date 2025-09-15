<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>IK Mengal Solutions</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Favicons -->
        <link href="{{ asset('laura/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('laura/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Quicksand:wght@300;400;500;600;700&family=Domine:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('laura/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('laura/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('laura/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('laura/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('laura/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="{{ asset('laura/assets/css/main.css') }}" rel="stylesheet">
    </head>

    <body class="portfolio-details-page">
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                    <h1 class="sitename">Imran Ali Brohi</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                    <li><a href="{{ url('/#portfolio') }}" class="active">Home</a></li>
                    <li><a href="{{ url('/#about') }}">About</a></li>
                    <li><a href="{{ url('/#resume') }}">Resume</a></li>
                    <li><a href="{{ url('/#services') }}">Services</a></li>
                    <li><a href="{{ url('/#portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ url('/#contact') }}">Contact</a></li>
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

        <main class="main">
            <!-- Page Title -->
                <div class="page-title dark-background">
                    <div class="container position-relative">
                        <h1>Portfolio Details</h1>
                        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
                        <nav class="breadcrumbs">
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li class="current">Portfolio Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            <!-- End Page Title -->

            <!-- Portfolio Details Section -->
                <section id="portfolio-details" class="portfolio-details section">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="row gy-4">
                            <div class="col-lg-8">
                                <div class="portfolio-details-slider swiper init-swiper">
                                    <script type="application/json" class="swiper-config">
                                        {
                                            "loop": true,
                                            "speed": 600,
                                            "autoplay": {
                                                "delay": 5000
                                            },
                                            "slidesPerView": "auto",
                                            "pagination": {
                                                "el": ".swiper-pagination",
                                                "type": "bullets",
                                                "clickable": true
                                            }
                                        }
                                    </script>

                                    <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Login.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Dashboard.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/All-Users.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Blogs.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Blog Details.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/EditBlog.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Posts.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/PostDetails.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu.png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (1).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (2).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (3).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (4).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (5).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (6).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (7).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (8).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (9).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (10).png') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('laura/assets/img/portfolio/wokeu/Wokeu (11).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                                    <h3>Project information</h3>
                                    <ul>
                                        <li><strong>Category</strong>: Web And Mobile Application</li>
                                        <li><strong>Client</strong>: US Client</li>
                                        <li><strong>Project date</strong>: 01 January, 2024</li>
                                        <li><strong>Project URL</strong>: <a href="https://wokeu.net/home" target="_blank">https://wokeu.net/home</a></li>
                                    </ul>
                                </div>
                                <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                                    <h2>Wokeu</h2>
                                    <p>
                                        Wokeu, the Discrimination application, empowers users to post incidents, engage through likes, comments, and shares.
                                        Notifications are managed efficiently. Admin panel oversees posts, blogs, political blogs, events, and facilitates messaging.
                                        Built on Laravel, it offers seamless user interaction and robust administrative control for effective discrimination awareness and action
                                        <br />
                                        <br />
                                        WokeU was created to debunk the delusion of white supremacy.  WokeU efforts are to create a place to unite and become empowered as people of color.
                                        The desired outcome is to overcome the negative effects of Racism in the United States of America.
                                        In lieu of growing and evolving into better people and being the great nation that it claims to be, it seems in 2023 racism is getting worse.
                                        Even to the point of covering up their past actions. In doing so, they would be covering up a great deal of great achievements accomplished by people of color.
                                        WokeU captures data from the real world and racial disparities to provide valuable insights, enabling you to understand the complexities of the environment around you.
                                        The goal is to become the world’s most accurate visualizations, enhanced by real numbers for analytics, and actionable insights that you can use today to build a better tomorrow.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- /Portfolio Details Section -->
        </main>

        <footer id="footer" class="footer position-relative dark-background">
            <div class="container">
                <h3 class="sitename">Imran Ali Brohi<br></h3>
                <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
                <div class="social-links d-flex justify-content-center">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-skype"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <div class="container">
                    <div class="copyright">
                        <span>Copyright</span> <strong class="px-1 sitename">IK Mengal</strong> <span>All Rights Reserved</span>
                    </div>
                    <div class="credits">
                        Designed by <a href="javascript:;">IK Mengal Solutions</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('laura/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('laura/assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('laura/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('laura/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('laura/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('laura/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('laura/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('laura/assets/js/main.js') }}"></script>
    </body>
</html>
