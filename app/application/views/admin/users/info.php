<div class="modal-content bg-light">
 <div class="modal-header">
  <h5 class="modal-title">Info Data</h5>
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
  <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
<div class="row mb-2">
  <div class="col-md-12 text-center">
    <img src="<?php echo base_url('assets\assets\images\holder\holder.png') ?>" alt="" width="300px" class="img-preview">
  </div>
</div>
   <div class="form-group row">
  <label for="input-nama" class="col-sm-2 col-form-label">Nama</label>
  <div class="col-sm-10">
   <input type="text" readonly name="nama" class="form-control" id="input-nama" placeholder="nama" value="<?php echo $data->nama ?>">
   <?php echo form_error('nama') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-alamat" class="col-sm-2 col-form-label">alamat</label>
  <div class="col-sm-10">
   <input type="text" readonly name="alamat" class="form-control" id="input-alamat" placeholder="alamat" value="<?php echo $data->alamat ?>">
   <?php echo form_error('alamat') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-telp" class="col-sm-2 col-form-label">telp</label>
  <div class="col-sm-10">
   <input type="text" readonly name="telp" class="form-control" id="input-telp" placeholder="telp" value="<?php echo $data->telp ?>">
   <?php echo form_error('telp') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-email" class="col-sm-2 col-form-label">email</label>
  <div class="col-sm-10">
   <input type="text" readonly name="email" class="form-control" id="input-email" placeholder="email" value="<?php echo $data->email ?>">
   <?php echo form_error('email') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-username" class="col-sm-2 col-form-label">username</label>
  <div class="col-sm-10">
   <input type="text" readonly name="username" class="form-control" id="input-username" placeholder="username" value="<?php echo $data->username ?>">
   <?php echo form_error('username') ?>
 </div>
</div>

<div class="form-group row">
  <label for="input-status" class="col-sm-2 col-form-label">status</label>
  <div class="col-sm-10">
    <select name="status" id="" class="form-control" disabled>
      <option value="1">Active</option>
      <option value="2">Inactive</option>
    </select>
 </div>
</div>
<!-- <div class="form-group row">
  <label for="input-ket_status" class="col-sm-2 col-form-label">ket_status</label>
  <div class="col-sm-10">
   <input type="text" readonly name="ket_status" class="form-control" id="input-ket_status" placeholder="ket_status" value="<?php echo $data->ket_status ?>">
   <?php echo form_error('ket_status') ?>
 </div>
</div> -->

<div class="form-group row">
    <label for="input-fk_level" class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-10">
      <input readonly type="text" class="form-control" value="<?php echo $data->nama_level ?>">
   </div>
 </div>

<div class="form-group row">
    <label for="input-fk_desawisata" class="col-sm-2 col-form-label">Desa Wisata</label>
    <div class="col-sm-10">
      <input readonly type="text" class="form-control" value="<?php echo $data->nama_desawisata ?>">
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
    url: "<?php echo base_url('Admin/'.$c_name.'/update/'.$data->id) ?>",
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