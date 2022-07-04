@extends('layout.guest')

@section('content')
@include('partial.nav')

<section>
<div class="container ps-5">
    <div class="d-flex p-5 my-5 border border-1 shadow">
        <div class="col">
            <img src="{{ $product->image }}" alt="" class="img-fluid border border-1">
        </div>
        <div class="col d-flex align-items-start flex-column mx-5">
            <div class="mb-auto">
                <h2 class="mb-3">{{ $product->name }}</h2>
            <p class="mb-3" >{{ $product->description }}</p>
            <h3 class="mb-3">Rp {{ $product->price }}</h3>
            <p class="mb-3">Barang tersisa : {{ $product->quantity }}</p>

            <form class="mb-3" action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}" >
                <div style="width: 120px" class="border border-1">
                    <div class="input-group">
                        <div class="d-flex flex-row">
                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-primary"><i class='bx bx-minus'></i></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number" max="{{ $product->quantity }}">
                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-primary"><i class='bx bx-plus'></i></button>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</section>
