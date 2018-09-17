				<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<?php foreach($berita_utama->result_object() as $row){?>
						<div class="col-lg-8 top-post-left">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="">
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><a href="<?php echo base_url()?>detail/kategori/<?php echo $row->slug_kategori?>"><?php echo $row->kategori?></a></li>
								</ul>
								<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
									<h3><?php echo $row->judul?></h3>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
									<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
								</ul>
							</div>
						</div>
						<?php } ?>
						<div class="col-lg-4 top-post-right">
							<?php foreach($berita_right->result_object() as $row){?>
							<div class="single-top-post">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
										<li><a href="<?php echo base_url()?>detail/kategori/<?php echo $row->slug_kategori?>"><?php echo $row->kategori?></a></li>
									</ul>
									<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
										<h4><?php echo $row->judul?></h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
									</ul>
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<?php foreach($berita_utama->result() as $row){?>
								<h6><span>Berita terkini :</span>   <a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>"><?php echo $row->judul?></a></h6>
								<?php }?>
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
								<h4 class="cat-title">Berita Terbaru</h4>
								<?php foreach($berita_baru->result_object() as $row){?>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="">
										</div>
										<ul class="tags">
											<li><a href="<?php echo base_url()?>detail/kategori/<?php echo $row->slug_kategori?>"><?php echo $row->kategori?></a></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
											<h4><?php echo $row->judul?>.</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
										</ul>
										<p class="excert">
											<?php echo substr($row->berita,0 ,150)?>
										</p>
									</div>
								</div>
								<?php } ?>
							</div>
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<a href="<?php echo $iklan->link; ?>"><img class="img-fluid" src="<?php echo base_url()?>assets/foto/iklan/<?php echo $iklan->foto; ?>" alt=""></a>
							</div>
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
							<div class="popular-post-wrap">
								<h4 class="title">Berita</h4>
								<?php foreach($berita_utama->result_object() as $row){?>
								<div class="feature-post relative">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="">
									</div>
									<div class="details">
										<ul class="tags">
											<li><a href="<?php echo base_url()?>detail/kategori/<?php echo $row->slug_kategori?>"><?php echo $row->kategori?></a></li>
										</ul>
										<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
											<h3><?php echo $row->judul?></h3>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
										</ul>
									</div>
								</div>
								<?php } ?>
								<div class="row mt-20 medium-gutters">
									<?php foreach($berita->result_object() as $row){?>
									<div class="col-lg-6 single-popular-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="">
											</div>
											<ul class="tags">
												<li><a href="<?php echo base_url()?>detail/kategori/<?php echo $row->slug_kategori?>"><?php echo $row->kategori?></a></li>
											</ul>
										</div>
										<div class="details">
											<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
												<h4><?php echo $row->judul?>.</h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
											</ul>
											<p class="excert">
												<?php echo substr($row->berita,0 ,100);?>
											</p>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							<!-- End popular-post Area -->
							<!-- Start relavent-story-post Area -->
							<div class="relavent-story-post-wrap mt-30">
								<h4 class="title">Berita lainnya</h4>
								<div class="relavent-story-list-wrap">
									<?php foreach($berita->result_object() as $row){?>
									<div class="single-relavent-post row align-items-center">
										<div class="col-lg-5 post-left">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="">
											</div>
											<ul class="tags">
												<li><a href="<?php echo base_url()?>detail/kategori/<?php echo $row->slug_kategori?>"><?php echo $row->kategori?></a></li>
											</ul>
										</div>
										<div class="col-lg-7 post-right">
											<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
												<h4><?php echo $row->judul?></h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
											</ul>
											<p class="excert">
												<?php echo substr($row->berita,0 ,100);?>
											</p>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							<!-- End relavent-story-post Area -->
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Berita lainya</h6>
									<div class="editors-pick-post">
										<?php foreach($berita_utama->result_object() as $row){?>
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="">
											</div>
											<ul class="tags">
												<li><a href="<?php echo base_url()?>detail/kategori/<?php echo $row->slug_kategori?>"><?php echo $row->kategori?></a></li>
											</ul>
										</div>
										<div class="details">
											<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
												<h4 class="mt-20"><?php echo $row->judul?></h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
											</ul>
											<p class="excert">
												<?php echo substr($row->berita, 0, 55)?>
											</p>
										</div>
										<?php } ?>
										....
										<?php foreach($berita->result_object() as $row){?>
										<div class="post-lists">
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="" width="100" height="100">
												</div>
												<div class="detail">
													<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/"><h6><?php echo $row->judul?></h6></a>
													<ul class="meta">
														<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
													</ul>
												</div>
											</div>
										</div>
										<?php }?>
									</div>
								 </div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<img class="img-fluid" src="<?php echo base_url()?>img/sidebar-ads.jpg" alt="">
								</div>
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title">Paling populer</h6>
									<?php foreach($berita1->result_object() as $row){?> 
									<div class="single-list flex-row d-flex">
										<div class="thumb">
											<img src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="" width="100" height="100">
										</div>
										<div class="details">
											<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>/">
												<h6><?php echo $row->judul?></h6>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
											</ul>
										</div>
									</div>
									<?php }?>
								</div>
								<div class="single-sidebar-widget social-network-widget">
									<h6 class="title">Social Networks</h6>
									<ul class="social-list">
										<li class="d-flex justify-content-between align-items-center fb">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-facebook" aria-hidden="true"></i>
												<p>983 Likes</p>
											</div>
											<a href="#">Like our page</a>
										</li>
										<li class="d-flex justify-content-between align-items-center tw">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-twitter" aria-hidden="true"></i>
												<p>983 Followers</p>
											</div>
											<a href="#">Follow Us</a>
										</li>
										<li class="d-flex justify-content-between align-items-center yt">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
												<p>983 Subscriber</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
										<li class="d-flex justify-content-between align-items-center rs">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-rss" aria-hidden="true"></i>
												<p>983 Subscribe</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
<?php include 'layout/footer.php';?>