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

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">

        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-header">
                <img src="<?= base_url() . 'asset/images/logo.png' ?>" alt="Evoting Logo"
                    class="brand-image img-circle shadow " width="50px">
                <span class="brand-text font-weight-light mx-3">E-Voting</span>

                <h5 class="login-box-msg mt-2 ">Administrator</h5>
            </div>
            <div class="card-body login-card-body">

                <form action="<?= base_url('admin/login') ?>" method="post">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                        value="<?= $this->security->get_csrf_hash(); ?>" style="display: none  ">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?= form_error('user_name') ? 'is-invalid' : '' ?>"
                            placeholder="username" name="user_name" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>

                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('user_name') ?>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>"
                            placeholder="Password" name="password" autocomplete="off">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('password') ?>
                        </div>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col">
                            <button type="submit" class="btn btn-info btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

</html>
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