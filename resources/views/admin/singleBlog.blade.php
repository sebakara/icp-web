<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ICP Rwanda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top " style="background-color: #37517e;">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/">ICP Rwanda</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section class="featured-image-section" style="margin-left:20%; margin-top:4%; width:700px; height:400px; border-radius: 10px;" >
        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="featured-image">
    </section>
    <h1 style="text-align: justify; margin-left: 5%; margin-top: 5%; font-size: 2em; font-weight: 600; color: #007bff;">{{ $blog->title }}</h1>
    <p style="margin-left: 5%;"><i><b>Published on {{ $blog->created_at }}</b></i></p>
    <section style="max-width: 1100px; max-height: 1300px; padding: 20px; background-color: #f8f9fa; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); color: #333; line-height: 1.6; text-align:center; margin:2%">
        <p style="text-align: justify; margin-bottom: 20px;">{{ $blog->content }}</p>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Us</h4>
                        <p>Feel free to join our comunity telegram Group</p>
                        <a class="getstarted scrollto" target="_blank" href="https://t.me/+isH-EhpT4n0wYjVk">JOIN US</a>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>ICP Rwanda</h3>
                        <p>
                            Kigali - Rwanda <br><br>
                            <strong>Phone:</strong> +250 786 091 893<br>
                            <strong>Email:</strong> rwandicp@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Team</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Educational Workshops</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Community Support</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Networking Events</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Hackathons and Challenges</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/rwanda_icp" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://t.me/+isH-EhpT4n0wYjVk" target="_blank" class="google-plus"><i class="bx bxl-telegram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Icp Rwanda</span></strong>. All Rights Reserved
            </div>





        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/mains.js') }}"></script>

</body>

</html>