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
        <h2 style="margin-top:0px">Survei <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Sayur <?php echo form_error('sayur') ?></label>
            <input type="text" class="form-control" name="sayur" id="sayur" placeholder="Sayur" value="<?php echo $sayur; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Buah <?php echo form_error('buah') ?></label>
            <input type="text" class="form-control" name="buah" id="buah" placeholder="Buah" value="<?php echo $buah; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Umbi-umbian <?php echo form_error('umbi-umbian') ?></label>
            <input type="text" class="form-control" name="umbi-umbian" id="umbi-umbian" placeholder="Umbi-umbian" value="<?php echo $umbi-umbian; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Hewani <?php echo form_error('hewani') ?></label>
            <input type="text" class="form-control" name="hewani" id="hewani" placeholder="Hewani" value="<?php echo $hewani; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kacang-kacangan <?php echo form_error('kacang-kacangan') ?></label>
            <input type="text" class="form-control" name="kacang-kacangan" id="kacang-kacangan" placeholder="Kacang-kacangan" value="<?php echo $kacang-kacangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Keluarga Id <?php echo form_error('keluarga_id') ?></label>
            <input type="text" class="form-control" name="keluarga_id" id="keluarga_id" placeholder="Keluarga Id" value="<?php echo $keluarga_id; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('survei') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>