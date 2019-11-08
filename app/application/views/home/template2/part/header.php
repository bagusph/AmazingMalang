	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?php echo base_url('assets_template/template2/') ?>img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title><?php echo $desawisata->nama ?></title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url('assets_template/template2/') ?>css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url('assets_template/template2/') ?>css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url('assets_template/template2/') ?>css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url('assets_template/template2/') ?>css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url('assets_template/template2/') ?>css/nice-select.css">					
			<link rel="stylesheet" href="<?php echo base_url('assets_template/template2/') ?>css/animate.min.css">
			<link rel="stylesheet" href="<?php echo base_url('assets_template/template2/') ?>css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url('assets_template/template2/') ?>css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			  	<div class="container header-top">
			  		<div class="row">
				  		<div class="col-6 top-head-left">
				  			<ul>
				  				<li><a href="#">Visit Us</a></li>
				  				<li><a href="#">Buy Ticket</a></li>
				  			</ul>
				  		</div>
				  		<div class="col-6 top-head-right">
				  			<ul>
		  						<li><a href="<?php echo $config_page->sosial_facebook ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $config_page->sosial_instagram ?>"><i class="fa fa-instagram"></i></a></li>
								<li><a href="<?php echo $config_page->sosial_twitter ?>"><i class="fa fa-twitter"></i></a></li>
								
				  			</ul>
				  		</div>			  			
			  		</div>
			  	</div>
			  	<hr>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href=""><img src="<?php echo base_url('uploads/logo/'.$config_page->logo_img) ?>" alt="" title="" style="max-height: 50px"/></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="<?php echo base_url('Home/homee/'.$this->uri->segment(3)) ?>">Home</a></li>
				          <li><a href="<?php echo base_url('Home/about/'.$this->uri->segment(3)) ?>">About</a></li>
				          <li><a href="<?php echo base_url('Home/galeri/'.$this->uri->segment(3)) ?>">Galeri</a></li>
				          <li><a href="<?php echo base_url('Home/agenda/'.$this->uri->segment(3)) ?>">Agenda</a></li>
				          <li><a href="<?php echo base_url('Home/wisata/'.$this->uri->segment(3)) ?>">Wisata/Penginapan/Toko</a></li>
				          <li><a href="<?php echo base_url('Home/berita/'.$this->uri->segment(3)) ?>">Berita</a></li>
				          <li><a href="<?php echo base_url('Home/kontak/'.$this->uri->segment(3)) ?>">Kontak</a></li>
				          <li class="menu-has-children"><a href="">Link</a>
				            <ul>
				              <li><a href="blog-single.html">Blog Single</a></li>
				              <li><a href="category.html">Category</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li>			          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
