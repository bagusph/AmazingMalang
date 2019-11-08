<div class="modal-content bg-light">
     <div class="modal-header">
          <h5 class="modal-title">Info Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
 
<div class="row mb-2">
  <div class="col-md-12 text-center">
    <img src="<?php echo base_url('uploads/agenda/'.$data->foto) ?>" alt="" width="250px" class="img-preview">
  </div>
</div>
     <div class="form-group row">
          <label for="input-tanggal" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="date" readonly name="tanggal" class="form-control" id="input-tanggal" placeholder="tanggal" value="<?php echo $data->tanggal ?>">
            <?php echo form_error('tanggal') ?>
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
          <label for="input-keterangan" class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-10">
            <textarea name="keterangan" readonly class="form-control" id="input-keterangan"><?php echo $data->keterangan ?></textarea>
            <?php echo form_error('keterangan') ?>
          </div>
     </div>
 
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>