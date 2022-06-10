@extends('layout.admin')

@section('content')
@include('partial.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active">Add</li>
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
                    <input type="text" class="form-control " id="inputText" value="00001" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Pesan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control " id="inputText" value="2022-04-26" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Customer Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail" value="Ayuni P">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <textarea type="textarea" class="form-control" id="inputPassword" rows="5">Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Detail Item</label>
                    <div class="table-responsive col-sm-8">
                        <table class="table table-bordered">
                            <thead class="">
                              <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">ID Product</th>
                                <th scope="col">Nama Product</th>
                                <th scope="col">Harga Item</th>
                                <th scope="col">Jumlah Item</th>
                                <th scope="col">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="col-sm-2"><img class="img"src="{{ asset('img/Product/sock.jpg') }}" width="100"></div></td>
                                    <td>1</td>
                                    <td>Kaos Kaki Hitam Motif Jordan</td>
                                    <td>Rp. 50.000</td>
                                    <td>3</td>
                                    <td>Rp. 150.000</td>
                                </tr>
                                <tr>
                                  <td><div class="col-sm-2"><img class="img"src="{{ asset('img/Product/shoes.jpg') }}" width="100"></div></td>
                                  <td>1</td>
                                  <td>Sepatu Nike</td>
                                  <td>Rp. 500.000</td>
                                  <td>1</td>
                                  <td>Rp. 500.000</td>
                              </tr>
                               <tr>
                                <td colspan="2">Pilihan Pengiriman</td>
                                <td colspan="3">JNE Express</td>
                                <td>Rp. 15.000</td>
                               </tr>
                               <tr>
                                 <td colspan="5">Total Penjualan</td>
                                 <td>Rp. 665.000</td>
                               </tr>
                            </tbody>
                        </table>
                      </div>
                  </div> 
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-8">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                        <label class="form-check-label" for="inlineRadio1">Uncompleted</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Delivered</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Completed</label>
                      </div>
                    </div>
                  </div>
                    
                  
                  
                <div style="margin-left: 25.5%">
                  <a href="/dashboard/sales" type="submit" class="btn btn-primary">Update</a>
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