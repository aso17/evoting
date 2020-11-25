<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Administrator</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title ">User log</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="user" class="table ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>username</th>

                                    <th>Role</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($admin as $adm) : ?>

                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $adm->nama_lengkap ?></td>
                                    <td><?= $adm->username ?></td>
                                    <td><?= $adm->nama_role ?></td>
                                    <td>
                                        <button class="badge badge-danger float-right"
                                            onclick="deleteConfirm('<?= base_url()  ?>')">hapus</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
$("#user").DataTable({

    "responsive": true,
    "autoWidth": true,
    "info": false,
    "lengthChange": false,
    "scrollY": 300,
    "paging": false,
    dom: 'Bfrtip',
    buttons: [{
        text: 'Tambah administrator',

        action: function() {
            window.location.href = "<?= base_url('admin/tambah') ?>"
        }
    }]
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