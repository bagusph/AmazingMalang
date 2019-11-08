<div class="modal-content bg-light">
 <div class="modal-header">
  <h5 class="modal-title">Info Data</h5>
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
  <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
  <div class="row mb-2">
    <div class="col-md-12 text-center">
      <img src="<?php echo base_url('uploads/kamar/'.$data->foto) ?>" alt="" width="250px" class="img-preview">
    </div>
  </div>
  <div class="form-group row">
    <label for="input-no" class="col-sm-2 col-form-label">No Kamar</label>
    <div class="col-sm-10">
      <input type="text" readonly name="no" class="form-control" id="input-no" placeholder="no" value="<?php echo $data->no ?>">
      <?php echo form_error('no') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-kategori" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
      <input type="text" readonly name="kategori" class="form-control" id="input-kategori" placeholder="kategori" value="<?php echo $data->kategori ?>">
      <?php echo form_error('kategori') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-fasilitas" class="col-sm-2 col-form-label">Fasilitas</label>
    <div class="col-sm-10">
      <input type="text" readonly name="fasilitas" class="form-control" id="input-fasilitas" placeholder="fasilitas" value="<?php echo $data->fasilitas ?>">
      <?php echo form_error('fasilitas') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control" id="input-status" value="<?php echo $data->status ?>">
      <?php echo form_error('status') ?>
    </div>
  </div>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>