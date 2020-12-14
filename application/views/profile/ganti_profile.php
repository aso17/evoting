<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">

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
                                <div class="col-lg-12 d-flex py-3 ">
                                    <img class="profile-user-img img-fluid img-circle"
                                        style="width: 250px; height:250px;"
                                        src="<?= base_url() . '/asset/images/foto_user/' . $users['image'] ?>"
                                        alt="User profile picture">

                                </div>


                            </div>



                        </div>
                        <div class="row">

                            <div class="col-md-2 sm-2 mt-0 mx-auto mb-5">
                                <?= form_open_multipart('Profile/updateprofile') ?>

                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                                    value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="foto">
                                            <label class="custom-file-label" for="exampleInputFile">pilih</label>
                                        </div>

                                    </div>
                                </div>
                                <button class="btn btn-info ml-5" type="submit" name="submit">Ganti foto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<!-- /.content-wrapper -->