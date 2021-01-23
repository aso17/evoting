<!-- Content Header (Page header) -->


<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h4 class="m-0 text-dark">Dashboard</h4>

                    </div><!-- /.col -->

                </div><!-- /.row -->

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fab fa-elementor"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Event</span>
                                <span class="info-box-number">
                                    <?= $totevent->eve ?>
                                    <small>event</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-secondary elevation-1"><i
                                    class="fas fa-universal-access"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Calon Kandidat</span>
                                <span class="info-box-number"><?= $totkandidat->kand ?>
                                    <small>People</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i
                                    class="fab fa-creative-commons-by"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Pemilih active</span>
                                <span class="info-box-number"><?= $useractive->user ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Peserta</span>
                                <span class="info-box-number"><?= $totusers->user ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>

            </div><!-- /.container-fluid -->
        </div>



    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->