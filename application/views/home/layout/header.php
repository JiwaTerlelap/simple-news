<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="http://icons.iconarchive.com/icons/tpdkdesign.net/refresh-cl/256/System-Shortcut-icon.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title><?php echo $title ?></title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/nice-select.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/jquery-ui.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/main.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	
	</head>
	<body>
		<header>
			
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>085817836592</span></a></li>
								<li><a href="mailto:galehdotid@gmail.com"><span class="lnr lnr-envelope"></span><span>galehdotid@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="<?php echo base_url()?>home">
								<img class="img-fluid" src="<?php echo base_url()?>assets/home/img/logo.JPG" alt="">
							</a>	
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<a href="<?php echo $iklan->link; ?>"><img class="img-fluid" src="<?php echo base_url()?>assets/foto/iklan/<?php echo $iklan->foto; ?>" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="<?php echo base_url()?>home">Home</a></li>
							<li><a href="<?php echo base_url()?>home/berita">Berita Terbaru</a></li>
							<li class="menu-has-children"><a href="">kategori</a>
							<ul>
								<?php foreach($kategori->result_object() as $row){?>
								<li><a href="<?php echo base_url()?>detail/kategori/<?php echo $row->slug_kategori?>"><?php echo $row->kategori?></a></li>
								<?php } ?>
							</ul>
						</li>
						<li><a href="<?php echo base_url()?>home/tentang">Tentang</a></li>
						<li><a href="<?php echo base_url()?>home/kontak">Kontak</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<form class="Search" method="post" action="<?php echo base_url()?>cari/cari">
							<input type="text" class="form-control Search-box" name="cari" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</header>