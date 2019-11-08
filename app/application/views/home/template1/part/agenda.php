<!--SERVICE TOP AREA-->
    <section class="service-top-area padding-100-50" id="features">
        <div class="container">
            <div class="row">
                <div class="text-center mb-4">
                <h1>Agenda</h1>
                </div>
				<?php foreach ($agenda as $key => $value): ?>
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                      
                            <img src="<?php echo base_url('uploads/agenda/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
                        
                        <h3><?php echo $value->judul ?></h3>
                        <p><?php echo $value->keterangan ?></p>
                        <p><?php echo $value->tanggal ?></p>
                        <a href="#" class="read-more">Learn More</a>
                    </div>
                </div>
				<?php endforeach ?>
            </div>
        </div>
    </section>
    <!--SERVICE TOP AREA END-->