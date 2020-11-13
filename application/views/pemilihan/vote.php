<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> Pemilihan ketua RW desa kadujaya 2020</h1>
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
    <!-- Main content -->

    <div class="content">
        <div class="container">
            <div class="row">
                <?php foreach ($kandidat as $kand) : ?>

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-center"><strong><?=$kand['nomer_urut'] ?></strong></h5>
                            </div>
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid" style="width:150px; height:200px;" src="<?= base_url() . '/asset/images/kandidat/'.$kand['foto'] ?>" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center mt-3"><?= $kand['nama_lengkap']; ?></h3>

                                <p class="text-muted text-center">calon ketuan RW</p>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <a href="#" class="btn btn-default btn-block"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="col-lg-9">
                                        <a href="#" class="btn btn-primary btn-block"><b>VOTE</b></a>

                                    </div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                <?php endforeach; ?>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->