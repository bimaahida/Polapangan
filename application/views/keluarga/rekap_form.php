<div class="col-md-10">
<div class="card">
    <div class="card-header" data-background-color="green">
        <h4 class="title"><?php echo $button ?> Keluarga</h4>
    </div>
    <div class="card-content">
        <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label for="varchar">Tanggal</label>
                        <input type="date" class="form-control" name="tgl" id="tgl" required/>
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Desa</label>
                        <select name="desa" id="desa" class="form-control">
                            <?php
                                foreach ($desa as $key) {
                            ?>
                                <option value="<?= $key->desa ?>"><?= $key->desa ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button> 
            <a href="<?php echo site_url('keluarga') ?>" class="btn btn-default pull-right">Cancel</a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
</div>