 <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Review</h2>
        			<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        		</div>
        		<div class="testi_slider owl-carousel">
        			
        			<?php foreach ($review as $key => $value): ?>
        				<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex" style="width: 100px;height: 100px">
									<img src="<?php echo base_url('uploads/review/'.$value->foto) ?>" alt="">
								</div>
								<div class="media-body">
									<p><?php echo $value->keterangan ?></p>
									<h4><?php echo $value->nama ?></h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->