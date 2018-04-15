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
        <h2 style="margin-top:0px">Pangan_kandungan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="double">Kadar <?php echo form_error('kadar') ?></label>
            <input type="text" class="form-control" name="kadar" id="kadar" placeholder="Kadar" value="<?php echo $kadar; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kandungan Id <?php echo form_error('kandungan_id') ?></label>
            <input type="text" class="form-control" name="kandungan_id" id="kandungan_id" placeholder="Kandungan Id" value="<?php echo $kandungan_id; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pangan_kandungan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>