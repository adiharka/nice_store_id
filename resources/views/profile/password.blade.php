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
      <h1>Edit Password</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Password Form</h5>

              <!-- Horizontal Form -->
              <form method="POST" action="{{ route('profile.changepassword') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                  <label for="old_password" class="col-sm-3 col-form-label">Old Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="old_password" name="old_password"">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="new_password" class="col-sm-3 col-form-label">New Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="new_password" name="new_password">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    </div>
                </div>

                <div style="margin-left: 25.5%">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
