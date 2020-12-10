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
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css' ?>">
    <link rel="stylesheet"
        href="<?= base_url() . 'asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/datatables-buttons/css/buttons.dataTables.min.css' ?>">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/sweetalert2/dark.css' ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">

    <link rel="stylesheet" href="<?= base_url() . 'asset/plugins/chart.js/Chart.min.css' ?>">



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
    <script src="<?= base_url() . 'asset/plugins/chart.js/Chart.min.js' ?>"></script>

</head>

<body class="hold-transition layout-top-nav ">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand ">
                    <img src="<?= base_url() . 'asset/images/logo.png' ?>" alt="evoting Logo"
                        class="brand-image img-circle ">
                    <span class="brand-text font-weight-light mx-3 ">E-Voting</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href=<?= base_url('Beranda') ?> class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Profile') ?>" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Pemilihan') ?>" class="nav-link">Pemilihan</a>

                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Pemilihan') ?>" class="nav-link">Bantuan</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <button onclick="logConfirm('<?= base_url('user/logout') ?>')" class="btn btn" class="nav-link "
                            id=" logoutmodal" data-toggle="modal" data-target="#logoutmodal">Keluar</button>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class=" content-wrapper">
            <!-- Content Header (Page header) -->
            <?= $contents; ?>
            <!-- /.content-header -->

            <!-- Main content -->
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
    <div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center">
                            <i class="fas fa-exclamation" style="font-size: 70px; color:red;"></i>
                        </div>
                        <div class="col-9 pt-2">
                            <h5>Apakah anda yakin ingin keluar?</h5>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">

                    <a id="btn-log" class="btn btn-danger">keluar</a>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>




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
    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    })
    </script>
    <script type="text/javascript">
    function logConfirm(url) {
        $('#btn-log').attr('href', url);
        $('#logoutmodal').modal();
    }
    </script>
    <script>
    $(function() {

        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })


    })
    </script>

</body>

</html>