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
						<a itemprop="url" href="/san-pham-noi-bat">
							<span itemprop="title">Sản phẩm</span>
						</a>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</li>
					
					<li>
						<strong>
						<span itemprop="title"><?php echo $product->name; ?></span>
						</strong>
						<li>
							
							
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		
		<section class="product-template product" itemscope itemtype="http://schema.org/Product">
			<meta itemprop="url" content="//mobilestore123.bizwebvietnam.net/lg-g-pro-lite-dual">
			<meta itemprop="image" content="//bizweb.dktcdn.net/thumb/grande/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833">
			<meta itemprop="description" content="">
			<meta itemprop="name" content="<?php echo $product->name; ?>">
			
			<div class="container">
				<div class="row">
					<div class="details-product">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 images-pro">
							<div class="large-image">
								<a href="//bizweb.dktcdn.net/thumb/1024x1024/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833" class="large_image_url checkurl dp-flex" data-rel="prettyPhoto[product-gallery]">
									
									<img id="zoom_01" class="img-responsive" src="
									
									<?php
										if(file_exists('upload/product/'.$product->image))
										{
											echo base_url('upload/product/'.$product->image);
										}
										else
											{
											echo base_url('upload/unknown.png');
										}
									?>
									" alt="<?php echo $product->name; ?>">
									
								</a>
							</div>
							
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 details-pro">
							<h1 class="title-head"><?php echo $product->name; ?></h1>
							
							<div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">
								
								
								<?php if ($product->discount != 0 && $product->expire_discount > now()) {?>
								<span class="special-price">
									<span class="price" itemprop="price"><?php echo number_format(($product->price-($product->price*$product->discount/100)),0,',','.'); ?></span>
									<meta itemprop="priceCurrency" content="VND">
								</span>
								<span class="old-price">
									<span class="price" itemprop="priceSpecification">
										<?php echo number_format($product->price,0,',','.'); ?>
									</span>
									<meta itemprop="priceCurrency" content="VND">
								</span>
								<?php } else { ?>
								<span class="special-price">
									<span class="price" itemprop="priceSpecification">
										<?php echo number_format($product->price,0,',','.'); ?>
									</span>
									<meta itemprop="priceCurrency" content="VND">
								</span>
								<?php } ?>
							</div>
							
							<label>
								<strong>Tổng quan</strong>
							</label>
							<div class="product-summary product_description">
								<div class="rte description">
									
									<?php echo $product->content; ?>
									
								</div>
							</div>
							
							<div class="form-product">
								<form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="form-inline">
									
									<div class="form-group product_quantity ">
										<label class="form-control-label">Số lượng</label>
										<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;" class="reduced btn btn-ipnb" type="button">-</button>
										<input type="text" class="form-control text-xs-center qty" title="Số lượng" value="1" maxlength="3" id="qty" name="quantity" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')">
										<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase btn btn-ipnb" type="button">+</button>
									</div>
									<!-- BUTTON ACTIONS -->
									<input class="hidden" type="hidden" name="variantId" value="15300050" />
									<div class="button_actions">
										
										
										<button type="submit" class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart" title="Thêm vào giỏ hàng">
										<span><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</span>
										</button>
										
										
									</div>
									<!-- END BUTTON ACTIONS -->
								</form>
							</div>
							
							
						</div>
						<div class="col-xs-12 hidden-sm col-md-3 col-lg-3">
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							<div class="product-banner product-banner-2 banner-item">
								<a href="#" title="">
									<figure>
										<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/product_banner_2_image.png?1515399077171" alt="MobileStore123">
									</figure>
								</a>
							</div>
							
							
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="product-tab e-tabs">
							<ul class="tabs tabs-title clearfix">
								
								
								
								
								
								<li class="tab-link" data-tab="tab-1">
									<h5 class="tab_title">
									<span>Chi tiết sản phẩm</span>
									</h5>
								</li>
								
								
								
								
								
								
								<li class="tab-link" data-tab="tab-2">
									<h5 class="tab_title">
									<span>Thông tin thanh toán</span>
									</h5>
								</li>
								
								
								
								
								
								
								<li class="tab-link" data-tab="tab-3">
									<h5 class="tab_title">
									<span>Hướng dẫn mua hàng</span>
									</h5>
								</li>
								
								
							</ul>
							
							<div id="tab-1" class="tab-content">
								<div class="rte">
									<?php echo $product->content; ?>
								</div>
							</div>
							
							
							
							
							
							
							
							
							
							
							<div id="tab-2" class="tab-content">
								
								Nội dung tùy chỉnh
								
							</div>
							
							
							
							
							
							
							
							
							
							
							<div id="tab-3" class="tab-content">
								
								Nội dung tùy chỉnh
								
							</div>
							
							
						</div>
					</div>
				</div>
				
				
				
				
				<div class="related_products">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="module-header">
								<h2 class="module-title title-style-3">
								<span>Sản phẩm liên quan</span>
								</h2>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 lg4">
							
							
							
							
							<div class="module-content owl-carousel owl-theme nav-enable nav-top" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-nav="true" data-auto-play="true">
								
								
								<?php foreach ($product_related as $row ): ?>
								<?php if (($product->supplier_id == $row->supplier_id || $product->category_id == $row->category_id) && $count < 8) { $count++;?>

								<div class="item">
									<div class="product-box product-grid-item">
										<div class="product-thumbnail">
											
											<a href="<?php echo site_url('product/detail/'.$row->id)?>" title="<?php echo $row->name; ?>">
												<picture class="dp-flex">
													<img class="img-responsive" src="
													
													<?php
														if(file_exists('upload/product/'.$row->image))
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
                        <span class="price"><?php echo number_format(($row->price-($row->price*$row->discount/100)),0,',','.'); ?></span>
                      </span>
                      <span class="old-price">
                        <span class="price">
                          <?php echo number_format($row->price,0,',','.'); ?>
                        </span>
                      </span>
                      <?php } else { ?>
                        <span class="special-price">
                        <span class="price">
                          <?php echo number_format($row->price,0,',','.'); ?>
                        </span>
                      </span>
                      <?php } ?>
                      
                      
                    </div>
										</div>
									</div>
								</div>
								<?php } ?>
								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
				
				
				
				
				
				
				<div class="sale_products">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="module-header">
								<h2 class="module-title title-style-3">
								<a href="<?= site_url('collections/hot')?>" title=" Xem tất cả 'Sản phẩm bán chạy' ">
									<span>Sản phẩm bán chạy</span>
								</a>
								</h2>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="module-content owl-carousel owl-theme nav-enable nav-top" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-nav="true" data-auto-play="true">
								
								<?php foreach ($product_hot as $row ): ?>
								<?php
								
								if (now() > ($row->create_at + 7776000)) {
								
								?>
								<div class="item">
									<div class="product-box product-grid-item">
										<div class="product-thumbnail">
											
											<a href="<?php echo site_url('product/detail/'.$row->id)?>" title="<?php echo $row->name; ?>">
												<picture class="dp-flex">
													<img class="img-responsive" src="
													
													<?php
													if(file_exists('upload/product/'.$row->image))
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
                        <span class="price"><?php echo number_format(($row->price-($row->price*$row->discount/100)),0,',','.'); ?></span>
                      </span>
                      <span class="old-price">
                        <span class="price">
                          <?php echo number_format($row->price,0,',','.'); ?>
                        </span>
                      </span>
                      <?php } else { ?>
                        <span class="special-price">
                        <span class="price">
                          <?php echo number_format($row->price,0,',','.'); ?>
                        </span>
                      </span>
                      <?php } ?>
                      
                      
                    </div>
										</div>
									</div>
								</div>
								<?php } ?>
								<?php endforeach ?>
								
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>