
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
                     <div class="card">
                         <div class="card-header">
                             <h4 class=" text-center">Daftar Event Desa Kadujaya</h4>
                             <button class="badge badge-dark pb-2 pt-2"><i class="fa fa-user-plus"></i><a href="<?= base_url() ?>" class="text-light   ">Tambahkan Event</a></button>
                         </div>
                         <div class="card-body">
                             <table class="table table-sm">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">#</th>
                                         <th>Pemilihan</th>
                                         <th>Tgl Mulai</th>
                                         <th>Tgl Akhir</th>
                                         <th>Priode </th>
                                         <th class="text-center">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php   $i=1;?>
                                     <?php foreach ($event as $ev) :?>

                                         <tr>
                                             <td><?= $i++; ?>.</td>
                                             <td><a href="#" class="text-info font-weight-bold"><?= $ev['nama_event']; ?></a></td>
                                             <td><?= $ev['tgl_mulai']; ?></td>
                                             <td><?= $ev['tgl_berahir']; ?></td>
                                             <td><?= $ev['Priode']; ?></td>

                                             <td><button class="badge badge-info  mt-1  float-right "><i class="fa fa-pen"></i></button></td>
                                             <td><button class="badge badge-danger  mt-1"><i class="fa fa-trash-alt"></i></button></td>
                                         </tr>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div><!-- /.card -->
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <h5>Pemilihan yang sedang berlangsung</h5>
                         </div>
                         <div class="card-body">
                             <table class="table table-sm">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">#</th>
                                         <th>Pemilihan</th>
                                         <th>Tgl Memilih</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>1</td>
                                         <td>Pemilihan ketua RW kadujaya 2020</td>
                                         <td>20 Oktober 2020</td>
                                     </tr>
                                     <tr>
                                         <td>2</td>
                                         <td>Pemilihan ketua RT</td>
                                         <td>29 Oktober 2020</td>
                                     </tr>
                                     <tr>
                                         <td>3</td>
                                         <td>Pemilihan ketua DKM</td>
                                         <td>29 Oktober 2020</td>
                                     <tr>
                                         <td>4</td>
                                         <td>Pemilihan ketua karang taruna</td>
                                         <td>11 November 2020</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div><!-- /.card -->
                 </div>
             </div>
             <!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content -->
 
