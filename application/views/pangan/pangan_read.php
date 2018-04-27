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
        <h2 style="margin-top:0px">Pangan Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Takaran</td><td><?php echo $takaran; ?></td></tr>
	    <tr><td>Urt</td><td><?php echo $urt; ?></td></tr>
	    <tr><td>Gram</td><td><?php echo $gram; ?></td></tr>
	    <tr><td>Kalori</td><td><?php echo $kalori; ?></td></tr>
	    <tr><td>Lemak</td><td><?php echo $lemak; ?></td></tr>
	    <tr><td>Karbohidrat</td><td><?php echo $karbohidrat; ?></td></tr>
	    <tr><td>Protein</td><td><?php echo $protein; ?></td></tr>
	    <tr><td>Jenis Pangan Id</td><td><?php echo $jenis_pangan_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pangan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>