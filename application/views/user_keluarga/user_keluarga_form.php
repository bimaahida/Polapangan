<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"><?php echo $button ?> Anggota Keluarga</h4>
            <p class="category"></p>
        </div>
        <div class="card-content">
            <form action="<?php echo $action; ?>" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="int" class="control-label">User<?php echo form_error('user_id')?></label>
                            <input type="text" class="form-control" name="user" id="user"/>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                        <label for="varchar">Hubungan <?php echo form_error('hubungan') ?></label>
                        <select name="hubungan" id="hubungan" class="form-control" >
                            <option value="Suami">Suami</option>
                            <option value="Istri">Istri</option>
                            <option value="Anak">Anak</option>
                        </select>
                        </div>
                    </div>
                </div> -->
                <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
                <input type="hidden" name="keluarga_id" id="keluarga_id" value="<?php echo $keluarga_id; ?>" />
                <button type="submit" class="btn btn-warning pull-right"><?php echo $button ?></button> 
                <a href="<?php echo site_url('user_keluarga') ?>" class="btn btn-danger pull-right"><i class="material-icons">arrow_back</i> Batal</a>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#user').autocomplete({
            source: "<?php echo base_url('user_keluarga/get_autocomplete');?>",
            select: function (event, ui) {
                $('#user').val(ui.item.label); 
                $('#user_id').val(ui.item.id); 
            }
        });

    });
</script>