<section class="service-area pt-100" id="about">
	<div class="container">
		<h2 class="text-center my-3">Agenda</h2>

		<div class="feature_inner row">
        			
					<?php foreach ($agenda as $key => $value): ?>
						<div class="col-lg-4">
        				<div class="feature_item">
        					<img src="<?php echo base_url('uploads/agenda/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
        					<h4><?php echo $value->judul ?></h4>
        					<p>
							  	<?php echo $value->tanggal ?>
							 </p>	
        					<p><?php echo substr($value->keterangan, 0,30)."..."; ?></p>
        					<a class="main_btn" href="<?php echo base_url('Home/agendadetail/'.$this->uri->segment(3)."/".$value->id) ?>">View Details</a>
        				</div>
        			</div>
				<?php if (($key+1)%3 == 0): ?>
					</div>
					<div class="row mt-3">					
				<?php endif ?>						
			<?php endforeach ?>								
		</div>
	</div>	
</section>