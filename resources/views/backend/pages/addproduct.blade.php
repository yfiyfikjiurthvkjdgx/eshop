@extends('backend.layout.master')
@section('addproduct')
<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
           
           <h2 style="text-align:center">Add Product</h2>
           
           @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif


  <form action="{{url('storeproduct')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3 mt-3">
      <label for="productname">Product Name:</label>
      <input type="text" class="form-control" id="productname" placeholder="Enter your product name" name="productname">
    </div>
   
    <div class="mb-3 mt-3">
      <label for="productcetagory">Product Cetagory:</label>
      <input type="text" class="form-control" id="productcetagory" placeholder="Enter your product cetagory" name="productcetagory">
    </div>
   
    <div class="mb-3 mt-3">
      <label for="productprice">Product Price:</label>
      <input type="number" class="form-control" id="productprice" placeholder="Enter your product price" name="productprice">
    </div>
   
    <div class="mb-3 mt-3">
      <label for="productdescription">Product Description:</label>
      <textarea name="productdescription" class="form-control" placeholder="Enter your product description" id="productdescription"></textarea>
    </div>
   
    <div class="mb-3 mt-3">
      <label for="productphoto">Product Photo:</label>
      <input type="file" class="form-control" id="productphoto" name="productphoto">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
           </div>
        </main>
        @endsection