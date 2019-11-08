<section class="exibition-area section-gap" id="exhibitions">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">List Kamar</p>
					</div>
				</div>
			</div>						
			<div class="row">
				<div class="active-exibition-carusel">
					<?php foreach ($kamar as $key => $value): ?>
						<div class="single-exibition item">
							<img src="<?php echo base_url('uploads/kamar/'.$value->foto) ?>" alt="" style="max-width: 100%;min-width:100%;max-height: 250px; min-height: 250px">
							<ul class="tags">
								<li><a href="#"><?php echo $value->kategori ?></a></li>
							</ul>
							<a href="#"><h4><?php echo $value->no ?></h4></a>
							<p>
								<?php echo $value->fasilitas ?>
							</p>
							<h6 class="date"><?php $value->status ?></h6>
						</div>
					<?php endforeach ?>

				</div>													
			</div>
		</div>	
	</section>