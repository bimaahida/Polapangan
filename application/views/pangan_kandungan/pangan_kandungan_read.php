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
        <h2 style="margin-top:0px">Pangan_kandungan Read</h2>
        <table class="table">
	    <tr><td>Kadar</td><td><?php echo $kadar; ?></td></tr>
	    <tr><td>Kandungan Id</td><td><?php echo $kandungan_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pangan_kandungan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>