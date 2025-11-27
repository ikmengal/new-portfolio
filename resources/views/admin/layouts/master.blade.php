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
        <link href="{{ asset('admin/new-css/sweetalert2.min.css') }}" rel="stylesheet" >
        <link href="{{ asset('admin/new-css/ext-component-sweet-alerts.min.css') }}" rel="stylesheet" >
        <link href="{{ asset('admin/new-css/toastr.min.css?v=0.0.10') }}" rel="stylesheet" >
        <link href="{{ asset('admin/new-css/fancybox.css')}}" rel="stylesheet" >
        <!-- Main CSS File -->
        <link href="{{ asset('laura/assets/css/main.css') }}" rel="stylesheet">
    </head>

    <body class="index-page">

        @include('admin.layouts.header')

        <main class="main">
            @yield('content')
        </main>

        @include('admin.layouts.footer')

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
        <script src="{{ asset('admin/new-js/ext-component-sweet-alerts.min.js') }}"></script>
        <script src="{{ asset('admin/new-js/sweetalert211.js') }}"></script>
        <script src="{{ asset('admin/new-js/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('admin/new-js/fancy-box.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('laura/assets/js/main.js') }}"></script>
        <script src="{{ asset('admin/js/action-getway.js') }}"></script>

        <script>
            function showFancyBox() {
                $.fancybox.open('<div class="fancybox-loading"></div>', {
                    closeExisting: true,
                    toolbar: false,
                    smallBtn: false,
                    modal: false,
                    keyboard: false,
                    clickSlide: false,
                    touch: false,
                    caption: 'Please wait while your request is being processed.'
                });
            }

            function hideFancyBox() {
                $.fancybox.close();
            }

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
