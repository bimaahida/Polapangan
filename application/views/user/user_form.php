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
        <h2 style="margin-top:0px">User <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempat_lahir') ?></label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jk <?php echo form_error('jk') ?></label>
            <input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" value="<?php echo $jk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Agama <?php echo form_error('agama') ?></label>
            <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pendidikan <?php echo form_error('pendidikan') ?></label>
            <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan" value="<?php echo $pendidikan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Status Id <?php echo form_error('status_id') ?></label>
            <input type="text" class="form-control" name="status_id" id="status_id" placeholder="Status Id" value="<?php echo $status_id; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>