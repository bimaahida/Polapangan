<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"><?php echo $button ?> Survei</h4>
            <p class="category"><?= $keluarga?></p>
        </div>
        <div class="card-content">
            <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="int" >Keluarga<?php echo form_error('keluarga_id') ?></label>
                            <input type="text" class="form-control" name="keluarga" id="keluarga" value="<?php echo $keluarga; ?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="int">Berapa kali sayur dan olahannya dikonsumsi oleh keluarga dalam 5 hari?  <?php echo form_error('sayur') ?></label>
                            <div class="radio">
                              <label><input type="radio" name="sayur" id="sayur" value="1" <?php if($sayur == 1){echo 'checked';}?>>< 3 Kali</label>
                              <label><input type="radio" name="sayur" id="sayur" value="2" <?php if($sayur == 2){echo 'checked';}?>>2 - 3 Kali</label>
                              <label><input type="radio" name="sayur" id="sayur" value="3" <?php if($sayur == 3){echo 'checked';}?>>6 - 10 Kali</label>
                              <label><input type="radio" name="sayur" id="sayur" value="4" <?php if($sayur == 4){echo 'checked';}?>>> 10 Kali</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="int">Berapa kali buah dan olahannya dikonsumsi oleh keluarga dalam 5 hari? <?php echo form_error('buah') ?></label>
                            <div class="radio">
                              <label><input type="radio" name="buah" id="buah" value="1" <?php if($buah == 1){echo 'checked';}?>>< 3 Kali</label>
                              <label><input type="radio" name="buah" id="buah" value="2" <?php if($buah == 2){echo 'checked';}?>>2 - 3 Kali</label>
                              <label><input type="radio" name="buah" id="buah" value="3" <?php if($buah == 3){echo 'checked';}?>>6 - 10 Kali</label>
                              <label><input type="radio" name="buah" id="buah" value="4" <?php if($buah == 4){echo 'checked';}?>>> 10 Kali</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="int">Berapa kali umbi-umbian dan olahannya dikonsumsi oleh keluarga dalam 5 hari baik sebagai makanan pokok atau selingan?  <?php echo form_error('umbi') ?></label>
                            <div class="radio">
                              <label><input type="radio" name="umbi" id="umbi" value="1" <?php if($umbi == 1){echo 'checked';}?>>< 3 Kali</label>
                              <label><input type="radio" name="umbi" id="umbi" value="2" <?php if($umbi == 2){echo 'checked';}?>>2 - 3 Kali</label>
                              <label><input type="radio" name="umbi" id="umbi" value="3" <?php if($umbi == 3){echo 'checked';}?>>6 - 10 Kali</label>
                              <label><input type="radio" name="umbi" id="umbi" value="4" <?php if($umbi == 4){echo 'checked';}?>>> 10 Kali</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="int">Berapa kali pangan hewani dan olahannya dikonsumsi oleh keluarga dalam 5 hari?  <?php echo form_error('hewani') ?></label>
                            <div class="radio">
                              <label><input type="radio" name="hewani" id="hewani" value="1" <?php if($hewani == 1){echo 'checked';}?>>< 3 Kali</label>
                              <label><input type="radio" name="hewani" id="hewani" value="2" <?php if($hewani == 2){echo 'checked';}?>>2 - 3 Kali</label>
                              <label><input type="radio" name="hewani" id="hewani" value="3" <?php if($hewani == 3){echo 'checked';}?>>6 - 10 Kali</label>
                              <label><input type="radio" name="hewani" id="hewani" value="4" <?php if($hewani == 4){echo 'checked';}?>>> 10 Kali</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="int">Berapa kali kacang-kacangan dan olahannya dikonsumsi oleh keluarga dalam 5 hari?  <?php echo form_error('kacang') ?></label>
                            <div class="radio">
                              <label><input type="radio" name="kacang" id="kacang" value="1" <?php if($kacang == 1){echo 'checked';}?>>< 3 Kali</label>
                              <label><input type="radio" name="kacang" id="kacang" value="2" <?php if($kacang == 2){echo 'checked';}?>>2 - 3 Kali</label>
                              <label><input type="radio" name="kacang" id="kacang" value="3" <?php if($kacang == 3){echo 'checked';}?>>6 - 10 Kali</label>
                              <label><input type="radio" name="kacang" id="kacang" value="4" <?php if($kacang == 4){echo 'checked';}?>>> 10 Kali</label>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                <input type="hidden" name="keluarga_id" id="keluarga_id" value="<?php echo $keluarga_id; ?>" /> 
                <button type="submit" class="btn btn-warning pull-right"><?php echo $button ?></button> 
                <a href="<?php echo site_url('jenis_pangan') ?>" class="btn btn-default pull-right">Cancel</a>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<script>
 $(document).ready(function(){
    $( "#keluarga" ).autocomplete({
        minLength:2,
        source: "<?php echo site_url('survei/getKeluargaAutoComplate/?');?>",
        select:function(event, ui){
            event.preventDefault();
            $("#keluarga").val(ui.item.label);
            $("#keluarga_id").val(ui.item.value);
        },
        focus: function(event, ui) {
            event.preventDefault();
            $("#keluarga").val(ui.item.label);
        }
    });
});
</script>
