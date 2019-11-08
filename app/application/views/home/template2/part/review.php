<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Review</h1>
							</div>
						</div>
					</div>					
					<div class="row">
						<?php foreach ($review as $key => $value): ?>
							<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?php echo base_url('uploads/review/'.$value->foto) ?>" alt="">								
							</div>
							<div class="star text-center">
								<style>
									.checked{
										color:#ffcc01;
									}
								</style>
								<?php
								$jml = $value->rating; 
								for($i = 0; $i<5;$i++){ 
									?>
									<span class="fa fa-star <?php echo (($jml) > 0 ? "checked" : "") ?>"></span>
									<?php 
									$jml--;
								} 
								?>
							</div>
								
							<p><a href=""><h4><?php echo $value->nama ?></h4></a></p>
							<p>
								<?php echo $value->keterangan ?>
							</p>								
						</div>
						<?php endforeach ?>
													
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<a href="<?php echo base_url('Home/kontak/'.$this->uri->segment(3)) ?>" class="btn btn-primary">Berikan Tanggapanmu</a>
							</div>
						</div>							
					</div>	

			</section>