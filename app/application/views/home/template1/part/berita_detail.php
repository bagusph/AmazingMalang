<section class="blog-posts-area section-gap" style="margin-top: 100px; margin-bottom: 100px">
  <div class="container">
   <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 post-list blog-post-listmt-5 my-5 text-center">
     <div class="single-post">
      <div class="content-wrap">
       <h1>
        <?php echo $berita_on->judul ?>
      </h1>
    </div>>
    <img class="img-fluid" src="<?php echo base_url('uploads/berita/'.$berita_on->foto) ?>" alt="">
    <div class="content-wrap">
     <p>
      <?php echo $berita_on->konten ?>
    </p>
  </div>
  <div class="content-wrap">
   <p>
    <?php echo $berita_on->tanggal ?>
  </p>
</div>
<div class="content-wrap">
   <p>
    Author :<?php echo $berita_on->author ?>
  </p>
</div>
</div>
</div>
</div>
</div>  
</section>