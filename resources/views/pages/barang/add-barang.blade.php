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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route ('barang.create') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="-">Nama Barang</label>
                    <input name="nama_barang" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang">
                  </div>
                  <div class="form-group">
                    <label for="-">Kode Barang</label>
                    <input name="kode_barang" class="form-control" id="exampleInputPassword1" placeholder="Kode Barang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Type</label>
                    <input name="type" class="form-control" id="exampleInputPassword1" placeholder="Nama Type">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Brand</label>
                    <input name="brand" class="form-control" id="exampleInputPassword1" placeholder="Nama Brand">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Qty</label>
                    <input name="qty" class="form-control" id="exampleInputPassword1" placeholder="Qty">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input name="price" class="form-control" id="exampleInputPassword1" placeholder="Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Discount</label>
                    <input name="disc" class="form-control" id="exampleInputPassword1" placeholder="Discount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">After Disc</label>
                    <input name="after_disc" class="form-control" id="exampleInputPassword1" placeholder="After Disc">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input name="total" class="form-control" id="exampleInputPassword1" placeholder="Total">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rak</label>
                    <input name="rak" class="form-control" id="exampleInputPassword1" placeholder="Rak">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kondisi</label>
                    <input name="kondisi" class="form-control" id="exampleInputPassword1" placeholder="Kondisi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ex Project</label>
                    <input name="ex_project" class="form-control" id="exampleInputPassword1" placeholder="Ex Project">
                  </div>
                  
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
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
                          <a type="button" class="btn btn-block btn-primary">Detail</a>
                          <a type="button" class="btn btn-block btn-warning">Edit</a>
                          <a type="button" class="btn btn-block btn-danger">Delete</a>
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