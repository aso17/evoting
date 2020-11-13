<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pengaturan</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Form kelengkapan data pemilih</h3>
                        </div>
                        <div class="card card card-outline">
                            <div class="card-body box-profile">
                                <div class="row">

                                    <div class="col">
                                        <div class="card-body">
                                            <?= form_open_multipart('Profile/update_user') ?>

                                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">

                                            <div class="row">
                                                <div class="col-sm-5">

                                                    <div class="form-group">
                                                        <label>*Nik</label>
                                                        <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid' : '' ?> " name="nik" value="<?= $users['nik'] ?>" readonly>
                                                        <div class="invalid-feedback">
                                                            <?= form_error('nik') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>*Nama Lengkap</label>
                                                        <input type="text" class="form-control <?= form_error('nm_lengkap') ? 'is-invalid' : '' ?> " name="nm_lengkap">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('nm_lengkap') ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <!-- text input -->

                                                    <div class="form-group ">
                                                        <label>Tempat Lahir</label>
                                                        <input type="text" class="form-control <?= form_error('tmp_lahir') ? 'is-invalid' : '' ?> " name="tmp_lahir">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('tmp_lahir') ?>
                                                        </div>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        <?= form_error('tmp_lahir') ?>
                                                    </div>

                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>*Tanggal lahir</label>
                                                        <input type="date" class="form-control <?= form_error('tgl_lahir') ? 'is-invalid' : '' ?>" name="tgl_lahir">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('tgl_lahir') ?>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">

                                                    <div class="form-group">
                                                        <label>*Jenis Kelamin</label>
                                                        <select class="form-control  <?= form_error('jenis_kelamin') ? 'is-invalid' : '' ?> " name="jenis_kelamin">
                                                            <option>pilih</option>
                                                            <option value="laki-laki">Laki-laki</option>
                                                            <option value="Permpuan">Perempuan</option>


                                                        </select>
                                                        <div class="invalid-feedback">
                                                            <?= form_error('jenis_kelamin') ?>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>*Alamat</label>
                                                        <textarea class="form-control <?= form_error('alamat') ? 'is-invalid' : '' ?>" rows="2" name="alamat"></textarea>
                                                        <div class="invalid-feedback">
                                                            <?= form_error('alamat') ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">

                                                    <div class="form-group">
                                                        <label>*RT</label>
                                                        <input type="text" class="form-control <?= form_error('rt') ? 'is-invalid' : '' ?> " name="rt">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('rt') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>*RW</label>
                                                        <input type="text" class="form-control <?= form_error('rw') ? 'is-invalid' : '' ?> " name="rw">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('rw') ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>*Kecamatan</label>
                                                        <input type="text" class="form-control <?= form_error('kec') ? 'is-invalid' : '' ?>" name="kec">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('kec') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>*Kelurahan</label>
                                                        <input type="text" class="form-control <?= form_error('kel') ? 'is-invalid' : '' ?>" name="kel">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('kel') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>*Kabupaten</label>
                                                        <input type="text" class="form-control <?= form_error('kab') ? 'is-invalid' : '' ?>" name="kab">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('kab') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>*Agama</label>
                                                        <select class="form-control  <?= form_error('agama') ? 'is-invalid' : '' ?> " name="agama">
                                                            <option>pilih</option>
                                                            <option value="islam">Islam</option>
                                                            <option value="kristen">Kristen</option>
                                                            <option value="hindu">Hindu</option>
                                                            <option value="budha">Budha</option>
                                                            <option value="konghucu">Konghucu</option>
                                                        </select>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        <?= form_error('agama') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">*Foto</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="foto">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-10">


                                                    <div class="card-footer">
                                                        <button type="submit" name="submit" class="btn btn-info"><i class="fas fa-paper-plane"></i>Save</button>
                                                        <button type="submit" class="btn btn-danger float-right">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <?= form_close(); ?>

                                        </ul>
                                    </div>
                                </div>



                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.container-fluid -->
    </div><!-- /.container-fluid -->
</div><!-- /.container-fluid -->


<!-- /.content-wrapper -->