<!--BLOG AND FEED AREA-->
    <section class="blog-and-feed-area section-padding white-gray-bg" id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Berita</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                    <div class="feed-widget twitter-feed mb50 wow fadeIn">
                        <h4>Twitter Feed</h4>
                        <ul>
                            <li>
                                <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                                <a href="#">@_sumonrahman</a>: Lorem ipsum dolors sit amets sums consectetur adipicing elit sed do eiusmod eset tempor incididunt ut labore.
                            </li>
                            <li>
                                <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                                <a href="#">@_sumonrahman</a>: Lorem ipsum dolors sit amets sums consectetur adipicing elit sed do eiusmod eset tempor incididunt ut labore.
                            </li>
                            <li>
                                <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                                <a href="#">@_sumonrahman</a>: Lorem ipsum dolors sit amets sums consectetur adipicing elit sed do eiusmod eset tempor incididunt ut labore.
                            </li>
                            <li>
                                <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                                <a href="#">@_sumonrahman</a>: Lorem ipsum dolors sit amets sums consectetur adipicing elit sed do eiusmod eset tempor incididunt ut labore.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="feed-widget blog-feed mb50 wow fadeIn">
                        <h4>Blog Feed</h4>
                        <div class="blog-list">
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <img src="img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="blog-details">
                                    <h4><a href="#">Berita Hangat</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                    <p class="blog-meta">Posted by <a href="#">admin</a> at <a href="#">04 Feb, 2017</a></p>
                                </div>
                            </div>
							<?php foreach ($berita as $key => $value): ?>
								<div class="single-blog">
                                <div class="blog-thumb">
                                    <img src="<?php echo base_url('uploads/berita/'.$value->foto) ?>" alt="">
                                </div>
                                <div class="blog-details">
                                    <a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3)."/".$value->id) ?>">
                            <h1><?php echo $value->judul ?></h1>
                        </a>
                                    <p><?php echo $value->konten ?><a href="<?php echo base_url('Home/beritadetail/'.$this->uri->segment(3)."/".$value->id) ?>" style="color: blue"> Read More</a></p>
                                    <p class="blog-meta">Posted by <a href=""><?php echo $value->author ?></a> at <a href="#"><?php echo $value->tanggal ?></a></p>
                                </div>
                            </div>
							<?php endforeach ?>
                            
                        </div>
                    </div>
                </div>
                <div class="hidden-md col-lg-4 col-sm-6 col-xs-12">
                    <div class="feed-widget insta-feed wow fadeIn">
                        <h4>Instagram Feed</h4>
                        <ul>
                            <li>
                                <a href="#"><img src="img/instagram/insta_1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_5.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_6.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_7.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_8.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_9.jpg" alt=""></a>
                            </li>
                        </ul>
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