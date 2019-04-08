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
        <h2 style="margin-top:0px">Desa <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Kec Id <?php echo form_error('kec_id') ?></label>
            <input type="text" class="form-control" name="kec_id" id="kec_id" placeholder="Kec Id" value="<?php echo $kec_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Desa <?php echo form_error('nama_desa') ?></label>
            <input type="text" class="form-control" name="nama_desa" id="nama_desa" placeholder="Nama Desa" value="<?php echo $nama_desa; ?>" />
        </div>
	    <input type="hidden" name="id_desa" value="<?php echo $id_desa; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('desa') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>