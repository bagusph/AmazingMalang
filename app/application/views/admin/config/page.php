



<!-- Primary table end -->
<!-- Dark table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-3">
                Data <?php echo $c_name ?> 
            </h4>
            <div class="modal-body">
              <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
              <div class="form-group row">
                <label for="input-subdomain" class="col-sm-2 col-form-label">Sub Domain</label>
                <div class="col-sm-10">
                    <input name="subdomain" type="text" class="form-control" id="input-subdomain" value="<?php echo $data->subdomain ?>">
                    <?php echo form_error('subdomain') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="input-short_about" class="col-sm-2 col-form-label">Short About</label>
                <div class="col-sm-10">
                    <textarea name="short_about" id="input-short_about" class="form-control"><?php echo $data->short_about ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="input-template" class="col-sm-2 col-form-label">Template</label>
                <div class="col-sm-10">
                    <select name="template" class="form-control" id="input-template">
                        <option value="" default>Pilih Template</option>
                        <option value="template1">Template 1</option>
                        <option value="template2">Template 2</option>
                        <option value="template3">Template 3</option>
                    </select>
                    <?php echo form_error('template') ?>
                    <script>$('#input-template').val('<?php echo $data->template ?>')</script>
                </div>
            </div>
            <div class="form-group row">
                <label for="input-telp" class="col-sm-2 col-form-label">Telp</label>
                <div class="col-sm-10">
                    <input name="telp" type="text" class="form-control" id="input-telp" value="<?php echo $data->telp ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input-telp_wa" class="col-sm-2 col-form-label">Telp Wa</label>
                <div class="col-sm-10">
                    <input name="telp_wa" type="text" class="form-control" id="input-telp_wa" value="<?php echo $data->telp_wa ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input-email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input name="email" type="text" class="form-control" id="input-email" value="<?php echo $data->email ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input-sosial_facebook" class="col-sm-2 col-form-label">Facebook</label>
                <div class="col-sm-10">
                    <input name="sosial_facebook" type="text" class="form-control" id="input-sosial_facebook" value="<?php echo $data->sosial_facebook ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input-sosial_instagram" class="col-sm-2 col-form-label">instagram</label>
                <div class="col-sm-10">
                    <input name="sosial_instagram" type="text" class="form-control" id="input-sosial_instagram" value="<?php echo $data->sosial_instagram ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input-sosial_twitter" class="col-sm-2 col-form-label">twitter</label>
                <div class="col-sm-10">
                    <input name="sosial_twitter" type="text" class="form-control" id="input-sosial_twitter" value="<?php echo $data->sosial_twitter ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input-logo_img" class="col-sm-2 col-form-label">logo Image</label>
                <div class="col-sm-10">

                    <img src="<?php echo base_url('uploads/logo/'.$data->logo_img) ?>" alt="" width="500px" class="img-preview img-thumbnail">
                    <input name="logo_img" type="file" class="form-control" id="input-logo_img" value="">
                    <?php echo (isset($error1) ? $error1 : "") ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="input-banner_img" class="col-sm-2 col-form-label">Banner Image</label>
                <div class="col-sm-10">
                    <img src="<?php echo base_url('uploads/banner/'.$data->banner_img) ?>" alt="" width="500px" class="img-preview img-thumbnail">
                    <input name="banner_img" type="file" class="form-control" id="input-banner_img" value="">
                    <?php echo (isset($error2) ? $error2 : "") ?>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
        <div class="modal-footer">
            <input type="submit" value="submit" class="btn btn-primary" form="formdata"></div>
        </div>
    </div>
</div>


<script>
  function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
         $(input).parent().find(".img-preview").attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
}

$("#input-foto").change(function() {

  var size = this.files[0].size/1024/1024;
  if (size >= 2) {
    alert('File larger than 2 MB');
    $('#input-foto').val(null);
}else{
    readURL(this);
}
});
$("#input-logo_img").change(function() {

  var size = this.files[0].size/1024/1024;
  if (size >= 2) {
    alert('File larger than 2 MB');
    $('#input-logo_img').val(null);
}else{
    readURL(this);
}
});
$("#input-banner_img").change(function() {

  var size = this.files[0].size/1024/1024;
  if (size >= 2) {
    alert('File larger than 2 MB');
    $('#input-banner_img').val(null);
}else{
    readURL(this);
}
});
</script>