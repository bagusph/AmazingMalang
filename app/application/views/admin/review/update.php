<div class="modal-content bg-light">
     <div class="modal-header bg-success">
          <h5 class="modal-title text-white">Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
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
          <label for="input-email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
           <input type="text" name="email" class="form-control" id="input-email" placeholder="email" value="<?php echo $data->email ?>">
          <?php echo form_error('email') ?>
      </div>
 </div>

      <div class="form-group row">
          <label for="input-telp" class="col-sm-2 col-form-label">Telephone</label>
          <div class="col-sm-10">
           <input type="text" name="telp" class="form-control" id="input-telp" placeholder="telp" value="<?php echo $data->telp ?>">
          <?php echo form_error('telp') ?>
      </div>
 </div>

      <div class="form-group row">
          <label for="input-rating" class="col-sm-2 col-form-label">Rating</label>
          <div class="col-sm-10">
            <select name="rating" class="form-control">
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
           </select>
          <?php echo form_error('rating') ?>
      </div>
 </div>

      <div class="form-group row">
          <label for="input-keterangan" class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-10">
           <textarea name="keterangan" class="form-control" id="input-keterangan"><?php echo $data->keterangan ?></textarea>
          <?php echo form_error('keterangan') ?>
      </div>
 </div>

 <div class="form-group row">
    <label for="input-fk_desawisata" class="col-sm-2 col-form-label">Desa Wisata</label>
    <div class="col-sm-10">
     <input type="hidden" name="fk_desawisata" value="<?php echo $this->session->userdata('logged_in')['desawisata']['id'] ?>">
     <input type="text" readonly class="form-control" value="<?php echo $this->session->userdata('logged_in')['desawisata']['nama'] ?>">
   </div>
 </div>
 
<div class="row mb-2">
  <div class="col-sm-2"></div>
  <div class="col-md-10">
    <img src="<?php echo base_url('uploads/review/'.$data->foto) ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('uploads/review/'.$data->foto) ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('uploads/review/'.$data->foto) ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
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
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-success" form="formdata">Save changes</button>
</div>

</div>
<script>
     $("form#formdata").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);    

      $.ajax({
          url: "<?php echo base_url('Admin/Review/update/'.$data->id) ?>",
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