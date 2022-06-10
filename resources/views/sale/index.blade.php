@extends('layout.admin')
@section('content')
@include('partial.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sales</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Sales</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Pelanggan</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">Jumlah Item</th>
                    <th scope="col">Pengiriman</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $id=1
                  @endphp
                  @for ($j=0;$j<50;$j++)
                  <tr>
                    <th scope="row">{{ $id++ }}</th>
                    <td>Ayuni P</td>
                    <td>2022-04-22</td>
                    <td>4</td>
                    <td>JNE EXPRESS</td>
                    <td>Rp. 665.000</td>
                    <td><div class="badge bg-success">
                        Completed
                        </div></td>
                    <td>
                        <a href="{{ route('sales.show', [$id]) }}" class="btn btn-primary"> Show</a>
                        <a href="{{ route('sales.update', [$id]) }}" class="btn btn-warning"> Update</a>
                        <a href="{{ route('sales.destroy', [$id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')" > Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">{{ $id++ }}</th>
                    <td>Hanaan Firdaus</td>
                    <td>2022-04-20</td>
                    <td>4</td>
                    <td>JNt EXPRESS</td>
                    <td>Rp. 120.000</td>
                    <td><div class="badge bg-danger">
                        Uncompleted
                        </div></td>
                    <td><a href="/dashboard/sales/update/{{ $id }}" class="btn btn-primary"> Update
                    </a></td>
                  </tr>
                  <tr>
                    <th scope="row">{{ $id++ }}</th>
                    <td>Ayuni P</td>
                    <td>2022-04-22</td>
                    <td>4</td>
                    <td>JNE EXPRESS</td>
                    <td>Rp. 320.000</td>
                    <td><div class="badge bg-warning">
                        Delivered
                        </div></td>
                    <td><a href="/dashboard/sales/update/{{ $id }}" class="btn btn-primary"> Update
                    </a></td>
                  </tr>

                  @endfor


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
