<div class="row">
<!-- <div class="col-md-12">
<div class="alert alert-info alert-dismissible fade in" style="color: #67809F;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #2574A9;">&times;</a>
    <strong>Info!</strong> 
    <p>Jenis Pangan <strong id="notif_jenis"> </strong> pada Kecamatan <strong id="notif_kecamatan"> </strong> termasuk di bawah rata </p>
</div>
</div> -->
<div class="col-md-12 col-xs-12 ">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title">Grafik Pola Pangan Harapan Per Jenis</h4>
            <p class="category"></p>
        </div>
        <div class="card-content">
        <select class="form-control selectpicker" data-live-search="true" name="kec" id="kec" required>
            <option data-tokens="" value="">---- Pilih Kecamatan ----</option>
            <option data-tokens="" value="default">DEFAULT</option>
            <?php foreach ($kecamatan as $key) { ?>
                <option value="<?= $key->kec_id?>"><?= $key->kec_nama ?></option>
            <?php } ?>
        </select>
            <canvas id="chart_perjenis"></canvas>  
        </div>
    </div>
</div>
<script>
   
    var data_perjenis = <?php echo $per_jenis; ?>;
   
    var counter = 0;
    var notif_jenis = document.getElementById("notif_jenis");
    var notif_kecamatan = document.getElementById("notif_kecamatan");
    // var inst = setInterval(change, 5000);

    // function change() {
    //     notif_jenis.innerHTML = data_rata[counter].jenis_pangan;
    //     notif_kecamatan.innerHTML = data_rata[counter].kecamatan;
    //     counter++;
    //     if (counter >= data_rata.length) {
    //     counter = 0;
    //     }
    // }
    $('#kec').change(function(){
        if($(this).val() == 'default'){
            // window.location.replace  = "dashboard";
            window.location.href = "http://localhost/Polapangan/dashboard";
        }else{
            lastPath = window.location.pathname;
            if( typeof lastPath.split("/")[3] == 'undefined'){
                window.location.href = "dashboard/index/" + $(this).val();    
            }else{
                window.location.href =  $(this).val();
            }
            console.log(typeof lastPath.split("/")[3]);
            
        }
    })
</script>
<script src="<?= base_url() ?>assets/js/grafik-jenis.js"></script>
