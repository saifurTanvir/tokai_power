@extends('template.header')

@section('content')

  <main id="main" class="mt-5">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="color: white!important;">
      <div class="container">

        <ol>
          <li><a style="color: white!important;" href="{{route('index')}}">home</a></li>
          <li>career</li>
        </ol>
        <h2>Career</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Job Circular Section ======= -->
    <section id="job_circular" class="services" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>JOBS</h2>
          <p>FIND YOUR DREAM POSITION</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            @foreach($jobPosts AS $job)
              <div class="service-box blue">
                <i class="ri-discuss-line icon"></i>
                <h3>{{$job->post_name}}</h3>
                <p>{!! $job->contaxt !!}</p>
                <a href="{{route('job_detail', [$job->id])}}" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            @endforeach
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="cv_drop" class="contact" style="background: rgb(255, 255, 193)">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>SEND RESUME/CV</h2>
          <p>SEND YOUR RESUME FOR PARTICULAR POSITION</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="" method="post" class="php-email-form">
              @csrf
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="phone" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="subject" required>
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


@endsection
  
  