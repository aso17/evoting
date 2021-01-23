<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

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
                        <table id="tb_event" class="table table-sm" border="1">


                            <thead>
                                <h4 class="m-0 text-dark text-center">Report hasil <?= $event->nama_event ?></h4>
                                <h5 class="m-0 text-dark text-center">priode</h5>
                                <h5 class="m-0 text-dark text-center"> <?= $event->priode ?></h5>
                                <h6 class="m-0 text-dark">Tanggal Cetak : <?= date('l/d/m/y') ?></h6>
                                <div class="d-flex justify-content-end ">
                                    <button class="btn btn-default mb-4"> <a
                                            href="<?= base_url('report/export/') . $event->id_event ?>"
                                            class="text-dark textbold">
                                            <i class="fas fa-file-pdf"></i> export
                                            pdf</a> </button>
                                </div>
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Nomer urut</th>
                                    <th class="text-center">Event</th>
                                    <th class="text-center">Nama Kandidat</th>

                                    <th class="text-center">Priode</th>
                                    <th style="width:7%;" class="text-center">jumlah pemilih</th>




                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>

                                <?php foreach ($kandidat as $kand) : ?>
                                <tr>
                                    <td> <?= $i++; ?>. </td>
                                    <td><?= $kand['nomer_urut'] ?></td>
                                    <td><?= $kand['nama_event'] ?></td>
                                    <td><?= $kand['nama_lengkap'] ?></td>
                                    <td><?= $kand['priode'] ?></td>
                                    <td class="text-center">

                                        <?php foreach ($hasil_pemilihan as $hasil) : ?>
                                        <?php if ($kand['id_kandidat'] == $hasil->id_kandidat) { ?>
                                        <span class="badge">
                                            <h5><?= $hasil->hasil_vote ?></h5>
                                        </span>

                                        <?php } else { ?>

                                        <span class="badge">
                                            <h5>0</h5>
                                        </span>
                                        <?php } ?>

                                        <?php endforeach; ?>
                                    </td>
                                </tr>

                                <?php endforeach; ?>




                            </tbody>
                        </table>
                    </div>
                </div>




            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<script>
$(function() {

    $("#tb_evnt").DataTable({

        "responsive": true,
        "autoWidth": false,
        "info": false,
        "lengthChange": false,

        "paging": false,

    });
});
</script>