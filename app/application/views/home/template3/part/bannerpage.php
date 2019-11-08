<section class="banner_area" style="background: url(<?php echo base_url('uploads/banner/'.$config_page->banner_img); ?>) !important;background-size:cover !important;">
            <div class="banner_inner d-flex align-items-center" style="background-color: black;opacity: 0.5">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="transform: translateY(76.5933px);"></div>
				<div class="container">
					<div class="banner_content text-center">
						<h1 class="text-white">
								<?php echo $banner_title ?>			
							</h1>
							<div class="page_link">
							<a href="<?php echo base_url('Home/homee/'.$this->uri->segment(3)) ?>">Home</a>
							<a href="about-us.html"><?php echo $banner_title ?></a>
						</div>
					</div>
				</div>
            </div>
        </section>