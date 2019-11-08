<div class="modal-content bg-light">
     <div class="modal-header">
          <h5 class="modal-title">Info Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?> 
<div class="row mb-2">
  <div class="col-md-12 text-center">
    <img src="<?php echo base_url('uploads/galeri/'.$data->foto) ?>" alt="" width="250px" class="img-preview">
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
          <label for="input-nourut" class="col-sm-2 col-form-label">No Urut</label>
          <div class="col-sm-10">
            <input type="text" readonly name="nourut" class="form-control" id="input-nourut" placeholder="nourut" value="<?php echo $data->nourut ?>">
            <?php echo form_error('nourut') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-ukuran" class="col-sm-2 col-form-label">Ukuran</label>
          <div class="col-sm-10">
            <input type="text" name="ukuran" readonly class="form-control" id="input-ukuran" value="<?php echo $data->ukuran ?>">
            <?php echo form_error('ukuran') ?>
          </div>
     </div>
 
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>