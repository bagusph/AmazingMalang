<!--PORTFOLIO AREA-->
    <section class="portfolio-area padding-100-70 gray-bg" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Wisata</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="portfolio-menu-content wow fadeIn">
                        <ul class="portfolio-menu">
                            <li class="active" data-filter="*">All</li>
                            <?php foreach ($kategori as $key => $value): ?>
                            	<li data-filter="<?php echo '.'.$value->id ?>"><?php echo ucfirst($value->nama) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row portfolio-list wow fadeIn">
                 <?php foreach ($objekwisata as $key => $value): ?>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 <?php echo $value->fk_kategori ?> photography portfolio-item">
                    
                   
                    	<div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="<?php echo base_url('uploads/wisata/'.$value->foto) ?>" alt="" style="width: 100%;height: 100%;max-height:200px;min-height: 200px;">
                        </div>
                        <div class="portfolio-details v-center">
                            <a href="<?php echo base_url('Home/wisatadetail/'.$this->uri->segment(3)."/".$value->id) ?>">
                            <h4><?php echo $value->nama ?></h4>
                            </a> 
                            <p><?php echo $value->keterangan ?></p>
                            <p><?php echo $value->harga ?></p>
                            <p><?php echo $value->jamkunjung ?></p>
                        </div>
                    </div>
                   

                </div>
                 <?php endforeach ?>
            </div>
        </div>
    </section>
    <!--PORTFOLIO AREA END-->