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
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title ">User log</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="user" class="table ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>username</th>
                                    <th>Email</th>
                                    <th>Role</th>

                                    <th class="text-center ml-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($auth as $aut) : ?>

                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $aut->username ?></td>
                                    <td><?= $aut->email ?></td>
                                    <td><?= $aut->role ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-danger btn-sm float-right ml-2"
                                            onclick="deleteConfirm('<?= base_url('/')  ?>')"><i
                                                class="fas fa-trash-alt"></i></button>

                                        <a href="<?= base_url('admin/edit_user_log/') . $aut->id_auth . '/' . $aut->id_user ?>"
                                            class="text-light"> <button
                                                class="btn btn-outline-info btn-sm float-right"><i
                                                    class="fas fa-edit"></i> </button></a>

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
        text: '<i class="fas fa-user-plus mr-2 "></i>' +
            '<span class="font-weight-bold text-info">User</span>',


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