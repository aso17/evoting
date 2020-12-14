<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PIE CHART -->
                    <div class="card card mt-3 card-primary card-outline">

                        <div class="card-body">
                            <canvas id="pieChart"
                                style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <div class="row">

                <?php
                foreach ($kandidat as $kan) :

                ?>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header ">
                            <h5 class="text-center"><strong><?= $kan['nomer_urut'] ?></strong></h5>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid" style="width: 150px; height:150px;"
                                    src="<?= base_url() . 'asset/images/kandidat/' . $kan['foto'] ?>"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center mt-3"><?= $kan['nama_lengkap'] ?></h3>

                            <p class="text-muted text-center"><?= $kan['keterangan'] ?></p>

                            <button type="button" class="btn btn-primary mx-5">
                                Jumlah vote <span class="badge badge-light">
                                    <?php foreach ($vote as $vt) :
                                            if ($vt->id_kandidat == $kan['id_kandidat']) {
                                                echo $vt->hasil_vote;
                                            }
                                        endforeach;
                                        ?>
                                </span>
                                <span class="sr-only"></span>
                            </button>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?php
//Inisialisasi nilai variabel awal
$kandidat = "";
$suara = null;
foreach ($vote as $item) {
    $kan = $item->nama_lengkap;
    $kandidat .= "'$kan'" . ", ";
    $jum = $item->hasil_vote;
    $suara .= "$jum" . ", ";
}
?>
<script>
//-------------
//- PIE CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.
var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
var pieData = {
    labels: [<?php echo $kandidat; ?>],
    datasets: [{
        data: [<?php echo $suara; ?>],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
    }]
};
var pieOptions = {
    maintainAspectRatio: false,
    responsive: true,
}
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
var pieChart = new Chart(pieChartCanvas, {
    type: 'pie',
    data: pieData,
    options: pieOptions
})
</script>
<!-- /.content-wrapper

 
 