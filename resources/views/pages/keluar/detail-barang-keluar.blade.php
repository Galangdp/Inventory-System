@extends('partials.main')

@section('detail-barang-keluar')
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
                            <th>Jumlah Barang</th>
                            <td>:</td>
                            <td>{{$keluar -> jumlah_barang}}</td>
                        </tr>
                        <tr>
                            <th>Satuan</th>
                            <td>:</td>
                            <td>{{$keluar -> qty}}</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>:</td>
                            <td>{{$keluar -> total}}</td>
                        </tr>
                        <tr>
                            <th>Penerima</th>
                            <td>:</td>
                            <td>{{$keluar -> penerima}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Keluar</th>
                            <td>:</td>
                            <td>{{$keluar -> tanggal_keluar}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Input</th>
                            <td>:</td>
                            <td>{{$keluar -> tanggal_input}}</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>:</td>
                            <td>{{$keluar->keterangan}}</td>
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