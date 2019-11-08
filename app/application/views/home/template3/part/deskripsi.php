        <!--================Design Area =================-->
        <section class="design_area p_120">
        	<div class="container">
        		<div class="design_inner row">
        			<div class="col-lg-5">
        <img class="img-fluid" src="<?php echo base_url('uploads/desawisata/'.$desawisata->foto) ?>" alt="">
        			</div>
        			<div class="col-lg-7">
        				<div class="design_left_text">
        					<h6>Tentang <?php echo $desawisata->nama ?> </h6>
        					<h2><?php echo $desawisata->nama ?></h2>
        					<h5><?php echo $desawisata->kecamatan ?></h5>
                                                <h2><?php echo $desawisata->kabupaten ?></h2>
                                                <p><?php echo $desawisata->deskripsi ?></p>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!--================End Design Area =================-->