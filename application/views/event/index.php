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
                    <div class="card-header bg-info">
                        <h4>Daftar Event Desa Kadujaya</h4>
                    </div>
                    <div class="card-body">
                        <button class="badge badge-dark pb-2 pt-2"><i class="fa fa-user-plus"></i><a
                                href="<?= base_url('Event/tambah_event') ?>" class="text-light   ">Tambahkan
                                Event</a></button>
                        <table class="table table-sm mt-2">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Pemilihan</th>
                                    <th>Tgl mulia</th>
                                    <th>Tgl berahir</th>

                                    <th>Priode </th>

                                    <th class="" colspan="2">Kelola Kandidat</th>



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
                                                class="btn btn-outline-info ml-2 "><i
                                                    class="fas fa-directions"></i></button></a>
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