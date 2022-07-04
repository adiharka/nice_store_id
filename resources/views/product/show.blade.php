@extends('layout.admin')

@section('content')
@include('partial.sidebar')
<main id="main" class="main">
    <x-alert/>
    <div class="pagetitle">
      <h1>Detail Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active">Detail</li>
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
              <form>
                <div class="row mb-3">
                  <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control" id="name" name="name" value="{{ $product->name }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="quantity" name="quantity" readonly value="{{ $product->quantity }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="price" class="col-sm-3 col-form-label">Harga per Item</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="price" name="price" readonly value="{{ $product->price }}">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-8">
                      <textarea type="textarea" class="form-control" id="description" readonly name="description" rows="5">{{ $product->description }}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="detail" class="col-sm-3 col-form-label">Detail Item</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" id="detail" readonly name="detail" rows="5">{{ $product->detail }}
                      </textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-8">
                        <p>
                            @if($product->category == 1)
                            <i class="fa-solid fa-person"></i> Sepatu
                            @elseif ($product->category == 2)
                            <i class="fa-solid fa-people-group"></i> Kaos Kaki
                            @elseif ($product->category == 3)
                            <i class="fa-solid fa-people-group"></i> T-Shirt
                            @elseif ($product->category == 4)
                            <i class="fa-solid fa-people-group"></i> Sleeve Pad
                            @elseif ($product->category == 5)
                            <i class="fa-solid fa-people-group"></i> Rigid Tape
                            @else
                            <i class="fa-solid fa-people-group"></i> Other
                            @endif
                        </p>
                    </div>

                  </div>
                    <a class="chocolat-image" href="{{ $product->image }}" title="Product">
                        <img id="image" src="{{ $product->image }}" width="250px">
                    </a>
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
