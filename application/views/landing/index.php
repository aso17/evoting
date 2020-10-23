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

    <title>E-voting</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() . 'asset/dist/css/adminlte.min.css' ?>">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/sweetalert2/dark.css' ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">


    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <!-- Sweetalert -->
    <script src="<?= base_url() . 'asset/plugins/sweetalert2/sweetalert2.min.js' ?>"></script>
    <!-- Toastr -->
    <script src="<?= base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand ">
                    <img src="<?= base_url() . 'asset/images/logo.png' ?>" alt="Evoting Logo" class="brand-image img-circle ">
                    <span class="brand-text font-weight-light mx-3">E-Voting</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-8 p-0 d-flex flex-column align-items-center justify-content-center">
                            <h1 class="display-3">Gunakan <strong class="text-info">hak pilih</strong> anda <br>melalui <strong class="text-info">E-Voting</strong></h1>
                            <h4 class="text-muted">sistem informasi voting ketua kepengurusan untuk berbagai organisasi</h4>
                        </div>
                        <div class="col-lg-4 pt-5">
                            <div class="card ">
                                <div class="card-header" style="background-color: #20B2AA;">
                                    <img src=" <?=base_url().'/asset/images/logo.png'?>" alt="Evoting Logo" class="brand-image img-circle " width="60">
                                    <span class="brand-text font-weight-light mx-3 font-weight-bold">E-Voting</span>
                                    </a>
                                </div>

                                <div class="card-body login-card-body " style="font-family:serif;">
                                    <p class="login-box-msg"></p>

                                    <form action=" <?= base_url('Landing/login') ?> " method="post">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none  ">
                                        
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control <?= form_error('femail') ? 'is-invalid' : '' ?>" placeholder=" masukan Email" name="femail">

                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?= form_error('femail') ?>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control <?= form_error('fpassword') ? 'is-invalid' : '' ?>" placeholder=" Password" name="fpassword">

                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?= form_error('fpassword') ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mx-auto">
                                                <button type="submit" class="btn btn btn  btn-block" style="background-color: #20B2AA;" name="submit">Login</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>

                                    <p class="mt-2 text-center">

                                        <a href="  <?= base_url('Landing/register') ?> ">Lupa password</a>
                                    </p>
                                    <p class="mt-3 mb-1">
                                        <span class="text-muted font-weight-bold">Belum Punya Akun? </span>
                                        <a href="  <?= base_url('Landing/register') ?> ">Klik di Sini</a>
                                    </p>

                                </div>

                                <!-- /.login-card-body -->
                            </div>
                        </div>
                    </div>
                </div>
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