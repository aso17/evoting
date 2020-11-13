 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Pemilihan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
             <!-- Main content -->
             <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Pemilihan yang sedang berlangsung</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Pemilihan</th>
                                                <th>Tgl Mulai</th>
                                                <th>Tgl Akhir</th>
                                                <th>Priode</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;  ?>
                                            <?php foreach($event as $ev):  ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><a href="<?= base_url('Pemilihan/vote').'/'.$ev['id_event'] ?>" class="link"><?= $ev['nama_event'] ?></a></td>
                                                <td><?= date('d-m-Y', strtotime($ev["tgl_mulai"])) ?></td>
                                                <td><?= date('d-m-Y', strtotime($ev["tgl_berahir"])) ?></td>
                                                <td><?= $ev['priode'] ?></td>
                                                <td><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-eye"></i></button></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Pemilihan yang sudah diikuti</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Pemilihan</th>
                                                <th>Tgl Memilih</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Pemilihan ketua RW kadujaya 2020</td>
                                                <td>20 Oktober 2020</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pemilihan ketua RT</td>
                                                <td>29 Oktober 2020</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pemilihan ketua DKM</td>
                                                <td>29 Oktober 2020</td>
                                            <tr>
                                                <td>4</td>
                                                <td>Pemilihan ketua karang taruna</td>
                                                <td>11 November 2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper