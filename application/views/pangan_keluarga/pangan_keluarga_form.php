<div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"><?php echo $button ?> Makanan & Minuman Keluarga</h4>
            <p class="category"><?= $nama?></p>
        </div>
        <div class="card-content">
            <form action="<?php echo $action; ?>" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="varchar"  class="control-label">Nama <?php echo form_error('nama') ?></label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>" required/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="date">Tgl <?php echo form_error('tgl') ?></label>
                            <input type="date" class="form-control" name="tgl" id="tgl" value="<?php echo $tgl; ?>" required/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label for="int" class="control-label">Jumlah Pemakan <?php echo form_error('jumlah_pemakan') ?></label>
                            <input type="text" class="form-control" name="jumlah_pemakan" id="jumlah_pemakan" value="<?php echo $jumlah_pemakan; ?>" required/>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
                            <select class="form-control" name="keterangan" id="keterangan" required>
                                <option value="Makan Pagi" <?php if($keterangan == 'Makan Pagi'){echo 'selected';} ?>>Makan Pagi</option>
                                <option value="Makan Siang" <?php if($keterangan == 'Makan Siang'){echo 'selected';} ?>>Makan Siang</option>
                                <option value="Makan Malam" <?php if($keterangan == 'Makan Malam'){echo 'selected';} ?>>Makan Malam</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                <input type="hidden" name="jumlah_pemakan_lama" value="<?php echo $jumlah_pemakan; ?>" /> 
                <input type="hidden" name="keluarga_id" value="<?php echo $keluarga_id; ?>" /> 
                <button type="submit" class="btn btn-warning pull-right"><?php echo $button ?></button> 
                <a href="<?php echo site_url('pangan_keluarga/data_pangan/'.$keluarga_id) ?>" class="btn btn-danger pull-right">Batal</a>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>