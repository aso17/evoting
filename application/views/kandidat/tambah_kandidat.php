<!-- right column -->
<div class="col-md-8 pt-3 pl-3">
    <!-- general form elements disabled -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Kandidat</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <?= form_open_multipart('kandidat/tambah_kandidat')?>

                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">

                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">
                            <label>*Nomer urut</label>
                            <input type="text" class="form-control <?= form_error('nomer_urut') ? 'is-invalid' : '' ?> " name="nomer_urut">
                            <div class="invalid-feedback">
                                <?= form_error('nomer_urut') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>*Nama Lengkap</label>
                            <input type="text" class="form-control <?= form_error('nm_lengkap') ? 'is-invalid' : '' ?> " name="nm_lengkap">
                            <div class="invalid-feedback">
                                <?= form_error('nm_lengkap') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group ">
                            <label>*Status Jabatan</label>
                            <select class="form-control  <?= form_error('st_jabatan') ? 'is-invalid' : '' ?> " name="st_jabatan">
                                <option>pilih</option>
                                <option value="Calon Ketua RW">Calon Ketua RW</option>
                                <option value="Calon Ketua RT">Calon Ketua RT</option>
                                <option value="Calon Ketua DKM">Calon Ketua DKM</option>
                                <option value="Calon Ketua Karang Taruna">Calon Ketua Karang Taruna</option>
                                
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('st_jabatan') ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>*Tempat Lahir</label>
                            <input type="text" class="form-control <?= form_error('tempat_lahir') ? 'is-invalid' : '' ?>" name="tempat_lahir">
                            <div class="invalid-feedback">
                                <?= form_error('tempat_lahir') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>*Tanggal Lahir</label>
                            <input type="date" class="form-control <?= form_error('tgl_lahir') ? 'is-invalid' : '' ?>" name="tgl_lahir">
                            <div class="invalid-feedback">
                                <?= form_error('tgl_lahir') ?>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- select -->
                        <div class="form-group ">
                            <label>*Pilih agama</label>
                            <select class="form-control  <?= form_error('agama') ? 'is-invalid' : '' ?> " name="agama">
                                <option>pilih</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('agama') ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>*Alamat </label>
                            <textarea class="form-control <?= form_error('alamat') ? 'is-invalid' : '' ?>" rows="2" name="alamat"></textarea>
                            <div class="invalid-feedback">
                                <?= form_error('alamat') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>*Pekerjaan</label>
                            <input type="text" class="form-control <?= form_error('pekerjaan') ? 'is-invalid' : '' ?>" name="pekerjaan">
                            <div class="invalid-feedback">
                                <?= form_error('pekerjaan') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>*Pendidikan Terahir</label>
                            <input type="text" class="form-control <?= form_error('pendidikan') ? 'is-invalid' : '' ?>" name="pendidikan">
                            <div class="invalid-feedback">
                                <?= form_error('pendidikan') ?>
                            </div>
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
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>*Pengalaman</label>
                            <input type="text" class="form-control <?= form_error('pengalaman') ? 'is-invalid' : '' ?>" name="pengalaman">
                            <div class="invalid-feedback">
                                <?= form_error('pengalaman') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group ">
                            <label>*Visi </label>
                            <textarea class="form-control <?= form_error('visi') ? 'is-invalid' : '' ?>" rows="4" name="visi"></textarea>
                            <div class="invalid-feedback">
                                <?= form_error('visi') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>*Misi</label>
                            <textarea class="form-control <?= form_error('misi') ? 'is-invalid' : '' ?>" rows="4" name="misi"></textarea>
                            <div class="invalid-feedback">
                                <?= form_error('misi') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">


                        <div class="card-footer">
                            <button type="submit" name="submit"class="btn btn-info"><i class="fas fa-paper-plane"></i>Save</button>
                            <button type="submit" class="btn btn-danger float-right">Cancel</button>
                        </div>
                    </div>
                </div>

            </div>
        <?= form_close();?>
    </div>
</div>