@extends('partials.main')

@section('barang-keluar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Barang Keluar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barang Keluar</li>
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
                <h3 class="card-title">Barang Keluar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route ('keluar.create') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                                <label for="penerima">Penerima</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box-open"></i></i></span>
                                    </div>
                                    <input name="penerima" class="form-control" id="penerima" placeholder="Penerima">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input name="tanggal_masuk" type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal Input</label>
                                    <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                        <input name="tanggal_input" type="text" class="form-control datetimepicker-input" data-target="#reservationdate1"/>
                                        <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
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
                      <th>Jumlah Barang</th>
                      <th>Satuan</th>
                      <th>Penerima</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Input</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($keluar as $row)
                      <tr>
                        <td>{{$row -> barang -> nama_barang}}</td>
                        <td>{{$row -> keterangan}}</td>
                        <td>{{$row -> jumlah_barang}}</td>
                        <td>{{$row -> qty}}</td>
                        <td>{{$row -> penerima}}</td>
                        <td>{{$row -> tanggal_masuk}}</td>
                        <td>{{$row -> tanggal_input}}</td>
                        <!-- <td>{{ $row-> created_at -> format('F d, Y') }}</td>
                        <td>{{ $row-> updated_at -> format('F d, Y') }}</td> -->
                        <td>
                          <form action="{{route('keluar.delete', $row->id)}}" method="POST" onsubmit="return confirm('Yakin Menghapus?')" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <a href="{{route('keluar.detail', $row->id)}}" type="button" class="btn btn-block btn-primary">Detail</a>
                            <a href="{{route('keluar.edit_view', $row->id)}}" type="button" class="btn btn-block btn-warning">Edit</a>
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
                        <th>Jumlah Barang</th>
                        <th>Satuan</th>
                        <th>Penerima</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Input</th>
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