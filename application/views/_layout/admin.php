<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('') . 'asset/plugins/fontawesome-free/css/all.min.css ' ?> ">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() . 'asset/dist/css/adminlte.min.css' ?> ">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/datatables-buttons/css/buttons.dataTables.min.css' ?>">
  <!-- Sweetalert -->
  <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/sweetalert2/dark.css' ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">



  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url() . 'asset/plugins/jquery/jquery.min.js' ?> "></script>
  <!-- Bootstrap 4 -->
  <script src=" <?= base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url() . 'asset/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?= base_url() . 'asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
  <script src="<?= base_url() . 'asset/plugins/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
  <script src="<?= base_url() . 'asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
  <script src="<?= base_url() . 'asset/plugins/datatables-buttons/js/dataTables.buttons.min.js' ?>"></script>
  <!-- Sweetalert -->
  <script src="<?= base_url() . 'asset/plugins/sweetalert2/sweetalert2.min.js' ?>"></script>
  <!-- Toastr -->
  <script src="<?= base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Keluar</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url() ?>" class="brand-link">
        <img src=" <?= base_url() . 'asset/images/logo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle " style="opacity: .8">
        <span class="brand-text font-weight-light font-weight-bold shadow">e-Voting</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() . 'asset/dist/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrator</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= base_url('Dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?> <?= $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class="nav-icon fa fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('user') ?>" class="nav-link <?= $this->uri->segment(1) == 'user' ? 'active' : '' ?>">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Data Pemilih
                </p>
              </a>
            </li>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item ">
            <a href="" class="nav-link ">
              <i class="nav-icon fa fa-calendar-check"></i>
              <p>
                Pemilihan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Event') ?>" class="nav-link <?= $this->uri->segment(1) == 'event' ? 'active' : '' ?>" class="nav-link">
                <i class="fas fa-tasks"></i>
                  <p>Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('kandidat') ?>" class="nav-link <?= $this->uri->segment(1) == 'event' ? 'active' : '' ?>" class="nav-link ">
                <i class="fas fa-tasks"></i>
                  <p>Kelola Kandidat</p>
                </a>
              </li>
            </ul>
          </li>
            
            <li class="nav-item">
              <a href="<?= base_url('report') ?>" class="nav-link">
                <i class="nav-icon fa fa-check-double"></i>
                <p>
                  Hasil Pemilihan
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?= $contents; ?>
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Powered by <a href="https://gisaka.net/">GisakaNet</a>
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; <?= date('Y') ?> <a href="<?= base_url() ?>">e-Voting</a> .</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->
  <!-- Alert Config -->
  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 10000
      });
      <?php if ($this->session->flashdata('success')) { ?>
        Toast.fire({
          icon: 'success',
          title: '<?= $this->session->flashdata('success'); ?>'
        });
      <?php } else if ($this->session->flashdata('error')) {  ?>
        Toast.fire({
          icon: 'error',
          title: '<?= $this->session->flashdata('error'); ?>'
        });
      <?php } else if ($this->session->flashdata('warning')) {  ?>
        Toast.fire({
          icon: 'warning',
          title: '<?= $this->session->flashdata('warning'); ?>'
        });
      <?php } else if ($this->session->flashdata('info')) {  ?>
        Toast.fire({
          icon: 'info',
          title: '<?= $this->session->flashdata('info'); ?>'
        });
      <?php } ?>
    });
  </script>

</body>

</html>