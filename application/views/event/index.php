<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Daftar Event Desa Kadujaya</h4>
                    </div>
                    <div class="card-body">
                        <button class="badge badge-dark pb-2 pt-2"><i class="fa fa-user-plus"></i><a
                                href="<?= base_url('Event/tambah_event') ?>" class="text-light"> Tambahkan
                                Event</a></button>
                        <table class="table table-sm mt-2">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Pemilihan</th>
                                    <th>Tgl mulia</th>
                                    <th>Tgl berahir</th>

                                    <th>Priode </th>
                                    <th class="text-center" colspan="3" style="width: 15%;">Kelola Kandidat</th <th
                                        class="" colspan="2" style="width: 15%;">Kelola Kandidat</th>
                                    <th class="" colspan="2">Kelola Event</th>



                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($event as $ev) :   ?>

                                <tr>
                                    <td><?= $i++; ?>.</td>
                                    <td><a href="#" class="text-info font-weight-bold"><?= $ev['nama_event']; ?></a>
                                    </td>

                                    <td><?= $ev['tgl_mulai']; ?></td>
                                    <td><?= $ev['tgl_berahir']; ?></td>
                                    <td><?= $ev['priode']; ?></td>




                                    <td>
                                        <a href=" <?= base_url('event/kelola_kandidat/') . $ev['id_event'] ?>"><button
                                                class="btn btn-light border border-dark btn-sm "><i
                                                    class="fas fa-indent"></i></button></a>
                                    </td>
                                    <td>
                                        <a href=" <?= base_url('event/edit/') . $ev['id_event'] ?>"><button
                                                class="btn btn-info btn-sm "><i class="fas fa-edit"></i></button></a>
                                    </td>
                                    <td> <button class="btn btn-danger btn-sm mr-2"
                                            onclick="deleteConfirm('<?= base_url() . 'event/delete/' . $ev['id_event'] ?>')"><i
                                                class="fa fa-trash-alt"></i></button>
                                    </td>

                                    <td> <button class="btn btn-outline-danger"
                                            onclick="deleteConfirm('<?= base_url() . 'event/delete/' . $ev['id_event'] ?>')"><i
                                                class="fa fa-trash-alt"></i></button>
                                    </td>


                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>
        </div>

        <!-- /.row -->
    </div><!-- /.container-fluid -->
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
<!-- /.content -->