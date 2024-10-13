@extends('backend.layout.master')
@section('allproduct')
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
           <div>
             
           @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif

           <table>
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Product Name</th>
                       <th>Product Cetagory</th>
                       <th>Product Price</th>
                       <th>Product Description</th>
                       <th>Product Photo</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($products as $product)
                   <tr>
                       <td>{{$product->id}}</td>
                       <td>{{$product->productname}}</td>
                       <td>{{$product->productcetagory}}</td>
                       <td>{{$product->productprice}}</td>
                       <td>{{$product->productdescription}}</td>
                       <td><img src="{{asset('backend/uploads/product/'.$product->productphoto)}}" height="100" width="100"></td>
                       <td>
                           <a href="{{url('editproduct/'.$product->id)}}" class="btn btn-primary">Edit</a>
                           <form action="{{url('deleteproduct',$product->id)}}" method="POST" style="background-color:transparent; width:auto;">
                            @csrf
                            @method("DELETE")
                           <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
           </div>
        </main>
        @endsection