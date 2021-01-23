<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <?php foreach ($event as $ev) : ?>
                        <h3 class="card-"> kelola Kandidat <?= $ev->nama_event ?></h3>
                        <?php endforeach; ?>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="<?= base_url('event') ?>" class="btn btn-info btn-sm float-right ml-4"><i
                                class="fas fa-chevron-circle-left pr-1"></i>kembali</a>
                        <button class="badge badge-dark pb-2 pt-2"><i class="fa fa-user-plus"></i><a
                                href="<?= base_url('Kandidat/tambah_kandidat') ?>" class="text-light   ">Tambah
                                Kandidat</a></button>
                        <table id="nik" class="table  table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 4%;">No</th>
                                    <th>Nomer urut</th>
                                    <th>Nama lengkap</th>
                                    <th>Tempat lahir</th>
                                    <th>Tgl lahir</th>
                                    <th class="text-center">Foto</th>

                                    <th style="width:200px ;">Pendidikan</th>



                                    <th style="width:15%;" colspan="" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kandidat as $kand) : ?>

                                <tr>
                                    <td> <?= $i++; ?> </td>
                                    <td><?= $kand['nomer_urut'] ?></td>
                                    <td><?= $kand['nama_lengkap'] ?></td>
                                    <td><?= $kand['tempat_lahir'] ?></td>
                                    <td><?= $kand['tgl_lahir'] ?></td>
                                    <td><img src="<?= base_url() . 'asset/images/kandidat/' . $kand['foto']; ?>"
                                            alt="foto kandidat" width="70px" class="rounded mx-auto d-block"></td>
                                    <td><?= $kand['pendidikan_terahir'] ?></td>



                                    <td class="float-right">
                                        <button class="btn btn-info mr-2" id="detail-kandidat" data-toggle="modal"
                                            data-target="#modal-detail" data-nomer="<?= $kand['nomer_urut'] ?>"
                                            data-nama-l="<?= $kand['nama_lengkap'] ?>" data-pict="<?= $kand['foto'] ?>"
                                            data-tempat-lahir="<?= $kand['tempat_lahir'] ?>"
                                            data-tgl-lahir="<?= date('l, d F Y', strtotime($kand['tgl_lahir']))  ?>"
                                            data-pekerjaan="<?= $kand['pekerjaan'] ?>"
                                            data-pendidikan="<?= $kand['pendidikan_terahir'] ?>"
                                            data-pengalaman="<?= $kand['pengalaman'] ?>"
                                            data-ket="<?= $kand['keterangan'] ?>" data-priode="<?= $kand['priode'] ?>"
                                            data-event="<?= $kand['nama_event'] ?>" data-visi="<?= $kand['visi'] ?>"
                                            data-misi="<?= $kand['misi'] ?>">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button class="btn btn-danger sm mr-2"
                                            onclick="deleteConfirm('<?= base_url() . 'kandidat/delete/' . $kand['id_kandidat'] ?>')"><i
                                                class="fa fa-trash-alt"></i></button>



                                    </td>
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
<div class="modal fade" id="modal-detail" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable  lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail Kandidat</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img id="gam" class="profile-user-img img-fluid" style="width:200px; height:200px;" src=""
                                alt="User profile picture">
                        </div>
                        <strong>
                            <p class="text-center mt-2" id="no"></p>
                        </strong>
                        <p class="text-center mt-2" id="calon"></p>
                    </div>

                </div>
                <ul class="list-group">

                    <li class="list-group-item mt-0">
                        <p id="nm"></p>
                    </li>

                    <li class="list-group-item">
                        <p id="tmp_lahir"></p>

                    </li>
                    <li class="list-group-item">
                        <p id="pekerjaan"></p>
                    </li>
                    <li class="list-group-item">
                        <p id="pendi"></p>
                    </li>
                    <li class="list-group-item">
                        <p id="pengalaman"></p>
                    </li>
                    <li class="list-group-item">
                        <p id="ev"></p>
                    </li>
                    <li class="list-group-item">
                        <p id="prio"></p>
                    </li>


                    <div class="row mt-2">
                        <div class="col-lg-6 ">

                            <h5 class=""><strong>visi</strong></h5>

                            <P id="visi" class="list-group-item"></P>
                        </div>
                        <div class="col-lg-6 ">

                            <h5 class=""> <strong>misi</strong></h5>

                            <p id="misi" class="list-group-item"></p>
                        </div>
                    </div>
                </ul>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $(document).on('click', '#detail-kandidat', function() {
        const no_urut = $(this).data('nomer');
        const nama = $(this).data('nama-l');
        const foto = $(this).data('pict');
        const tempatlahir = $(this).data('tempat-lahir');
        const tgllahir = $(this).data('tgl-lahir');
        const pekerjaan = $(this).data('pekerjaan');
        const pendidikan = $(this).data('pendidikan');
        const pengalaman = $(this).data('pengalaman');
        const cal = $(this).data('ket');
        const prid = $(this).data('priode');
        const eve = $(this).data('event');
        const visi = $(this).data('visi');
        const misi = $(this).data('misi');
        $('#no').text(no_urut);
        $('#nm').text(nama);
        $('#gam').attr('src', '<?= base_url('asset/images/kandidat/') ?>' + foto);
        $('#tmp_lahir').text(tempatlahir + ',' +
            tgllahir);
        //$('#tgl').text(tgllahir);
        $('#pekerjaan').text(
            pekerjaan);
        $('#pendi').text(pendidikan);
        $('#pengalaman').text(pengalaman);
        $('#prio').text(prid);
        $('#calon').text(cal);
        $('#ev').text(eve);
        $(
            '#visi').text(visi);
        $('#misi').text(misi);
        console.log(gam);

    })
})
</script>

<!-- Delete Confirm -->
<script type="text/javascript">
function deleteConfirm(url) {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>