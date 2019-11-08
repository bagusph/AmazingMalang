



<!-- Primary table end -->
<!-- Dark table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-3">
                Data <?php echo $c_name ?> 
            </h4>
            <div class="modal-body">
              <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
  <div class="form-group row">
    <label for="input-nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="input-nama" placeholder="nama" value="<?php echo $data->nama ?>">
      <?php echo form_error('nama') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat" id="input-alamat" rows="3" class="form-control"><?php echo $data->alamat ?></textarea>
      <?php echo form_error('alamat') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-desa" class="col-sm-2 col-form-label">Desa</label>
    <div class="col-sm-10">
      <input type="text" name="desa" class="form-control" id="input-desa" placeholder="" value="<?php echo $data->desa ?>">
      <?php echo form_error('desa') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
    <div class="col-sm-10">
      <input type="text" name="kecamatan" class="form-control" id="input-kecamatan" placeholder="" value="<?php echo $data->kecamatan ?>">
      <?php echo form_error('kecamatan') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
    <div class="col-sm-10">
      <input type="text" name="kabupaten" class="form-control" id="input-kabupaten" placeholder="" value="<?php echo $data->kabupaten ?>">
      <?php echo form_error('kabupaten') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
      <textarea name="deskripsi" id="input-deskripsi" rows="5" class="form-control"><?php echo $data->deskripsi ?></textarea>
      <?php echo form_error('deskripsi') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-_lat" class="col-sm-2 col-form-label">Lat / Long</label>
    <div class="col-sm-10">
      <div class="input-group">
      <input type="number" step="any" name="_lat" class="form-control mr-2" id="input-_lat" placeholder="lattitude" value="<?php echo $data->_lat ?>">
      <input type="number" step="any" name="_long" class="form-control ml-2" id="input-_long" placeholder="longtitude" value="<?php echo $data->_long ?>">
      </div>
      <?php echo form_error('_lat') ?>
      <?php echo form_error('_long') ?>
    </div>
  </div>
  <div class="row mb-2">
  <div class="col-sm-2"></div>
  <div class="col-md-10">
    <img src="<?php echo base_url('uploads/desawisata/'.$data->foto) ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('uploads/desawisata/'.$data->foto) ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('uploads/desawisata/'.$data->foto) ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
  </div>
</div>
<div class="form-group row">
  <label for="input-foto" class="col-sm-2 col-form-label">Foto</label>
  <div class="col-sm-10">
    <input type="file" name="foto" class="form-control" id="input-foto" placeholder="foto" accept="image/*">
   <?php echo (isset($error) ? $error : "" ) ?>
 </div>
</div>

 <?php echo form_close(); ?>
    </div>
    <div class="modal-footer">
        <input type="submit" value="submit" class="btn btn-primary" form="formdata"></div>
    </div>
</div>
</div>
<script>
  function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.img-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#input-foto").change(function() {

  var size = this.files[0].size/1024/1024;
  if (size >= 2) {
    alert('File larger than 2 MB');
    $('#input-foto').val(null);
  }else{
    readURL(this);
  }
});
</script>