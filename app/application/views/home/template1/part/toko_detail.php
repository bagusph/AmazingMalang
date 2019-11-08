<section class="blog-posts-area section-gap" style="margin-top: 100px">
  <div class="container">
   <div class="row">
    <div class="col-lg-8 post-list blog-post-list">
     <div class="single-post">
      <h1>
        <?php echo $toko->nama ?>
      </h1>
      <img class="img-fluid" src="<?php echo base_url('uploads/toko/'.$toko->foto) ?>" alt="">
<ul class="tags">
                  <li><a href="#"><?php echo $toko->jenis ?></a></li>
                </ul>
      <a href="#">
       <h1>
        <?php echo $toko->nama ?>
      </h1>
    </a>
    <div class="content-wrap">
     <p>
      <?php echo $toko->keterangan ?>
    </p>
     <p>
      <?php echo $toko->alamat ?>
    </p>
  </div>
</div>																		
</div>
</div>
</div>
</section>