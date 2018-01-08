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
												
												
												
												
												<li class="active"><span>1</span></li>
												
												
												
												
												<li><a href="/collections/all?page=2">2</a></li>
												
												
												
												<li>
													<a class="last hidden-xs" aria-label="Next" href="/collections/all?page=2">
														<span aria-hidden="true"><i class="fa fa-caret-right"></i></span>
													</a>
												</li>
												
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
								<form class="form-inline form-viewpro order_bar">
									<div class="form-group">
										<label>Sắp xếp: </label>
										<select class="form-control sort-by-script">
											<option value="default">Mặc định</option>
											<option value="price-asc">Giá tăng dần</option>
											<option value="price-desc">Giá giảm dần</option>
											<option value="alpha-asc">Từ A-Z</option>
											<option value="alpha-desc">Từ Z-A</option>
											<option value="created-asc">Cũ đến mới</option>
											<option value="created-desc">Mới đến cũ</option>
										</select>
									</div>
								</form>
							</div>
						</div>
					</div>
					
					<section class="products-view products-view-grid">
						<div class="products">
						<?php foreach ($product as $row): ?>	
							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 item lg4" >
								
								
								
								
								
								
								<div class="product-box product-grid-item">
									<div class="product-thumbnail">
										
										<a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
											<picture class="dp-flex">
												
											
												
											</picture>
										</a>
									</div>
									<div class="product-info">
										<h3 class="product-name text1line">
										<a href="/# title="<?php echo $row->name; ?>">
											<?php echo $row->name; ?>
										</a>
										</h3>
										
										<div class="price-box price-loop-style">
											
											
											
											<span class="special-price">
												<span class="price"><?php echo $row->price; ?></span>
											</span>
											<span class="old-price">
												<span class="price">
													
												</span>
											</span>
											
											
											
										</div>
										
										<div class="product-action-btn product-action">
											<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450253" enctype="multipart/form-data">
												<input class="hidden" type="hidden" name="variantId" value="15082636" />
												
												<button class="btn btn-cart addtocart btn-transition btn_choose_product choose-pro btn-accent" title="Chọn sản phẩm"  type="button" onclick="window.location.href='/lg-g-pro-lite-dual'" >
												<span><i class="fa fa-cog"></i> Tuỳ chọn</span>
												</button>
												
											</form>
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
												
												
												
												
												<li class="active"><span>1</span></li>
												
												
												
												
												<li><a href="/collections/all?page=2">2</a></li>
												
												
												
												<li>
													<a class="last hidden-xs" aria-label="Next" href="/collections/all?page=2">
														<span aria-hidden="true"><i class="fa fa-caret-right"></i></span>
													</a>
												</li>
												
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