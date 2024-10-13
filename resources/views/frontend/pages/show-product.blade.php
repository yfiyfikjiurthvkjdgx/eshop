@extends('frontend.layout.master')
@section('showp')
<section id="product-details" class="product-details section py-5">
    <div class="container">
        <div class="row">
            <!-- Product Image -->
            <div class="col-lg-5 col-md-6 col-sm-12 mb-4">
                <div class="product-image">
                    <img src="{{ asset('backend/uploads/product/' . $product->productphoto) }}" class="img-fluid rounded shadow-sm" alt="{{ $product->productname }}">
                </div>
            </div>

            <!-- Product Information -->
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="product-info bg-white p-4 rounded shadow-sm h-100">
                    <h2 class="mb-3 font-weight-bold text-dark">{{ $product->productname }}</h2>
                    <p class="lead text-muted mb-4">Price: <span class="text-primary">${{ $product->productprice }}</span></p>
                    <p class="mb-4 text-muted">{{ $product->productdescription }}</p>

                    <!-- Add to Cart / Buy Now buttons -->
                    <div class="" style="display:flex; gap:1rem;">
                        <!-- Add to Cart Form -->
                        <form class="mb-3 mb-md-0 mr-md-3 d-flex align-items-center">
                        
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary ">Add to Cart</button>
                            </div>
                        </form>
                        
                        <!-- Buy Now Button -->
                        <a href="#"  class="btn btn-success ">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
