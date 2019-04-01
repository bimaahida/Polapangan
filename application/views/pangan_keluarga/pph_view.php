<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title">DAFTAR KONSUMSI PANGAN RUMAH TANGGA TAHUN <?= $tahun?></h4>
        </div>
        <div class="card-content table-responsive">
        <table class="table" id="mytable">
            <thead class="text-primary">
                <tr>
                    <td>No</td>
                    <td>Kelompok Pangan</td>
                    <td>Energi Aktual</td>
                    <td>% Aktual</td>
                    <td>% AKE</td>
                    <td>Bobot</td>
                    <td>Skor Aktual</td>
                    <td>Skor AKE</td>
                    <td>Maks Skor</td>
                    <td>Skor PPH</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                    foreach ($data as $key) {
                ?>
                    <tr>
                        <td><?= $no?></td>
                        <td><?= $key->jenis_pangan?></td>
                        <td><?= round($key->EA,2)?></td>
                        <td><?= round($key->EA_porsen,2)?></td>
                        <td><?= round($key->AKE,2)?></td>
                        <td><?= round($key->bobot,2)?></td>
                        <td><?= round($key->sekor_aktual,2)?></td>
                        <td><?= round($key->skor_ake,2)?></td>
                        <td><?= round($key->skor_max,2)?></td>   
                        <td><?php if ($key->skor_max < $key->skor_ake) { echo round($key->skor_max,2); } else { echo round($key->skor_ake,2); }   ?></td>
                    </tr>
                <?php
                    $no++;}
                ?>
            </tbody>
        </table>
    
    <div class="col-md-12 text-right">
        <a class="btn btn-success" href="<?php echo site_url('Detail_pangan_keluarga/index/'.$tahun ) ?>" target="_blank">Print</a>
        <?php echo anchor(site_url('Detail_pangan_keluarga/excel/'.$tahun), '<i class="material-icons">cloud_download</i> Excel', 'class="btn btn-info"'); ?>
    </div>
    </div>
</div>