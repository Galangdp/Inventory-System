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
              <form action="{{ route ('barang.create') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="-">Nama Barang</label>
                        <input name="nama_barang" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang">
                       </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="-">Kode Barang</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input name="kode_barang" class="form-control" placeholder="Kode Barang">
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
                          <input name="type" class="form-control" placeholder="Type">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Brand</label>
                        <input name="brand" class="form-control" id="exampleInputPassword1" placeholder="Nama Brand">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="exampleInputPassword1">Qty</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-box"></i></span>
                            </div>
                            <input name="qty" class="form-control" placeholder="Qty">
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
                              <input name="price" class="form-control" placeholder="Price">
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
                              <input name="discount" class="form-control" placeholder="Discount">
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
                              <input name="after_disc" class="form-control" placeholder="After Disc">
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
                              <input name="total" class="form-control" placeholder="Total">
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
                              <input name="rak" class="form-control" placeholder="Rak">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Kondisi</label>
                        <input name="kondisi" class="form-control" id="exampleInputPassword1" placeholder="Kondisi">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ex Project</label>
                        <input name="ex_project" class="form-control" id="exampleInputPassword1" placeholder="Ex Project">
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
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Disc</th>
                      <th>After Disc</th>
                      <th>Total</th>
                      <th>Rak</th>
                      <th>Kondisi</th>
                      <th>Ex Project</th>
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
                        <td>{{$row -> qty}}</td>
                        <td>{{$row -> price}}</td>
                        <td>{{$row -> disc}}</td>
                        <td>{{$row -> after_disc}}</td>
                        <td>{{$row -> total}}</td>
                        <td>{{$row -> rak}}</td>
                        <td>{{$row -> kondisi}}</td>
                        <td>{{$row -> ex_project}}</td>
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
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Disc</th>
                      <th>After Disc</th>
                      <th>Total</th>
                      <th>Rak</th>
                      <th>Kondisi</th>
                      <th>Ex Project</th>
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