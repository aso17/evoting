<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Ubah user log</h1>
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

                <form method="post" action="">
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
                                            id="nm_lengkap" placeholder="nm_lengkap" name="nama_lengkap"
                                            value="<?= $auth['nama_lengkap'] ?>" readonly>
                                        <div class="invalid-feedback">
                                            <?= form_error('nm_lengkap') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text"
                                            class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>"
                                            id="username" placeholder="username" name="username"
                                            value="<?= $auth['username'] ?>" readonly>
                                        <div class="invalid-feedback">
                                            <?= form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text"
                                            class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>"
                                            id="email" placeholder="email" name="email" value="<?= $auth['email'] ?>"
                                            readonly>
                                        <div class="invalid-feedback">
                                            <?= form_error('email') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>role</label>
                                        <select class="form-control  <?= form_error('role') ? 'is-invalid' : '' ?> "
                                            name="role">

                                            <option value="1">User</option>
                                            <option value="2">Admin</option>
                                            <option value="3">Panitia</option>
                                            </option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= form_error('role') ?>
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