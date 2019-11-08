<div class="modal-content bg-light">
 <div class="modal-header">
  <h5 class="modal-title">Info Data</h5>
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
  <div class="row mb-2">
    <div class="col-md-12 text-center">
      <img src="<?php echo base_url('uploads/kategori/'.$data->foto) ?>" alt="" class="img-preview" width="500px">
    </div>
  </div>
  <div class="form-group row">
    <label for="input-nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
     <input type="text" name="nama" class="form-control" id="input-nama" placeholder="nama" value="<?php echo $data->nama ?>" readonly>
   </div>
 </div>
 <div class="form-group row">
    <label for="input-keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <textarea name="keterangan" id="input-keterangan" class="form-control" disabled=""><?php echo set_value('keterangan') ?></textarea>
    </div>
  </div>
 <div class="form-group row">
  <label for="input-fk_desawisata" class="col-sm-2 col-form-label">Desa Wisata</label>
  <div class="col-sm-10">
   <input type="text" readonly class="form-control" value="<?php echo $data->nama_desawisata ?>">
 </div>
</div>



</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
<script>
 $("form#formdata").submit(function(e) {
  e.preventDefault();

  var formData = new FormData(this);    

  $.ajax({
    url: "<?php echo base_url('Admin/Kategori/insert') ?>",
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