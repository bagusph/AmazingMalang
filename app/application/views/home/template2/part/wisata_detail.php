<section class="upcoming-exibition-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Ongoing Exhibitions from the scratch</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<?php foreach ($objekwisata as $value): ?>
				<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url('uploads/wisata/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">						
							</div>
							<p class="date"><?php echo $value->jamkunjung ?></p>
							<a href="#"><h4><?php echo $value->nama ?></h4></a>
							<p><?php echo $value->keterangan ?></p>
							<div class="meta-bottom d-flex justify-content-start">
								<p class="price"><?php echo 'Rp. '.number_format($value->harga) ?></p>
							</div>									
						</div>
			<?php endforeach ?>																
		</div>
	</div>	
</section>