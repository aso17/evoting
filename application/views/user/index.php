<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data pemilih</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data pemilih</li>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">NIK terdaftar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="nik" class="table  table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 4%;">No</th>
                                    <th>NIK</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($nik_terdaftar as $dt) { ?>
                                <tr>
                                    <td><?= $i++ ?>.</td>
                                    <td><?= $dt->nik ?></td>
                                    <td>
                                        <button class="btn btn-danger btn-sm float-right"
                                            onclick="deleteConfirm('<?= base_url() . 'user/delete/' . $dt->id_user ?>')">hapus</button>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List pemilih aktif</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="pemilih" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>L/P</th>
                                    <th>Alamat</th>
                                    <th>No telpon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?= $user->nik; ?></td>
                                    <td><?= $user->nama_lengkap; ?></td>
                                    </td>
                                    <td><?= $user->jenis_kelamin; ?></td>
                                    <td> <?= $user->alamat; ?></td>
                                    <td><?= $user->no_tlp; ?></td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
$(function() {
    $("#pemilih").DataTable({
        "responsive": true,
        "autoWidth": false,
        "autoWidth": false,
    });
    $("#nik").DataTable({

        "responsive": true,
        "autoWidth": true,
        "info": false,
        "lengthChange": false,
        "scrollY": 300,
        "paging": false,
        dom: 'Bfrtip',
        buttons: [{
            text: 'Tambah pemilih',
            action: function() {
                window.location.href = "user/tambah"
            }
        }]
    });
});
</script>

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