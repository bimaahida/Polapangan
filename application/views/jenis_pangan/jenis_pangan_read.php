<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title">Detail Jenis Pangan</h4>
            <p class="category"><?= $nama ?></p>
        </div>
        <div class="card-content">
        <table class="table">
	        <tr>
                <td>Nama</td>
                <td><?php echo $nama; ?></td>
            </tr>
        </table>
        <div class="text-right">
            <a href="<?php echo site_url('jenis_pangan') ?>" class="btn btn-warning"><i class="material-icons">arrow_back</i>Batal</a>
        </div>
        
        </div>
    </div>
</div>