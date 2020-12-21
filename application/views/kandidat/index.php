<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-header bg-info">
                        <h3 class="card-title font-weight-bold">Daftar Kandidat</h3>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row pb-4">
                            <div class="col">
                                <a href="<?= base_url('event') ?>" class="btn btn-info btn-sm float-right ml-4"><i
                                        class="fas fa-chevron-circle-left pr-1"></i>kembali</a>
                            </div>
                        </div>

                        <table id="kandidat" class="table  table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 4%;">No</th>
                                    <th>No urut</th>
                                    <th>Mengikuti Event</th>
                                    <th>Nama kandidat</th>
                                    <th class="text-center">Foto</th>
                                    <th>Pekerjaan</th>
                                    <th>Pendidikan terahir</th>
                                    <th style="width:200px ;">Status jabatan</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kandidat as $kand) : ?>

                                <tr>
                                    <td> <?= $i++; ?> </td>
                                    <td><?= $kand['nomer_urut'] ?></td>
                                    <td><?= $kand['nama_event'] ?></td>
                                    <td><?= $kand['nama_lengkap'] ?></td>
                                    <td><img src="<?= base_url() . 'asset/images/kandidat/' . $kand['foto']; ?>"
                                            alt="foto kandidat" width="70px" height="70px"
                                            class="rounded mx-auto d-block"></td>
                                    <td><?= $kand['pekerjaan'] ?></td>
                                    <td><?= $kand['pendidikan_terahir'] ?></td>
                                    <td><?= $kand['keterangan'] ?></td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center">
                        <i class="fa  fa-exclamation-triangle" style="font-size: 70px; color:red;"></i>
                    </div>
                    <div class="col-9 pt-2">
                        <h5>Apakah anda yakin?</h5>
                        <span>Data yang dihapus tidak akan bisa dikembalikan.</span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"> Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#"> Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirm -->
<script type="text/javascript">
function deleteConfirm(url) {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>
<script>
$(function() {

    $("#kandidat").DataTable({

        "responsive": true,
        "autoWidth": true,
        "info": true,
        "lengthChange": false,

        "paging": true,

    });
});
</script>