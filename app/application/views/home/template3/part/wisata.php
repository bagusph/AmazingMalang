<!--================Post Slider Area =================-->
        <section class="post_slider_area">
        	<div class="main_title mt-5">
				<h2>Wisata</h2>
							</div>
			<div class="post_slider_inner owl-carousel">
				
				<?php foreach ($objekwisata as $key => $value): ?>
					<div class="item">
					<div class="post_s_item">
						<div class="post_img">
							<img src="<?php echo base_url('uploads/wisata/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:400px;min-height: 400px;">
						</div>
						<div class="post_text">
							<a href="single-blog.html"><h4><?php echo $value->nama ?></h4></a>
							<p><?php echo substr($value->keterangan, 0,30)."..."; ?></p>
							<p><?php echo $value->harga ?></p>
							<p><?php echo $value->jamkunjung ?></p> 
							<a class="main_btn" href="#">View Details</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
        </section>
        <!--================End Post Slider Area =================-->