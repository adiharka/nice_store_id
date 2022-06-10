@extends('layout.admin')
@section('content')
@include('partial.sidebar')
<main id="main" class="main">

  @if(session()->has('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}
    </div>
  @endif

    <div class="pagetitle">
      <h1>Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Prod</a></li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('product.create') }}" class="btn btn-primary mb-4"> Add Product
            </a>
          <div class="card">
            <div class="card-body border border-1">


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori Produk</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Harga Per Item</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($product as $prd )
                    <tr>
                      <th scope="row">{{ $prd->id }}</th>
                      <td>{{ $prd->name }}</td>
                      @if($prd->category == 1)
                        <td>Sepatu</td>
                      @elseif ($prd->category == 2)
                        <td>Kaos Kaki</td>
                      @elseif ($prd->category == 3)
                      <td>T-Shirt</td>
                      @elseif ($prd->category == 4)
                      <td>Sleeve Pad</td>
                      @elseif ($prd->category == 5)
                      <td>Rigid Tape</td>
                      @else
                      <td>Other</td>
                      @endif
                      <td>{{ $prd->quantity }}</td>
                      <td>Rp. {{ $prd->price }}</td>
                      <td class="py-0">
                        <form class="row mb-0" action="{{ route('product.destroy', $prd->id) }}" method="POST">
                          <a class="btn col m-1 btn-sm btn-primary" href="{{ route('product.show', $prd->id) }}">Detail</a>
                          <a class="btn col m-1 btn-sm btn-warning" href="{{ route('product.edit', $prd->id) }}">Update</a>
                          @csrf
                          @method('DELETE')
                          <button class="btn col m-1 btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')" >Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection
