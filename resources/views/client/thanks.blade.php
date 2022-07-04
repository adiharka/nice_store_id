@extends('layout.guest')

@section('content')
@include('partial.nav')
<section class="ps-5">
    <div class="container my-5">
        <div class="mx-3 ps-3">
            <h3>Terima kasih telah membeli produk kami</h3>
            <p>Segera lakukan pembayaran ke nomor rekening berikut :</p>
            <ul>
                <li>BRI : 1239 232 123</li>
                <li>BNI : 4213 245 135</li>
            </ul>
            <p>Selesaikan pembayaran ini terlebih dahulu sebelum membeli barang baru</p>
            <a href="https://wa.me/+628888888" class="btn btn-success" target="__blank">Konfirmasi Whatsapp</a>
            <a href="{{ route('landing') }}" class="btn btn-primary">Kembali ke halaman utama</a>
        </div>
    </div>

</section>
@endsection
