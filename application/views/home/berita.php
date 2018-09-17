		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Berita terbaru</h1>
								<p class="text-white link-nav"><a href="<?php echo base_url()?>home">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="<?php echo base_url()?>home/berita">Berita terbaru </a></p>
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
								<h4 class="cat-title">Berita terbaru</h4>
								<div class="single-latest-post row align-items-center" id="berita">
								</div>
								<div class="load-more">
									<a role="button" class="primary-btn" id="load_more" data-val ="0">Load More Posts</a>
								</div>
								
							</div>
							<!-- End latest-post Area -->
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Berita lainnya</h6>
									<?php foreach($news1->result() as $row){?>
									<div class="editors-pick-post">
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
											<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>">
												<h4 class="mt-20"><?php echo $row->judul?>.</h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span><?php echo $row->penulis?></a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
											</ul>
											<p class="excert">
												<?php echo substr($row->judul,0 ,100)?>
											</p>
										</div>
                                        <?php }?>
										<div class="post-lists">
											<?php foreach($news->result() as $row){?>
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="" width="100">
												</div>
												<div class="detail">
													<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>"><h6><?php echo $row->judul?></h6></a>
													<ul class="meta">
														<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row->tanggal?></a></li>
														<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
													</ul>
												</div>
											</div>
											<?php }?>
										</div>
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<a href="<?php echo $iklan1->link; ?>"><img class="img-fluid" src="<?php echo base_url()?>assets/foto/iklan/<?php echo $iklan1->foto; ?>" alt=""></a>
								</div>
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title">Terpopuler</h6>
									<?php foreach($news->result() as $row){?>
									<div class="single-list flex-row d-flex">
										<div class="thumb">
											<img src="<?php echo base_url()?>assets/foto/berita/<?php echo $row->foto?>" alt="" width="100">
										</div>
										<div class="details">
											<a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_berita?>">
												<h6><?php echo $row->judul?></h6>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
											</ul>
										</div>
									</div>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
				<script>
        $(document).ready(function(){
            berita(0);
            $("#load_more").click(function(e){
                e.preventDefault();
                var page = $(this).data('val');
                berita(page);
            });
        });
        var url = 'http://www.galehrizky.me/'
        var berita = function(page){
            $("#load_more").show();
            $.ajax({
                url:  url+"home/get_berita",
                type:'GET',
                data: {page:page}
            }).done(function(response){
                $("#berita").append(response);
                $('#load_more').data('val', ($('#load_more').data('val')+1));
                if(response == ""){
                    $("#load_more").hide();
                }
            });
        };      
    </script>
		<?php include 'layout/footer.php';?>