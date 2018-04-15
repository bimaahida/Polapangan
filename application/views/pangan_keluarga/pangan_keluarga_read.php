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
        <h2 style="margin-top:0px">Pangan_keluarga Read</h2>
        <table class="table">
	    <tr><td>Tgl</td><td><?php echo $tgl; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td>Keluarga Id</td><td><?php echo $keluarga_id; ?></td></tr>
	    <tr><td>Pangan Id</td><td><?php echo $pangan_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pangan_keluarga') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>