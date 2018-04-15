<div class="col-md-10">
<div class="card">
    <div class="card-header" data-background-color="orange">
        <h4 class="title">Detail Kandungan</h4>
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
        <a href="<?php echo site_url('kandungan') ?>" class="btn btn-warning">Cancel</a>
    </div>
    
    </div>
</div>
</div>