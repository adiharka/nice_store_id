@extends('layout.guest')

@section('content')
@include('partial.nav')
<section class="ps-5">
    <div class="container my-5">
        <div class="card d-flex flex-row justify-content-beetwen mx-3 ps-3">
            <div class="col-12 p-4">
                <div class="title row m-0">
                    <h5><strong> Shoping Cart</strong></h5>
                </div>
                <div class="row mt-4">
                    <h1><i class='bx bx-shopping-bag'></i></h1>
                    <h3>Your cart is currently empty</h3>
                    <a href="{{ route('shop') }}" class="btn btn-primary" style="width: fit-content">Start Shopping</a>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
