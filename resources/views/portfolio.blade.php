@extends('template.header')

@section('content')

  <main id="main" class="mt-5 pt-lg-5 pt-xl-5">

    <!-- ======= Products Section ======= -->
    <section id="portfolio" class="portfolio" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Portfolio</h2>
        </header>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach($portfolios AS $portfolio)
            <div class="col-lg-3 col-md-4 portfolio-item">
              <div class="portfolio-wrap">
                <img src="{{asset('/uploads/'.$portfolio->image)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="{{asset('/uploads/'.$portfolio->image)}}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Products Section -->


  </main><!-- End #main -->

@endsection
  
  