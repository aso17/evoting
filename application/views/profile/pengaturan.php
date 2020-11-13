<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
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
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="row">
                                
                                <div class="col">
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                           <a href="<?=base_url('Profile/update_user').'/'.$users['id_user'];?>">Lengkapi berkas</a>
                                        </li>
                                        <li class="list-group-item">
                                           <a href="http://">Ubah foto profile</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>



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