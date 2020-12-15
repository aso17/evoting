<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <button class="btn btn-info btn-sm float-right">
                        <a href="<?= base_url('Profile/pengaturan') ?>" class="text-light">Pengaturan</a>
                    </button>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="row">
                                <div class="col-lg-3 d-flex py-3">
                                    <img class="profile-user-img img-fluid img-circle"
                                        style="width: 200px; height:200px;"
                                        src="<?= base_url() . '/asset/images/foto_user/' . $users['image']; ?>"
                                        alt="User profile picture">
                                </div>
                                <div class="col-lg-9">
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Nama</b> <a class="float-right"><?= $users['nama_lengkap'] ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a
                                                class="float-right"><?= $this->session->userdata('email') ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Username</b> <a
                                                class="float-right"><?= $this->session->userdata('username') ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Telpon</b> <a class="float-right"><?= $users['no_tlp'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-default card-outline mb-4">
                        <div class="card-body box-profile">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>NIK</b> <a class="float-right"><?= $users['nik']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Tempat/Tgl Lahir</b> <a
                                        class="float-right"><?= $users['tempat_lahir'] . '/' . $users['tgl_lahir']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jenis kelamin</b> <a class="float-right"><?= $users['jenis_kelamin']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Agama</b> <a class="float-right"><?= $users['agama']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Alamat</b> <a class="float-right"><?= $users['alamat']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>RT/RW</b> <a class="float-right"><?= $users['rt'] . '/' . $users['rw']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Kel./Desa</b> <a class="float-right"><?= $users['kelurahan']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Kecamatan</b> <a class="float-right"><?= $users['kecamatan']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>kabupaten</b> <a class="float-right"><?= $users['kabupaten']; ?></a>
                                </li>

                            </ul>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<!-- /.content-wrapper -->