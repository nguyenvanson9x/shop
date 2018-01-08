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
							
							<img id="zoom_01" class="img-responsive" src="//bizweb.dktcdn.net/thumb/grande/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833" alt="lg-g-pro-lite-dual">
							
						</a>
					</div>

					
					<div class="imgthumb-prolist">
						<div id="gallery_01" class="owl-carousel owl-theme owl-nav-circle" data-nav="true" data-lg-items="3" data-md-items="3" data-sm-items="6" data-xs-items="4" data-xxs-items="3" data-margin="5" data-auto-height="true">
							
							<div class="item">
								<a href="javascript:void(0);" data-image="//bizweb.dktcdn.net/thumb/grande/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833" data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833">
									<img src="//bizweb.dktcdn.net/thumb/small/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833" class="img-responsive" alt="lg-g-pro-lite-dual">
								</a>
							</div>
							
							<div class="item">
								<a href="javascript:void(0);" data-image="//bizweb.dktcdn.net/thumb/grande/100/289/080/products/5850350lg-g-pro-lite-dual-1.jpg?v=1515399087833" data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/289/080/products/5850350lg-g-pro-lite-dual-1.jpg?v=1515399087833">
									<img src="//bizweb.dktcdn.net/thumb/small/100/289/080/products/5850350lg-g-pro-lite-dual-1.jpg?v=1515399087833" class="img-responsive" alt="lg-g-pro-lite-dual">
								</a>
							</div>
							
						</div>
					</div>
					
				</div>

				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 details-pro">
					<h1 class="title-head"><?php echo $product->name; ?></h1>

					









<div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">
	
		
			
				<span class="special-price">
					<span class="price" itemprop="price">6.000.000₫</span>
					<meta itemprop="priceCurrency" content="VND">
				</span>
				<span class="old-price">
					<span class="price" itemprop="priceSpecification">
						
					</span>
					<meta itemprop="priceCurrency" content="VND">
				</span>
			
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
							<div class="box-variant clearfix">
								
								 
								<select id="product-selectors" name="variantId" style="display:none">
									
									<option  selected="selected"  value="15300050"><?php echo $product->price; ?></option>
									
									<option  value="15300051"><?php echo $product->price; ?></option>
									
								</select>
								
							</div>

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
					
					
					
					
					
					
					<div class="product-banner product-banner-1 banner-item">
						<a href="#" title="">
							<figure>
								<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/product_banner_1_image.png?1515399077171" alt="MobileStore123">
							</figure>
						</a>
					</div>
					
					
					
					
					
					
					
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
							<a href="san-pham-noi-bat" title=" Xem tất cả '' ">
								<span>Sản phẩm liên quan</span>
							</a>
						</h2>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 lg4">
					
					
					
					
					<div class="module-content owl-carousel owl-theme nav-enable nav-top" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-nav="true" data-auto-play="true">
						
						
						
						
						
						
						
						
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/nokia-x6-8gb" title="Nokia X6 8GB">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197" alt="nokia-x6-8gb"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/nokia-x6-8gb" title="Nokia X6 8GB">
				Nokia x6 8gb
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">6.490.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								6.600.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592504" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300042" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						
						
						
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803" alt="ipad-wifi-3g-16gb"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
				Ipad wifi 3g 16gb
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">13.850.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								14.000.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592499" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300037" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						
						
						
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187" alt="samsung-galaxy-tab-10-1-3g"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
				Samsung galaxy tab 10.1 3g
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">13.500.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								14.000.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592494" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300032" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						
						
						
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507" alt="lenovo-ideapad-z360-049390"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
				Lenovo ideapad z360 (049390)
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">13.999.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								14.000.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592490" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300024" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						
						
						
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/503903915-1-1.jpg?v=1515399075693">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/503903915-1-1.jpg?v=1515399075693" alt="samsung-ec-wb50fzbdbvn"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
				Samsung ec-wb50fzbdbvn
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">3.700.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								4.000.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592480" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300010" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						
						
					</div>
				</div>
			</div>
		</div>
		
		

		
		
		
		
		<div class="sale_products">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="module-header">
						<h2 class="module-title title-style-3">
							<a href="san-pham-noi-bat" title=" Xem tất cả 'Sản phẩm bán chạy' ">
								<span>Sản phẩm bán chạy</span>
							</a>
						</h2>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="module-content owl-carousel owl-theme nav-enable nav-top" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-nav="true" data-auto-play="true">
						
						<div class="item">
							


	
	
	
 
    














<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1515399087833" alt="lg-g-pro-lite-dual"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
				Lg g pro lite dual
			</a>
		</h3>

		









<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">6.000.000₫</span>
				</span>
				<span class="old-price">
					<span class="price">
						
					</span>
				</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592511" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300050" />
		
			<button class="btn btn-cart addtocart btn-transition btn_choose_product choose-pro btn-accent" title="Chọn sản phẩm"  type="button" onclick="window.location.href='/lg-g-pro-lite-dual'" >
				<span><i class="fa fa-cog"></i> Tuỳ chọn</span>
			</button>
		
	</form>
</div>
	</div>
</div>
						</div>
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/nokia-x6-8gb" title="Nokia X6 8GB">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/0010687nokiax6-8gb-1.jpg?v=1515399085197" alt="nokia-x6-8gb"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/nokia-x6-8gb" title="Nokia X6 8GB">
				Nokia x6 8gb
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">6.490.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								6.600.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592504" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300042" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/5829839ipad-3g-2-1.jpg?v=1515399082803" alt="ipad-wifi-3g-16gb"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
				Ipad wifi 3g 16gb
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">13.850.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								14.000.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592499" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300037" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1515399081187" alt="samsung-galaxy-tab-10-1-3g"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
				Samsung galaxy tab 10.1 3g
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">13.500.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								14.000.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592494" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300032" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1515399079507" alt="lenovo-ideapad-z360-049390"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
				Lenovo ideapad z360 (049390)
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">13.999.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								14.000.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592490" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300024" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
						<div class="item">
							


	
	
	
 
    


	



	









<div class="product-box product-grid-item">
	<div class="product-thumbnail">
		
		<div class="sale-flash">SALE</div>
		
		<a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
			<picture class="dp-flex">
				
				<source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/289/080/products/503903915-1-1.jpg?v=1515399075693"/>
				<source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/289/080/products/503903915-1-1.jpg?v=1515399075693">
				<img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/products/503903915-1-1.jpg?v=1515399075693" alt="samsung-ec-wb50fzbdbvn"/>
				
			</picture>
		</a>
	</div>
	<div class="product-info">
		<h3 class="product-name text1line">
			<a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
				Samsung ec-wb50fzbdbvn
			</a>
		</h3>

		











<div class="price-box price-loop-style">
	
		
			
				<span class="special-price">
					<span class="price">3.700.000₫</span>
				</span>
					<span class="old-price">
						<span class="price">
							
								4.000.000₫
							
						</span>
					</span>
			
		
	
</div>

		

<div class="product-action-btn product-action">
	<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592480" enctype="multipart/form-data">
		<input class="hidden" type="hidden" name="variantId" value="15300010" />
		
			
				
				<button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
					<span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
				</button>
				
			
		
	</form>
</div>
	</div>
</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>