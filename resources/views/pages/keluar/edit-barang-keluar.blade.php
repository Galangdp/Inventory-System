@extends('partials.main')

@section('edit-barang-keluar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Barang {{$keluar -> barang -> nama_barang}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Barang Keluar</li>
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
                            <h3 class="card-title">Edit Barang Keluar</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route ('keluar.update', $keluar -> id)}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nama_barang">Nama Barang</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-box"></i></span>
                                                </div>
                                                <input name="nama_barang" class="form-control" id="nama_barang" value="{{$keluar -> barang -> nama_barang}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="jumlah_barang">Jumlah Barang</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                                </div>
                                                <input type="number" name="jumlah_barang" class="form-control" id="jumlah_barang" value="{{$keluar -> jumlah_barang}}">
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
                                                <input name="qty" class="form-control" id="qty" value="{{$keluar -> qty}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="total">Total</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-money-bill-wave-alt"></i></span>
                                                </div>
                                                <input name="total" class="form-control" id="total" value="{{$keluar -> total}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="penerima">Penerima</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-box-open"></i></i></span>
                                                </div>
                                                <input name="penerima" class="form-control" id="penerima"
                                                    value="{{$keluar -> penerima}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tanggal Keluar</label>
                                            <div class="input-group date" id="reservationdate2"
                                                data-target-input="nearest">
                                                <input name="tanggal_keluar" type="text"
                                                    class="form-control datetimepicker-input"
                                                    data-target="#reservationdate2" value="{{$keluar -> tanggal_keluar}}" />
                                                <div class="input-group-append" data-target="#reservationdate2"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <div class="input-group date" id="reservationdate3"
                                                data-target-input="nearest">
                                                <input name="tanggal_input" type="text"
                                                    class="form-control datetimepicker-input"
                                                    data-target="#reservationdate3" value="{{$keluar -> tanggal_input}}" />
                                                <div class="input-group-append" data-target="#reservationdate3"
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
                                            <textarea class="form-control" rows="5" name="keterangan" id="keterangan">{{$keluar -> keterangan}}</textarea>
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
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
