<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"><?php echo $button ?> Pangan</h4>
            <p class="category"><?= $id?></p>
        </div>
        <div class="card-content">
            <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label for="varchar">Pangan <?php echo form_error('pangan_id') ?></label>
                            <select class="form-control" name="pangan_id" id="pangan_id" >
                                <?php foreach ($pangan as $key) { ?>
                                    <option value="<?= $key->id?>" <?php if($pangan_id == $key->id ){echo 'selected';} ?>><?= $key->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group label-floating">
                                    <label for="double" >Urt <?php echo form_error('urt') ?></label>
                                    <input type="text" class="form-control" name="urt" id="urt" value="<?php echo $urt; ?>" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label id="urt_detail" style="margin-top: 45%;"></label>
                                </div>
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="varchar">Asal <?php echo form_error('asal') ?></label>
                                <select class="form-control" name="asal" id="asal" >
                                    <option value="Beli" <?php if($asal == 'Beli'){echo 'selected';} ?>>Beli</option>
                                    <option value="Pekarangan" <?php if($asal == 'Pekarangan'){echo 'selected';} ?>>Pekarangan</option>
                                    <option value="Di Beri" <?php if($asal == 'Di Beri'){echo 'selected';} ?>>Di Beri</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                <input type="hidden" name="pangan_keluarga_id" value="<?php echo $pangan_keluarga_id; ?>" /> 
                <button type="submit" class="btn btn-warning pull-right"><?php echo $button ?></button> 
                <a href="<?php echo site_url('detail_pangan_keluarga/list/'.$pangan_keluarga_id) ?>" class="btn btn-danger pull-right"><i class="material-icons">arrow_back</i> Batal</a>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#pangan_id').on('change', function() {
        $.get( "<?php echo base_url('Detail_pangan_keluarga/get_urt/');?>"+this.value, function( data ) {
            var encode_data = JSON.parse(data)
            // console.log(encode_data);
            $('#urt_detail').empty()
            $('#urt_detail').append(encode_data.takaran)
        });
    })
</script>