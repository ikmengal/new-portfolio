@extends('admin.layouts.master')
@section('content')
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
                        @if (isset($user['hasProjects']) && !empty($user['hasProjects']) && count($user['hasProjects']) > 0)
                            @foreach ($user['hasProjects'] as $userProject)
                                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                    <div class="portfolio-content h-100">
                                        <img src="{{ asset('admin/assets/projects/'.$userProject->main_image) }}" class="img-fluid" alt="" style="height: 350px">
                                        <div class="portfolio-info">
                                            <a href="{{ asset('admin/assets/projects/'.$userProject->main_image) }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            <a href="{{ route('portfolio_detail',$userProject->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->
                            @endforeach
                        @else
                            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('admin/images/youchef.png') }}" class="img-fluid" alt="" style="height: 350px">
                                    <div class="portfolio-info">
                                        <a href="{{ asset('admin/images/youchef.png') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                        <a href="{{ route('portfolio_detail',['title' => 'yochef']) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endif

                        {{-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('admin/images/youchef.png') }}" class="img-fluid" alt="" style="height: 350px">
                                <div class="portfolio-info">
                                    <a href="{{ asset('admin/images/youchef.png') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('portfolio_detail',['title' => 'yochef']) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('admin/images/homegrown.png') }}" class="img-fluid" alt="" style="height: 350px">
                                <div class="portfolio-info">
                                    <a href="{{ asset('admin/images/homegrown.png') }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('portfolio_detail',['title' => 'rrhomegrown']) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('admin/images/agenious.png') }}" class="img-fluid" alt="" style="height: 350px">
                                <div class="portfolio-info">
                                    <a href="{{ asset('admin/images/agenious.png') }}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('portfolio_detail', ['title' => 'ageniushealthcare']) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('admin/images/wokue.png') }}" class="img-fluid" alt="" style="height: 350px">
                                <div class="portfolio-info">
                                    <a href="{{ asset('admin/images/wokue.png') }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('portfolio_detail', ['title' => 'wokeu']) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
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
                        </div><!-- End Portfolio Item --> --}}
                    </div><!-- End Portfolio Container -->
                </div>
            </div>
        </section>
    <!-- /Portfolio Section -->
@endsection
