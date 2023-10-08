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
          <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Barang</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table-hover table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
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
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Update</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($barang as $row)
                      <tr>
                        <td>{{$loop -> iteration}}</td>
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
                        <td>{{$row -> tanggal_masuk}}</td>
                        <td>{{$row -> tanggal_update}}</td>
                        <!-- <td>{{ $row-> created_at }}</td>
                        <td>{{ $row-> updated_at }}</td> -->
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
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
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Update</th>
                    </tr>
                    </tfoot>
                  </table>
                  <div class="container-fluid">
                    <div class="row m-4">
                      <div class="col-md-4">

                      </div>
                      <div class="col-md-4">
                        <a data-toggle="modal" data-target="#modal-default-barang" class="btn btn-block btn-success btn-md">Import</a>
                      </div>
                      <div class="col-md-4">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <!-- Form Element sizes -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Barang Masuk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table id="" class="table-hover table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th colspan="6">Barang Masuk</th>
                    </tr>
                    <tr>
                      <!-- <th>No</th> -->
                      <th>Nama Barang</th>
                      <th>Keterangan</th>
                      <th>Qty</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Update</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($masuk as $row)
                      <tr>
                        <!-- <td>{{$loop -> iteration}}</td> -->
                        <td>{{$row -> barang -> nama_barang}}</td>
                        <td>{{$row -> keterangan}}</td>
                        <td>{{$row -> qty}}</td>
                        <td>{{ $row-> created_at -> format('F d, Y') }}</td>
                        <td>{{ $row-> updated_at -> format('F d, Y') }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <!-- <th>No</th> -->
                        <th>Nama Barang</th>
                        <th>Keterangan</th>
                        <th>Qty</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Update</th>
                    </tr>
                    </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="container-fluid">
                <div class="row m-2">
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-2">
                    <a href="{{ route('barang.masuk_export') }}" class="btn btn-block btn-info btn-md">Export</a>
                  </div>
                  <div class="col-md-2">
                    <a data-toggle="modal" data-target="#modal-default-masuk" class="btn btn-block btn-success btn-md">Import</a>
                  </div>
                  <div class="col-md-4">
                  </div>
                </div>
              </div> -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-12">
            <!-- Form Element sizes -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Barang keluar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table id="" class="table-hover table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th colspan="6">Barang keluar</th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Keterangan</th>
                      <th>Qty</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Update</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($keluar as $row)
                      <tr>
                        <td>{{$loop -> iteration}}</td>
                        <td>{{$row -> barang -> nama_barang}}</td>
                        <td>{{$row -> keterangan}}</td>
                        <td>{{$row -> qty}}</td>
                        <td>{{ $row-> created_at -> format('F d, Y') }}</td>
                        <td>{{ $row-> updated_at -> format('F d, Y') }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Keterangan</th>
                        <th>Qty</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Update</th>
                    </tr>
                    </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="container-fluid">
                <div class="row m-2">
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-2">
                    <a href="" class="btn btn-block btn-info btn-md">Export</a>
                  </div>
                  <div class="col-md-2">
                    <a data-toggle="modal" data-target="#modal-default-keluar" class="btn btn-block btn-success btn-md">Import</a>

                  </div>
                  <div class="col-md-4">

                  </div>
                </div>
              </div> -->
            </div>
            <!-- /.card -->
          </div>
          <!-- MODAL Barang -->
          <div class="modal fade" id="modal-default-barang">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Barang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('barang.barang_import')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <input type="file" name="file" required="required">
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Selesai</button>
                      <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- MODAL MASUK -->
          <div class="modal fade" id="modal-default-masuk">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Barang Masuk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('barang.masuk_import')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <input type="file" name="file" required="required">
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Selesai</button>
                      <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- MODAL KELUAR-->
          <div class="modal fade" id="modal-default-keluar">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Barang Keluar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body&hellip;</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Selesai</button>
                    <button type="button" class="btn btn-primary">Import</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection