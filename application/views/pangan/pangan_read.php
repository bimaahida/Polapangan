<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Detail Pangan</h4>
            <p class="category"><?= $nama ?></p>
        </div>
        <div class="card-content">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Takaran</td>
                <td><?php echo $takaran; ?></td>
            </tr>
            <tr>
                <td>Ukuran Rumah Tangga</td>
                <td><?php echo $urt; ?></td>
            </tr>
            <tr>
                <td>Berat</td>
                <td><?php echo $gram; ?> grm</td>
            </tr>
            <tr>
                <td>Kalori</td>
                <td><?php echo $kalori; ?></td>
            </tr>
            <tr>
                <td>Lemak</td>
                <td><?php echo $lemak; ?></td>
            </tr>
            <tr>
                <td>Karbohidrat</td>
                <td><?php echo $karbohidrat; ?></td>
            </tr>
            <tr>
                <td>Protein</td>
                <td><?php echo $protein; ?></td>
            </tr>
            <tr>
                <td>Jenis Pangan</td>
                <td><?php echo $jenis_pangan; ?></td>
            </tr>
        </table>
        <div class="text-right">
            <a href="<?php echo site_url('pangan') ?>" class="btn btn-warning">Cancel</a>
        </div>
        
        </div>
    </div>
</div>