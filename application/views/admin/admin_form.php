<div class="col-md-10">
<div class="card">
    <div class="card-header" data-background-color="green">
        <h4 class="title"><?php echo $button ?> Anggota Keluarga</h4>
        <p class="category"><?= $nama?></p>
    </div>
    <div class="card-content">
        <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Nik <?php echo form_error('nik') ?></label>
                        <input type="text" class="form-control" name="nik" id="nik" value="<?php echo $nik; ?>" required/>
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Nama <?php echo form_error('nama') ?></label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>" required/>
                    </div>
                    <?php if ($this->session->userdata('auth')['status'] == 1) { ?>
                        <div class="form-group label-floating">
                            <label for="int">Status<?php echo form_error('status_id') ?></label>
                            <select name="status_id" id="status_id"  class="form-control" >
                                <option value="1" <?php if ($status_id == 1) echo 'selected'; ?>>ADMIN</option>
                                <option value="2" <?php if ($status_id == 2) echo 'selected'; ?>>PENYULUH</option>
                            </select>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
            <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button> 
            <a href="<?php echo site_url('admin') ?>" class="btn btn-danger pull-right"><i class="material-icons">arrow_back</i> Batal</a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
</div>