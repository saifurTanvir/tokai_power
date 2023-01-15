@extends('template.header')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center carosel_styles">


    <div class="hero-img" data-aos="zoom-out" data-aos-delay="100">
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner"  >
          @foreach($carosels AS $key => $carosel)
            <div class="carousel-item @if($key == 0) active @endif">
              <img src="{{asset('/uploads/'.$carosel->image)}}" class="img-fluid" alt="">
            </div>
          @endforeach
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="features" class="features" style="background: rgb(255, 255, 193)">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>About Us</h2>
          <p>THE RELIABLE COMPANY IN BANGLADESH</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="{{asset('/uploads/'.$aboutUs->image)}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Substation</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Switchgear</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Transformer</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Generator</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Busbar Trunking</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Panel/ DB/MCC</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" style="background: rgb(255, 255, 193)">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{$aboutUs->clients}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{$aboutUs->projects}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{$aboutUs->products}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Number of Products</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{$aboutUs->workers}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Products Section ======= -->
    <section id="portfolio" class="portfolio" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Products</h2>
          <p>Check Our Products</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active mt-lg-2 mt-xl-2">All</li>
            @foreach($productCategories AS $productCategory)
                <li data-filter=".{{str_replace(' ', '_', $productCategory->category_name)}}">{{$productCategory->category_name}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach($products As $product)
            <div class="col-lg-3 col-md-4 portfolio-item {{str_replace(' ', '_', $product->type)}}">
              <div class="portfolio-wrap">
                <img src="{{asset('/uploads/'.$product->image)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$product->name}}</h4>
                  <p>{{$product->type}}</p>
                  <div class="portfolio-links">
                    <a href="{{asset('/uploads/'.$product->image)}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{$product->name}}"><i class="bi bi-plus"></i></a>
                    <a href="{{route('product_detail', [$product->id])}}" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Products Section -->

    <!-- ======= Services Section ======= -->
    <section id="values" class="values" style="background: rgb(255, 255, 193)">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Services</h2>
          <p>We Provides These Services</p>
        </header>

        <div class="row">

          @foreach($services AS $service)
            <div class="col-lg-4" data-toggle="modal" data-target="#details-modal" data-order="{{ $service->id }}" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="{{asset('/uploads/'.$service->image)}}" class="img-fluid" alt="">
                <h3>{{$service->name}}</h3>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>CLIENTS</h2>
          <p>Our Valuable Clients</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach($clients AS $client)
              @if(!empty($client->logo))
                <div class="swiper-slide"><img src="{{asset('/uploads/'.$client->logo)}}" class="img-fluid" alt=""></div>
              @endif
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="background: rgb(255, 255, 193)">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>TEAMS</h2>
          <p>Our Talented Hard Working Resources</p>
        </header>

        <div class="row gy-4">

          @foreach($teams AS $team)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="{{asset("/uploads/".$team->image)}}" class="img-fluid" alt="">
                  <div class="social">
                    <a href="{{$team->twitter_url}}"><i class="bi bi-twitter"></i></a>
                    <a href="{{$team->facebook_url}}"><i class="bi bi-facebook"></i></a>
                    <a href="{{$team->instagram_url}}"><i class="bi bi-instagram"></i></a>
                    <a href="{{$team->linkedin_url}}"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{$team->name}}</h4>
                  <div>{{$team->designation}}</div>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            @foreach($faqs AS $key => $faq)
              @if($key % 2 == 0)
                <div class="accordion accordion-flush" id="faqlist1">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed pl-lg-4 pt-lg-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                        {{$faq->question}}
                      </button>
                    </h2>
                    <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                      <div class="accordion-body ml-lg-4">
                        {!! $faq->answer !!}
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>

          <div class="col-lg-6">
            @foreach($faqs AS $key => $faq)
              @if($key % 2 == 1)
                <div class="accordion accordion-flush" id="faqlist2">

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed pl-lg-4 pt-lg-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                        {{$faq->question}}
                      </button>
                    </h2>
                    <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                      <div class="accordion-body ml-lg-4">
                        {!! $faq->answer !!}
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Sales Section ======= -->
    <section id="sales_centers" class="sales_centers" style="background: rgb(255, 255, 193)">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>SALES CENTER</h2>
          <p>Our Sales Centers</p>
        </header>

        <!--Main layout-->
        <main class=" m-0 p-0">
          <div class="container-fluid m-0 p-0">

            <!--Google map-->
            <div id="map-container-google-4" class="z-depth-1-half map-container-4" style="height: 500px">
              <iframe src="https://maps.google.com/maps?q=Panthapath+Dhaka+1205&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                      style="border:0" allowfullscreen></iframe>
            </div>

          </div>
        </main>
        <!--Main layout-->
      </div>
    </section><!-- End Sales Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>152/1/H, Green Road (8th Floor),<br>Panthapath, Dhaka-1205</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>880-2-8141875<br>9146149</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>tokai_powers@yahoo.com<br>tokai@citech.net</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Sunday - Thursday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- The Modal -->
  <div id="details-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="details-modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Service Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <img src="images/moin644tokai.jpg" alt="power station" class="img-fluid">
          <p>This is for information of all concerned that M/S Tokai Power Products Ltd. has the following team to do installation, maintenance work and servicing.</p>
          <br>
          <p>Technical Gang:</p>
          <p>A complete technical gang headed by a graduate Electrical Engineer and comprising of the following personnel.</p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $('#details-modal').on('show.bs.modal', event => {
        var order = $(event.relatedTarget).data('order');

        modalBody = $(this).find('.modal-body');
        modalHeader = $(this).find('.modal-title');
        modalBody.html(`
            <div class="text-center">
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          `);

        $.ajax({
          url: `/service/detail/${order}`,
          method: 'get'
        }).done(function(data){
          modalHeader.html(data.header);
          modalBody.html(data.body);
        }).fail(error => console.error(error));
      });
    });



  </script>

@endsection
  
  