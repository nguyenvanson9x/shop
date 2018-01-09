<section class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					<li class="home">
						<a itemprop="url" href="/" title="Trang chủ">
							<span itemprop="title">Trang chủ</span>
						</a>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</li>
					
					
					<li>
						<strong itemprop="title">Tin tức</strong>
					</li>
					
					
					
					
				</ul>
			</div>
		</div>
	</div>
</section>


<div class="blog-article-template"  itemscope itemtype="http://schema.org/Blog">
	<meta itemprop="name" content="Tin tức">
	<meta itemprop="description" content="Chủ đề không có mô tả">
	<div class="container">
		<div class="row">
			<section class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<div class="module-header">
					<h1 class="title-head">
					Tin tức
					</h1>
				</div>
				<div class="module-content">
					
					
					<div class="articles-list">
					<?php foreach ($listNews as $news):?>
						<div class="artitle-item item-large">
							<div class="article-thumbnail">
								<?php 
								$url = "news/detail/" . $news->id;
								$title = $news->title;

								$image = "upload/news/1-7d48c.jpg";
								if (file_exists("upload/news/" . $news->image)) {
									$image = "upload/news/" . $news->image;
								}
								?>
								<a href="<?= site_url($url);?>" title="<?php echo $title; ?>">
									<picture>
										
										<source media="(min-width: 1200px)" srcset="<?php echo $image; ?>"/>
										<source media="(min-width: 992px) and (max-width: 1199px)" srcset="<?php echo $image; ?>"/>
										<source media="(min-width: 768px) and (max-width: 991px)" srcset="<?php echo $image; ?>"/>
										<source media="(min-width: 631px) and (max-width: 767px)" srcset="<?php echo $image; ?>"/>
										<source media="(min-width: 511px) and (max-width: 630px)" srcset="<?php echo $image; ?>"/>
										<source media="(min-width: 320px) and (max-width: 510px)" srcset="<?php echo $image; ?>"/>
										<source media="(min-width: 319px)" srcset="<?php echo $image; ?>"/>
										<img class="img-responsive" alt="<?php echo $title; ?>" src="<?php echo $image; ?>" />
										
									</picture>
								</a>
							</div>
							<div class="article-info">
								<h3 class="article-title text2line">
								<a href="<?= site_url($url);?>" title="<?php echo $title; ?>">
									<?php echo $title;?>
								</a>
								</h3>
								<div class="entry-date">
									<?php echo mdate('%d-%m-%Y',$news->create_at); ?>
								</div>
								<div class="article-description text3line">
									<?php echo $news->content;?>
								</div>
								<div class="readmore">
									<a href="<?= site_url($url);?>"	title="<??>">Xem thêm <i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					<?php endforeach;?>
						
					</div>
					
					
					
				</div>
			</section>
			<aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				
				<div class="aside-item aside-articles">
					<div class="module-header">
						<h2 class="module-title title-style-2">
						<a class="padding-right-55" href="tin-tuc" title="Tin tức nổi bật">
							Tin tức nổi bật
						</a>
						</h2>
					</div>
					<div class="module-content">
						
						<div class="owl-carousel owl-theme nav-enable nav-top" data-lg-items="1" data-md-items="1" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-nav="true" data-auto-play="true">
							
							
							
							
							
							
							<div class="item">
								
								<div class="artitle-item item-small">
									<div class="article-thumbnail">
										<a href="/bai-viet-mau-3" title="Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP">
											<picture>
												
												<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/xa1-1.jpg?v=1514102684720"/>
												<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/xa1-1.jpg?v=1514102684720"/>
												<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/articles/xa1-1.jpg?v=1514102684720"/>
												<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/xa1-1.jpg?v=1514102684720"/>
												<source media="(min-width: 543px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/xa1-1.jpg?v=1514102684720"/>
												<source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/xa1-1.jpg?v=1514102684720"/>
												<source media="(min-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/xa1-1.jpg?v=1514102684720"/>
												<img class="img-responsive" alt="sony-xperia-xa1-va-xa1-ultra-nang-cap-cau-hinh-thiet-ke-vuong-van-camera-23mp" src="//bizweb.dktcdn.net/100/285/622/articles/xa1-1.jpg?v=1514102684720" />
												
											</picture>
										</a>
									</div>
									<div class="article-info">
										<h3 class="article-title text3line">
										<a href="/bai-viet-mau-3" title="Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP">
											Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP
										</a>
										</h3>
										<div class="entry-date">
											23/02/2017
										</div>
									</div>
								</div>
								
								
								
								
								
								
								
								<div class="artitle-item item-small">
									<div class="article-thumbnail">
										<a href="/bai-viet-mau-2" title="Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p">
											<picture>
												
												<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243"/>
												<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243"/>
												<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243"/>
												<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243"/>
												<source media="(min-width: 543px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243"/>
												<source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243"/>
												<source media="(min-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243"/>
												<img class="img-responsive" alt="sony-xperia-xzs-giong-xz-premium-nho-hon-camera-giong-nhau-man-hinh-1080p" src="//bizweb.dktcdn.net/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243" />
												
											</picture>
										</a>
									</div>
									<div class="article-info">
										<h3 class="article-title text3line">
										<a href="/bai-viet-mau-2" title="Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p">
											Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p
										</a>
										</h3>
										<div class="entry-date">
											23/02/2017
										</div>
									</div>
								</div>
								
								
								
								
								
								
								
								
								<!-- chan le = true -->
								
								
								
								<div class="artitle-item item-small">
									<div class="article-thumbnail">
										<a href="/bai-viet-mau" title="Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo">
											<picture>
												
												<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/galaxy-s8.jpg?v=1514102685737"/>
												<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/galaxy-s8.jpg?v=1514102685737"/>
												<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/articles/galaxy-s8.jpg?v=1514102685737"/>
												<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/galaxy-s8.jpg?v=1514102685737"/>
												<source media="(min-width: 543px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/galaxy-s8.jpg?v=1514102685737"/>
												<source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/galaxy-s8.jpg?v=1514102685737"/>
												<source media="(min-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/articles/galaxy-s8.jpg?v=1514102685737"/>
												<img class="img-responsive" alt="galaxy-s8-se-duoc-trang-bi-cong-nghe-cam-ung-3d-tren-nut-home-ao" src="//bizweb.dktcdn.net/100/285/622/articles/galaxy-s8.jpg?v=1514102685737" />
												
											</picture>
										</a>
									</div>
									<div class="article-info">
										<h3 class="article-title text3line">
										<a href="/bai-viet-mau" title="Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo">
											Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo
										</a>
										</h3>
										<div class="entry-date">
											29/05/2015
										</div>
									</div>
								</div>
								
							</div>
							
							
							<!-- ADD DIV -->
							
							
						</div>
						
					</div>
				</div>
				<div class="aside-item article-tags">
					<div class="module-header">
						<h2 class="module-title title-style-2">
						<span>
							Tags bài viết
						</span>
						</h2>
						<div class="module-content">
							
							<div class="tags-list">
								
								<a href="/blogs/all/tagged/galaxy" class="tag btn-transition">
									<span>galaxy</span>
								</a>
								
							</div>
							
						</div>
					</div>
				</div>
				<div class="aside-item blog-banner">
					<div class="module-header">
						<h2 class="module-title title-style-2">
						<span>Quảng cáo</span>
						</h2>
					</div>
					<div class="module-content">
						<a href="" title="Quảng cáo">
							<img class="img-responsive" alt="quang-cao" src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/blog_aside_banner.png?1514103963009">
						</a>
					</div>
				</div>
				<div class="aside-item aside-rte">
					<div class="module-header">
						<h2 class="module-title title-style-2">
						<span>Kính chào</span>
						</h2>
					</div>
					<div class="module-content">
						<div class="rte-content">
							Chào mừng quý khách tới với cửa hàng của chúng tôi. Hãy liên hệ theo địa chỉ cửa hàng ở bên để có thể được tư vấn và chăm sóc một cách tốt nhất. Xin cảm ơn.
						</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>