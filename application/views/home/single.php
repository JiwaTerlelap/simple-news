		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white"><?php echo $baca->judul;?></h1>
								<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="<?php echo base_url()?>detail/baca/">berita </a><span class="lnr lnr-arrow-right"></span><a href="<?php echo base_url()?>detail/baca/<?php echo $baca->slug_berita ?>"><?php echo $baca->judul;?></a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="feature-img-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $baca->foto?>" alt="">
								</div>
								<div class="content-wrap">
									<ul class="tags mt-10">
										<li><a><?php echo $baca->kategori;?></a></li>
									</ul>
									<a>
										<h3><?php echo $baca->judul;?></h3>
									</a>
									<ul class="meta pb-20">
										<li><a href="#"><span class="lnr lnr-user"></span><?php echo $baca->penulis;?></a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $baca->tanggal;?></a></li>
									</ul>
								  <?php echo $baca->berita;?>
								
							</div>
							<div id="vc-feelback-main" data-access-token="70c193809d8e4b768a7df584cf50257f" data-display-type="4"></div>
							<div class="sharethis-inline-share-buttons"></div>
							 <div id="disqus_thread"></div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
							<div class="single-sidebar-widget editors-pick-widget">
								<h6 class="title">Berita lainya</h6>
								<?php foreach($berita->result_object() as $row){?>
								<div class="editors-pick-post">
									<div class="feature-img-wrap relative">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="">
										</div>
										<ul class="tags">
											<li><a href="#"><?php echo $row->kategori?></a></li>
										</ul>
									</div>
									<div class="details">
										<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
											<h4 class="mt-20"><?php echo $row->judul?>.</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
										</ul>
										<p class="excert">
										<?php echo substr($row->berita,0 ,100)?>
										</p>
									</div>
									<?php } ?>
									<div class="post-lists">
										<?php foreach($berita_lain->result_object() as $row){?>
										<div class="single-post d-flex flex-row">
											<div class="thumb">
												<img src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" width="100" height="100">
											</div>
											<div class="detail">
												<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/"><h6><?php echo $row->judul?></h6></a>
												<ul class="meta">
													<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
												</ul>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="single-sidebar-widget ads-widget">
								<img class="img-fluid" src="<?php echo base_url()?>img/sidebar-ads.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>
	<?php include 'layout/footer.php'; ?>