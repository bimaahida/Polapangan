<?php echo $map['js']; ?>

<div class="col-md-10">
<div class="card">
    <div class="card-header" data-background-color="orange">
        <h4 class="title">Detail Keluarga</h4>
        <p class="category"><?= $kepala_keluarga ?></p>
    </div>
    <div class="card-content">
    <table class="table">
        <tr>
            <td>No Keluarga</td>
            <td><?php echo $no_keluarga; ?></td>
        </tr>
        <tr>
            <td>Kepala Keluarga</td>
            <td><?php echo $kepala_keluarga; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td><?php echo $provinsi; ?></td>
        </tr>
        <tr>
            <td>Kab</td>
            <td><?php echo $kab; ?></td>
        </tr>
        <tr>
            <td>Kec</td>
            <td><?php echo $kec; ?></td>
        </tr>
        <tr>
            <td>Desa</td>
            <td><?php echo $desa; ?></td>
        </tr>
        <tr>
            <td>Rt</td>
            <td><?php echo $rt; ?></td>
        </tr>
        <tr>
            <td>Rw</td>
            <td><?php echo $rw; ?></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td><?php echo $kode_pos; ?></td>
        </tr>
        <tr>
            <?php echo $map['html']; ?>
        </tr>
    </table>
    <div class="text-right">
        <a href="<?php echo site_url('keluarga') ?>" class="btn btn-warning">Cancel</a>
    </div>
    
    </div>
</div>
</div>