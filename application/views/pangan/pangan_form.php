<div class="col-md-10">
<div class="card">
    <div class="card-header" data-background-color="orange">
        <h4 class="title"><?php echo $button ?> Pangan</h4>
        <p class="category"><?= $nama?></p>
    </div>
    <div class="card-content">
        <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Nama <?php echo form_error('nama') ?></label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>" />
                    </div>
                    <div class="form-group label-floating">
                        <label for="int" class="control-label">Jenis Pangan Id <?php echo form_error('jenis_pangan_id') ?></label>
                        <input type="text" class="form-control" name="jenis_pangan" id="jenis_pangan" value="<?php echo $jenis_pangan; ?>" />
                    </div>
                    
                </div>
            </div>
            <input type="hidden" name="jenis_pangan_id" id="jenis_pangan_id" value="<?php echo $jenis_pangan_id; ?>" /> 
            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
            <button type="submit" class="btn btn-warning pull-right"><?php echo $button ?></button> 
            <a href="<?php echo site_url('pangan') ?>" class="btn btn-default pull-right">Cancel</a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $( "#jenis_pangan" ).autocomplete({
            minLength:2,
            source: "<?php echo site_url('pangan/getJenisAutoComplate/?');?>",
            select:function(event, ui){
                event.preventDefault();
                $("#jenis_pangan").val(ui.item.label);
                $("#jenis_pangan_id").val(ui.item.value);
            },
            focus: function(event, ui) {
                event.preventDefault();
                $("#jenis_pangan").val(ui.item.label);
            }
        });
    });
</script>