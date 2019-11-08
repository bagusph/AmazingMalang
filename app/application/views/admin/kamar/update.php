<div class="modal-content bg-light">
     <div class="modal-header bg-success">
          <h5 class="modal-title text-white">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
       <div class="form-group row">
          <label for="input-no" class="col-sm-2 col-form-label">No Kamar</label>
          <div class="col-sm-10">
            <input type="text" name="no" class="form-control" id="input-no" placeholder="no" value="<?php echo $data->no ?>">
            <?php echo form_error('no') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-kategori" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <textarea name="kategori" class="form-control" id="input-kategori" cols="30" rows="10"><?php echo $data->kategori ?></textarea>
            <?php echo form_error('kategori') ?>
          </div>
     </div>
      <div class="form-group row">
          <label for="input-fasilitas" class="col-sm-2 col-form-label">Fasilitas</label>
          <div class="col-sm-10">
            <input type="text" name="fasilitas" class="form-control" id="input-fasilitas" placeholder="fasilitas" value="<?php echo $data->fasilitas ?>">
            <?php echo form_error('fasilitas') ?>
          </div>
     </div>
      <div class="form-group row">
          <label for="input-status" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-10">
            <select name="status" class="form-control">
              <option value="Ada">Ada</option>
              <option value="Penuh">Penuh</option>
            </select>
            <script>$('select[name="status"]').val('<?php echo $data->status ?>');</script>
            <?php echo form_error('status') ?>
          </div>
     </div>
 
<div class="row mb-2">
  <div class="col-sm-2"></div>
  <div class="col-md-10">
    <img src="<?php echo base_url('uploads/kamar/'.$data->foto) ?>" alt="" width="100px" class="img-preview">
    <img src="<?php echo base_url('uploads/kamar/'.$data->foto) ?>" alt="" width="75px" class="img-preview align-bottom ml-3">
    <img src="<?php echo base_url('uploads/kamar/'.$data->foto) ?>" alt="" width="50px" class="img-preview align-bottom ml-3">
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
          url: "<?php echo base_url('Admin/kamar/update/'.$data->id) ?>",
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
     //di bawah ini di tambahkan
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