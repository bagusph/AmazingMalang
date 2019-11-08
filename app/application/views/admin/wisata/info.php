<div class="modal-content bg-light">
 <div class="modal-header">
  <h5 class="modal-title">Info Data</h5>
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">

<div class="row mb-2">
  <div class="col-md-12 text-center">
    <img src="<?php echo base_url('uploads/wisata/'.$data->foto) ?>" alt="" width="250px" class="img-preview">
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
  <label for="input-keterangan" class="col-sm-2 col-form-label">Keterangan</label>
  <div class="col-sm-10">
   <textarea readonly name="keterangan" class="form-control" id="input-keterangan" rows="5"><?php echo $data->keterangan ?></textarea>
   <?php echo form_error('keterangan') ?>
 </div>
</div>

<div class="form-group row">
  <label for="input-harga" class="col-sm-2 col-form-label">Harga</label>
  <div class="col-sm-10">
      <input readonly type="text" name="harga" class="form-control" id="input-harga" value="<?php echo "Rp. ".number_format($data->harga,0); ?>">
    
    <?php echo form_error('harga') ?>
  </div>
</div>


<div class="form-group row">
  <label for="input-jamkunjung" class="col-sm-2 col-form-label">Jam Kunjung</label>
  <div class="col-sm-10">
    <input type="text" readonly name="jamkunjung" class="form-control" id="input-jamkunjung" placeholder="jamkunjung" value="<?php echo $data->jamkunjung ?>">
    
    <?php echo form_error('jamkunjung') ?>
  </div>
</div>

<div class="form-group row">
    <label for="input-kategori" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
     <input type="text" readonly name="kategori" class="form-control" id="input-kategori" placeholder="kategori" value="<?php echo $data->nama_kategori ?>">
     <?php echo form_error('nama') ?>
   </div>
 </div>



</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>