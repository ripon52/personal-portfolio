<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kelly Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('website/assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('website/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('website/assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('website/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('website/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('website/assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('website/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('website/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('website/assets') }}/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <h1 class="logo me-auto me-lg-0"><a href="/">Linkhon</a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="/">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/article') }}">Article</a></li>
                    <li><a href="{{ url('/resources') }}">Resources</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links">
                <a href="{{ profile()->google }}" target="_blank" class="twitter"><i class="bi bi-google"></i></a>
                <a href="{{ profile()->facebook }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{ profile()->linkedin }}" target="_blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>

        </div>

    </header><!-- End Header -->

    @yield('content')



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Linkhon Chowdhury</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://www.facebook.com/linkoncu"> Linkhon Chowdhury</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('website/assets') }}/vendor/purecounter/purecounter.js">
    </script>
    <script src="{{ asset('website/assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('website/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('website/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('website/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('website/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('website/assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('website/assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('website/assets') }}/js/main.js"></script>

</body>

</html>