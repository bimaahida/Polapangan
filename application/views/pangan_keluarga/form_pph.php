<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"><?php echo $button ?> Pangan</h4>
            <p class="category"><?= $id?></p>
        </div>
        <div class="card-content">
            <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label for="varchar">Tahun</label>
                            <select class="form-control" name="tahun" id="tahun" >
                                <?php for ($i=2015; $i <2025 ; $i++) { 
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning pull-right"><i class="material-icons">search</i><?php echo $button ?></button> 
                <a href="<?php echo site_url('detail_pangan_keluarga/list/') ?>" class="btn btn-danger pull-right">Batal</a>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>