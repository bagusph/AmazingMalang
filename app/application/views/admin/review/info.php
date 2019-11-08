<div class="modal-content bg-light">
     <div class="modal-header">
          <h5 class="modal-title">Info Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
<div class="row mb-2">
  <div class="col-md-12 text-center">
    <img src="<?php echo base_url('uploads/review/'.$data->foto) ?>" alt="" width="250px" class="img-preview">
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
          <label for="input-email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" readonly name="email" class="form-control" id="input-email" placeholder="email" value="<?php echo $data->email ?>">
            <?php echo form_error('email') ?>
          </div>
     </div>
       <div class="form-group row">
          <label for="input-rating" class="col-sm-2 col-form-label">Rating</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" readonly value="<?php echo $data->rating ?>">
            <?php echo form_error('rating') ?>
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