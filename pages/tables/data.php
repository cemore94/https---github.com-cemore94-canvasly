<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Canvasly Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once("../../parts/navbar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once("../../parts/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Location</th>
                    <th>Title</th>
                    <th>Tagline</th>
                    <th>Message</th>
                    <th>Map style</th>
                    <th>Position</th>
                    <th>Adjust style</th>
                    <th>Frame color</th>
                    <th>Size</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr><td>Piura, gardenias</td><td>C</td><td>onda onda</td><td>this is a message1</td><td>mapstyle 4</td><td>down right</td><td>frame</td><td>no</td><td>36x48</td></tr>
                    <tr><td>Arequipa, planicies</td><td>D</td><td>raspadillaaaaaa</td><td>this is a message5</td><td>mapstyle 1</td><td>up right</td><td>canvas</td><td>no</td><td>18x24</td></tr>
                    <tr><td>Arequipa, gardenias</td><td>D</td><td>tarara</td><td>this is a message3</td><td>mapstyle 3</td><td>up left</td><td>canvas</td><td>yes</td><td>36x48</td></tr>
                    <tr><td>Arequipa, alturas</td><td>C</td><td>tarara</td><td>this is a message3</td><td>mapstyle 5</td><td>up left</td><td>frame</td><td>no</td><td>18x24</td></tr>
                    <tr><td>Junin, gardenias</td><td>A</td><td>chocolate</td><td>this is a message4</td><td>mapstyle 3</td><td>up right</td><td>canvas</td><td>no</td><td>24x36</td></tr>
                    <tr><td>Junin, gardenias</td><td>A</td><td>tarara</td><td>this is a message1</td><td>mapstyle 4</td><td>down right</td><td>poster</td><td>yes</td><td>18x24</td></tr>
                    <tr><td>Junin, heroes</td><td>D</td><td>sila sisas</td><td>this is a message4</td><td>mapstyle 3</td><td>down left</td><td>frame</td><td>no</td><td>24x36</td></tr>
                    <tr><td>Junin, alturas</td><td>D</td><td>sila sisas</td><td>this is a message2</td><td>mapstyle 2</td><td>down left</td><td>canvas</td><td>yes</td><td>36x48</td></tr>
                    <tr><td>Arequipa, alicios</td><td>C</td><td>tarara</td><td>this is a message4</td><td>mapstyle 3</td><td>down right</td><td>frame</td><td>yes</td><td>36x48</td></tr>
                    <tr><td>Arequipa, alicios</td><td>B</td><td>chocolate</td><td>this is a message3</td><td>mapstyle 3</td><td>up left</td><td>frame</td><td>yes</td><td>18x24</td></tr>
                    <tr><td>Tacna, alicios</td><td>A</td><td>sila sisas</td><td>this is a message2</td><td>mapstyle 3</td><td>up right</td><td>poster</td><td>no</td><td>24x36</td></tr>
                    <tr><td>Piura, heroes</td><td>A</td><td>sila sisas</td><td>this is a message4</td><td>mapstyle 3</td><td>up left</td><td>canvas</td><td>yes</td><td>24x36</td></tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Location</th>
                    <th>Title</th>
                    <th>Tagline</th>
                    <th>Message</th>
                    <th>Map style</th>
                    <th>Position</th>
                    <th>Adjust style</th>
                    <th>Frame color</th>
                    <th>Size</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    $('#example1').DataTable({
        "responsive": true, 
        "lengthChange": false, 
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>
