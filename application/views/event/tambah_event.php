<!-- right column -->
<div class="col-md-10 pt-3 pl-3">
    <!-- general form elements disabled -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Event</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?= form_open_multipart('Event/tambah_event') ?>

            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">


            <div class="col-sm-8">

                <div class="form-group">
                    <label>*Nama event</label>
                    <input type="text" class="form-control <?= form_error('nm_event') ? 'is-invalid' : '' ?> "
                        name="nm_event" autocomplete="off">
                    <div class="invalid-feedback">
                        <?= form_error('nm_event') ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label>*Tanggal mulai</label>
                    <input type="date" class="form-control <?= form_error('tgl_mulai') ? 'is-invalid' : '' ?> "
                        name="tgl_mulai" autocomplete="off">
                    <div class="invalid-feedback">
                        <?= form_error('tgl_mulai') ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                    <label>*Tanggal berahir</label>
                    <input type="date" class="form-control <?= form_error('tgl_berahir') ? 'is-invalid' : '' ?>"
                        name="tgl_berahir" autocomplete="off">
                    <div class="invalid-feedback">
                        <?= form_error('tgl_berahir') ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label>*Priode</label>
                    <input type="text" class="form-control <?= form_error('priode') ? 'is-invalid' : '' ?>"
                        name="priode">
                    <div class="invalid-feedback">
                        <?= form_error('priode') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-info"><i
                                class="fas fa-paper-plane"></i>Save</button>
                        <button type="submit" class="btn btn-danger float-right">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>