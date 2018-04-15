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
        <h2 style="margin-top:0px">Pangan_keluarga <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="datetime">Tgl <?php echo form_error('tgl') ?></label>
            <input type="text" class="form-control" name="tgl" id="tgl" placeholder="Tgl" value="<?php echo $tgl; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Keluarga Id <?php echo form_error('keluarga_id') ?></label>
            <input type="text" class="form-control" name="keluarga_id" id="keluarga_id" placeholder="Keluarga Id" value="<?php echo $keluarga_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Pangan Id <?php echo form_error('pangan_id') ?></label>
            <input type="text" class="form-control" name="pangan_id" id="pangan_id" placeholder="Pangan Id" value="<?php echo $pangan_id; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pangan_keluarga') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>