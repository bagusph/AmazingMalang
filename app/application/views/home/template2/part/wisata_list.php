<section class="upcoming-exibition-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Wisata</h1>
					<p></p>
				</div>
			</div>
		</div>						
		<div class="row">
			<?php foreach ($objekwisata as $value): ?>
				<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url('uploads/wisata/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">						
							</div>
							<p class="date">Jam kunjung : <?php echo $value->jamkunjung ?></p>
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
<section class="upcoming-exibition-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Penginapan</h1>
					<p></p>
				</div>
			</div>
		</div>						
		<div class="row">
			<?php foreach ($penginapan as $value): ?>
				<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url('uploads/penginapan/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">						
							</div>
							<p class="date">Penginapan</p>
							<a href="<?php echo base_url('Home/penginapandetail/'.$this->uri->segment(3)."/".$value->id) ?>"><h4><?php echo $value->nama ?></h4></a>
							<p><?php echo $value->keterangan ?></p>

								<p><?php echo $value->alamat ?></p>
						</div>
			<?php endforeach ?>														
		</div>
	</div>	
</section>
<section class="upcoming-exibition-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Toko</h1>
					<p></p>
				</div>
			</div>
		</div>						
		<div class="row">
	
			<?php foreach ($toko as $value): ?>
				<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url('uploads/toko/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">						
							</div>
							<p class="date"><?php echo $value->jenis ?></p>
							<a href="<?php echo base_url('Home/tokodetail/'.$this->uri->segment(3)."/".$value->id) ?>"><h4><?php echo $value->nama ?></h4></a>
							<p><?php echo $value->keterangan ?></p>
								<p><?php echo $value->alamat ?></p>		
						</div>
			<?php endforeach ?>																
		</div>
	</div>	
</section>