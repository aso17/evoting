<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Beranda | E-voting</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() . 'asset/dist/css/adminlte.min.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav ">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand ">
                    <img src="<?= base_url() . 'asset/images/logo.png' ?>" alt="evoting Logo" class="brand-image img-circle ">
                    <span class="brand-text font-weight-light mx-3">E-Voting</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="home.html" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.html" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="pemilihan.html" class="nav-link">Pemilihan</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a href="index3.html" class="nav-link">Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Selamat datang</h1>
                        </div><!-- /.col -->
                        <!-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Top Navigation</li>
              </ol>
            </div>-->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url() . 'asset/dist/img/user2-160x160.jpg' ?>" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">Nina Mcintire</h3>

                                    <p class="text-muted text-center">82371236184517</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right">nina.tire@gmail.com</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Telpon</b> <a class="float-right">08112236725</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Pemilihan yang sedang berlangsung</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="vote.html" class="link">Pemilihan ketua RW kadujaya 2020</a>
                                            <a href=""><span class="badge badge-primary badge-pill">?</span></a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="vote.html" class="link">Pemilihan ketua RT 002</a>
                                            <a href=""><span class="badge badge-primary badge-pill">?</span></a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="vote.html" class="link">Pemilihan ketua DKM masjid al-hikmah</a>
                                            <a href=""><span class="badge badge-primary badge-pill">?</span></a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="vote.html" class="link">Pemilihan karang taruna </a>
                                            <a href=""><span class="badge badge-primary badge-pill">?</span></a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="vote.html" class="link">Pemilihan Ketua PKK </a>
                                            <a href=""><span class="badge badge-primary badge-pill">?</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">

            <!-- Default to the left -->
            <strong>Copyright &copy; 2020 <a href="https://gisaka.net">GisakaNet</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
</body>

</html>