@extends('template.header')

@section('content')

  <main id="main" class="mt-5">

    <section class="breadcrumbs" style="color: white!important;">
      <div class="container">

        <ol>
          <li><a style="color: white!important;" href="index.html">home</a></li>
          <li>job_details</li>
        </ol>
        <h2>Job Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Job Circular Section ======= -->
    <section id="job_circular" class="services" style="background: rgb(255, 255, 193)">
      <div class="container" data-aos="fade-up">
        <h2>{{$job->post_name}}</h2>
        <p>{!! $job->contaxt !!}</p>
        <br>
        <h2>Responsibility</h2>
        <p>
          {!! $job->responsibility !!}
        </p>
        <br>
        <h2>Nature</h2>
        <p>
          {!! $job->nature !!}
        </p>
        <br>
        <h2>Requirment</h2>
        <p>
          {!! $job->requirment_education !!}
          {!! $job->requirment_experience !!}
        </p>
        <br>
        <h2>Benefits</h2>
        <p>
          {!! $job->benefits !!}
        </p>
        <br>
        <h2>Salary</h2>
        <p>
          {!! $job->salary !!}
        </p>
        <br>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
@endsection
  
  