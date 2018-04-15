<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Keluarga <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">No Keluarga <?php echo form_error('no_keluarga') ?></label>
            <input type="text" class="form-control" name="no_keluarga" id="no_keluarga" placeholder="No Keluarga" value="<?php echo $no_keluarga; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kepala Keluarga <?php echo form_error('kepala_keluarga') ?></label>
            <input type="text" class="form-control" name="kepala_keluarga" id="kepala_keluarga" placeholder="Kepala Keluarga" value="<?php echo $kepala_keluarga; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Provinsi <?php echo form_error('provinsi') ?></label>
            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?php echo $provinsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kab <?php echo form_error('kab') ?></label>
            <input type="text" class="form-control" name="kab" id="kab" placeholder="Kab" value="<?php echo $kab; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kec <?php echo form_error('kec') ?></label>
            <input type="text" class="form-control" name="kec" id="kec" placeholder="Kec" value="<?php echo $kec; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Desa <?php echo form_error('desa') ?></label>
            <input type="text" class="form-control" name="desa" id="desa" placeholder="Desa" value="<?php echo $desa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Rt <?php echo form_error('rt') ?></label>
            <input type="text" class="form-control" name="rt" id="rt" placeholder="Rt" value="<?php echo $rt; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Rw <?php echo form_error('rw') ?></label>
            <input type="text" class="form-control" name="rw" id="rw" placeholder="Rw" value="<?php echo $rw; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kode Pos <?php echo form_error('kode_pos') ?></label>
            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('keluarga') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>