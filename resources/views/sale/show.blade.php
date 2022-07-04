@extends('layout.admin')

@section('content')
@include('partial.sidebar')
<main id="main" class="main">
    <x-alert/>
    <div class="pagetitle">
      <h1>Detail Penjualan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Sale</li>
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
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Transaction ID</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control " id="inputText" value="{{ $cart->id }}" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Pesan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control " id="inputText" value="{{ $cart->created_at }}" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Customer Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail" value="{{ $cart->user->name }}" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Item</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail" value="{{ $cart->detail->count() }} item" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Total Harga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail" value="Rp {{ number_format($cart->total,2,',','.') }}" disabled>
                  </div>
                </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-8">
                        @if ($cart->status_cart == 1)
                        <p class="">
                        Dalam Keranjang
                        </p>
                        @elseif ($cart->status_cart == 2)
                        <p class="">
                        Menunggu Konfirmasi
                        </p>
                        @else
                        <p class="">
                        Selesai
                        </p>
                        @endif
                    </div>
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
