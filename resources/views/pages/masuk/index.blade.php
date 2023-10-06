@extends('partials.main')

@section('barang-masuk')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Barang Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 mb-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Barang Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route ('masuk.create') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <select class="form-control" name="id_barang" id="nama_barang">
                                        <option selected>Choosee...</option>
                                        @foreach($barang as $row)
                                        <option value="{{$row -> id}}">{{$row -> nama_barang}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    </div>
                                    <input name="qty" class="form-control" id="qty" placeholder="Qty">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" rows="5" name="keterangan" placeholder="Enter ..." id="keterangan"></textarea>
                          </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-12">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Keterangan</th>
                      <th>Qty</th>
                      <th>Tanggal</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($masuk as $row)
                      <tr>
                        <td>{{$row -> barang -> nama_barang}}</td>
                        <td>{{$row -> keterangan}}</td>
                        <td>{{$row -> qty}}</td>
                        <td>{{ $row-> created_at -> format('F d, Y') }}</td>
                        <td>
                          <form action="{{route('masuk.delete', $row->id)}}" method="POST" onsubmit="return confirm('Yakin Menghapus?')" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <a href="{{route('masuk.detail', $row->id)}}" type="button" class="btn btn-block btn-primary">Detail</a>
                            <a href="{{route('masuk.edit_view', $row->id)}}" type="button" class="btn btn-block btn-warning">Edit</a>
                            <button type="sumbit" class="btn btn-block btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Keterangan</th>
                        <th>Qty</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection