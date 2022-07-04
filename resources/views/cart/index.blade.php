@extends('layout.guest')

@section('content')
@include('partial.nav')
<section class="ps-5">
    <div class="container my-5">
        <div class="card d-flex flex-row justify-content-beetwen mx-3 ps-3">
            <div class="col-8 p-4">
                <div class="title row m-0">
                    <h5><strong> Shoping Cart</strong></h5>
                </div>
                @foreach ($details as $detail)
                <div class="row border-top border-bottom m-0">
                    <div class="row main align-items-center m-0">
                        <div class="col-2"><img class="img-fluid" src="{{ $detail->product->image }}"></div>
                        <div class="col">
                            <div class="row">{{ $detail->product->name }}</div>
                        </div>
                        <div class="col">
                            <a href="{{ route('cart.quantity', [$detail->id, 'kurang']) }}" class="btn btn-primary">-</a>
                            <a href="#" class="border p-2">{{ $detail->quantity }}</a>
                            <a href="{{ route('cart.quantity', [$detail->id, 'tambah']) }}" class="btn btn-primary">+</a>
                        </div>
                        <div class="col">Rp {{ number_format($detail->subtotal,2,',','.') }} </div>
                        <div class="col"><a href="{{ route('cart.delete', [$detail->id]) }}" style="color: red">&#10005;</a></div>
                    </div>
                </div>
                @endforeach
            </div>

            <form class=" d-flex flex-column bg-primary col-4 rounded p-4" style="color: white">
                <div class=" row title m-0">
                    <h5><strong>Summary</strong></h5>
                </div>
                <div class="border-top border-bottom m-0 mb-auto">
                    <div class="d-flex mt-3">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">Rp {{ number_format($carts->total,2,',','.') }}</div>
                    </div>
                </div>
                <a href="{{ route('cart.checkout', [$carts->id]) }}" class="btn btn-light mt-3">CHECKOUT</a>
            </form>
        </div>
    </div>

</section>
@endsection
