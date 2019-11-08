<section class="blog-posts-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 post-list blog-post-list">
				<?php foreach ($berita as $value): ?>
					<div class="single-post row">
						<img class="img-fluid col-lg-4" src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="">
						<div class="col-lg-8">
							<a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3)."/".$value->id) ?>">
							<h1><?php echo $value->judul ?></h1>
						</a>
						<h3><?php echo $value->author ?></h3>
						<p>
							<?php echo substr($value->konten, 0,50)."..." ?>
							<br>
							<br>
							<a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3).'/'.$value->id) ?>" class="btn btn-circle btn-primary">Read More</a>
						</p>
						</div>
					</div>
				<?php endforeach ?>																				
			</div>
		</div>
	</div>	
</section>