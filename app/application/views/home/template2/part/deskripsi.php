<section class="section-gap info-area" id="about">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Tentang <?php echo $desawisata->nama ?></h1>
								<p></p>
							</div>
						</div>
					</div>					
					<div class="single-info row mt-40">
						<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="<?php echo base_url('uploads/desawisata/'.$desawisata->foto) ?>" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30"><?php echo $desawisata->nama ?> <br>
								<?php echo $desawisata->kecamatan ?> <br>
								<?php echo $desawisata->kabupaten ?></h2>
								<p>
									<?php echo $desawisata->deskripsi ?>
								</p>
								</div>
						</div>
					</div>
				</div>
			</section>