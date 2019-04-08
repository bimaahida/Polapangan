<div class="col-md-10">
<div class="card">
    <div class="card-header" data-background-color="green">
        <h4 class="title"><?php echo $button ?> Keluarga</h4>
        <p class="category"><?= $kepala_keluarga?></p>
    </div>
    <div class="card-content">
        <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="form-group label-floating">
                        <label for="varchar" class="control-label">No Keluarga <?php echo form_error('no_keluarga') ?></label>
                        <input type="text" class="form-control" name="no_keluarga" id="no_keluarga" value="<?php echo $no_keluarga; ?>" />
                    </div> -->
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Kepala Keluarga <?php echo form_error('kepala_keluarga') ?></label>
                        <input type="text" class="form-control" name="kepala_keluarga" id="kepala_keluarga" value="<?php echo $kepala_keluarga; ?>" required/>
                    </div>
                    <!-- <div class="form-group ">
                        <label for="varchar" class="control-label">Alamat <?php echo form_error('alamat') ?></label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat; ?>" onFocus="geolocate()"/>
                    </div> -->
                    <!-- <div class="form-group ">
                        <label for="varchar" class="control-label">Provinsi <?php echo form_error('provinsi') ?></label>
                        <input type="text" class="form-control" name="provinsi" id="provinsi"  value="<?php echo $provinsi; ?>" />
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Kabupaten / Kota <?php echo form_error('kab') ?></label>
                        <input type="text" class="form-control" name="kab" id="kab"  value="<?php echo $kab; ?>" />
                    </div> -->
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Kecamatan <?php echo form_error('kec') ?></label>
                        <select class="form-control selectpicker" data-live-search="true" name="kec" id="kec" required>
                            <option data-tokens="" value="">---- Pilih Kecamatan ----</option>
                            <?php foreach ($kecamatan as $key) { ?>
                                <option value="<?= $key->kec_id?>" <?php if($kec == $key->kec_id ){echo 'selected';} ?>><?= $key->kec_nama ?></option>
                            <?php } ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="kec" id="kec"  value="<?php echo $kec; ?>" required/> -->
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Desa <?php echo form_error('desa') ?></label>
                        <select class="form-control selectpicker" data-live-search="true" name="desa" id="desa" required>
                            <option data-tokens="" value="">---- Pilih Desa ----</option>
                            <?php if($button == 'Perbarui' && count($desa_data) > 0){ ?>
                                <option value="<?= $desa_data->id_desa?>" selected><?= $desa_data->nama_desa ?></option>
                            <?php } ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="desa" id="desa"  value="<?php echo $desa; ?>" required/> -->
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Jumlah Keluarga <?php echo form_error('jumlah_anggota') ?></label>
                        <input type="number" class="form-control" name="jumlah_anggota" id="jumlah_anggota"  value="<?php echo $jumlah_anggota; ?>" required/>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="varchar" class="control-label">RT <?php echo form_error('rt') ?></label>
                                <input type="text" class="form-control" name="rt" id="rt" value="<?php echo $rt; ?>" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="varchar" class="control-label">RW <?php echo form_error('rw') ?></label>
                                <input type="text" class="form-control" name="rw" id="rw" value="<?php echo $rw; ?>" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label for="varchar" class="control-label">Kode Pos <?php echo form_error('kode_pos') ?></label>
                                <input type="text" class="form-control" name="kode_pos" id="kode_pos"  value="<?php echo $kode_pos; ?>" />
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="varchar" class="control-label">Minimal Pendapatan <?php echo form_error('min_gaji') ?></label>
                                <input type="number" class="form-control" name="min_gaji" id="min_gaji" value="<?php echo $min_gaji; ?>" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="varchar" class="control-label">Maksimal Pendapatan <?php echo form_error('max_gaji') ?></label>
                                <input type="number" class="form-control" name="max_gaji" id="max_gaji" value="<?php echo $max_gaji; ?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="varchar" class="control-label">Minimal Pengeluaran <?php echo form_error('min_pengeluaran') ?></label>
                                <input type="number" class="form-control" name="min_pengeluaran" id="min_pengeluaran" value="<?php echo $min_pengeluaran; ?>" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="varchar" class="control-label">Maksimal Pengeluaran <?php echo form_error('max_pengeluaran') ?></label>
                                <input type="number" class="form-control" name="max_pengeluaran" id="max_pengeluaran" value="<?php echo $max_pengeluaran; ?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Responden</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="baru_menikah" id="baru_menikah"  value="1" <?php if($baru_menikah == 1){ echo 'checked';} ?>/>Pasangan Baru Menikah</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="hamil" id="hamil"  value="1" <?php if($hamil == 1){ echo 'checked';} ?>/> Ibu Hamil</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="menyusui" id="menyusui"  value="1" <?php if($menyusui == 1){ echo 'checked';} ?>/> Ibu Menyusui</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="stunting" id="stunting"  value="1" <?php if($stunting == 1){ echo 'checked';} ?>/> Stunting</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <input type="hidden" name="longitude" id="longitude"  value="<?php echo $longitude; ?>" /> -->
            <input type="hidden" name="kepala_id" id="kepala_id"/>
            <!-- <input type="hidden" name="latitude"  id="latitude" value="<?php echo $latitude; ?>" /> -->
            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
            <input type="hidden" name="penyuluh_id" value="<?php echo $penyuluh_id; ?>" /> 
            <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button> 
            <a href="<?php echo site_url('keluarga') ?>" class="btn btn-danger pull-right"><i class="material-icons">arrow_back</i> Batal</a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        // $('#desa').prop('disabled', true);
        $('#kec').on('change', function() {
            $("#desa option").remove();
            $.get( "<?php echo base_url('desa/get_by_kecamatan/');?>"+this.value, function( data ) {
                var encode_data = JSON.parse(data)
                $.each(encode_data, function(key,val) {
                    var newOption = new Option(val.nama_desa, val.id_desa, false, false);
                    $('#desa').append(newOption);
                    $("#desa").selectpicker("refresh");
                    console.log(newOption);
                    
                });
                console.log(encode_data); 
            })
        });
    });
