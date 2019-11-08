<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creative Portfolio & Agency Template is a simple Smooth Personal Portfolio and Agency Based Template" />
    <meta name="keywords" content="Personal, Portfolio, Agency, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title><?php echo $desawisata->nama ?></title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url('assets_template/template1/') ?>img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets_template/template1/') ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_template/template1/') ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_template/template1/') ?>css/stellarnav.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_template/template1/') ?>css/progressbar.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_template/template1/') ?>css/owl.carousel.css">
    <link href="<?php echo base_url('assets_template/template1/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets_template/template1/') ?>css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="<?php echo base_url('assets_template/template1/') ?>style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets_template/template1/') ?>css/responsive.css" rel="stylesheet">

    <script src="<?php echo base_url('assets_template/template1/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="<?php echo base_url('uploads/logo/'.$config_page->logo_img) ?>" alt="logo" style="max-height: 50px"></a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li class="active"><a href="<?php echo base_url('Home/homee/'.$this->uri->segment(3)) ?>">home</a></li>
                                <li><a href="<?php echo base_url('Home/about/'.$this->uri->segment(3)) ?>">About</a></li>
                                <li><a href="<?php echo base_url('Home/agenda/'.$this->uri->segment(3)) ?>">Agenda</a></li>
                                <li><a href="<?php echo base_url('Home/wisata/'.$this->uri->segment(3)) ?>">Wisata</a></li>
                                <li><a href="<?php echo base_url('Home/galeri/'.$this->uri->segment(3)) ?>">Galeri</a></li>
                                <li><a href="<?php echo base_url('Home/berita/'.$this->uri->segment(3)) ?>">Berita</a></li>
                                <li><a href="<?php echo base_url('Home/kontak/'.$this->uri->segment(3)) ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
    </header>
    <!--END TOP AREA-->