@extends('partials.main')

@section('detail-barang')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content my-3">
      <div class="container-fluid">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail {{$barang -> nama_barang}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Barang</th>
                            <td>:</td>
                            <td>{{$barang->nama_barang}}</td>
                        </tr>
                        <tr>
                            <th>Kode Barang</th>
                            <td>:</td>
                            <td>{{$barang->kode_barang}}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>:</td>
                            <td>{{$barang -> type}}</td>
                        </tr>
                        <tr>
                            <th>Brand</th>
                            <td>:</td>
                            <td>{{$barang -> brand}}</td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td>:</td>
                            <td>{{$barang -> qty}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>:</td>
                            <td>{{$barang -> price}}</td>
                        </tr>
                        <tr>
                            <th>Disc</th>
                            <td>:</td>
                            <td>{{$barang -> disc}}</td>
                        </tr>
                        <tr>
                            <th>After Discount</th>
                            <td>:</td>
                            <td>{{$barang -> after_disc}}</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>:</td>
                            <td>{{$barang -> total}}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Barang</th>
                            <td>:</td>
                            <td>{{$barang -> jumlah_barang}}</td>
                        </tr>
                        <tr>
                            <th>Rak</th>
                            <td>:</td>
                            <td>{{$barang -> rak}}</td>
                        </tr>
                        <tr>
                            <th>Kondisi</th>
                            <td>:</td>
                            <td>{{$barang -> kondisi}}</td>
                        </tr>
                        <tr>
                            <th>Ex Project</th>
                            <td>:</td>
                            <td>{{$barang -> ex_project}}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
        </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection