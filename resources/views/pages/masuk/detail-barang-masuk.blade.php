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
                            <th>Keterangan</th>
                            <td>:</td>
                            <td>{{$masuk->keterangan}}</td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td>:</td>
                            <td>{{$masuk -> qty}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td>:</td>
                            <td>{{$masuk -> created_at -> format('F d, Y')}}</td>
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