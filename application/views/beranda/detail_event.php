 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container">
             <div class="row mb-2">

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
                     <div class="card card-primary card-outline">
                         <?php foreach ($event as $ev) : ?>
                         <div class="card-header">
                             <h4 class=" text-info">Detail Event
                                 pemilihan</h4>
                         </div>
                         <div class="card-body">
                             <a href="<?= base_url('beranda') ?>" class="btn btn-info btn-sm float-right ml-4"><i
                                     class="fas fa-chevron-circle-left pr-1"></i>kembali</a>
                             <div id="list-example" class="list-group">
                                 <a class="list-group-item list-group-item-action"
                                     href="#list-item-1"><?= $ev->nama_event ?></a>
                                 <a class="list-group-item list-group-item-action" href="#list-item-2">Tanggal
                                     Mulai <?= $ev->tgl_mulai ?></a>
                                 <a class="list-group-item list-group-item-action" href="#list-item-3">Tanggal Berakhir
                                     <?= $ev->tgl_berahir ?></a>
                                 <a class="list-group-item list-group-item-action" href="#list-item-3">Priode
                                     <?= $ev->priode ?></a>

                             </div>
                             <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                                 class="scrollspy-example mt-3" tabindex="0">
                                 <h5 id="list-item-1 " class="text-info"><?= $ev->nama_event ?></h5>
                                 <p>Hak memberikan suara atau memilih (right to vote) merupakan hak dasar(basic right)
                                     setiap individu atau warga negara yang harus dijamin pemenuhannya oleh Negara.
                                     Ketentuan mengenai ini, diatur dalam Pasal 1 ayat (2), Pasal 2 ayat (1), Pasal 6A
                                     (1), Pasal 19 ayat (1) dan Pasal 22C (1) UUD 1945</p>
                                 <h5 id="list-item-2" class="text-info">Tanggal
                                     Mulai <?= $ev->tgl_mulai ?></h5>
                                 <p>Pemilihan hanya bisa di lakukan setelah taggal mulai yang sudah di tetapkan </p>
                                 <h5 id="list-item-3" class="text-info">Tanggal
                                     Berahir <?= $ev->tgl_berahir ?></h5>
                                 <p>Bagi setiap warga yang sudah melakukan regristrasi di harapkan segera melakukan
                                     voting sebelum
                                     tanggal berakhirnya pemilihan</p>
                                 <h5 id="list-item-4" class="text-info">Priode
                                     <?= $ev->priode ?></h5>
                                 <p>Kandidat yang terpilih akan menjabat sesuai ketentuan yang berlaku,dan di umumkan
                                     berdasarkan email yang terdaftar </p>
                             </div>
                         </div>
                         <?php endforeach; ?>
                     </div><!-- /.card -->
                 </div>
             </div>

         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content -->
 </div>
 <script>

 </script>
 <!-- /.content-wrapper
 