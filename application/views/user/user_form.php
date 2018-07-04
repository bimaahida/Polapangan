<div class="col-md-10">
<div class="card">
    <div class="card-header" data-background-color="orange">
        <h4 class="title"><?php echo $button ?> User</h4>
        <p class="category"><?= $nama?></p>
    </div>
    <div class="card-content">
        <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Nik <?php echo form_error('nik') ?></label>
                        <input type="text" class="form-control" name="nik" id="nik" value="<?php echo $nik; ?>" />
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Nama <?php echo form_error('nama') ?></label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>" />
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Tempat Lahir <?php echo form_error('tempat_lahir') ?></label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"  value="<?php echo $tempat_lahir; ?>" />
                    </div>
                    <div class="form-group label-floating">
                        <label for="date" >Tanggal Lahir <?php echo form_error('tgl_lahir') ?></label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir; ?>" />
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Jenis Kelamin <?php echo form_error('jk') ?></label>
                        <select class="form-control" name="jk" id="jk">
                            <option value="Pria" <?php if($jk == 'Pria') echo 'selected';?>>Pria</option>
                            <option value="Wanita" <?php if($jk == 'Wanita') echo 'selected';?>>Wanita</option>
                        </select>
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Agama <?php echo form_error('agama') ?></label>
                        <select class="form-control" name="agama" id="agama" >
                            <option value="Islam" <?php if($agama == 'Islam') echo 'selected';?>>Islam</option>
                            <option value="Kristen Protestan" <?php if($agama == 'Kristen Protestan') echo 'selected';?>>Kristen Protestan</option>
                            <option value="Katolik" <?php if($agama == 'Katolik') echo 'selected';?>>Katolik</option>
                            <option value="Hindu" <?php if($agama == 'Hindu') echo 'selected';?>>Hindu</option>
                            <option value="Buddha" <?php if($agama == 'Buddha') echo 'selected';?>>Buddha</option>
                            <option value="Kong Hu Cu" <?php if($agama == 'Kong Hu Cu') echo 'selected';?>>Kong Hu Cu</option>
                        </select>
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Pendidikan <?php echo form_error('pendidikan') ?></label>
                        <select class="form-control" name="pendidikan" id="pendidikan">
                            <option value="TIDAK / BELUM SEKOLAH" <?php if($pendidikan == 'TIDAK / BELUM SEKOLAH') echo 'selected';?>>TIDAK / BELUM SEKOLAH</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT" <?php if($pendidikan == 'BELUM TAMAT SD/SEDERAJAT') echo 'selected';?>>BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="TAMAT SD / SEDERAJAT" <?php if($pendidikan == 'TAMAT SD / SEDERAJAT') echo 'selected';?>>TAMAT SD / SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT" <?php if($pendidikan == 'SLTP/SEDERAJAT') echo 'selected';?>>SLTP/SEDERAJAT</option>
                            <option value="SLTA / SEDERAJAT" <?php if($pendidikan == 'SLTA / SEDERAJAT') echo 'selected';?>>SLTA / SEDERAJAT</option>
                            <option value="DIPLOMA I / II" <?php if($pendidikan == 'DIPLOMA I / II') echo 'selected';?>>DIPLOMA I / II</option>
                            <option value="AKADEMI/ DIPLOMA III/S. MUDA" <?php if($jk == 'AKADEMI/ DIPLOMA III/S. MUDA') echo 'selected';?>>AKADEMI/ DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II" <?php if($pendidikan == 'STRATA II') echo 'selected';?>>STRATA II</option>
                            <option value="STRATA III" <?php if($pendidikan == 'STRATA III') echo 'selected';?>>STRATA III</option>
                        </select>
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan; ?>" />
                    </div>
                    <?php if ($this->session->userdata('auth')['status'] == 1) { ?>
                        <div class="form-group label-floating">
                            <label for="int">Status<?php echo form_error('status_id') ?></label>
                            <select name="status_id" id="status_id"  class="form-control" >
                                <option value="1" <?php if ($status_id == 1) echo 'selected'; ?>>ADMIN</option>
                                <option value="2" <?php if ($status_id == 2) echo 'selected'; ?>>PENYULUH</option>
                            </select>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
            <?php if ($button == 'Update' && $this->session->userdata('auth')['status'] != 1) { ?>
                <input type="hidden" name="status_id" value="<?php echo $status_id; ?>" /> 
            <?php } ?>
            <button type="submit" class="btn btn-warning pull-right"><?php echo $button ?></button> 
            <a href="<?php echo site_url('user') ?>" class="btn btn-default pull-right">Cancel</a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
</div>