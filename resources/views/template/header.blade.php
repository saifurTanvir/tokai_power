<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tokai Power</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('index')}}" class="logo d-flex align-items-center">
      <img src="{{asset("uploads/images/546tokai.png")}}" alt="">
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        @if(strpos(url()->current(), "job_post") || strpos(url()->current(), "about_us") ||
              strpos(url()->current(), "career") || strpos(url()->current(), "product_detail")
              || strpos(url()->current(), "client") || strpos(url()->current(), "portfolio")
               || strpos(url()->current(), "job_detail") || strpos(url()->current(), "factory"))
          <li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
        @else
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
        @endif

        @if(strpos(url()->current(), "about_us"))
          <li class="dropdown"><a href="{{route('about_us')}}"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#blog">About Founder</a></li>
              <li><a href="#key_features">Key Persons</a></li>
              <li><a href="#mission_and_vision">Mission & Vision</a></li>
              <li><a href="#achievements">Achievements</a></li>
              <li><a href="#csr">Corporate Social Responsibilities (CSR)</a></li>
            </ul>
          </li>
        @else
          <li class="dropdown"><a href="{{route('about_us')}}"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('about_us').'#blog'}}">About Chairman</a></li>
              <li><a href="{{route('about_us').'#key_features'}}">Key Persons</a></li>
              <li><a href="{{route('about_us').'#mission_and_vision'}}">Mission & Vision</a></li>
              <li><a href="{{route('about_us').'#achievements'}}">Achievements</a></li>
              <li><a href="{{route('about_us').'#csr'}}">Corporate Social Responsibilities (CSR)</a></li>
            </ul>
          </li>
        @endif

        @if(strpos(url()->current(), "job_post") || strpos(url()->current(), "about_us") ||
          strpos(url()->current(), "career") || strpos(url()->current(), "product_detail")
          || strpos(url()->current(), "client") || strpos(url()->current(), "portfolio")
           || strpos(url()->current(), "job_detail") || strpos(url()->current(), "factory"))
          <li><a class="nav-link scrollto" href="{{route('index').'#portfolio'}}">Products</a></li>
          <li><a class="nav-link scrollto" href="{{route('index').'#values'}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{route('portfolio')}}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{route('factory')}}">Factory</a></li>
        @else
          <li><a class="nav-link scrollto" href="#portfolio">Products</a></li>
          <li><a class="nav-link scrollto" href="#values">Services</a></li>
          <li><a class="nav-link scrollto" href="{{route('factory')}}">Factory</a></li>
        @endif

        @if(strpos(url()->current(), "client"))
          <li><a class="nav-link scrollto" href="{{route('index').'#clients'}}">client</a></li>
        @else
          <li><a class="nav-link scrollto" href="{{route('client')}}">client</a></li>
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

        <li><a style="font-size: 50px" class="nav-link scrollto" href="https://www.facebook.com/tokaipower"><i class="fa-brands fa-square-facebook fa-10x"></i></a></li>
        <li><a class="nav-link scrollto" href="/admin">Admin</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->


@yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{route('index')}}" class="logo d-flex align-items-center">
              <img src="{{asset("assets/img/logo.png")}}" alt="">
              <span>Tokai Power</span>
            </a>
            <p>Founded in 1997, Tokai Power Products Ltd. (TPPL) has been playing a part in the steady growth of Bangladesh economy by contributing in various aspects of power generation, transmission and distribution.</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/tokaipower" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/tokaipower" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.facebook.com/tokaipower" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.facebook.com/tokaipower" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('index')}}">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('about_us')}}">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('index').'#values'}}">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('index').'#portfolio'}}">Products</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('portfolio')}}">Portfolio</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Other Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('index').'#clients'}}">Clients</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('career')}}">Career</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('about_us').'#blog'}}">About CEO</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('about_us').'#key_features'}}">Key Persons</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('about_us').'#mission_and_vision'}}">Mission & VIsion</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              152/1/H, Green Road (8th Floor)<br>
              Panthapath, Dhaka-1205 <br>
              <strong>Phone:</strong>880-2-8141875<br>
              <strong>Email:</strong> tokai.power@yahoo.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tokai Power</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        <a href="https://bootstrapmade.com/">Tokai Power</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset("assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
  <script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>