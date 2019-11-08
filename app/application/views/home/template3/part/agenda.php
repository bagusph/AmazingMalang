<!--================Feature Area =================-->
        <section class="feature_area">
        	<div class="container">
        		<div class="main_title mt-5">
        			<h2>Agenda</h2>
        		</div>
        		<div class="feature_inner row">
        			
					<?php foreach ($agenda as $key => $value): ?>
						<div class="col-lg-4">
        				<div class="feature_item">
        					<img src="<?php echo base_url('uploads/agenda/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
        					<h4><?php echo $value->judul ?></h4>
        					<p>
							  	<?php echo $value->tanggal ?>
							 </p>	
        					<p><?php echo substr($value->keterangan, 0,30)."..." ?></p>
        				</div>
        			</div>
					<?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->