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
                <div class="row border-top border-bottom m-0">
                    <div class="row main align-items-center m-0">
                        <div class="col-2"><img class="img-fluid" src="{{ asset('img/Product/shoes.jpg') }}"></div>
                        <div class="col">
                            <div class="row">Sepatu Nike</div>
                        </div>
                        <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                        <div class="col">Rp. 500.000 </div>
                        <div class="col"><a href="" style="color: red">&#10005;</a></div>
                    </div>
                </div>
                    <div class="row border-top border-bottom m-0">
                        <div class="row main align-items-center m-0">
                            <div class="col-2"><img class="img-fluid" src="{{ asset('img/Product/sock.jpg') }}"></div>
                            <div class="col">
                                <div class="row">Kaos Kaki Hitam Motif Jordan</div>
                            </div>
                            <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                            <div class="col">Rp. 50.000 </div>
                            <div class="col"><a href="" style="color: red">&#10005;</a></div>
                        </div>
                    </div>

            </div>

            <form class=" d-flex flex-column bg-primary col-4 rounded p-4" style="color: white">
                    <div class=" row title m-0">
                        <h5><strong>Summary</strong></h5>
                    </div>
                    <div class="border-top border-bottom m-0 mb-auto">
                        <div class="d-flex mb-3">
                            <div class="col" style="padding-left:0;">2 Item </div>
                            <div class="col text-right">Rp. 550.000</div>
                        </div>
                        <div>
                            <p class="m-0">Pilihan Pengiriman</p>
                            <select class="ms-2 border border-1 p-1 mt-0" style="width:70% ">
                                <option class="text-muted">JNE Express- Rp. 12.000 </option>
                                <option class="text-muted">JNT Express- Rp. 10.000</option>
                                <option class="text-muted">Pos Indonesia- Rp. 10.000</option>
                            </select>
                        </div>
                        <div class="d-flex mt-3">
                            <div class="col">TOTAL PRICE</div>
                            <div class="col text-right">Rp. 562.000</div>
                    </div>

                    </div> <a href="{{ route('thanks') }}" type="submit" class="btn btn-light mt-3">CHECKOUT</a> </form>
            </div>
        </div>
    </div>

</section>
@endsection
