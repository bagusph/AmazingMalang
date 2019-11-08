<!--BLOG AND FEED AREA-->
    <section class="blog-and-feed-area section-padding white-gray-bg" id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Potensi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                    <div class="feed-widget blog-feed mb50 wow fadeIn">
                        <h4>Toko</h4>
                        <div class="blog-list">
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="blog-details">
                                    <h4><a href="#">Toko</a></h4>
                                    <p>Menunjukan toko yang ada di <?php echo $desawisata->nama ?></p>
                                </div>
                            </div>
                            <?php foreach ($toko as $key => $value): ?>
                                <div class="single-blog">
                                <div class="blog-thumb">
                                    <img src="<?php echo base_url('uploads/toko/'.$value->foto) ?>" alt="" style="min-height:300px;max-height: 300px">
                                </div>
                                <div class="blog-details">
                                    <h4><?php echo $value->nama ?></h4>
                                    <p><?php echo substr($value->keterangan, 0,20)."..." ?></p>
                                    <a href="<?php echo base_url('Home/tokodetail/'.$this->uri->segment(3)."/".$value->id) ?>">Read More</a>
                                    <p class="blog-meta">Jenis : <a href="#"><?php echo $value->jenis ?></a></p>

                                </div>
                            </div>
                            <?php endforeach ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="feed-widget blog-feed mb50 wow fadeIn">
                        <h4>Berita Hangat</h4>
                        <div class="blog-list">
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <i class="fa fa-receipt fa-4x"></i>
                                </div>
                                <div class="blog-details">
                                    <h4><a href="#">Trending Topik</a></h4>
                                    <p>Berita ini berisikan topik - topik hangat yang menyajian informasi terkini</p>
                                </div>
                            </div>
							<?php foreach ($berita as $key => $value): ?>
								<div class="single-blog">
                                <div class="blog-thumb">
                                    <img src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="" style="min-height:300px;max-height: 300px">
                                </div>
                                <div class="blog-details">
                                    <h4><?php echo $value->judul ?></h4>
                                    <p><?php echo substr($value->konten,0,20).".. " ?> <a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3)."/".$value->id) ?>">Read More</a></p>
                                    <p class="blog-meta">Posted by <a href="#"><?php echo $value->author ?></a> at <a href="#"><?php echo $value->tanggal ?></a></p>
                                </div>
                            </div>
							<?php endforeach ?>
                            
                        </div>
                    </div>
                </div>
                <div class="hidden-md col-lg-4 col-sm-6 col-xs-12">
                    <div class="feed-widget blog-feed mb50 wow fadeIn">
                        <h4>Berita Hangat</h4>
                        <div class="blog-list">
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <i class="fa fa-hotel fa-4x"></i>
                                </div>
                                <div class="blog-details">
                                    <h4><a href="#">Penginapan</a></h4>
                                    <p></p>
                                </div>
                            </div>
                            <?php foreach ($penginapan as $key => $value): ?>
                                <div class="single-blog">
                                <div class="blog-thumb">
                                    <img src="<?php echo base_url('uploads/penginapan/'.$value->foto) ?>" alt="" style="min-height:300px;max-height: 300px">
                                </div>
                                <div class="blog-details">
                                    <h4><?php echo $value->nama ?></h4>
                                    <p><?php echo substr($value->keterangan,0,20).".. " ?> <a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3)."/".$value->id) ?>">Read More</a></p>
                                    <p class="blog-meta">
                                        <?php echo $value->alamat ?>
                                    </p>
                                    <p class="blog-meta">Penginapan</a></p>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="client-slider mt50 wow fadeIn">
                        <div class="single-client">
                            <img src="img/client/client-1.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-2.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-3.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-4.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-5.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-1.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-2.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-3.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-4.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AND FEED AREA END-->