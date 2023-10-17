@extends('partials.main')

@section('detail-barang-masuk')
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
                            <td>{{$masuk -> jumlah_barang}}</td>
                        </tr>
                        <tr>
                            <th>Satuan</th>
                            <td>:</td>
                            <td>{{$masuk -> qty}}</td>
                        </tr>
                        <tr>
                            <th>Penerima</th>
                            <td>:</td>
                            <td>{{$masuk -> penerima}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td>:</td>
                            <td>{{$masuk -> tanggal_masuk}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Update</th>
                            <td>:</td>
                            <td>{{$masuk -> tanggal_update}}</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>:</td>
                            <td>{{$masuk->keterangan}}</td>
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