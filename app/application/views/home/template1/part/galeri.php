<!--TEAM AREA-->
    <section class="team-area padding-100-70" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
            <div class="row team-slider">
                
                    
				<?php foreach ($galeri as $key => $value): ?>
				<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
					<div class="single-team center white wow fadeIn">
                        <div class="member-top-details relative">
                            <div class="member-thumb">
                                <img src="<?php echo base_url('uploads/galeri/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
                            </div>
                            <div class="member-details v-center">
                                <h4><?php echo $value->judul ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
				<?php endforeach ?>
            </div>
        </div>
    </section>
    <!--TEAM AREA END-->