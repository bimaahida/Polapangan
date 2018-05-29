<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Konsumsi Pangan Rumah Tangga</title>
    <style>
    .table {
        border: 1px solid black;
        border-collapse: collapse;
    }
    .table tr {
        border: 1px solid black;
        border-collapse: collapse; 
    }
    .table td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    .table th, .table td {
        padding: 5px;
        text-align: center;    
    }
    .title {
        text-align: center;
    }
    </style>
</head>
<body>
    <h3 class="title">DAFTAR KONSUMSI PANGAN RUMAH TANGGA </h3>
    <table class="table">
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
            }
        ?>
    </table>
</body>
</html>
<script>
    window.onload = function() {
        window.print();
    };
</script>