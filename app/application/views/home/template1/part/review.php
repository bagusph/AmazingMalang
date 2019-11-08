
					<style>
						.checked{
							color: #ffd107;
						}
					</style>
<!--TESTMONIAL AREA-->
<section class="testmonial-area section-padding" id="client">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
				<div class="area-title text-center wow fadeIn">
					<h2>Review</h2>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
				<div class="testmonial-member-list wow fadeIn">

					<div class="single-testmonial center">
						<div class="testmonial-author-data">
							<div class="author-image">
								<img src="img/testmonial/testmonial-1.jpg" alt="">
							</div>
							<div class="author-designation">
								<h4>Testimoni List</h4>
							</div>
						</div>
						<div class="testmonial-author-details">
							<p></p>
						</div>
					</div>
					<?php foreach ($review as $key => $value): ?>
						<div class="single-testmonial center">
							<div class="testmonial-author-data">
								<div class="author-image">
									<img src="<?php echo base_url('uploads//review/'.$value->foto) ?>" alt="">
								</div>
								<div class="author-designation">
									<h4><?php echo $value->nama ?></h4>
									<p><?php echo $value->email ?></p>
								</div>
								<div class="star">

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
							</div>
							<div class="testmonial-author-details">
								<p><?php echo $value->keterangan ?></p>
							</div>
						</div>
					<?php endforeach ?>



				</div>
				<a href="<?php echo base_url('Home/kontak/'.$this->uri->segment(3)) ?>" class="btn btn-primary">Berikan Tanggapanmu</a>
			</div>
		</div>
	</div>
</section>
    <!--TESTMONIAL AREA END-->