<div class="modal-content bg-light">
 <div class="modal-header bg-primary">
  <h5 class="modal-title text-white">Tambah Data</h5>
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
  <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
  <div class="form-group row">
    <label for="input-nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
     <input type="text" name="nama" class="form-control" id="input-nama" placeholder="nama" value="<?php echo set_value('nama') ?>">
     <?php echo form_error('nama') ?>
   </div>
 </div>

 <div class="form-group row">
  <label for="input-keterangan" class="col-sm-2 col-form-label">Keterangan</label>
  <div class="col-sm-10">
   <textarea name="keterangan" class="form-control" id="input-keterangan" rows="5"><?php echo set_value('keterangan') ?></textarea>
   <?php echo form_error('keterangan') ?>
 </div>
</div>

<div class="form-group row">
  <label for="input-harga" class="col-sm-2 col-form-label">Harga</label>
  <div class="col-sm-10">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Rp</span>
      </div>
      <input type="number" step="100" min="0" name="harga" class="form-control" id="input-harga" value="<?php echo set_value('harga') ?>">
    </div>
    <?php echo form_error('harga') ?>
  </div>
</div>


<div class="form-group row">
  <label for="input-jamkunjung" class="col-sm-2 col-form-label">Jam Kunjung</label>
  <div class="col-sm-10">
    <input type="text" name="jamkunjung" class="form-control" id="input-jamkunjung" placeholder="jamkunjung" value="<?php echo set_value('jamkunjung') ?>">
    
    <?php echo form_error('jamkunjung') ?>
  </div>
</div>

<div class="form-group row">
    <label for="input-fk_kategori" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
      <select name="fk_kategori" id="" class="form-control">
        <?php foreach ($datakategori as $value): ?>
          <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
        <?php endforeach ?>
      </select>
     <?php echo form_error('fk_kategori') ?>
   </div>
 </div>

<div class="row mb-2">
  <div class="col-sm-2"></div>
  <div class="col-md-10">
    <img src="<?php echo base_url('assets\assets\images\holder\holder.png') ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('assets\assets\images\holder\holder.png') ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('assets\assets\images\holder\holder.png') ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
  </div>
</div>
<div class="form-group row">
  <label for="input-foto" class="col-sm-2 col-form-label">Foto</label>
  <div class="col-sm-10">
    <input type="file" name="foto" class="form-control" id="input-foto" placeholder="foto" accept="image/*">
   <?php echo (isset($error) ? $error : "" ) ?>
 </div>
</div>

<div class="form-group row">
    <label for="input-fk_desawisata" class="col-sm-2 col-form-label">Desa Wisata</label>
    <div class="col-sm-10">
     <input type="text" readonly class="form-control" value="<?php echo $this->session->userdata('logged_in')['desawisata']['nama'] ?>">
   </div>
 </div>


<?php echo form_close(); ?>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary" form="formdata">Save changes</button>
</div>

</div>
<script>
 $("form#formdata").submit(function(e) {
  e.preventDefault();

  var formData = new FormData(this);    

  $.ajax({
    url: "<?php echo base_url('Admin/Wisata/insert') ?>",
    type: 'POST',
    data: formData,
    success: function (data) {
     $('#modal-content').html(data);
     reload_table();
   },
   cache: false,
   contentType: false,
   processData: false
 });
});
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
  readURL(this);
});
</script>