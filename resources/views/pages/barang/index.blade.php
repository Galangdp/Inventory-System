@extends('partials.main')

@section('barang-index')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Kode Barang</th>
                      <th>Type</th>
                      <th>Brand</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Disc</th>
                      <th>After Disc</th>
                      <th>Total</th>
                      <th>Rak</th>
                      <th>Kondisi</th>
                      <th>Ex Project</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($barang as $row)
                      <tr>
                        <td>{{$row -> nama_barang}}</td>
                        <td>{{$row -> kode_barang}}</td>
                        <td>{{$row -> type}}</td>
                        <td>{{$row -> brand}}</td>
                        <td>{{$row -> qty}}</td>
                        <td>{{$row -> price}}</td>
                        <td>{{$row -> disc}}</td>
                        <td>{{$row -> after_disc}}</td>
                        <td>{{$row -> total}}</td>
                        <td>{{$row -> rak}}</td>
                        <td>{{$row -> kondisi}}</td>
                        <td>{{$row -> ex_project}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Kode Barang</th>
                      <th>Type</th>
                      <th>Brand</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Disc</th>
                      <th>After Disc</th>
                      <th>Total</th>
                      <th>Rak</th>
                      <th>Kondisi</th>
                      <th>Ex Project</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection