<section class="portfolio_details_area p_120">
        	<div class="container">
        		<div class="portfolio_details_inner">
					<div class="row">
						<div class="col-md-6">
							<div class="left_img">
								<img class="img-fluid" src="<?php echo base_url('uploads/wisata/	'.$wisata_on->foto) ?>" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="portfolio_right_text">
								<h4><?php echo $wisata_on->nama ?></h4>
								<p>Jam Kunjung :<?php echo $wisata_on->jamkunjung ?></p>
								<p> Harga : Rp. <?php echo $wisata_on->harga ?></p>
								
							</div>
						</div>
					</div>
       				<p><?php echo $wisata_on->keterangan ?></p>
       				
        		</div>
        	</div>
        </section>