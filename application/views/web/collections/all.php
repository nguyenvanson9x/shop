<section class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					<li class="home">
						<a itemprop="url" href="<?= site_url();?>" title="Trang chủ">
							<span itemprop="title">Trang chủ</span>
						</a>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</li>
					
					
					<li>
						<strong>
						<span itemprop="title"> Tất cả sản phẩm</span>
						</strong>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="collection-template">
	
	
	<div class="container">
		<div class="row">
			<section class="main_container collection col-xs-12 col-sm-12 col-md-9 col-lg-9 col-md-push-3 col-lg-push-3">
				<div class="collection_header">
					<h1 class="title-head">
					Tất cả sản phẩm
					</h1>
				</div>
				<div class="category-products products">
					
					
					<div class="sortPagiBar">
						<div class="row">
							<div class="hidden-xs col-sm-8 col-md-8 col-lg-9">
								
								<div class="page-pagination-parent">
									<div class="filter-right">
										
										<div class="page-pagination pagination-wrapper">
											<ul class="pagination">
												
												<?php foreach ($links as $link) {
												echo "<li>". $link."</li>";
												} ?>
												
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
					<section class="products-view products-view-grid">
						<div class="products">
							<?php foreach ($product as $row): ?>
							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 item lg4" >
								<div class="product-box product-grid-item">
									<div class="product-thumbnail">
										
										<a href="<?php echo site_url('product/detail/'.$row->id)?>" title="<?php echo $row->name; ?>">
											<picture class="dp-flex">
												<img class="img-responsive" src="
												
												<?php
													if(file_exists('upload/product/'.$row->image) && $row->image != '')
													{
														echo base_url('upload/product/'.$row->image);
													}
													else
														{
														echo base_url('upload/unknown.png');
													}
												?>
												" alt="<?php echo $row->name; ?>"/>
												
												
											</picture>
										</a>
									</div>
									<div class="product-info">
										<h3 class="product-name text1line">
										<a href="<?php echo site_url('product/detail/'.$row->id)?>" title="<?php echo $row->name; ?>">
											<?php echo $row->name; ?>
										</a>
										</h3>
										
										<div class="price-box price-loop-style">
											
											
											<?php if ($row->discount != 0 && $row->expire_discount > now()) {?>
											<span class="special-price">
												<span class="price"><?php echo number_format(($row->price-($row->price*$row->discount/100)),0,',','.'); ?> đ</span>
											</span>
											<span class="old-price">
												<span class="price">
													<?php echo number_format($row->price,0,',','.'); ?> đ
												</span>
											</span>
											<?php } else { ?>
											<span class="special-price">
												<span class="price">
													<?php echo number_format($row->price,0,',','.'); ?> đ
												</span>
											</span>
											<?php } ?>
											
											
										</div>
									</div>
								</div>
							</div>
							
							<?php endforeach; ?>
							
							
							
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="page-pagination-parent">
									<div class="filter-right">
										
										<div class="page-pagination pagination-wrapper">
											<ul class="pagination">
												
												
											</ul>
										</div>
										
									</div>
								</div>
							</div>
							
						</section>
						
						
					</div>
				</section>
				<aside class="sidebar left-content col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-pull-9 col-lg-pull-9">
					
					<div class="aside-item sidebar_menu">
						<div class="sidebar-menu-title module-header">
							<h2 class="module-title title-style-1">
							<span>
								<i class="fa fa-bars"></i> Danh mục sản phẩm
							</span>
							</h2>
						</div>
						<div class="sidebar-menu-content module-content">
							<div class="sidebar-linklists">
								<ul>
									
									<li class="menu-item collection-sidebar-menu active">
										<a class="ajaxLayer" href="<?= site_url('collections/all')?>" title="Tất cả sản phẩm">
											<span>Tất cả sản phẩm</span>
										</a>
										
									</li>
									
									<li class="menu-item collection-sidebar-menu">
										<a class="ajaxLayer" href="<?= site_url('collections/new')?>" title="Sản phẩm mới">
											<span>Sản phẩm mới</span>
										</a>
										
									</li>
									
									<li class="menu-item collection-sidebar-menu">
										<a class="ajaxLayer" href="<?= site_url('collections/hot')?>" title="Sản phẩm nổi bật">
											<span>Sản phẩm nổi bật</span>
										</a>
										
									</li>
									
									<li class="menu-item collection-sidebar-menu">
										<a class="ajaxLayer" href="<?= site_url('collections/discount')?>" title="Sản phẩm khuyến mãi">
											<span>Sản phẩm khuyến mãi</span>
										</a>
										
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>