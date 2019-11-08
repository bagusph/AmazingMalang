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
							<a class="main_btn" href="<?php echo base_url('Home/wisatadetail/'.$this->uri->segment(3)."/".$value->id) ?>">View Details</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
        </section>
        <!--================End Post Slider Area =================-->

       <!--================Feature Area =================-->
        <section class="feature_area">
        	<div class="container">
        		<div class="main_title mt-5">
        			<h2>Toko</h2>
        		</div>
        		<div class="feature_inner row">
        			
					<?php foreach ($toko as $key => $value): ?>
						<div class="col-lg-4">
        				<div class="feature_item">
        					<img src="<?php echo base_url('uploads/toko/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
        					<h4><?php echo $value->nama ?></h4>
        					<p>
							  	<?php echo substr($value->keterangan, 0,30)."..."; ?>
							 </p>	
        					<p><?php echo $value->alamat ?></p>
        					<p><?php echo $value->jenis ?></p>
        					<a class="main_btn" href="<?php echo base_url('Home/tokodetail/'.$this->uri->segment(3)."/".$value->id) ?>">View Details</a>
        				</div>
        			</div>
					<?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area">
        	<div class="container">
        		<div class="main_title mt-5">
        			<h2>Penginapan</h2>
        		</div>
        		<div class="feature_inner row">
        			
					<?php foreach ($penginapan as $key => $value): ?>
						<div class="col-lg-4">
        				<div class="feature_item">
        					<img src="<?php echo base_url('uploads/penginapan/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
        					<h4><?php echo $value->nama ?></h4>
        					<p>
							  	<?php echo substr( $value->keterangan, 0,30)."..."; ?>
							 </p>	
        					<p><?php echo $value->alamat ?></p>
        					<a class="main_btn" href="<?php echo base_url('Home/penginapandetail/'.$this->uri->segment(3)."/".$value->id) ?>">View Details</a>
        				</div>
        			</div>
					<?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->