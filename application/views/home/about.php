		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Tentang kami</h1>
								<p class="text-white link-nav"><a href="<?php echo base_url()?>home/tentang">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="<?php echo base_url()?>home/tentang">Tentang kami </a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
		</div>
		<!-- Start service Area -->
		<section class="service-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="single-service d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-sun"></span>
							</div>
							<div class="details">
								<a href="#">
									<h4>Berita terpercaya</h4>
								</a>
								<p>
									Bagi kami mengumpulkan informasi yang valid dan berita benar adalah prioritas kami.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-service d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-code"></span>
							</div>
							<div class="details">
								<a href="#">
									<h4>Website</h4>
								</a>
								<p>
									Menyediakan keperluan pengunjung dan beberapa berita 
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-service d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-clock"></span>
							</div>
							<div class="details">
								<a href="#">
									<h4>Fast response</h4>
								</a>
								<p>
									Menyediakan berita ter update yang kami cari adalah prioritas kami
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End service Area -->
		
		<!-- Start info Area -->
		<section>
			<div class="container">
				<div class="row align-items-center justify-content-end">
					<?php foreach($tentang as $row){?>
					<div class="col-lg-12 no-padding info-right">
						<h1>
						  <?php echo $row->judul ?>
						</h1>
						<p>
							 <?php echo $row->tentang ?>
						</p>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- End info Area -->
		<!-- Start brands Area -->
		<section class="brands-area pb-60 pt-60">
			<div class="container no-padding">
				<div class="brand-wrap">
					<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
						<?php foreach($part as $row){?>
						<div class="col single-brand">
							<a href="<?php echo $row->link ?>"><img class="mx-auto" src="<?php echo base_url()?>assets/foto/partner/<?php echo $row->foto ?>" alt="..." width="100" height="100"></a>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</section>
		<!-- End brands Area -->
		<?php include 'layout/footer.php';?>