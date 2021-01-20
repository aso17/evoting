 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
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
                     <div class="card   ">
                         <div class="card-header">
                             <h5>Pemilihan yang sedang berlangsung</h5>
                             <a href="<?= base_url('pemilihan') ?>" class="btn btn-info btn-sm float-right ml-4"><i class="fas fa-chevron-circle-left pr-1"></i>kembali</a>
                         </div>
                         <div class="card-body">
                             <table class="table table-sm">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">#</th>
                                         <th>Pemilihan</th>
                                         <th>Tgl Mulai</th>
                                         <th>Tgl Akhir</th>
                                         <th>Priode</th>

                                     </tr>
                                 </thead>
                                 <tbody>

                                     <?php foreach ($event as $ev) : ?>
                                         <tr>
                                             <td>#</td>
                                             <td><?= $ev->nama_event ?></td>
                                             <td><?= $ev->tgl_mulai ?></td>
                                             <td><?= $ev->tgl_berahir ?></td>
                                             <td><?= $ev->priode ?></td>
                                         </tr>
                                     <?php endforeach; ?>


                                 </tbody>
                             </table>
                         </div>
                         <h5 class="list-group-item list-group-item-action list-group-item text-info">Kandidat calon
                         </h5>
                         <div class="row mt-3 pl-3 pr-3">



                             <?php foreach ($kandidat as $kan) : ?>
                                 <div class="col-lg-3">
                                     <div class="card ">
                                         <div class="card-header">
                                             <h5 class="text-center"><strong><?= $kan->nomer_urut ?></strong></h5>
                                         </div>
                                         <div class="card-body box-profile">
                                             <div class="text-center">
                                                 <img class="profile-user-img img-fluid" style="width:150px; height:200px;" src="<?= base_url() . '/asset/images/kandidat/' . $kan->foto  ?>" alt="User profile picture">
                                             </div>

                                             <h3 class="profile-username text-center mt-3"><?= $kan->nama_lengkap ?></h3>

                                             <p class="text-muted text-center"><?= $kan->keterangan ?></p>

                                         </div>
                                     </div><!-- /.card -->
                                 </div>
                             <?php endforeach; ?>



                         </div>
                         <!-- /.row -->
                     </div><!-- /.card -->
                 </div>
             </div>

         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper