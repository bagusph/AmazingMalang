<!--================Our Blog Area =================-->
<section class="our_blog_area p_120">
       <div class="container">
              <div class="main_title">
                     <h2>Berita</h2>
             </div>
             <div class="blog_inner row">

                   <?php foreach ($berita as $key => $value): ?>
                          <div class="col-lg-4">
                            <div class="o_blog_item">
                                   <div class="blog_img">
                                          <img class="img-fluid" src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="">
                                  </div>
                                  <div class="blog_text">
                                          <p><a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3)."/".$value->id) ?>"><h4><?php echo $value->judul ?></h4></a></p>
                                          <p><?php echo substr($value->konten, 0,30)."..."; ?></p>
                                          <a class="date" href="#"><?php echo $value->tanggal ?></a>
                                          <h5>Author :<p><?php echo $value->author ?></p></span></h5>
                                  </div>
                          </div>
                  </div>
          <?php endforeach ?>
  </div>
</div>
</section>
<!--================End Our Blog Area =================-->
