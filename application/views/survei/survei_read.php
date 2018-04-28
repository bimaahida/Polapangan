<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Detail Survei</h4>
            <p class="category"><?= $keluarga_id ?></p>
        </div>
        <div class="card-content">
        <table class="table">
            <tr>
                <td>Sayur</td>
                <td><?php echo $sayur; ?></td>
            </tr>
            <tr>
                <td>Buah</td>
                <td><?php echo $buah; ?></td>
            </tr>
            <tr>
                <td>Umbi</td><td>
                <?php echo $umbi; ?></td>
            </tr>
            <tr>
                <td>Hewani</td>
                <td><?php echo $hewani; ?></td>
            </tr>
            <tr>
                <td>Kacang</td>
                <td><?php echo $kacang; ?></td>
            </tr>
        </table>
        <div class="text-right">
            <a href="<?php echo site_url('survei') ?>" class="btn btn-warning">Cancel</a>
        </div>
        
        </div>
    </div>
</div>