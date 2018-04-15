<div class="col-md-10">
<div class="card">
    <div class="card-header" data-background-color="orange">
        <h4 class="title">Edit Jenis Pangan</h4>
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
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
            <button type="submit" class="btn btn-warning pull-right"><?php echo $button ?></button> 
            <a href="<?php echo site_url('kandungan') ?>" class="btn btn-default pull-right">Cancel</a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
</div>