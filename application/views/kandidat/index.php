<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Kandidat</h3>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                    <button class="badge badge-dark pb-2 pt-2"><i class="fa fa-user-plus"></i><a href="<?= base_url('Kandidat/tambah_kandidat') ?>" class="text-light   ">Tambahkan Event</a></button>
                        <table id="nik" class="table  table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 4%;">No</th>
                                    <th>Nomer urut</th>
                                    <th>Nama lengkap</th>
                                    <th>Image</th>
                                    <th>Pekerjaan</th>
                                    <th>Pendidikan terahir</th>

                                    <th style="width: 15%;" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>001</td>
                                    <td>jajang Sudrajat</td>
                                    <td>jpg</td>
                                    <td>ASN</td>
                                    <td>Sarjanax</td>
                                    <td>
                                        <button class="badge badge-danger   float-right  ml-2" onclick="deleteConfirm('')"><i class="fa fa-trash-alt"></i></button>
                                        <button class="badge badge-info float-right ml-2"><a href="#" class=" text-light "><i class="fa fa-eye"></i></a></button>
                                        <button class="badge badge-primary float-right  ml-2"><a href="#" class=" text-light "><i class="fa fa-pen"></i></a></button>

                                    </td>
                                </tr>


                                <tr>
                                    <td>1</td>
                                    <td>001</td>
                                    <td>jajang Sudrajat</td>
                                    <td>jpg</td>
                                    <td>ASN</td>
                                    <td>Sarjanax</td>
                                    <td>
                                        <button class="badge badge-danger   float-right  ml-2" onclick="deleteConfirm('')"><i class="fa fa-trash-alt"></i></button>
                                        <button class="badge badge-info float-right ml-2"><a href="#" class=" text-light "><i class="fa fa-eye"></i></a></button>
                                        <button class="badge badge-primary float-right  ml-2"><a href="#" class=" text-light "><i class="fa fa-pen"></i></a></button>

                                    </td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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