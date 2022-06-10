@extends('layout.admin')

@section('content')
@include('partial.sidebar')
<main id="main" class="main">

  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <li class="text-danger">{{ $error }}</li>
    @endforeach
  @endif

    <div class="pagetitle">
      <h1>Update Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Form</h5>

              <!-- Horizontal Form -->
              <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row mb-3">
                  <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="price" class="col-sm-3 col-form-label">Harga per Item</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-8">
                      <textarea type="textarea" class="form-control" id="description" name="description" rows="5">{{$product->description}}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="detail" class="col-sm-3 col-form-label">Detail Item</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" id="detail" name="detail" rows="5">{{$product->detail}}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="category" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-8">
                        <select class="p-2 border border-1 rounded w-50" id="category" name="category" value="{{old('category')}}">
                            <option value="1" {{ $product->category == 1 ? 'selected' : '' }}>Sepatu</option>
                            <option value="2" {{ $product->category == 2 ? 'selected' : '' }}>Kaos Kaki</option>
                            <option value="3" {{ $product->category == 3 ? 'selected' : '' }}>T-Shirt</option>
                            <option value="4" {{ $product->category == 4 ? 'selected' : '' }}>Sleeve Pad</option>
                            <option value="5" {{ $product->category == 5 ? 'selected' : '' }}>Rigid Tape</option>
                            <option value="6" {{ $product->category == 6 ? 'selected' : '' }}>Other</option>
                          </select>
                    </div>
                    
                  </div>
                  <div class="row mb-3">
                    <label class=" col-sm-3 form-label" for="image">Gambar</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="image" name="image" accept="image/*"/>
                    </div>
                  </div>
                  
                <div style="margin-left: 25.5%">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
  @endsection