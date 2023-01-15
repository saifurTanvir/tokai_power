@extends('template.header')

@section('content')

  <main id="main" class="mt-5">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="color: white!important;">
      <div class="container">

        <ol>
          <li><a style="color: white!important;" href="{{route('index')}}">home</a></li>
          <li>about_us</li>
        </ol>
        <h2>About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Features Section ======= -->
    <section id="blog" class="blog"  style="background: rgb(255, 255, 193)">

      <div class="container" data-aos="fade-up">

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-9">
            <h3>MEET OUR HONORABLE CHAIRMAN Mr. {{$cto->name}}</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Speech</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Education</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Career</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                {!! $cto->speech !!}
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                {!! $cto->education !!}
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                {!! $cto->career !!}
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-3">
            <img src="{{asset('/uploads/'.$cto->image)}}" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Team Section ======= -->
    <section id="key_features" class="team" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>KEY PERSONS</h2>
          <p>Our Talented Management</p>
        </header>

        <div class="row gy-4">

          @foreach($keyPersons AS $keyPerson)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="{{asset('/uploads/'.$keyPerson->image)}}" class="img-fluid" alt="">
                  <div class="social">
                    <a href="{{$keyPerson->twitter_url}}"><i class="bi bi-twitter"></i></a>
                    <a href="{{$keyPerson->facebook_url}}"><i class="bi bi-facebook"></i></a>
                    <a href="{{$keyPerson->instagram_url}}"><i class="bi bi-instagram"></i></a>
                    <a href="{{$keyPerson->linkedin_url}}"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{$keyPerson->name}}</h4>
                  <span>{{$keyPerson->designation}}</span>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Features Section ======= -->
    <section id="mission_and_vision" style="background: rgb(255, 255, 193)">

      <div class="container" data-aos="fade-up">

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-12">
            <h3>OUR MISSION AND VISION</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab_1">Mission</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab_2">Vision</a>
              </li>

            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab_1">
                {!! $mission->message !!}
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab_2">
                {!! $vision->message !!}
              </div><!-- End Tab 2 Content -->

            </div>

          </div>
        </div><!-- End Feature Tabs -->
      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Products Section ======= -->
  <section id="achievements" class="portfolio" style="background: #e1eff0">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>ACHIEVEMENTS</h2>
        <p>Our Valuable Achievements</p>
      </header>


      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach($acheivements AS $acheivement)
          <div class="col-lg-3 col-md-6 portfolio-item filter-web filter-bbt">
            <div class="portfolio-wrap">
              <img src="{{asset('/uploads/'.$acheivement->image)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$acheivement->title}}</h4>
                <div class="portfolio-links">
                  <a href="{{asset('/uploads/'.$acheivement->image)}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{$acheivement->certificate}}"><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section><!-- End Products Section -->

  <!-- ======= Values Section ======= -->
  <section id="csr" class="values"  style="background: rgb(255, 255, 193)">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Corporate Social Responsibilities</h2>
        <p>OUR CSR & CO-CURRICULAR ACTIVITY</p>
      </header>

      <div class="row">

        @foreach($csrs AS $csr)
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="{{asset('/uploads/'.$csr->image)}}" class="img-fluid" alt="">
            <h3>{{ $csr->title }}</h3>
            <p>{!! $csr->description !!}</p>
          </div>
        </div>
        @endforeach

      </div>

    </div>

  </section><!-- End Values Section -->


@endsection
  
  