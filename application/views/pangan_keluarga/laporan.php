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
    <?php
    if (!empty($keluarga)) {
    ?>
    <table>
        <tr>
            <td>Nomer Kartu Keluarga</td>
            <td>:</td>
            <td><?= $keluarga[0]->no_keluarga ?></td>
        </tr>
        <tr>
            <td>Nama Kepala Keluarga </td>
            <td>:</td>
            <td><?= $keluarga[0]->kepala_keluarga ?></td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td>:</td>
            <td><?= $keluarga[0]->alamat ?></td>
        </tr>
        <tr>
            <td>Nama Pencatat</td>
            <td>:</td>
            <td><?= $keluarga[0]->penyuluh ?></td>
        </tr>
        <tr>
            <td>Desa/Kelurahan</td>
            <td>:</td>
            <td><?= $keluarga[0]->desa ?></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><?= $keluarga[0]->kec ?></td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td>:</td>
            <td><?= $keluarga[0]->kab ?></td>
        </tr>
    </table>
    <?php
    }
    ?>
    <br>
    <table class="table">
        <tr>
            <td rowspan="3">Tanggal Makan</td>
            <td rowspan="3">Waktu Makan</td>
            <td rowspan="3">Nama Makanan</td>
            <td colspan="4">Bahan</td>
            <td rowspan="3">Jumlah Yang makan(Orang)</td>
            <td rowspan="3">Rata - rata Orang(gram)</td>
        </tr>
        <tr>
            <td rowspan="2">Jenis</td>
            <td colspan="2">Banyak</td>
            <td rowspan="2">Asal</td>
        </tr>
        <tr>
            <td>Urt</td>
            <td>Gram</td>
        </tr>
        <?php
            foreach ($data as $key) {
        ?>
            <tr>
                <td><?= $key->tgl?></td>
                <td><?= $key->keterangan?></td>
                <td><?= $key->makanan?></td>
                <td><?= $key->jenis?></td>
                <td><?= $key->urt?></td>
                <td><?= $key->berat?></td>
                <td><?= $key->asal?></td>
                <td><?= $key->jumlah_pemakan?></td>
                <td><?= $key->rata_rata_berat?></td>
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