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
        <h2 style="margin-top:0px">Detail_pangan_keluarga <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="double">Urt <?php echo form_error('urt') ?></label>
            <input type="text" class="form-control" name="urt" id="urt" placeholder="Urt" value="<?php echo $urt; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Berat <?php echo form_error('berat') ?></label>
            <input type="text" class="form-control" name="berat" id="berat" placeholder="Berat" value="<?php echo $berat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Asal <?php echo form_error('asal') ?></label>
            <input type="text" class="form-control" name="asal" id="asal" placeholder="Asal" value="<?php echo $asal; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jumlah Pemakan <?php echo form_error('jumlah_pemakan') ?></label>
            <input type="text" class="form-control" name="jumlah_pemakan" id="jumlah_pemakan" placeholder="Jumlah Pemakan" value="<?php echo $jumlah_pemakan; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Rata Rata Berat <?php echo form_error('rata_rata_berat') ?></label>
            <input type="text" class="form-control" name="rata_rata_berat" id="rata_rata_berat" placeholder="Rata Rata Berat" value="<?php echo $rata_rata_berat; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Pangan Keluarga Id <?php echo form_error('pangan_keluarga_id') ?></label>
            <input type="text" class="form-control" name="pangan_keluarga_id" id="pangan_keluarga_id" placeholder="Pangan Keluarga Id" value="<?php echo $pangan_keluarga_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Pangan Id <?php echo form_error('pangan_id') ?></label>
            <input type="text" class="form-control" name="pangan_id" id="pangan_id" placeholder="Pangan Id" value="<?php echo $pangan_id; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('detail_pangan_keluarga') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>