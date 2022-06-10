@extends('layout.guest')

@section('content')
@include('partial.nav')

<section>
<div class="container ps-5">
    <div class="d-flex p-5 my-5 border border-1 shadow">
        <div class="col">
            <img src="{{ $product->image }}" alt="" class="img-fluid border border-1">
        </div>
        <div class=" d-flex align-items-start flex-column mx-5">
            <div class="mb-auto">
                <h2 class="mb-3">{{ $product->name }}</h2>
            <p class="mb-3" >{{ $product->description }}</p>
            <h3 class="mb-3">Rp {{ $product->price }}</h3>
            <p class="mb-3">Barang tersisa : {{ $product->quantity }}</p>

            <form class="mb-3">
                <div style="width: 120px" class="border border-1">
                    <div class="input-group">
                        <div class="d-flex flex-row">
                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-primary"><i class='bx bx-minus'></i></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number" max="5">
                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-primary"><i class='bx bx-plus'></i></button>
                        </div>
                        {{-- <span class="input-group-btn">
                            <button type="button" class="btn btn-default" disabled="disabled" data-type="minus" data-field="quant[1]">
                                <div>−</div>
                            </button>
                        </span>
                        <input type="text" name="quant[1]" class="form-control input-number border border-1" value="1" min="1" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default " data-type="plus" data-field="quant[1]">
                                <div>+</div>
                            </button>
                        </span> --}}
                    </div>
                </div>
                <div class="my-3">
                    <a href="{{ route('cart') }}" class="btn btn-primary">Add To Cart</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</section>
