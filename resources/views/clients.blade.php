@extends('template.header')

@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{route('index')}}">Home</a></li>
        <li>Clients</li>
      </ol>
      <h2>Clients</h2>
    </div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= Features Section ======= -->
  <section id="blog" class="blog">

    <div class="container" data-aos="fade-up">

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-12">
          <h3>Our Product Wise Valuable Client List</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">33 KV Sub-Station</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab2">11 KV Sub-Station</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab3">Over Head Line Work</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab4">Generator</a>
            </li>
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">
              <table class="table table-dark table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Parent Company</th>
                  <th>Company Name</th>
                  <th>Address</th>
                  <th>Capacity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                  <td>john@example.com</td>
                  <td>john@example.com</td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                  <td>mary@example.com</td>
                  <td>mary@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr><tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                </tbody>
              </table>
            </div><!-- End Tab 1 Content -->

            <div class="tab-pane fade show" id="tab2">
              <table class="table table-dark table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Parent Company</th>
                  <th>Company Name</th>
                  <th>Address</th>
                  <th>Capacity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                  <td>john@example.com</td>
                  <td>john@example.com</td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                  <td>mary@example.com</td>
                  <td>mary@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr><tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                </tbody>
              </table>
            </div><!-- End Tab 2 Content -->

            <div class="tab-pane fade show" id="tab3">
              <table class="table table-dark table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Parent Company</th>
                  <th>Company Name</th>
                  <th>Address</th>
                  <th>Capacity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                  <td>john@example.com</td>
                  <td>john@example.com</td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                  <td>mary@example.com</td>
                  <td>mary@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr><tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                </tbody>
              </table>
            </div><!-- End Tab 3 Content -->

            <div class="tab-pane fade show" id="tab4">
              <table class="table table-dark table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Parent Company</th>
                  <th>Company Name</th>
                  <th>Address</th>
                  <th>Capacity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                  <td>john@example.com</td>
                  <td>john@example.com</td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                  <td>mary@example.com</td>
                  <td>mary@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr><tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                  <td>july@example.com</td>
                </tr>
                </tbody>
              </table>
            </div><!-- End Tab 3 Content -->

          </div>

        </div>
      </div><!-- End Feature Tabs -->
    </div>
  </section><!-- End Features Section -->

@endsection
  
  