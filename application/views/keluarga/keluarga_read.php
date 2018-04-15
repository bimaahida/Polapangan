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
        <h2 style="margin-top:0px">Keluarga Read</h2>
        <table class="table">
	    <tr><td>No Keluarga</td><td><?php echo $no_keluarga; ?></td></tr>
	    <tr><td>Kepala Keluarga</td><td><?php echo $kepala_keluarga; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Provinsi</td><td><?php echo $provinsi; ?></td></tr>
	    <tr><td>Kab</td><td><?php echo $kab; ?></td></tr>
	    <tr><td>Kec</td><td><?php echo $kec; ?></td></tr>
	    <tr><td>Desa</td><td><?php echo $desa; ?></td></tr>
	    <tr><td>Rt</td><td><?php echo $rt; ?></td></tr>
	    <tr><td>Rw</td><td><?php echo $rw; ?></td></tr>
	    <tr><td>Kode Pos</td><td><?php echo $kode_pos; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('keluarga') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>