<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tokai Power</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>

  <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('index')}}" class="logo d-flex align-items-center">
      <img src="images/656tokai.png" alt="">
      <span>Tokai Power</span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        @if(strpos(url()->current(), "job_post") || strpos(url()->current(), "about_us") ||
              strpos(url()->current(), "career") || strpos(url()->current(), "product_detail"))
          <li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
        @else
          <li><a class="nav-link scrollto" href="#home">Home</a></li>
        @endif

        @if(strpos(url()->current(), "about_us"))
          <li class="dropdown"><a href="{{route('about_us')}}"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#about_founder">About Founder</a></li>
              <li><a href="#key_features">Key Persons</a></li>
              <li><a href="#mission_and_vision">Mission & Vision</a></li>
              <li><a href="#achievements">Achievements</a></li>
              <li><a href="#csr">Corporate Social Responsibilities (CSR)</a></li>
            </ul>
          </li>
        @else
          <li class="dropdown"><a href="{{route('about_us')}}"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('about_us')}}">About Founder</a></li>
              <li><a href="{{route('about_us')}}">Key Persons</a></li>
              <li><a href="{{route('about_us')}}">Mission & Vision</a></li>
              <li><a href="{{route('about_us')}}">Achievements</a></li>
              <li><a href="{{route('about_us')}}">Corporate Social Responsibilities (CSR)</a></li>
            </ul>
          </li>
        @endif

        @if(strpos(url()->current(), "job_post") || strpos(url()->current(), "about_us") ||
          strpos(url()->current(), "career" || strpos(url()->current(), "product_detail")))
          <li><a class="nav-link scrollto" href="{{route('index').'#portfolio'}}">Products</a></li>
          <li><a class="nav-link scrollto" href="{{route('index').'#values'}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{route('index').'#clients'}}">Clients</a></li>
          <li><a class="nav-link scrollto" href="{{route('index').'#sales_centers'}}">Sales Centre</a></li>
        @else
          <li><a class="nav-link scrollto" href="#portfolio">Products</a></li>
          <li><a class="nav-link scrollto" href="#values">Services</a></li>
          <li><a class="nav-link scrollto" href="#clients">Clients</a></li>
          <li><a class="nav-link scrollto" href="#sales_centers">Sales Centre</a></li>
        @endif
        @if(strpos(url()->current(), "about_us"))
          <li class="dropdown"><a href="{{route('career')}}"><span>Career</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#job_circular">Job Circular</a></li>
              <li><a href="#cv_drop">Submit CV</a></li>
            </ul>
          </li>
        @else
          <li class="dropdown"><a href="{{route('career')}}"><span>Career</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('career')}}">Job Circular</a></li>
              <li><a href="{{route('career')}}">Submit CV</a></li>
            </ul>
          </li>
        @endif

        @if(strpos(url()->current(), "job_post") || strpos(url()->current(), "about_us") ||
        strpos(url()->current(), "career" || strpos(url()->current(), "product_detail")))
          <li><a class="nav-link scrollto" href="{{route('index').'#contact'}}">Contact Us</a></li>
        @else
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        @endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->


@yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>