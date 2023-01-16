@extends('template.header')

@section('content')

  <main id="main" class="mt-5 pt-lg-5 pt-xl-5">

    <!-- ======= Products Section ======= -->
    <section id="portfolio" class="portfolio" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Factory Photos</h2>
        </header>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach($factories AS $factory)
            <div class="col-lg-3 col-md-4 portfolio-item">
              <div class="portfolio-wrap">
                <img src="{{asset('/uploads/'.$factory->image)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="{{asset('/uploads/'.$factory->image)}}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Products Section -->

    <!-- ======= Sales Section ======= -->
    <section id="sales_centers" class="sales_centers" style="background: rgb(255, 255, 193)">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Factory Map</h2>
          <p>Our Factory Location</p>
        </header>

        <!--Main layout-->
        <main class=" m-0 p-0">
          <div class="container-fluid m-0 p-0">

            <!--Google map-->
            <div id="map-container-google-4" class="z-depth-1-half map-container-4" style="height: 500px">
              <iframe src="https://maps.google.com/maps?q=tokai+power+dhorpur+ashulia+savar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                      style="border:0" allowfullscreen></iframe>
            </div>

          </div>
        </main>
        <!--Main layout-->
      </div>
    </section><!-- End Sales Section -->

  </main><!-- End #main -->

@endsection
  
  