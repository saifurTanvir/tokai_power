@extends('template.header')

@section('content')

  <main id="main">

    <section class="breadcrumbs" style="color: white!important;">
      <div class="container">

        <ol>
          <li><a style="color: white!important;" href="{{route('index')}}">home</a></li>
          <li>product_details</li>
        </ol>
        <h2>Product Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="background: rgb(255, 255, 193);">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center" style=" height: 70%;">
                @if(empty($product->image_1))
                  <div class="swiper-slide">
                    <img src="{{asset('/uploads/'.$product->image)}}" class="img-fluid" alt="">
                  </div>
                @else
                  <div class="swiper-slide">
                    <img src="{{asset('/uploads/'.$product->image_1)}}" class="img-fluid" alt="">
                  </div>
                @endif

                @if(!empty($product->image_2))
                    <div class="swiper-slide">
                      <img src="{{asset('/uploads/'.$product->image_2)}}" class="img-fluid" alt="">
                    </div>
                @endif

                @if(!empty($product->image_3))
                  <div class="swiper-slide">
                    <img src="{{asset('/uploads/'.$product->image_3)}}" class="img-fluid" alt="">
                  </div>
                @endif

                @if(!empty($product->image_4))
                  <div class="swiper-slide">
                    <img src="{{asset('/uploads/'.$product->image_4)}}" class="img-fluid" alt="">
                  </div>
                @endif
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Title</strong>: {{$product->name}}</li>
                <li><strong>Category</strong>: {{$product->type}}</li>
                <li><strong>Available Product</strong>: {{$product->quantity}}</li>
                <li><strong>Upload date</strong>: {{$product->created_at}}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Product Details</h2>
              <p>
                {!! $product->description !!}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection
