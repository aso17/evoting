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
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle mb-3"
                                src="<?= base_url() . '/asset/images/foto_user/' . $this->session->userdata('images') ?>"
                                alt="User profile picture">
                        </div>


                        <h3 class="profile-username text-center"><?= $this->session->userdata('nama_lengkap') ?></h3>

                        <p class="text-muted text-center"><?= $this->session->userdata('nik') ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right"><?= $this->session->userdata('email') ?></a>
                            </li>
                            <li class="list-group-item mb-2">
                                <b>Telpon</b> <a class="float-right"><?= $this->session->userdata('no_tlp'); ?></a>
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
                        <?php foreach ($event as $ev) : ?>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="<?= base_url('Pemilihan/vote/') . $ev['id_event'] ?>"
                                    class="link"><?= $ev['nama_event'] ?></a>
                                <a href=""><span class="badge badge-primary badge-pill">?</span></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>