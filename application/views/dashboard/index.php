<div class="row">
<div class="col-md-12">
<div class="alert alert-info alert-dismissible fade in" style="color: #67809F;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #2574A9;">&times;</a>
    <strong>Info!</strong> 
    <p>Jenis Pangan <strong id="notif_jenis"> </strong> pada Kecamatan <strong id="notif_kecamatan"> </strong> termasuk di bawah rata </p>
</div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Grafik Pola Pangan Harapan Pertahun</h4>
            <p class="category"></p>
        </div>
        <div class="card-content">
            <canvas id="chart_pertahub"></canvas>  
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Grafik Pola Pangan Harapan Perdaerah</h4>
            <p class="category"></p>
        </div>
        <div class="card-content">
            <canvas id="chart_perdaerah"></canvas>  
        </div>
    </div>
</div>
<div class="col-md-12 col-xs-12 ">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Grafik Pola Pangan Harapan Per Jenis</h4>
            <p class="category"></p>
        </div>
        <div class="card-content">
            <canvas id="chart_perjenis"></canvas>  
        </div>
    </div>
</div>
<script>
    var data_pertahun = <?php echo $per_tahun;?>;
    var data_perkecamatan= <?php echo $per_kec;?>;
    var data_perjenis = <?php echo $per_jenis; ?>;
    var data_rata = <?php echo $rata; ?>;
    var predic = <?php echo $predic; ?>;
    // console.log(data_rata);
    var counter = 0;
    var notif_jenis = document.getElementById("notif_jenis");
    var notif_kecamatan = document.getElementById("notif_kecamatan");
    var inst = setInterval(change, 5000);

    function change() {
        notif_jenis.innerHTML = data_rata[counter].jenis_pangan;
        notif_kecamatan.innerHTML = data_rata[counter].kecamatan;
        counter++;
        if (counter >= data_rata.length) {
        counter = 0;
        }
    }
</script>
<script src="<?= base_url() ?>assets/js/grafik-tahun.js"></script>
<script src="<?= base_url() ?>assets/js/grafik-daerah.js"></script>
<script src="<?= base_url() ?>assets/js/grafik-jenis.js"></script>
