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
        <h2 style="margin-top:0px">Pangan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Takaran <?php echo form_error('takaran') ?></label>
            <input type="text" class="form-control" name="takaran" id="takaran" placeholder="Takaran" value="<?php echo $takaran; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Urt <?php echo form_error('urt') ?></label>
            <input type="text" class="form-control" name="urt" id="urt" placeholder="Urt" value="<?php echo $urt; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Gram <?php echo form_error('gram') ?></label>
            <input type="text" class="form-control" name="gram" id="gram" placeholder="Gram" value="<?php echo $gram; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Kalori <?php echo form_error('kalori') ?></label>
            <input type="text" class="form-control" name="kalori" id="kalori" placeholder="Kalori" value="<?php echo $kalori; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Lemak <?php echo form_error('lemak') ?></label>
            <input type="text" class="form-control" name="lemak" id="lemak" placeholder="Lemak" value="<?php echo $lemak; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Karbohidrat <?php echo form_error('karbohidrat') ?></label>
            <input type="text" class="form-control" name="karbohidrat" id="karbohidrat" placeholder="Karbohidrat" value="<?php echo $karbohidrat; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Protein <?php echo form_error('protein') ?></label>
            <input type="text" class="form-control" name="protein" id="protein" placeholder="Protein" value="<?php echo $protein; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jenis Pangan Id <?php echo form_error('jenis_pangan_id') ?></label>
            <input type="text" class="form-control" name="jenis_pangan_id" id="jenis_pangan_id" placeholder="Jenis Pangan Id" value="<?php echo $jenis_pangan_id; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pangan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>