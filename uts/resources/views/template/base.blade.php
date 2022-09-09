<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PMII NEWS</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="shortcut icon" href="{{url('public/admin')}}/dist/img/logoweb.png" type="image/x-icon" > -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('public/admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/admin')}}/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="{{url('public/admin')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.backview.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('template.utils.notif')
        </div>
      </div>
    </div>
    @yield('content')
  </div>

    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  @include('template.backview.sidebar')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>

  </aside>
  <!-- /.control-sidebar -->
  @include('template.backview.footer')
  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url('public/admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public/admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('public/admin')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public/admin')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public/admin')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public/admin')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('public/admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('public/admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>


<script src="{{url('public/admin')}}/dist/js/adminlte.min.js"></script>
<script>
 $(".table-datatable").DataTable();
</script>
</body>
</html>
