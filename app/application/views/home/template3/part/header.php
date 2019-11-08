<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Maxitechture</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>css/style.css">
        <link rel="stylesheet" href="<?php echo base_url('assets_template/maxitechture/maxitechture/') ?>css/responsive.css">
    </head>
    <body data-spy="scroll" data-target="#mainNav" data-offset="70">
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="<?php echo base_url('uploads/logo/'.$config_page->logo_img) ?>" alt="" style="min-height: 50px;max-height: 50px;"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="<?php echo base_url('Home/homee/'.$this->uri->segment(3)) ?>">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('Home/about/'.$this->uri->segment(3)) ?>">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('Home/galeri/'.$this->uri->segment(3)) ?>">Galeri</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('Home/agenda/'.$this->uri->segment(3)) ?>">Agenda</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('Home/wisata/'.$this->uri->segment(3)) ?>">Wisata/Penginapan/Toko</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('Home/berita/'.$this->uri->segment(3)) ?>">Berita</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url('Home/kontak/'.$this->uri->segment(3)) ?>">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->