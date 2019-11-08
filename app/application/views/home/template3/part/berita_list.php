<section class="blog_area">
            <div class="container">
                <div class="row">
                    
					
						<div class="col-lg-8">
                        <div class="blog_info">
                        	<?php foreach ($berita as $key => $value): ?>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <ul class="blog_meta list">
                                            <li><a href="#"><?php echo $value->author ?><i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"><?php echo $value->tanggal ?><i class="lnr lnr-calendar-full"></i></a></li>
                                            
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="">
                                        <div class="blog_details">
                                            <a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3)."/".$value->id) ?>">
                            <h1><?php echo $value->judul ?></h1>
                        </a>
                                            <p><?php echo substr($value->konten, 0,50)."..."; ?></p>
                                            <a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3).'/'.$value->id) ?>" class="btn btn-circle btn-primary">Read More</a> 
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endforeach ?>
                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>