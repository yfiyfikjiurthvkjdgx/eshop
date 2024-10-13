@extends('frontend.layout.master')
@section('service')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Product page</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Product page</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


      <!-- Service Details Section -->
<section id="service-details" class="service-details section">
  <div class="container">
    <div class="row">
      <!-- Loop through products and create a responsive card for each -->
      @foreach($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card">
            <img src="{{ asset('backend/uploads/product/' . $product->productphoto) }}" class="card-img-top" alt="Product Image">
            <div class="card-body">
              <h5 class="card-title">{{ $product->productname }}</h5>
              <p class="card-text">
                Price: <span style="color: #262626;">${{ $product->productprice }}</span>
              </p>
              <p class="card-text">
                <small class="text-muted">{{ $product->productdescription }}</small>
              </p>
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-primary">Buy Now</a>
                <a href="{{url('show-product' , $product->id)}}" class="btn btn-outline-secondary">See More</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


  </main>
  @endsection
