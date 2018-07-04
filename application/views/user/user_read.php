<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Detail User</h4>
            <p class="category"><?= $nama ?></p>
        </div>
        <div class="card-content">
        <table class="table">
            <tr>
                <td>Nik</td>
                <td><?php echo $nik; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo $tempat_lahir; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo $tgl_lahir; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $jk; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><?php echo $agama; ?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td><?php echo $pendidikan; ?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><?php echo $pekerjaan; ?></td>
            </tr>
        </table>
        <div class="text-right">
            <a href="<?php echo site_url('user') ?>" class="btn btn-warning"><i class="material-icons">arrow_back</i> Back</a>
        </div>
        
        </div>
    </div>
</div>