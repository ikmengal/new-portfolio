<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ik Mengal Solutions</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('admin/css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('admin/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('admin/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">Imran Ali</a>
                <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav nav ml-auto">
                        <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                        <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                        <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                        <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                        <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                        <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                        {{-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li> --}}
                        <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="home-section" class="hero">
            <div class="home-slider  owl-carousel">
                <div class="slider-item ">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                            <div class="one-third js-fullheight order-md-last img" style="background-image:url({{ asset('admin/images/bg_1.png') }});">
                                <div class="overlay"></div>
                            </div>
                            <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">Hello!</span>
                                    <h1 class="mb-4 mt-3">I'm <span>Imran Ali Brohi</span></h1>
                                    <h2 class="mb-4">A Freelance Web Developer</h2>
                                    <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                            <div class="one-third js-fullheight order-md-last img" style="background-image:url({{ asset('admin/images/bg_2.png') }});">
                                <div class="overlay"></div>
                            </div>
                            <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">Hello!</span>
                                    <h2 class="mb-4 mt-3">I'm a <span>PHP Laravel Developer</span> based in Pakistan</h2>
                                    <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 col-lg-5 d-flex">
                        <div class="img-about img d-flex align-items-stretch">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('admin/images/bg_1.png') }});"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h1 class="big">About</h1>
                                <h2 class="mb-4">About Me</h2>
                                <p>I’m a PHP Laravel developer with 4 years of experience building dynamic web applications and RESTful APIs. I specialize in backend development, database design, and scalable architecture. Known for writing clean code, solving complex problems, and delivering reliable solutions, I’m dedicated to building high-quality, performance-driven web projects.</p>
                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Name:</span> <span>Imran Ali Brohi</span></li>
                                    <li class="d-flex"><span>Date of birth:</span> <span>November 15, 1996</span></li>
                                    <li class="d-flex"><span>Address:</span> <span>R 57/58 A Section Gulshan e Zahoor Lines Area Karachi, Sindh, Pakistan</span></li>
                                    <li class="d-flex"><span>Zip code:</span> <span>70500</span></li>
                                    <li class="d-flex"><span>Email:</span> <span>imranalibrohi@gmail.com</span></li>
                                    <li class="d-flex"><span>Phone: </span> <span>+923342859730</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="counter-wrap ftco-animate d-flex mt-md-3">
                            <div class="text">
                                <p class="mb-4">
                                    <span class="number" data-number="120">0</span>
                                    <span>Project complete</span>
                                </p>
                                <p><a href="{{ url('download-cv') }}" class="btn btn-primary py-3 px-3">Download CV</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pb" id="resume-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-10 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Resume</h1>
                        <h2 class="mb-4">Resume</h2>
                        <p>Experienced PHP Laravel developer skilled in web apps and RESTful APIs, delivering efficient, scalable, and secure backend solutions.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="resume-wrap ftco-animate">
                            <span class="date">2016-2020</span>
                            <h2>Bachelor's Degree of Computer Science</h2>
                            <span class="position">University of Sindh Jamshoro</span>
                            <p class="mt-4">Gained strong foundations in software development, algorithms, databases, and web technologies, preparing for real-world challenges in backend development.</p>
                        </div>
                        <div class="resume-wrap ftco-animate">
                            <span class="date">2014-2016</span>
                            <h2>Imtermediate in Pre Medical</h2>
                            <span class="position">Scientific Public School and Collage Shahdadkot</span>
                            <p class="mt-4">Studied biology, chemistry, and physics, which enhanced my analytical thinking and problem-solving skills before transitioning to computer science.</p>
                        </div>
                        <div class="resume-wrap ftco-animate">
                            <span class="date">2011-2013</span>
                            <h2>Matriculation in Science</h2>
                            <span class="position">Govt Boys Higher Secondary School Garhi Khairo</span>
                            <p class="mt-4">Focused on general science and mathematics, building a disciplined academic foundation and curiosity that led me into the tech field.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="resume-wrap ftco-animate">
                            <span class="date">Oct-2024 | Present</span>
                            <h2>Assistant Manager &amp; Software Engineering</h2>
                            <span class="position">Swyft Cube Private Limited Karachi</span>
                            <p class="mt-4">Managing projects, and delivering scalable web solutions using Laravel, APIs, and modern development practices.</p>
                        </div>
                        <div class="resume-wrap ftco-animate">
                            <span class="date">Aug-2023 | Sep-2024</span>
                            <h2>PHP Developer</h2>
                            <span class="position">Cyberonix Consulting Private Limited Karachi</span>
                            <p class="mt-4">Developed web applications and RESTful APIs using Laravel, ensured code quality, and collaborated with cross-functional teams for client projects.</p>
                        </div>
                        <div class="resume-wrap ftco-animate">
                            <span class="date">Oct-2020 | Aug-2023</span>
                            <h2>Web Developer</h2>
                            <span class="position">Hidaya Institute of Science & Technology Jamshoro</span>
                            <p class="mt-4">Built and maintained web applications, managed backend logic, and optimized performance using Laravel and database-driven solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6 text-center ftco-animate">
                        <p><a href="{{ url('download-cv') }}" class="btn btn-primary py-4 px-5">Download CV</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section" id="services-section">
            <div class="container">
                <div class="row justify-content-center py-5 mt-5">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Services</h1>
                        <h2 class="mb-4">Services</h2>
                        <p>I offer professional web development services, specializing in PHP Laravel applications, RESTful APIs, and dynamic web solutions tailored to your business needs. Whether you're starting from scratch or enhancing an existing system, I deliver scalable, secure, and efficient solutions that bring your ideas to life—no matter how far they seem.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="fa-solid fa-laptop-code"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Web Developer</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="fa-solid fa-code-branch"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">REST APIs Developer</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">App Developer</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="fa-solid fa-object-group"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Wed Design</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="flaticon-flasks"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Logo Design</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="flaticon-ideas"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Branding</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section" id="skills-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Skills</h1>
                        <h2 class="mb-4">My Skills</h2>
                        <p>Skilled in PHP, Laravel, MySQL, JavaScript, jQuery, and RESTful APIs, I build reliable and maintainable web applications. I’m also experienced in version control with Git, database design, and backend logic. My strong problem-solving skills and attention to detail help turn complex requirements into clean, functional code.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Laravel</h3>
                            <div class="progress">
                                <div class="progress-bar color-5" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>PHP</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>REST APIs</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Git</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                                    <span>65%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>MYSQL</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>JavaScript</h3>
                            <div class="progress">
                                <div class="progress-bar color-2" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    <span>75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>jQuery</h3>
                            <div class="progress">
                                <div class="progress-bar color-2" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    <span>75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>HTML5</h3>
                            <div class="progress">
                                <div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>CSS3</h3>
                            <div class="progress">
                                <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Bootstrap</h3>
                            <div class="progress">
                                <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Adobe Illustrator</h3>
                            <div class="progress">
                                <div class="progress-bar color-1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    <span>75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Adobe Photoshop</h3>
                            <div class="progress">
                                <div class="progress-bar color-1" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                                    <span>65%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-project" id="projects-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Projects</h1>
                        <h2 class="mb-4">Our Projects</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/youchef.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="https://yochef.dotverge.com" target="_blank">YoChef Pull-Up &amp; Food Delivery Ecosystem</a></h3>
                                <span>Developed a complete food delivery ecosystem comprising a User App, Rider App, and Web-Based Admin Panel. The User App allows customers to register, browse menus, customize orders, make secure payments, track deliveries in real-time, and provide feedback. The Rider App enables delivery personnel to manage assigned orders, navigate with integrated maps, and share live location updates. The Admin Panel empowers management to control menus, track inventory, assign riders, and send push notifications. Built with a secure backend, real-time APIs, and cloud-hosted database for scalability, the system ensures seamless order processing, efficient delivery management, and engaging customer experience across Android, iOS, and web platforms. </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/homegrown.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="https://admin.rrhomegrown.com" target="_blank">RR &amp; Homegrown</a></h3>
                                <span>Meet Rhonda Harris, a passionate Climate Activist on a mission to save the planet and protect the delicate beauty of butterflies. With a fiery determination and a heart full of love for nature, Rhonda is leading the charge for environmental change and conservation efforts. </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/agenious.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="https://ageniushealthcare.com/">Agenius &amp; Healthcare Staffing </a></h3>
                                <span>
                                    Agenius HealthCare Staffing is a comprehensive application designed for hospital staff management.
                                    Admins can post job vacancies, while users can efficiently search and apply for available positions.
                                    The platform facilitates check-in and checkout processes, tracking users' working hours and activities.
                                    With its user-friendly interface and robust features, it streamlines staffing operations for hospitals, ensuring smooth workflow and efficient resource management.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/wokue.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="https://wokeu.net/home">Wokeu &amp; (Claim Application)</a></h3>
                                <span>
                                    Wokeu, the Discrimination application, empowers users to post incidents, engage through likes, comments, and shares. Notifications are managed efficiently.
                                    Admin panel oversees posts, blogs, political blogs, events, and facilitates messaging. Built on Laravel, it offers seamless user interaction and robust administrative control for effective discrimination awareness and action
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/cyberonix.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="https://hr.cyberonix.co">Cyberonix &amp; Consulting</a></h3>
                                <span>
                                    The HR Management System built on Laravel streamlines employee activities, encompassing leave requests, attendance tracking, salary management, ticketing systems, and insurance administration.
                                    It centralizes critical notifications, ensuring seamless communication between management and staff. With its robust features and intuitive interface, it optimizes HR processes for enhanced efficiency and employee satisfaction.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/suescleaning.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="https://sues-cleaning.dotverge.com/login">Sues &amp; Cleaning</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/patpat.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Patpat &amp;</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/pos.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">POS &amp; Managment</a></h3>
                                <span>
                                    Developed Laravel-based models for Leads and Brands within a POS system, streamlining lead management and brand representation. Implemented data-driven insights and predictive algorithms to enhance sales conversion and brand recognition.
                                    Integral in crafting a robust POS solution in Laravel, elevating business efficiency and customer satisfaction.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/clientonboarding.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Client &amp; Onboarding</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/quizcraft.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Quiz &amp; Craft</a></h3>
                                <span>
                                    Quiz Craft is a web-based application designed to streamline quiz creation and management. In this project, the admin can create brands and their types, followed by questions of various formats, such as text-based answers, numerical responses, and multiple-choice options.
                                    Admins can then generate shareable links for the quizzes, which users can access after providing their name and email. Users can attempt quizzes in real time, with immediate results displayed. Admins have access to real-time reports on user performance and test records.
                                    This system efficiently manages and tracks quiz interactions for both users and administrators.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('admin/images/quizcraft.png') }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="https://birth-journal.dotverge.com">Birth &amp; Journal</a></h3>
                                <span>
                                    The Birth Journal Application on Laravel efficiently manages baby birth details and notifies
                                    relatives and friends. It organizes all aspects of childcare, including doctor appointments,
                                    feeding, sleeping, and diaper changes. With its user-friendly interface, it simplifies the
                                    tracking of daily baby activities, ensuring optimal care and communication among caregivers.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="ftco-section" id="blog-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Blog</h1>
                        <h2 class="mb-4">Our Blog</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="single.html" class="block-20" style="background-image: url({{ asset('admin/images/image_1.jpg') }});"></a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2">June 21, 2019</span>
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="single.html" class="block-20" style="background-image: url({{ asset('admin/images/image_2.jpg') }});"></a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2">June 21, 2019</span>
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry">
                            <a href="single.html" class="block-20" style="background-image: url({{ asset('admin/images/image_3.jpg') }});"></a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2">June 21, 2019</span>
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
            <div class="container">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Awards</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="1200">0</strong>
                                <span>Complete Projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="1200">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="500">0</strong>
                                <span>Cups of coffee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-hireme img margin-top" style="background-image: url({{ asset('admin/images/bg_1.jpg') }})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 ftco-animate text-center">
                        <h2>I'm <span>Available</span> for freelancing</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Contact</h1>
                        <h2 class="mb-4">Contact Me</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>

                <div class="row d-flex contact-info mb-5">
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-map-signs"></span>
                            </div>
                            <h3 class="mb-4">Address</h3>
                            <p>R 57/58 A Section Gulshan e Zahoor Lines Area Karachi, Sindh, Pakistan</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-phone2"></span>
                            </div>
                            <h3 class="mb-4">Contact Number</h3>
                            <p><a href="tel://+923342859730">+923342859730</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <h3 class="mb-4">Email Address</h3>
                            <p><a href="mailto:imranalibrohi148@gmail.com">imranalibrohi148@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-globe"></span>
                            </div>
                            <h3 class="mb-4">Website</h3>
                            <p><a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters block-9">
                    <div class="col-md-6 order-md-last d-flex">
                        <form action="#" class="bg-light p-4 p-md-5 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="img" style="background-image: url({{ asset('admin/images/about.jpg') }});"></div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="ftco-footer ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">About</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-4">
                            <h2 class="ftco-heading-2">Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                                <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                                <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                                <li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                                <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Services</h2>
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
                                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
                                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Have a Questions?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">R 57/58 Section A Gulashan e Zahoor Lines Area Karachi, Sindh, Pakistan</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+923342859730</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="javascript:;" target="_blank">Imran Ali Brohi</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><span class="icon-arrow-up text-dark"></span></a>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>

        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('admin/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('admin/js/aos.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('admin/js/scrollax.min.js') }}"></script>
        <script src="{{ asset('admin/js/main.js') }}"></script>
    </body>
</html>
