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
            <td></td>
        </tr>
        <tr>
            <td>Nama Kepala Keluarga </td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td>Nama Pencatat</td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td>Desa/Kelurahan</td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td>:</td>
            <td></td>
        </tr>
    </table>
    <?php
    }
    ?>
    <br>
    <table class="table">
        <tr>
            <td colspan="2">Asal Dibeli</td>
            <td colspan="2">Asal Diberi</td>
            <td colspan="2">Asal Pekarangan</td>
        </tr>
        <tr>
            <td>Bahan Pangan</td>
            <td>Jumlah ( Gram )</td>
            <td>Bahan Pangan</td>
            <td>Jumlah ( Gram )</td>
            <td>Bahan Pangan</td>
            <td>Jumlah ( Gram )</td>
        </tr>
        <?php
        for ($i=0; $i < $length ; $i++) { 
            ?>
            <tr>
            <?php
            if (count($data['beli']) > $i) {
                ?>
                <td><?= $data['beli'][$i]->nama?></td>
                <td><?= $data['beli'][$i]->berat?></td>
                <?php
            }else{
                ?>
                <td></td>
                <td></td>
                <?php
            }
            if (count($data['diberi']) > $i) {
                ?>
                <td><?= $data['diberi'][$i]->nama?></td>
                <td><?= $data['diberi'][$i]->berat?></td>
                <?php
            }else{
                ?>
                <td></td>
                <td></td>
                <?php
            }
            if (count($data['pekarangan']) > $i) {
                ?>
                <td><?= $data['pekarangan'][$i]->nama?></td>
                <td><?= $data['pekarangan'][$i]->berat?></td>
                <?php
            }else{
                ?>
                <td></td>
                <td></td>
                <?php
            }
            ?>
            </tr>
            <?php
        }
    ?>
    </table>
</body>
</html>
<!-- <script>
    window.onload = function() {
        window.print();
    };
</script> -->