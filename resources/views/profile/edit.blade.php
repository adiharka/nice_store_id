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
      <h1>Edit Profile</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Profile Form</h5>

              <!-- Horizontal Form -->
              <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                  <label for="name" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
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
