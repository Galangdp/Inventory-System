@extends('partials.main')

@section('add-barang')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Barang</li>
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
                <h3 class="card-title">Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route ('barang.create') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input name="nama_barang" class="form-control" id="nama_barang" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input name="kode_barang" class="form-control" id="kode_barang" placeholder="Kode Barang">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-bolt"></i></span>
                                    </div>
                                    <input name="type" id="type" class="form-control" placeholder="Type">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input name="brand" class="form-control" id="brand" placeholder="Nama Brand">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="jumlah_barang">Jumlah Barang</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                    </div>
                                    <input type="number" name="jumlah_barang" class="form-control" id="jumlah_barang" placeholder="Jumlah Barang">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="qty">Satuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    </div>
                                    <input name="qty" class="form-control" id="qty" placeholder="Satuan">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                    </div>
                                    <input name="price" class="form-control" id="price" placeholder="Price">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="disc">Discount</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                    </div>
                                    <input name="disc" class="form-control" id="disc" placeholder="Discount">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="after_disc">After Disc</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-tags"></i></span>
                                    </div>
                                    <input name="after_disc" class="form-control" id="after_disc" placeholder="After Disc">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="total">Total</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-money-bill-wave-alt"></i></span>
                                    </div>
                                    <input name="total" class="form-control" id="total" placeholder="Total">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rak">Rak</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-warehouse"></i></span>
                                    </div>
                                    <input name="rak" class="form-control" id="rak" placeholder="Rak">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kondisi">Kondisi</label>
                                <input name="kondisi" class="form-control" id="kondisi" placeholder="Kondisi">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ex_project">Ex Project</label>
                                <input name="ex_project" class="form-control" id="ex_project" placeholder="Ex Project">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                    <div class="input-group date" id="reservationdate4" data-target-input="nearest">
                                        <input name="tanggal_masuk" type="text" class="form-control datetimepicker-input" data-target="#reservationdate4"/>
                                        <div class="input-group-append" data-target="#reservationdate4" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Update</label>
                                    <div class="input-group date" id="reservationdate5" data-target-input="nearest">
                                        <input name="tanggal_update" type="text" class="form-control datetimepicker-input" data-target="#reservationdate5"/>
                                        <div class="input-group-append" data-target="#reservationdate5" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
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
                      <th>Kode Barang</th>
                      <th>Type</th>
                      <th>Brand</th>
                      <th>Jumlah Barang</th>
                      <th>Satuan</th>
                      <th>Price</th>
                      <th>Disc</th>
                      <th>After Disc</th>
                      <th>Total</th>
                      <th>Rak</th>
                      <th>Kondisi</th>
                      <th>Ex Project</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Update</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($barang as $row)
                      <tr>
                        <td>{{$row -> nama_barang}}</td>
                        <td>{{$row -> kode_barang}}</td>
                        <td>{{$row -> type}}</td>
                        <td>{{$row -> brand}}</td>
                        <td>{{$row -> jumlah_barang}}</td>
                        <td>{{$row -> qty}}</td>
                        <td>{{$row -> price}}</td>
                        <td>{{$row -> disc}}</td>
                        <td>{{$row -> after_disc}}</td>
                        <td>{{$row -> total}}</td>
                        <td>{{$row -> rak}}</td>
                        <td>{{$row -> kondisi}}</td>
                        <td>{{$row -> ex_project}}</td>
                        <td>{{ $row -> tanggal_masuk }}</td>
                        <td>{{ $row-> tanggal_update }}</td>
                        <td>
                        <form action="{{route('barang.delete', $row->id)}}" method="POST" onsubmit="return confirm('Yakin Menghapus?')" method="post">
                          @csrf
                          {{method_field('DELETE')}}
                          <a href="{{route('barang.detail', $row->id)}}" type="button" class="btn btn-block btn-primary">Detail</a>
                          <a href="{{route('barang.edit_view', $row->id)}}" type="button" class="btn btn-block btn-warning">Edit</a>
                          <button type="sumbit" class="btn btn-block btn-danger">Delete</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Kode Barang</th>
                      <th>Type</th>
                      <th>Brand</th>
                      <th>Jumlah Barang</th>
                      <th>Satuan</th>
                      <th>Price</th>
                      <th>Disc</th>
                      <th>After Disc</th>
                      <th>Total</th>
                      <th>Rak</th>
                      <th>Kondisi</th>
                      <th>Ex Project</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Update</th>
                      <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection