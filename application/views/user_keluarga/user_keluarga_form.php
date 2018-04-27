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
        <h2 style="margin-top:0px">User_keluarga <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">User Id <?php echo form_error('user_id') ?></label>
            <input type="text" class="form-control" name="user_id" id="user_id" placeholder="User Id" value="<?php echo $user_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Keluarga Id <?php echo form_error('keluarga_id') ?></label>
            <input type="text" class="form-control" name="keluarga_id" id="keluarga_id" placeholder="Keluarga Id" value="<?php echo $keluarga_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Hubungan <?php echo form_error('hubungan') ?></label>
            <input type="text" class="form-control" name="hubungan" id="hubungan" placeholder="Hubungan" value="<?php echo $hubungan; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('user_keluarga') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>