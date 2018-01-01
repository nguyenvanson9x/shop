<header>
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="hidden-xs col-sm-9 col-md-10 col-lg-10 welcome-text">
				<span>Chào mừng bạn đến với MobileShop123 !</span>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 checkout">
				<a href="<?= site_url('checkout')?>" title="Tới trang thanh toán">
					<i class="fa fa-shopping-cart"></i>
					<span>Thanh toán</span>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="mainbar">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 logo">
				<a href="<?= site_url()?>" title="Trang chủ">
					<img class="img-responsive" src="" alt="Logo">
				</a>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 search-header">
				<div class="search_padding">
					<form action="<?= site_url('search')?>" method="get">
						<div class="input-group search_form_action">
							<i class="fa fa-search"></i>
							<input type="text" class="form-control" maxlength="70" name="query" id="search" placeholder="Tìm kiếm ...">
							<span class="input-group-btn">
								<button class="btn btn-default btn-search" type="submit">
									Tìm kiếm
								</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 account">
				<a href="<?= site_url('account/login')?>">Đăng nhập</a>
				<span>hoặc</span>
				<a href="<?= site_url('account/register')?>">Đăng ký</a>
			</div>
		</div>
	</div>
</div>
<div class="menu-nav">
	<nav class="menu-header hidden-sm hidden-xs">
		<ul id="nav" class="nav container">
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url()?>" title="Trang chủ">
					Trang chủ
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= site_url('collections/all')?>" class="nav-link" title="Sản phẩm">
					Sản phẩm
					<i class="fa fa-caret-down" data-toggle="dropdown"></i>
				</a>
				<ul class="dropdown-menu">
					<li class="nav-item-lv2">
						<a class="nav-link" href="<?= site_url('collections/all')?>" title="Tất cả sản phẩm">
							<i class="fa fa-angle-right"></i>
							<span>Tất cả sản phẩm</span>
						</a>
					</li>
					<li class="nav-item-lv2">
						<a class="nav-link" href="<?= site_url('collections/new')?>" title="Sản phẩm mới">
							<i class="fa fa-angle-right"></i>
							<span>Sản phẩm mới</span>
						</a>
					</li>
					<li class="nav-item-lv2">
						<a class="nav-link" href="<?= site_url('collections/hot')?>" title="Sản phẩm nổi bật">
							<i class="fa fa-angle-right"></i>
							<span>Sản phẩm nổi bật</span>
						</a>
					</li>
					<li class="nav-item-lv2">
						<a class="nav-link" href="<?= site_url('collections/discount')?>" title="Sản phẩm khuyến mãi">
							<i class="fa fa-angle-right"></i>
							<span>Sản phẩm khuyến mãi</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('tin-tuc')?>" title="Blog">
					Blog
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('gioi-thieu')?>" title="Giới thiệu">
					Giới thiệu
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('lien-he')?>" title="Liên hệ">
					Liên hệ
				</a>
			</li>
			<li class="sticky_logo" onClick="window.location.href='<?= site_url()?>'">
				<img src="" alt="Logo" />
			</li>
			<div class="cart-header">
				<div class="top-cart-contain f-right">
					<div class="mini-cart text-xs-center">
						<div class="heading-cart">
							<a href="<?= site_url('cart')?>">
								<span class="cartCount count_item_pr" id="cart-total"></span>
								<br>sản phẩm
							</a>
						</div>
						<div class="top-cart-content">
							<ul id="cart-sidebar" class="mini-products-list count_li">
								<li class="list-item">
									<ul></ul>
								</li>
								<li class="action">
									<ul>
										<li class="li-fix-1">
											<div class="top-subtotal">
												Tổng tiền thanh toán:
												<span class="price"></span>
											</div>
										</li>
										<li class="li-fix-2" style="">
											<div class="actions">
												<a href="<?= site_url('cart')?>" class="btn btn-primary">
													<span>Giỏ hàng</span>
												</a>
												<a href="<?= site_url('checkout')?>" class="btn btn-checkout btn-gray">
													<span>Thanh toán</span>
												</a>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</ul>
	</nav>
	<div class="sidebar-menu sidebar_menu site-nav-mobile menu-header hidden-md hidden-lg">
		<div class="sidebar-menu-title module-header">
			<div class="module-title">
				<a href="<?= site_url()?>" class="sticky_logo">
					<img src="" alt="Logo" />
				</a>
				<i class="fa fa-bars"></i>
				<span>MENU</span>
			</div>
			<a class="mobile-cart" href="<?= site_url('cart')?>">
				<span class="cart-count-mobile">0</span>
			</a>
		</div>
		<div class="sidebar-menu-content">
			<div class="sidebar-linklists">
				<ul>
					<li class="sidebar-menu-list menu-item collection-sidebar-menu active">
						<a class="ajaxLayer" href="<?= site_url()?>" title="Trang chủ">
							<span>Trang chủ</span>
						</a>
					</li>
					<li class="sidebar-menu-list menu-item collection-sidebar-menu">
						<a class="ajaxLayer" href="<?= site_url('collections/all')?>" title="Sản phẩm">
							<span>Sản phẩm</span>
						</a>
						<ul style="display: none" class="lv2">
							<li>
								<a class="ajaxLayer a_lv2" href="<?= site_url('collections/all')?>" title="Tất cả sản phẩm">
									<span>Tất cả sản phẩm</span>
								</a>
							</li>
							<li>
								<a class="ajaxLayer a_lv2" href="<?= site_url('frontpage')?>" title="Sản phẩm mới">
									<span>Sản phẩm mới</span>
								</a>
							</li>
							<li>
								<a class="ajaxLayer a_lv2" href="<?= site_url('san-pham-noi-bat')?>" title="Sản phẩm nổi bật">
									<span>Sản phẩm nổi bật</span>
								</a>
							</li>
							<li>
								<a class="ajaxLayer a_lv2" href="<?= site_url('san-pham-khuyen-mai')?>" title="Sản phẩm khuyến mãi">
									<span>Sản phẩm khuyến mãi</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-menu-list menu-item collection-sidebar-menu">
						<a class="ajaxLayer" href="<?= site_url('tin-tuc')?>" title="Blog">
							<span>Blog</span>
						</a>
					</li>
					<li class="sidebar-menu-list menu-item collection-sidebar-menu">
						<a class="ajaxLayer" href="<?= site_url('gioi-thieu')?>" title="Giới thiệu">
							<span>Giới thiệu</span>
						</a>
					</li>
					<li class="sidebar-menu-list menu-item collection-sidebar-menu">
						<a class="ajaxLayer" href="<?= site_url('lien-he')?>" title="Liên hệ">
							<span>Liên hệ</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</header>