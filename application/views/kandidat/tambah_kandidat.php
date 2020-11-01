<!-- right column -->
<div class="col-md-8 pt-3 pl-3">
    <!-- general form elements disabled -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Kandidat</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form role="form" action="" method="post"> 
                <div class="row">
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>*Nomer urut</label>
                            <input type="text" class="form-control"  name="no_urut" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>*Nama Lengkap</label>
                            <input type="text" class="form-control"  name="nm_lengkap">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>*Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>*Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir">
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- select -->
                        <div class="form-group ">
                            <label>*Pilih agama</label>
                            <select class="form-control " name="agama">
                                <option>pilih</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>*Alamat </label>
                            <textarea class="form-control" rows="2"  name="alamat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>*Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>*Pendidikan Terahir</label>
                            <input type="text" class="form-control" name="pendidikan_terahir" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputFile">*Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto">
                                    <label class="custom-file-label" for="exampleInputFile">Choose</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>*Pengalaman</label>
                            <input type="text" class="form-control" name="pengalaman">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group ">
                            <label>*Visi </label>
                            <textarea class="form-control" rows="3" name="visi"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>*Misi</label>
                            <textarea class="form-control" rows="3" name="misi"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">

                        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-info"><i class="fas fa-paper-plane"></i>Save</button>
                          <button type="submit" class="btn btn-danger float-right">Cancel</button>
                        </div>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
</div>