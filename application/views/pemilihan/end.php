<div class="content">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="jumbotron">
                    <h5 class="display-4"></h5>
                    <p class="lead">Terima kasih <?= $this->session->userdata('nama_lengkap'); ?> sudah menggunkan hak
                        suara anda</p>
                    <hr class="my-4">
                    <p class="lead">Klick untuk melihat hasil perolehan sementara</p>
                    <?php foreach ($event as $ev) : ?>
                    <?php foreach ($kandidat as $kan) : ?>
                    <a class="btn btn-info btn-sm-6"
                        href=" <?= base_url('pemilihan/hasilvote/') . $ev->id_event . '/' . $kan['id_kandidat']    ?>"
                        role="button">Lihat</a>
                    <?php endforeach; ?>
                    <?php endforeach;
                    ?>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>