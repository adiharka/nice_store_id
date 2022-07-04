@extends('layout.guest')

@section('content')
@include('partial.nav')
<!-- ======= Popular Courses Section ======= -->
<section id="popular-courses" class="courses">
    <header class="section-header mt-5">
        <p>Shop</p>
        <h3>Here listed all of our product</h3>
    </header>
    <div class="container">
        <div class="row my-5 justify-content-center">
            @foreach ($product as $prd)
            <div class="col-lg-4 col-md-6 d-flex h-100 justify-content-center">
                <a href="{{ route('shop_detail', $prd->id) }}">
                    <div class="shadow border border-1">
                        <img src="{{ $prd->image }}" class="img-fluid" alt="..." style="height: 300px; object-fit: cover">
                        <div class="course-content" style="color: black">
                            <div class="d-flex justify-content-between align-items-center ms-3">
                                <h5>{{ $prd->name }}</h5>
                            </div>
                            <p class=" h3 price my-auto ms-3 mb-2">Rp {{ $prd->price }}</p>
                        </div>
                    </div>
                </a>
            </div> <!-- End Course Item-->
            @endforeach
        </div>
    </div>
</section><!-- End Popular Courses Section -->
@endsection
