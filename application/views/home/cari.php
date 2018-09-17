		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
	
								<h1 class="text-white">Hasil pencarian</h1>
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
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Hasil</h4>
								<?php if(!empty($result)){?>
								<?php foreach($result as $row){?>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php echo base_url()?>/assets/foto/berita/<?php echo $row->foto ?>">
										</div>
									</div>
									<div class="col-lg-7 post-right">
										<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>">
											<h4><?php echo $row->judul ?>.</h4>
										</a>
										<ul class="meta">
											<li><a href="bh"><span class="lnr lnr-user"></span><?php echo $row->penulis ?></a></li>
											<li><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal ?></li>
										</ul>
										<p class="excert">
											<?php echo substr($row->berita,0, 150)?>
										</p>
									</div>
								</div>
								<?php } ?>
								<?php }else{ echo '<h3>record tidak ada !</h3>';}?>
							</div>
							<!-- End latest-post Area -->
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
		<?php include 'layout/footer.php';?>