@extends('template.header')

@section('content')

  <main id="main" class="mt-5">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="color: white!important;">
      <div class="container">

        <ol>
          <li><a style="color: white!important;" href="{{route('index')}}">home</a></li>
          <li>portfolio</li>
        </ol>
        <h2>Portfolio</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="key_features" class="team" style="background: #e1eff0">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Portfolio</h2>
        </header>

        <div class="row gy-4">

          @foreach($portfolios AS $portfolio)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="{{asset('/uploads/'.$portfolio->image)}}" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>{{$portfolio->name}}</h4>
                  <span>{{$portfolio->designation}}</span>
                  <p>{!! $portfolio->speech !!}</p>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Team Section -->


  </main><!-- End #main -->

@endsection
  
  