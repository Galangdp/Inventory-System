<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>System Gudang</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('template/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('template/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset ('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route ('dashboard.index') }}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset ('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">System Gudang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset ('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user() -> name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route ('dashboard.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Barang
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('barang.add_view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambahkan Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('masuk.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route ('keluar.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('barang.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Stock Barang
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          @if(auth() -> user() -> role == 'admin')
          <li class="nav-item">
            <a href="{{ route('auth.toRegister') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Register
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <form action="{{ route ('auth.logout') }}" method="post">
              @csrf
              <button type="submit" class="nav-link" style="color: #ffffff;">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </button>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('dashboard')
  @yield('barang-index')
  @yield('add-barang')
  @yield('edit-barang')
  @yield('detail-barang')
  @yield('barang-masuk')
  @yield('detail-barang-masuk')
  @yield('edit-barang-masuk')
  @yield('barang-keluar')
  @yield('detail-barang-keluar')
  @yield('edit-barang-keluar')
  @yield('register')
  @yield('project')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 Gudangku.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- {{asset ('wrapper -->

<!-- jQuery') }} -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('template/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('template/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('template/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('template/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/dist/js/pages/dashboard.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Page specific no button -->
<script>
  $(function () {
    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Page Script Discount -->
<!-- <script>
  function calculateTotalMasukKeluar() {
        // Mendapatkan nilai dari field jumlah_barang, price, dan discount
        const jumlah_barang_masuk_keluar = parseFloat(document.getElementById('jumlah_barang_masuk_keluar').value);
        const after_disc_masuk_keluar = parseFloat(document.getElementById('after_disc_masuk_keluar').value);

        // const price = parseFloat(document.getElementById('price').value);
        // const discount = parseFloat(document.getElementById('disc').value);
        
        // Menghitung harga setelah diskon
        // const afterDiscount = price - (price * (discount / 100));
        
        // Mengisi nilai field 'after_disc' dengan harga setelah diskon dalam format mata uang IDR
        // document.getElementById('after_disc').value = formatCurrency(afterDiscount);
        
        // Menghitung total
        const total = jumlah_barang_masuk_keluar * after_disc_masuk_keluar;
        
        // Mengisi nilai field 'total' dengan total yang dihitung dalam format mata uang IDR
        document.getElementById('total_masuk_keluar').value = formatCurrencyMasukKeluar(total);
    }

    function formatCurrencyMasukKeluar(amount) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
    }
    
</script> -->
<script>
    // Fungsi ini akan dijalankan setiap kali ada perubahan pada field jumlah_barang atau discount
    function calculateTotal() {
        // Mendapatkan nilai dari field jumlah_barang, price, dan discount
        const jumlah_barang = parseFloat(document.getElementById('jumlah_barang').value);
        const price = parseFloat(document.getElementById('price').value);
        const discount = parseFloat(document.getElementById('disc').value);
        
        // Menghitung harga setelah diskon
        const afterDiscount = price - (price * (discount / 100));
        
        // Mengisi nilai field 'after_disc' dengan harga setelah diskon dalam format mata uang IDR
        document.getElementById('after_disc').value = formatCurrency(afterDiscount);
        
        // Menghitung total
        const total = jumlah_barang * afterDiscount;
        
        // Mengisi nilai field 'total' dengan total yang dihitung dalam format mata uang IDR
        document.getElementById('total').value = formatCurrency(total);
    }

    // Fungsi untuk mengubah angka menjadi format mata uang IDR atau RP
    function formatCurrency(amount) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
    }
    
    // Menambahkan event listener untuk memanggil fungsi calculateTotal saat ada perubahan pada field jumlah_barang atau discount
    document.getElementById('jumlah_barang').addEventListener('input', calculateTotal);
    document.getElementById('disc').addEventListener('input', calculateTotal);
</script>
<!-- Script Date Masuk -->
<script>
  $(function () {
    // //Initialize Select2 Elements
    // $('.select2').select2()

    // //Initialize Select2 Elements
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4'
    // })

    // //Datemask dd/mm/yyyy
    // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    // //Datemask2 mm/dd/yyyy
    // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    // //Money Euro
    // $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    $('#reservationdate1').datetimepicker({
        format: 'L'
    });

    // //Date and time picker
    // $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    // //Date range picker
    // $('#reservation').daterangepicker()
    // //Date range picker with time picker
    // $('#reservationtime').daterangepicker({
    //   timePicker: true,
    //   timePickerIncrement: 30,
    //   locale: {
    //     format: 'MM/DD/YYYY hh:mm A'
    //   }
    // })
    // //Date range as a button
    // $('#daterange-btn').daterangepicker(
    //   {
    //     ranges   : {
    //       'Today'       : [moment(), moment()],
    //       'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //       'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
    //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //       'This Month'  : [moment().startOf('month'), moment().endOf('month')],
    //       'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    //     },
    //     startDate: moment().subtract(29, 'days'),
    //     endDate  : moment()
    //   },
    //   function (start, end) {
    //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    //   }
    // )

    // //Timepicker
    // $('#timepicker').datetimepicker({
    //   format: 'LT'
    // })

    // //Bootstrap Duallistbox
    // $('.duallistbox').bootstrapDualListbox()

    // //Colorpicker
    // $('.my-colorpicker1').colorpicker()
    // //color picker with addon
    // $('.my-colorpicker2').colorpicker()

    // $('.my-colorpicker2').on('colorpickerChange', function(event) {
    //   $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    // })

    // $("input[data-bootstrap-switch]").each(function(){
    //   $(this).bootstrapSwitch('state', $(this).prop('checked'));
    // })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
<!-- Script Date Keluar -->
<script>
  $(function () {
    // //Initialize Select2 Elements
    // $('.select2').select2()

    // //Initialize Select2 Elements
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4'
    // })

    // //Datemask dd/mm/yyyy
    // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    // //Datemask2 mm/dd/yyyy
    // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    // //Money Euro
    // $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate2').datetimepicker({
        format: 'L'
    });

    $('#reservationdate3').datetimepicker({
        format: 'L'
    });

    // //Date and time picker
    // $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    // //Date range picker
    // $('#reservation').daterangepicker()
    // //Date range picker with time picker
    // $('#reservationtime').daterangepicker({
    //   timePicker: true,
    //   timePickerIncrement: 30,
    //   locale: {
    //     format: 'MM/DD/YYYY hh:mm A'
    //   }
    // })
    // //Date range as a button
    // $('#daterange-btn').daterangepicker(
    //   {
    //     ranges   : {
    //       'Today'       : [moment(), moment()],
    //       'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //       'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
    //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //       'This Month'  : [moment().startOf('month'), moment().endOf('month')],
    //       'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    //     },
    //     startDate: moment().subtract(29, 'days'),
    //     endDate  : moment()
    //   },
    //   function (start, end) {
    //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    //   }
    // )

    // //Timepicker
    // $('#timepicker').datetimepicker({
    //   format: 'LT'
    // })

    // //Bootstrap Duallistbox
    // $('.duallistbox').bootstrapDualListbox()

    // //Colorpicker
    // $('.my-colorpicker1').colorpicker()
    // //color picker with addon
    // $('.my-colorpicker2').colorpicker()

    // $('.my-colorpicker2').on('colorpickerChange', function(event) {
    //   $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    // })

    // $("input[data-bootstrap-switch]").each(function(){
    //   $(this).bootstrapSwitch('state', $(this).prop('checked'));
    // })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
<!-- Script Date Barang -->
<script>
  $(function () {
    // //Initialize Select2 Elements
    // $('.select2').select2()

    // //Initialize Select2 Elements
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4'
    // })

    // //Datemask dd/mm/yyyy
    // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    // //Datemask2 mm/dd/yyyy
    // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    // //Money Euro
    // $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate4').datetimepicker({
        format: 'L'
    });

    $('#reservationdate5').datetimepicker({
        format: 'L'
    });

    // //Date and time picker
    // $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    // //Date range picker
    // $('#reservation').daterangepicker()
    // //Date range picker with time picker
    // $('#reservationtime').daterangepicker({
    //   timePicker: true,
    //   timePickerIncrement: 30,
    //   locale: {
    //     format: 'MM/DD/YYYY hh:mm A'
    //   }
    // })
    // //Date range as a button
    // $('#daterange-btn').daterangepicker(
    //   {
    //     ranges   : {
    //       'Today'       : [moment(), moment()],
    //       'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //       'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
    //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //       'This Month'  : [moment().startOf('month'), moment().endOf('month')],
    //       'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    //     },
    //     startDate: moment().subtract(29, 'days'),
    //     endDate  : moment()
    //   },
    //   function (start, end) {
    //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    //   }
    // )

    // //Timepicker
    // $('#timepicker').datetimepicker({
    //   format: 'LT'
    // })

    // //Bootstrap Duallistbox
    // $('.duallistbox').bootstrapDualListbox()

    // //Colorpicker
    // $('.my-colorpicker1').colorpicker()
    // //color picker with addon
    // $('.my-colorpicker2').colorpicker()

    // $('.my-colorpicker2').on('colorpickerChange', function(event) {
    //   $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    // })

    // $("input[data-bootstrap-switch]").each(function(){
    //   $(this).bootstrapSwitch('state', $(this).prop('checked'));
    // })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
<!-- Login specific script -->
<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#quickForm').validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
<!-- jquery-validation -->
<script src="{{ asset('template/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-validation/additional-methods.min.js') }}"></script>

</body>
</html>
