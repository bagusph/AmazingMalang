<!--================Our Blog Area =================-->
<section class="our_blog_area p_120">
       <div class="container">
              <div class="main_title">
                     <h2>Galeri</h2>
             </div>
             <div class="blog_inner row">
                     
                   <?php foreach ($galeri as $key => $value): ?>
                          <div class="col-lg-4">
                            <div class="o_blog_item">
                                   <div class="blog_img">
                                          <img class="img-fluid mt-4" src="<?php echo base_url('uploads/galeri/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
                                  </div>
                          </div>
                  </div>
          <?php endforeach ?>
  </div>
</div>
</section>
<!--================End Our Blog Area =================-->
