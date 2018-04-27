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
        <h2 style="margin-top:0px">Survei Read</h2>
        <table class="table">
	    <tr><td>Sayur</td><td><?php echo $sayur; ?></td></tr>
	    <tr><td>Buah</td><td><?php echo $buah; ?></td></tr>
	    <tr><td>Umbi-umbian</td><td><?php echo $umbi-umbian; ?></td></tr>
	    <tr><td>Hewani</td><td><?php echo $hewani; ?></td></tr>
	    <tr><td>Kacang-kacangan</td><td><?php echo $kacang-kacangan; ?></td></tr>
	    <tr><td>Keluarga Id</td><td><?php echo $keluarga_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('survei') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>