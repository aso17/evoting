<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Hasil Pemilihan</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body">


                        <ul class="list-group list-group-flush">
                            <?php $i = 1; ?>
                            <?php foreach ($event as $ev) :  ?>
                            <li class="list-group-item"><a
                                    href="<?= base_url('report/hasil_pemilihan/') . $ev['id_event'] ?>"><?= $ev['nama_event'] ?></a>
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
<!-- /.content -->