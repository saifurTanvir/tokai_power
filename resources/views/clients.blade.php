@extends('template.header')

@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs" style="color: white!important;">
    <div class="container">
      <ol>
        <li><a  style="color: white!important;" href="{{route('index')}}">Home</a></li>
        <li>Clients</li>
      </ol>
      <h2>Clients</h2>
    </div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= Features Section ======= -->
  <section id="blog" class="blog" style="background: rgb(255, 255, 193)">

    <div class="container" data-aos="fade-up">

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-10">
          <h2>Our Client List</h2>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
              @foreach($capacityTypes AS $serial => $capacity)
                <li>
                  <a class="nav-link @if($serial == 0) active @endif" data-bs-toggle="pill" href="#{{str_replace(' ', '_', preg_replace("/[0-9]/", "", $capacity->type))}}">{{$capacity->type}}</a>
                </li>
              @endforeach
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">
              @foreach($capacityTypes AS $serial => $capacity)
                <div class="tab-pane fade show @if($serial == 0) active @endif" id="{{str_replace(' ', '_', preg_replace("/[0-9]/", "", $capacity->type))}}">
                  <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                      <th>Serial</th>
                      <th>Company Name</th>
                      <th>Address</th>
                      <th>Capacity</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($capacity->capacityWiseClient AS $key => $client)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$client->company}}</td>
                          <td>{{$client->address}}</td>
                          <td>{{$client->capacity}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div><!-- End Tab 1 Content -->
              @endforeach

          </div>

        </div>
      </div><!-- End Feature Tabs -->
    </div>
  </section><!-- End Features Section -->

@endsection
  
  