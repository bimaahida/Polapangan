<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"><?php echo $button ?> Pola Pangan Harapan Per-tahun</h4>
            <p class="category"><?= $id?></p>
        </div>
        <div class="card-content">
            <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label for="varchar">Tahun</label>
                            <select class="form-control" name="tahun" id="tahun" >
                                <?php for ($i=2019; $i <2025 ; $i++) { 
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label for="varchar">Kecamatan</label>
                            <select class="form-control" name="kec" id="kec" >
                            <option value="all">SEMUA</option>
                                <?php foreach ($kecamatan as $value) {
                                    echo '<option value="'.$value->kec_id.'">'.$value->kec_nama.'</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"><i class="material-icons">search</i><?php echo $button ?></button> 
                <a href="<?php echo site_url('detail_pangan_keluarga/list/') ?>" class="btn btn-danger pull-right">Batal</a>
                <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>