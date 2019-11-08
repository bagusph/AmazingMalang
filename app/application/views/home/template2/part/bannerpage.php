<section class="banner-area relative" id="home" style="background: url(<?php echo base_url('uploads/banner/'.$config_page->banner_img); ?>) !important;background-size:cover !important;">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								<?php echo $banner_title ?>			
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url('Home/homee/'.$this->uri->segment(3)) ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> 
								<?php echo $banner_title ?>	</a></p>
						</div>											
					</div>
				</div>
			</section>