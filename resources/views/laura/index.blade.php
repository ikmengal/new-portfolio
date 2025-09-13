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

    <body class="index-page">
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Laura</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
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

            <!-- Hero Section -->
                <section id="hero" class="hero section dark-background">
                    <img src="{{ asset('laura/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

                    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
                        <h2>Imran Ali Brohi</h2>
                        <p>I'M A PROFESSIONAL WEB DEVELOPER IN KARACHI CITY</p>
                        <a href="#about" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
                    </div>
                </section>
            <!-- /Hero Section -->

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
                                <h2>PHP &amp; Laravel Developer.</h2>
                                <p class="fst-italic py-3">
                                    I’m a PHP Laravel developer with 4 years of experience building dynamic web applications and RESTful APIs. I specialize in backend development, database design, and scalable architecture. Known for writing clean code, solving complex problems, and delivering reliable solutions, I’m dedicated to building high-quality, performance-driven web projects.
                                </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>15 Nov 1996</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+92 334 2859 730</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Karachi, Pakistan</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>28</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelors</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>imranalibrohi148@gmail.com</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <p class="py-3">
                                Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </section>
            <!-- /About Section -->

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
                                <div class="resume-item">
                                    <h4>Bachelor's &amp; Degree of Computer Science</h4>
                                    <h5>2016 - 2020</h5>
                                    <p><em>University of Sindh Jamshoro, Pakistan</em></p>
                                    <p>Gained strong foundations in software development, algorithms, databases, and web technologies, preparing for real-world challenges in backend development.</p>
                                </div><!-- Edn Resume Item -->

                                <div class="resume-item">
                                    <h4>Imtermediate &amp; Pre Medical</h4>
                                    <h5>2014 - 2016</h5>
                                    <p><em>Scientific Public School and Collage Shahdadkot, Pakistan</em></p>
                                    <p>Studied biology, chemistry, and physics, which enhanced my analytical thinking and problem-solving skills before transitioning to computer science.</p>
                                </div><!-- Edn Resume Item -->

                                <div class="resume-item">
                                    <h4>Matriculation &amp; Science</h4>
                                    <h5>2011 - 2013</h5>
                                    <p><em>Govt Boys Higher Secondary School Garhi Khairo, Pakistan</em></p>
                                    <p>Focused on general science and mathematics, building a disciplined academic foundation and curiosity that led me into the tech field.</p>
                                </div><!-- Edn Resume Item -->
                            </div>

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="resume-title">Professional Experience</h3>
                                <div class="resume-item">
                                    <h4>Assistant Manager Software Engineering</h4>
                                    <h5>Oct-2024 | Present</h5>
                                    <p><em>Swyft Cube Private Limited Karachi, Pakistan</em></p>
                                    <ul>
                                        <li>Managing projects, and delivering scalable web solutions using Laravel, APIs, and modern development practices.</li>
                                    </ul>
                                </div><!-- Edn Resume Item -->

                                <div class="resume-item">
                                    <h4>PHP Developer</h4>
                                    <h5>Aug-2023 | Sep-2024</h5>
                                    <p><em>Cyberonix Consulting Private Limited Karachi, Pakistan</em></p>
                                    <ul>
                                        <li>Developed web applications and RESTful APIs using Laravel, ensured code quality, and collaborated with cross-functional teams for client projects.</li>
                                    </ul>
                                </div><!-- Edn Resume Item -->

                                <div class="resume-item">
                                    <h4>Web Developer</h4>
                                    <h5>Oct-2020 | Aug-2023</h5>
                                    <p><em>Hidaya Institute of Science & Technology Jamshoro, Pakistan</em></p>
                                    <ul>
                                        <li>Built and maintained web applications, managed backend logic, and optimized performance using Laravel and database-driven solutions.</li>
                                    </ul>
                                </div><!-- Edn Resume Item -->
                            </div>
                        </div>
                    </div>
                </section>
            <!-- /Resume Section -->

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
                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item position-relative">
                                    <div class="icon"><i class="bi bi-code icon"></i></div>
                                    <h4><a href="" class="stretched-link">Web Developer</a></h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                                <div class="service-item position-relative">
                                    <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                                    <h4><a href="" class="stretched-link">REST APIs Developer</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                                <div class="service-item position-relative">
                                    <div class="icon"><i class="bi bi-phone icon"></i></div>
                                    <h4><a href="" class="stretched-link">App Developer</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-item position-relative">
                                    <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                                    <h4><a href="" class="stretched-link">Wed Design</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-item position-relative">
                                    <div class="icon"><i class="bi bi-rulers icon"></i></div>
                                    <h4><a href="" class="stretched-link">Logo Design</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-item position-relative">
                                    <div class="icon"><i class="bi bi-ubuntu icon"></i></div>
                                    <h4><a href="" class="stretched-link">Branding</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div><!-- End Service Item -->
                        </div>
                    </div>
                </section>
            <!-- /Services Section -->

            <!-- Testimonials Section -->
                <section id="testimonials" class="testimonials section dark-background">
                    <img src="{{ asset('laura/assets/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">

                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper init-swiper">
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
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('laura/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('laura/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('laura/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('laura/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('laura/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
            <!-- /Testimonials Section -->

            <!-- Portfolio Section -->
                <section id="portfolio" class="portfolio section">
                    <!-- Section Title -->
                        <div class="container section-title" data-aos="fade-up">
                            <span class="description-title">Portfolio</span>
                            <h2>Portfolio</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    <!-- End Section Title -->

                    <div class="container-fluid">
                        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-product">Product</li>
                                <li data-filter=".filter-branding">Branding</li>
                                <li data-filter=".filter-books">Books</li>
                            </ul><!-- End Portfolio Filters -->

                            <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/youchef.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/youchef.png') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="https://yochef.dotverge.com" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/homegrown.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/homegrown.png') }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="https://admin.rrhomegrown.com" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/agenious.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/agenious.png') }}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="https://ageniushealthcare.com" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/wokue.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/wokue.png') }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="https://wokeu.net/home" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/cyberonix.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/cyberonix.png') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="https://hr.cyberonix.co" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/suescleaning.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/suescleaning.png') }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="https://sues-cleaning.dotverge.com/login" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/patpat.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/patpat.png') }}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="javascript:;" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/pos.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/pos.png') }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="javascript:;" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/clientonboarding.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/clientonboarding.png') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="javascript:;" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/quizcraft.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/quizcraft.png') }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="javascript:;" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->

                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/images/quizcraft.png') }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/images/quizcraft.png') }}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="https://birth-journal.dotverge.com" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->
                            </div><!-- End Portfolio Container -->
                        </div>
                    </div>
                </section>
            <!-- /Portfolio Section -->

            <!-- Pricing Section -->
                <section id="pricing" class="pricing section">
                    <!-- Section Title -->
                        <div class="container section-title" data-aos="fade-up">
                            <span class="description-title">Pricing</span>
                            <h2>Pricing</h2>
                            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                        </div>
                    <!-- End Section Title -->
                    <div class="container">

                        <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="pricing-item">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="pricing-item recommended">
                            <span class="recommended-badge">Recommended</span>
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="pricing-item">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        </div>

                    </div>
                </section>
            <!-- /Pricing Section -->

            <!-- Pricing 2 Section -->
                <section id="pricing-2" class="pricing-2 section">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="row gy-4 gx-lg-5">
                            <div class="col-lg-6">
                                <div class="pricing-item d-flex justify-content-between">
                                    <h3>Portrait Photography</h3>
                                    <h4>$160.00</h4>
                                </div>
                            </div><!-- End Pricing Item -->

                            <div class="col-lg-6">
                                <div class="pricing-item d-flex justify-content-between">
                                    <h3>Fashion Photography</h3>
                                    <h4>$300.00</h4>
                                </div>
                            </div><!-- End Pricing Item -->

                            <div class="col-lg-6">
                                <div class="pricing-item d-flex justify-content-between">
                                    <h3>Sports Photography</h3>
                                    <h4>$200.00</h4>
                                </div>
                            </div><!-- End Pricing Item -->

                            <div class="col-lg-6">
                                <div class="pricing-item d-flex justify-content-between">
                                    <h3>Still Life Photography</h3>
                                    <h4>$120.00</h4>
                                </div>
                            </div><!-- End Pricing Item -->

                            <div class="col-lg-6">
                                <div class="pricing-item d-flex justify-content-between">
                                    <h3>Wedding Photography</h3>
                                    <h4>$500.00</h4>
                                </div>
                            </div><!-- End Pricing Item -->

                            <div class="col-lg-6">
                                <div class="pricing-item d-flex justify-content-between">
                                    <h3>Photojournalism</h3>
                                    <h4>$200.00</h4>
                                </div>
                            </div><!-- End Pricing Item -->
                        </div>
                    </div>
                </section>
            <!-- /Pricing 2 Section -->

            <!-- Gallery Section -->
                <section id="gallery" class="gallery section">
                    <!-- Section Title -->
                        <div class="container section-title" data-aos="fade-up">
                            <span class="description-title">Gallery</span>
                            <h2>Gallery</h2>
                            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                        </div>
                    <!-- End Section Title -->

                    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                        <div class="row g-0">
                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                                        <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                                        <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                                        <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                                        <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                                        <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                                        <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                                        <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                                        <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->
                        </div>
                    </div>
                </section>
            <!-- /Gallery Section -->

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

        <script>
            $(document).ready(function () {
                $("#contact-form").on("submit", function (e) {
                    e.preventDefault();

                    $.ajax({
                        url: $(this).attr("action"),
                        method: $(this).attr("method"),
                        data: $(this).serialize(),
                        dataType: "json",
                        beforeSend: function () {
                            $(".error-text").text("");
                            $('#submitBtn').prop("disabled", true).addClass('d-none');
                            $('#loadingBtn').removeClass('d-none');
                        },
                        success: function (response) {
                            $('#submitBtn').prop("disabled", false).removeClass('d-none');
                            $('#loadingBtn').addClass('d-none');

                            $('.response-message').text(response.message);
                            setTimeout(() => {
                                $('.response-message').text('');
                            }, 2000);

                            $("#contact-form")[0].reset();
                        },
                        error: function (xhr) {
                            $('#submitBtn').prop("disabled", false).removeClass('d-none');
                            $('#loadingBtn').addClass('d-none');

                            $(".error-text").text(""); // clear previous errors

                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                $.each(errors, function (key, value) {
                                    $("." + key + "_error").text(value[0]);
                                });
                            } else {
                                $('.response-message').text("Something went wrong. Please try again.");
                            }

                            setTimeout(() => {
                                $('.response-message').text('');
                            }, 2000);
                        }
                    });

                });
            });
        </script>
    </body>
</html>
