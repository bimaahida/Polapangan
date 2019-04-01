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
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">No Keluarga <?php echo form_error('no_keluarga') ?></label>
                        <input type="text" class="form-control" name="no_keluarga" id="no_keluarga" value="<?php echo $no_keluarga; ?>" />
                    </div>
                    <div class="form-group label-floating">
                        <label for="varchar" class="control-label">Kepala Keluarga <?php echo form_error('kepala_keluarga') ?></label>
                        <input type="text" class="form-control" name="kepala_keluarga" id="kepala_keluarga" value="<?php echo $kepala_keluarga; ?>" />
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Alamat <?php echo form_error('alamat') ?></label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat; ?>" onFocus="geolocate()"/>
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Provinsi <?php echo form_error('provinsi') ?></label>
                        <input type="text" class="form-control" name="provinsi" id="provinsi"  value="<?php echo $provinsi; ?>" />
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Kabupaten / Kota <?php echo form_error('kab') ?></label>
                        <input type="text" class="form-control" name="kab" id="kab"  value="<?php echo $kab; ?>" />
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Kecamatan <?php echo form_error('kec') ?></label>
                        <input type="text" class="form-control" name="kec" id="kec"  value="<?php echo $kec; ?>" />
                    </div>
                    <div class="form-group ">
                        <label for="varchar" class="control-label">Desa <?php echo form_error('desa') ?></label>
                        <input type="text" class="form-control" name="desa" id="desa"  value="<?php echo $desa; ?>" />
                    </div>
                    <div class="row">
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
                    </div>
                </div>
            </div>
            <input type="hidden" name="longitude" id="longitude"  value="<?php echo $longitude; ?>" />
            <input type="hidden" name="kepala_id" id="kepala_id"/>
            <input type="hidden" name="latitude"  id="latitude" value="<?php echo $latitude; ?>" />
            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
            <input type="hidden" name="penyuluh_id" value="<?php echo $penyuluh_id; ?>" /> 
            <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button> 
            <a href="<?php echo site_url('keluarga') ?>" class="btn btn-default pull-right">Cancel</a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#kepala_keluarga').autocomplete({
            source: "<?php echo base_url('Keluarga/get_autocomplete');?>",
            select: function (event, ui) {
                $('#kepala_keluarga').val(ui.item.label); 
                $('#kepala_id').val(ui.item.id); 
            }
        });

    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmBY0nTDRelXLlNUei_0SVEuogGzhQrvE&libraries=places&callback=initAutocomplete" async defer></script>
<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        provinsi: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('alamat')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        console.log(place.address_components);
        document.getElementById('provinsi').value = place.address_components[5]['long_name'];
        document.getElementById('kab').value = place.address_components[4]['long_name'];
        document.getElementById('kec').value = place.address_components[3]['long_name'];
        document.getElementById('desa').value = place.address_components[2]['long_name'];
        document.getElementById('kode_pos').value = place.address_components[7]['short_name'];
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
            
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>