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
  <label for="input-alamat" class="col-sm-2 col-form-label">alamat</label>
  <div class="col-sm-10">
   <input type="text" name="alamat" class="form-control" id="input-alamat" placeholder="alamat" value="<?php echo set_value('alamat') ?>">
   <?php echo form_error('alamat') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-telp" class="col-sm-2 col-form-label">telp</label>
  <div class="col-sm-10">
   <input type="text" name="telp" class="form-control" id="input-telp" placeholder="telp" value="<?php echo set_value('telp') ?>" onkeypress='validate(event)'>
   <?php echo form_error('telp') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-email" class="col-sm-2 col-form-label">email</label>
  <div class="col-sm-10">
   <input type="text" name="email" class="form-control" id="input-email" placeholder="email" value="<?php echo set_value('email') ?>">
   <?php echo form_error('email') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-username" class="col-sm-2 col-form-label">username</label>
  <div class="col-sm-10">
   <input type="text" name="username" class="form-control" id="input-username" placeholder="username" value="<?php echo set_value('username') ?>">
   <?php echo form_error('username') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-password" class="col-sm-2 col-form-label">password</label>
  <div class="col-sm-10">
   <input type="password" name="password" class="form-control" id="input-password" placeholder="password" value="<?php echo set_value('password') ?>">
   <?php echo form_error('password') ?>
 </div>
</div>
<div class="form-group row">
  <label for="input-status" class="col-sm-2 col-form-label">status</label>
  <div class="col-sm-10">
    <select name="status" id="" class="form-control">
      <option value="1">Active</option>
      <option value="2">Inactive</option>
    </select>
 </div>
</div>
<!-- <div class="form-group row">
  <label for="input-ket_status" class="col-sm-2 col-form-label">ket_status</label>
  <div class="col-sm-10">
   <input type="text" name="ket_status" class="form-control" id="input-ket_status" placeholder="ket_status" value="<?php echo set_value('ket_status') ?>">
   <?php echo form_error('ket_status') ?>
 </div>
</div> -->
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
    <label for="input-fk_level" class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-10">
      <select name="fk_level" class="form-control">
        <option selected disabled>Pilih Level</option>
        <?php foreach ($level as $value): ?>
          <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
        <?php endforeach ?>
      </select>
      <script>
        $('select[name="fk_level"]').change(function(){
          if ($(this).val() == 5) {
            $('#container-input-penginapan').fadeIn();
            $('#fk_penginapan').attr('disabled',false);
          }else{
            $('#container-input-penginapan').fadeOut();
            $('#fk_penginapan').attr('disabled',true);
          }
        });
      </script>
   </div>
 </div>

<div class="form-group row" style="display: none" id="container-input-penginapan">
    <label for="input-fk_desawisata" class="col-sm-2 col-form-label">Penginapan</label>
    <div class="col-sm-10">
      <select name="fk_penginapan" class="form-control" id="fk_penginapan">
        <option selected disabled>Pilih Penginapan</option>
        <?php foreach ($penginapan as $value): ?>
          <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
        <?php endforeach ?>
      </select>
   </div>
 </div>

<div class="form-group row">
    <label for="input-fk_desawisata" class="col-sm-2 col-form-label">Desa Wisata</label>
    <div class="col-sm-10">
      <select name="fk_desawisata" class="form-control">
        <option selected disabled>Pilih Desawisata</option>
        <?php foreach ($desawisata as $value): ?>
          <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
        <?php endforeach ?>
      </select>
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
    url: "<?php echo base_url('Admin/'.$c_name.'/insert') ?>",
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

function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>