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
			
			<!-- Main news -->
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
							$image = "upload/news/anh0.jpg";
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
							</a>-
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
			
			<!-- Hot news -->
			<aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				
				<div class="aside-item aside-articles">
					<div class="module-header">
						<h2 class="module-title title-style-2">
						<a class="padding-right-55" title="Tin tức nổi bật">
							Tin tức nổi bật
						</a>
						</h2>
					</div>
					<div class="module-content">
						
						<div class="owl-carousel owl-theme nav-enable nav-top" data-lg-items="1" data-md-items="1" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-nav="true" data-auto-play="true">
						
							<div class="item">
							<?php 
							
							foreach ($listNews as $news):?>
							<?php if($news->view > 400) { ?>
								<div class="artitle-item item-small">
									<div class="article-thumbnail">
									<?php 									
										$url = "news/detail/" . $news->id;
										$title = $news->title;
										$image = "upload/news/anh0.jpg";
										if (file_exists("upload/news/" . $news->image)) {
											$image = "upload/news/" . $news->image;
										
									}
									?>
										<a href="<?= site_url($url);?>" title="<?php echo $title?>">
											<picture>
												
												<source media="(min-width: 1200px)" srcset="<?php echo $image; ?>"/>
												<source media="(min-width: 992px) and (max-width: 1199px)" srcset="<?php echo $image; ?>"/>
												<source media="(min-width: 768px) and (max-width: 991px)" srcset="<?php echo $image; ?>"/>
												<source media="(min-width: 571px) and (max-width: 767px)" srcset="<?php echo $image; ?>"/>
												<source media="(min-width: 543px) and (max-width: 570px)" srcset="<?php echo $image; ?>"/>
												<source media="(min-width: 320px) and (max-width: 542px)" srcset="<?php echo $image; ?>"/>
												<source media="(min-width: 319px)" srcset="<?php echo $image; ?>"/>
												<img class="img-responsive" alt="<?php echo $title?>" src="<?php echo $image; ?>" />
												
											</picture>
										</a>
									</div>
									<div class="article-info">
										<h3 class="article-title text3line">
										<a href="<?= site_url($url);?>" title="<?php echo $title?>">
											<?php echo $title?>
										</a>
										</h3>
										<div class="entry-date">
											<?php echo mdate('%d-%m-%Y',$news->create_at); ?>
										</div>
									</div>
								</div>
								<?php } ?>
								<?php endforeach;?>	
							
							</div>
						</div>
						
					</div>
				</div>
				<!-- Tag -->
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