</script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmBY0nTDRelXLlNUei_0SVEuogGzhQrvE&libraries=places&callback=initAutocomplete" async defer></script> -->
<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    //   var placeSearch, autocomplete;
    //   var componentForm = {
    //     provinsi: 'long_name',
    //     locality: 'long_name',
    //     administrative_area_level_1: 'short_name',
    //     country: 'long_name',
    //     postal_code: 'short_name'
    //   };

    //   function initAutocomplete() {
    //     // Create the autocomplete object, restricting the search to geographical
    //     // location types.
    //     autocomplete = new google.maps.places.Autocomplete(
    //         /** @type {!HTMLInputElement} */(document.getElementById('alamat')),
    //         {types: ['geocode']});

    //     // When the user selects an address from the dropdown, populate the address
    //     // fields in the form.
    //     autocomplete.addListener('place_changed', fillInAddress);
    //   }

    //   function fillInAddress() {
    //     // Get the place details from the autocomplete object.
    //     var place = autocomplete.getPlace();

    //     console.log(place.address_components);
    //     document.getElementById('provinsi').value = place.address_components[5]['long_name'];
    //     document.getElementById('kab').value = place.address_components[4]['long_name'];
    //     document.getElementById('kec').value = place.address_components[3]['long_name'];
    //     document.getElementById('desa').value = place.address_components[2]['long_name'];
    //     document.getElementById('kode_pos').value = place.address_components[7]['short_name'];
    //   }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
    //   function geolocate() {
    //     if (navigator.geolocation) {
    //       navigator.geolocation.getCurrentPosition(function(position) {
    //         document.getElementById('latitude').value = position.coords.latitude;
    //         document.getElementById('longitude').value = position.coords.longitude;
            
    //         var geolocation = {
    //           lat: position.coords.latitude,
    //           lng: position.coords.longitude
    //         };
    //         var circle = new google.maps.Circle({
    //           center: geolocation,
    //           radius: position.coords.accuracy
    //         });
    //         autocomplete.setBounds(circle.getBounds());
    //       });
    //     }
    //   }
    </script>