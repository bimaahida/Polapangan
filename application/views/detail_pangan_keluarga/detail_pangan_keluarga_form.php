<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"><?php echo $button ?> Detail Makanan / Minuman</h4>
            <p class="category"><?= $id?></p>
        </div>
        <div class="card-content">
            <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label for="varchar">Pangan <?php echo form_error('pangan_id') ?></label>
                            <input type="text" class="form-control" name="pangan" id="pangan" value="<?=$pangan?>"  placeholder="---- Pilih Jenis Pangan ----" required/>
                            <!-- <select class="form-control" name="pangan_id" id="pangan_id" required>
                                <option value="">---- Pilih Jenis Pangan ----</option>
                                <?php foreach ($pangan as $key) { ?>
                                    <option value="<?= $key->id?>" <?php if($pangan_id == $key->id ){echo 'selected';} ?>><?= $key->nama ?></option>
                                <?php } ?>
                            </select> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group label-floating">
                                    <label for="double" >Urt <?php echo form_error('urt') ?></label>
                                    <input type="number" class="form-control" name="urt" id="urt" value="<?php echo $urt; ?>" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label id="urt_detail" style="font-size: 20px; color: black;font-weight: bold;"></label>
                                </div>
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label for="varchar">Asal <?php echo form_error('asal') ?></label>
                                <select class="form-control" name="asal" id="asal" required>
                                    <option value="Beli" <?php if($asal == 'Beli'){echo 'selected';} ?>>Beli</option>
                                    <option value="Pekarangan" <?php if($asal == 'Pekarangan'){echo 'selected';} ?>>Pekarangan</option>
                                    <option value="Di Beri" <?php if($asal == 'Di Beri'){echo 'selected';} ?>>Di Beri</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                <input type="hidden" name="pangan_id" id="pangan_id" value="<?php echo $pangan_id; ?>" /> 
                <input type="hidden" name="pangan_keluarga_id" value="<?php echo $pangan_keluarga_id; ?>" /> 
                <input type="hidden" name="id_pangan" value="<?php echo $this->uri->segment(4); ?>" /> 
                <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button> 
                <a href="<?php echo site_url('detail_pangan_keluarga/detail_pangan/'.$pangan_keluarga_id.'/'.$this->uri->segment(4)) ?>" class="btn btn-danger pull-right"><i class="material-icons">arrow_back</i> Batal</a>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#pangan').autocomplete({
            source: "<?php echo base_url('pangan/get_autocomplate');?>",
            select: function (event, ui) {
                $('#pangan').val(ui.item.label); 
                $('#pangan_id').val(ui.item.id); 
                $.get( "<?php echo base_url('Detail_pangan_keluarga/get_urt/');?>"+ui.item.id, function( data ) {
                var encode_data = JSON.parse(data)
                // console.log(encode_data);
                $('#urt_detail').empty()
                $('#urt_detail').append(encode_data.takaran)
            });
            }
        });

    });
</script>