<section class="service-area pt-100" id="about">
				<div class="container mb-5">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Agenda</h1>
							</div>
						</div>
					</div>
				
					<div class="row">
						<?php foreach ($agenda as $key => $value): ?>

							<div class="col-lg-4">
						<div class="single-service">
							<img src="<?php echo base_url('uploads/agenda/'.$value->foto) ?>" alt="" style="max-width: 200px;min-width:200px;max-height: 150px; min-height: 150px">
							<a href="">
								<h4><?php echo $value->judul ?></h4>
							</a>
							<p>
								<?php echo $value->tanggal ?>
							</p>						 	
							<div class="overlay">
								<div class="text">
									<p>
										<?php echo $value->keterangan ?>
									</p>

									<a href="<?php echo base_url('Home/agendadetail/'.$this->uri->segment(3)."/".$value->id) ?>" target="_blank" class="text-uppercase primary-btn">View Detail</a>
								</div>
							</div>
						</div>							
					</div>
					<?php if (($key+1)%3 == 0): ?>
					</div>
					<div class="row mt-3">					
					<?php endif ?>								
					<?php if ($key >= 2){
						break;
					}?>
					<?php endforeach ?>										
					</div>
				</div>	
			</section>