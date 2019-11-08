<div class="modal-content bg-light">
 <div class="modal-header">
  <h5 class="modal-title">Info Data</h5>
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
  <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
  <div class="row mb-2">
    <div class="col-md-12 text-center">
      <img src="<?php echo base_url('uploads/berita/'.$data->foto) ?>" alt="" width="250px" class="img-preview">
    </div>
  </div>
  <div class="form-group row">
    <label for="input-judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" readonly name="judul" class="form-control" id="input-judul" placeholder="judul" value="<?php echo $data->judul ?>">
      <?php echo form_error('judul') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-konten" class="col-sm-2 col-form-label">Konten</label>
    <div class="col-sm-10">
      <textarea name="konten" readonly class="form-control" id="input-konten"><?php echo $data->konten ?></textarea>
      <?php echo form_error('konten') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-author" class="col-sm-2 col-form-label">Author</label>
    <div class="col-sm-10">
      <input type="text" readonly name="author" class="form-control" id="input-author" placeholder="author" value="<?php echo $data->author ?>">
      <?php echo form_error('author') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-tanggal" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input type="datetime" readonly name="tanggal" class="form-control" id="input-tanggal" placeholder="tanggal" value="<?php echo $data->tanggal ?>">
      <?php echo form_error('tanggal') ?>
    </div>
  </div>


</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>