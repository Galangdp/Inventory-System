@extends('partials.main')

@section('edit-barang-masuk')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Barang {{$masuk -> barang -> nama_barang}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Barang Masuk</li>
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
                <h3 class="card-title">Edit Barang Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route ('masuk.update', $masuk -> id)}}" method="POST">
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
                                <input name="qty" class="form-control" id="qty" value="{{$masuk -> qty}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="qty">Jumlah Barang</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                    </div>
                                  <input name="jumlah_barang" class="form-control" id="jumlah_barang" value="{{$masuk -> jumlah_barang}}">
                                </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pengirim">Pengirim</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-box-open"></i></i></span>
                                </div>
                                <input name="pengirim" class="form-control" id="pengirim" value="{{$masuk -> pengirim}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input name="tanggal_masuk" type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate" value="{{$masuk -> tanggal_masuk}}" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Update</label>
                            <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                <input name="tanggal_update" type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate1" value="{{$masuk -> tanggal_update}}" />
                                <div class="input-group-append" data-target="#reservationdate1"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" rows="5" name="keterangan"
                                id="keterangan">{{$masuk -> keterangan}}</textarea>
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection