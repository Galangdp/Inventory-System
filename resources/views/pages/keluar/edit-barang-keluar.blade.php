@extends('partials.main')

@section('edit-barang-keluar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Barang {{$barang -> nama_barang}}</h1>
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
                <h3 class="card-title">Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route ('barang.update', $barang -> id)}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="-">Nama Barang</label>
                        <input name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{$barang -> nama_barang}}">
                       </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="-">Kode Barang</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input name="kode_barang" class="form-control" value="{{$barang -> kode_barang}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-bolt"></i></span>
                          </div>
                          <input name="type" class="form-control" value="{{$barang -> type}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Brand</label>
                        <input name="brand" class="form-control" id="exampleInputPassword1" value="Nama Brand">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="exampleInputPassword1">Qty</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-box"></i></span>
                            </div>
                            <input name="qty" class="form-control" value="{{$barang -> qty}}">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                              </div>
                              <input name="price" class="form-control" value="{{$barang -> price}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Discount</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                              </div>
                              <input name="disc" class="form-control" value="{{$barang -> disc}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleInputPassword1">After Disc</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-tags"></i></span>
                              </div>
                              <input name="after_disc" class="form-control" value="{{$barang -> after_disc}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Total</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-money-bill-wave-alt"></i></span>
                              </div>
                              <input name="total" class="form-control" value="{{$barang -> total}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Rak</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-warehouse"></i></span>
                              </div>
                              <input name="rak" class="form-control" value="{{$barang -> rak}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Kondisi</label>
                        <input name="kondisi" class="form-control" id="exampleInputPassword1" value="{{$barang -> kondisi}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ex Project</label>
                        <input name="ex_project" class="form-control" id="exampleInputPassword1" value="{{$barang -> ex_project}}">
                      </div>
                    </div>
                  </div>
                  
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
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