<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php foreach ($event as $ev) : ?>
                    <h1 class="m-0 text-dark"><?= $ev->nama_event ?> </h1>
                    <?php endforeach; ?>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Top Navigation</li>
              </ol>
            </div>-->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <!-- Main content -->

    <div class="content">
        <div class="container">
            <div class="row">

                <?php foreach ($kandidat as $kand) : ?>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center"><strong><?= $kand['nomer_urut'] ?></strong></h5>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid" style="width:150px; height:200px;"
                                    src="<?= base_url() . '/asset/images/kandidat/' . $kand['foto'] ?>"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center mt-3"><?= $kand['nama_lengkap']; ?></h3>

                            <p class="text-muted text-center"><?= $kand['keterangan']; ?></p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a class="btn btn-default btn-block" id="detail-kandidat" data-toggle="modal"
                                        data-target="#modal-detail" data-nama-l="<?= $kand['nama_lengkap'] ?>"
                                        data-pict="<?= $kand['foto'] ?>"
                                        data-tempat-lahir="<?= $kand['tempat_lahir'] ?>"
                                        data-tgl-lahir="<?= date('l, d F Y', strtotime($kand['tgl_lahir']))  ?>"
                                        data-pekerjaan="<?= $kand['pekerjaan'] ?>"
                                        data-pendidikan="<?= $kand['pendidikan_terahir'] ?>"
                                        data-pengalaman="<?= $kand['pengalaman'] ?>" data-visi="<?= $kand['visi'] ?>"
                                        data-misi="<?= $kand['misi'] ?>">

                                        <i class="fa fa-eye"></i></a>
                                </div>
                                <div class="col-lg-9">
                                    <a href="<?= base_url('Pemilihan/Proccess_vote') . '/' . $kand['id_event'] . '/' . $kand['id_kandidat'] ?>"
                                        class="btn btn-primary btn-block" type="submit" name="submit"><b>VOTE</b></a>

                                </div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
                <?php endforeach; ?>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="modal-detail" role="dialog">
    <div class="modal-dialog sm" role="document">
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
                </ul>

                <div class="row">
                    <div class="col-lg-6">
                        <h5>visi</h5>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis in doloremque
                            quos dolorum suscipit? Inventore officia vitae eveniet quibusdam, facere animi
                            necessitatibus magni molestiae ad nihil molestias et illum laboriosam. </P>
                    </div>
                    <div class="col-lg-6">
                        <h5>misi</h5>
                        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente non rerum possimus ut
                            doloribus exercitationem harum cumque laboriosam vero eligendi alias, sequi accusamus,
                            cum
                            suscipit! Voluptas ea mollitia atque earum! </p>
                    </div>
                </div>
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
        const nama = $(this).data('nama-l');
        const foto = $(this).data('pict');
        const tempatlahir = $(this).data('tempat-lahir');
        const tgllahir = $(this).data('tgl-lahir');
        const pekerjaan = $(this).data('pekerjaan');
        const pendidikan = $(this).data('pendidikan');
        const pengalaman = $(this).data('pengalaman');
        const visi = $(this).data('visi');
        const misi = $(this).data('misi');
        $('#nm').text(nama);
        $('#gam').attr('src', 'http://localhost/evoting/asset/images/kandidat/' + foto);
        $('#tmp_lahir').text(tempatlahir + ',' +
            tgllahir);
        //$('#tgl').text(tgllahir);
        $('#pekerjaan').text(
            pekerjaan);
        $('#pendi').text(pendidikan);
        $('#pengalaman').text(pengalaman);
        $(
            '#visi').text(visi);
        $('#misi').text(misi);
        console.log(gam);

    })
})
</script>