<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/user_log') ?>">User log</a></li>
                    <li class="breadcrumb-item active">Tambah user log
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8">

                <?= form_open_multipart('admin/tambah') ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                    value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title ">Tambah User log</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="fnik">Nik</label>
                                    <input type="text"
                                        class="form-control <?= form_error('fnik') ? 'is-invalid' : '' ?>" id="fnik"
                                        placeholder="nomer induk ktp" name="fnik">
                                    <div class="invalid-feedback">
                                        <?= form_error('fnik') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nm_lengkap">Nama Lengkap</label>
                                    <input type="text"
                                        class="form-control <?= form_error('nm_lengkap') ? 'is-invalid' : '' ?>"
                                        id="nm_lengkap" placeholder="nama_lengkap" name="nm_lengkap">
                                    <div class="invalid-feedback">
                                        <?= form_error('nm_lengkap') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user_name">username</label>
                                    <input type="text"
                                        class="form-control <?= form_error('user_name') ? 'is-invalid' : '' ?>"
                                        id="user_name" placeholder="user_name" name="user_name">
                                    <div class="invalid-feedback">
                                        <?= form_error('user_name') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>role</label>
                                    <select class="form-control  <?= form_error('role') ? 'is-invalid' : '' ?> "
                                        name="role">
                                        <option>pilih</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Panitia</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= form_error('role') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="femail"
                                        class="form-control <?= form_error('femail') ? 'is-invalid' : '' ?>" id="femail"
                                        placeholder="email" name="femail">
                                    <div class="invalid-feedback">
                                        <?= form_error('femail') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">*image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="foto">
                                            <label class="custom-file-label" for="exampleInputFile">Choose</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Pasword</label>
                                    <input type="password"
                                        class="form-control <?= form_error('fpassword') ? 'is-invalid' : '' ?>"
                                        id="fpassword" placeholder="" name="fpassword">
                                    <div class="invalid-feedback">
                                        <?= form_error('fpassword') ?>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info btn-sm">Save</button>
                                    <button type="submit" class="btn btn-danger btn-sm float-right">Cancel</button>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                </form>
            </div>

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->