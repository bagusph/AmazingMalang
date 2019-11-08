<!--================Feature Area =================-->
<section class="feature_area">
       <div class="container">
              <div class="main_title mt-5">
                     <h2>List Kamar</h2>
             </div>
             <div class="feature_inner row">

                <?php foreach ($kamar as $key => $value): ?>
                          <div class="col-lg-4">
                            <div class="feature_item">
                                   <img src="<?php echo base_url('uploads/kamar/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
                                   <h4><?php echo $value->no ?></h4>
                                   <p>
                                      <?php echo $value->kategori ?>
                              </p>	
                              <p><?php echo $value->fasilitas ?></p>
                              <p><?php echo $value->status ?></p>
                      </div>
              </div>
      <?php endforeach ?>
</div>
</div>
</section>
        <!--================End Feature Area =================-->