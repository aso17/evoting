<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah user login</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
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
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-5">
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
                                    <label for="username">Username</label>
                                    <input type="text"
                                        class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>"
                                        id="username" placeholder="username" name="username">
                                    <div class="invalid-feedback">
                                        <?= form_error('username') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>role</label>
                                    <select class="form-control  <?= form_error('role') ? 'is-invalid' : '' ?> "
                                        name="role">

                                        <option value="<?= $role[1]->id_role  ?>"><?= $role[1]->nama_role ?>
                                        <option value="<?= $role[2]->id_role  ?>"><?= $role[2]->nama_role ?>
                                        </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= form_error('nm_lengakap') ?>
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
                                        class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>"
                                        id="password" placeholder="" name="password">
                                    <div class="invalid-feedback">
                                        <?= form_error('password') ?>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info btn-sm float-right">Save</button>
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