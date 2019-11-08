<section class="gallery-area section-gap" id="gallery">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10 text-white">Galeri</h1>
				</div>
			</div>
		</div>						
		<div id="grid-container" class="row">
			<?php foreach ($galeri as $key => $value): ?>
				<a class="single-gallery" href="<?php echo base_url('uploads/galeri/'.$value->foto) ?>"><img class="grid-item" src="<?php echo base_url('uploads/galeri/'.$value->foto) ?>"></a>
			<?php endforeach ?>						
		</div>	
	</div>	
</section>