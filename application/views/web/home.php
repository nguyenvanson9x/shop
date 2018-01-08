<section class="awe-section-1">

</section>
<section class="awe-section-2">
  <section class="section_slider">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 index-slider">
          <div class="owl-carousel owl-theme owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1"
            data-margin="0" data-auto-play="true" data-nav="true">
            <div class="owl-stage-outer">
              <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 2250px;">
                <div class="owl-item active" style="width: 750px;">
                  <div class="item banner-item">
                    <a href="#" class="clearfix" title="MobileShop123">
                      <figure>
                        <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/slider_1_image.png?1514103963009" alt="MobileShop123">
                      </figure>
                    </a>
                  </div>
                </div>
                <div class="owl-item" style="width: 750px;">
                  <div class="item banner-item">
                    <a href="#" class="clearfix" title="MobileShop123">
                      <figure>
                        <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/slider_2_image.png?1514103963009" alt="MobileShop123">
                      </figure>
                    </a>
                  </div>
                </div>
                <div class="owl-item" style="width: 750px;">
                  <div class="item banner-item">
                    <a href="#" class="clearfix" title="MobileShop123">
                      <figure>
                        <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/slider_3_image.png?1514103963009" alt="MobileShop123">
                      </figure>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-nav">
              <div class="owl-prev">
                <i class="fa fa-angle-left"></i>
              </div>
              <div class="owl-next">
                <i class="fa fa-angle-right"></i>
              </div>
            </div>
            <div class="owl-dots disabled"></div>
          </div>
        </div>
        <div class="hidden-xs col-sm-12 col-md-4 col-lg-4">
          <div class="row">
            <div class="hidden-xs col-sm-6 col-md-12 col-lg-12 index-banner">
              <div class="item banner-item">
                <a href="#" title="">
                  <figure>
                    <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/slide_banner_1_image.png?1514103963009" alt="MobileShop123">
                  </figure>
                </a>
              </div>
            </div>
            <div class="hidden-xs col-sm-6 col-md-12 col-lg-12 index-banner">
              <div class="item banner-item">
                <a href="#" title="">
                  <figure>
                    <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/slide_banner_2_image.png?1514103963009" alt="MobileShop123">
                  </figure>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<section class="awe-section-3">
  <section class="section-main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-md-push-3 col-md-push-3">
          <!-- Kiểm tra số sản phẩm trong collection hiển thị -->
          <!-- end kiểm tra -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 module_new_products">
              <div class="module-header">
                <div class="module-title title-style-3">
                  <a href="frontpage" title="Sản phẩm mới">
                    <span>Sản phẩm mới</span>
                  </a>
                </div>
              </div>
              <div class="module-content">
                <div class="owl-carousel owl-theme nav-enable nav-top lg4 owl-loaded owl-drag" data-lg-items="4" data-md-items="3" data-sm-items="3"
                  data-xs-items="2" data-xxs-items="2" data-nav="true" data-auto-play="true" data-auto-height="true">
                  <div class="owl-stage-outer owl-height" style="height: 302px;">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 2120px;">                 

                      <?php foreach ($product_new as $row): ?>
                      <div class="owl-item active" style="width: 212px;">
                        <div class="item">
                          <div class="product-box product-grid-item">
                            <div class="product-thumbnail">
                              <a href="<?php echo site_url('product/detail/'.$row->id)?>" title="<?php echo $row->name; ?>">                             
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text1line">
                                <a href="<?php echo site_url('product/detail/'.$row->id)?>" title="<?php echo $row->name; ?>">
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
                                  <input class="hidden" type="hidden" name="variantId" value="15082636">
                                  <button class="btn btn-cart addtocart btn-transition btn_choose_product choose-pro btn-accent" title="Chọn sản phẩm" type="button"
                                    onclick="window.location.href='<?php echo site_url('product/detail/'.$row->id)?>'">
                                    <span>
                                      <i class="fa fa-cog"></i> Tuỳ chọn</span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>

                    </div>
                  </div>







                  <div class="owl-nav">
                    <div class="owl-prev">
                      <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="owl-next">
                      <i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="owl-dots disabled"></div>
                </div>
              </div>














            </div>
          </div>
          <!-- Kiểm tra số sản phẩm trong collection hiển thị -->
          <!-- end kiểm tra -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 module_feature_products">
              <div class="module-header">
                <div class="module-title title-style-3">
                  <a href="san-pham-noi-bat" title="Sản phẩm nổi bật">
                    <span>Sản phẩm nổi bật</span>
                  </a>
                </div>
              </div>
              <div class="module-content">
                <div class="owl-carousel owl-theme nav-enable nav-top lg4 owl-loaded owl-drag" data-lg-items="4" data-md-items="3" data-sm-items="3"
                  data-xs-items="2" data-xxs-items="2" data-nav="true" data-auto-play="true" data-auto-height="true">
                  <div class="owl-stage-outer owl-height" style="height: 302px;">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 1272px;">
                      <div class="owl-item active" style="width: 212px;">
                        <div class="item">
                          <div class="product-box product-grid-item">
                            <div class="product-thumbnail">
                              <a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313"
                                    alt="lg-g-pro-lite-dual">
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
                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450253" enctype="multipart/form-data">
                                  <input class="hidden" type="hidden" name="variantId" value="15082636">
                                  <button class="btn btn-cart addtocart btn-transition btn_choose_product choose-pro btn-accent" title="Chọn sản phẩm" type="button"
                                    onclick="window.location.href='/lg-g-pro-lite-dual'">
                                    <span>
                                      <i class="fa fa-cog"></i> Tuỳ chọn</span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item active" style="width: 212px;">
                        <div class="item">
                          <div class="product-box product-grid-item">
                            <div class="product-thumbnail">
                              <div class="sale-flash">SALE</div>
                              <a href="/nokia-x6-8gb" title="Nokia X6 8GB">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810" alt="nokia-x6-8gb">
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
                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450250" enctype="multipart/form-data">
                                  <input class="hidden" type="hidden" name="variantId" value="15082632">
                                  <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                    <span>
                                      <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item active" style="width: 212px;">
                        <div class="item">
                          <div class="product-box product-grid-item">
                            <div class="product-thumbnail">
                              <div class="sale-flash">SALE</div>
                              <a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767" alt="ipad-wifi-3g-16gb">
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
                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450247" enctype="multipart/form-data">
                                  <input class="hidden" type="hidden" name="variantId" value="15082629">
                                  <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                    <span>
                                      <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item active" style="width: 212px;">
                        <div class="item">
                          <div class="product-box product-grid-item">
                            <div class="product-thumbnail">
                              <div class="sale-flash">SALE</div>
                              <a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780"
                                    alt="samsung-galaxy-tab-10-1-3g">
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
                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450245" enctype="multipart/form-data">
                                  <input class="hidden" type="hidden" name="variantId" value="15082627">
                                  <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                    <span>
                                      <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 212px;">
                        <div class="item">
                          <div class="product-box product-grid-item">
                            <div class="product-thumbnail">
                              <div class="sale-flash">SALE</div>
                              <a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213"
                                    alt="lenovo-ideapad-z360-049390">
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
                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450243" enctype="multipart/form-data">
                                  <input class="hidden" type="hidden" name="variantId" value="15082625">
                                  <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                    <span>
                                      <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 212px;">
                        <div class="item">
                          <div class="product-box product-grid-item">
                            <div class="product-thumbnail">
                              <div class="sale-flash">SALE</div>
                              <a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/503903915-1-1.jpg?v=1514102691450" alt="samsung-ec-wb50fzbdbvn">
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
                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450239" enctype="multipart/form-data">
                                  <input class="hidden" type="hidden" name="variantId" value="15082621">
                                  <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                    <span>
                                      <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-nav">
                    <div class="owl-prev">
                      <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="owl-next">
                      <i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="owl-dots disabled"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Giới hạn hiển thị 2 cột bằng nhau -->
            <!-- Kiểm tra số sản phẩm trong collection hiển thị -->
            <!-- end kiểm tra -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 small_module_gallery">
              <div class="module-header">
                <h2 class="module-title title-style-4">
                  <a href="frontpage" title="Bộ sưu tập phụ kiện">
                    <span>Bộ sưu tập phụ kiện</span>
                  </a>
                </h2>
              </div>
              <div class="module-content">
                <div class="owl-carousel owl-theme nav-enable nav-top owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="1"
                  data-xs-items="1" data-xxs-items="1" data-nav="true" data-auto-play="true" data-auto-height="true">
                  <!-- ADD DIV -->
                  <div class="owl-stage-outer owl-height" style="height: 306px;">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 818px;">
                      <div class="owl-item active" style="width: 409px;">
                        <div class="item">
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313"
                                    alt="lg-g-pro-lite-dual">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
                                  Lg g pro lite dual
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Thiết kế gọn gàng, sang trọng LG G Pro Lite Dual tuy có kích thước màn hình 5,5 inch rất lớn nhưng với thiết kế viền màn
                                hình siêu mỏng, chiếc máy vẫn gọn gàng khi cầm trong tay. Mặt lưng làm bằng nhựa nhám giúp
                                máy khó bám bẩn và dấu vân tay, trong khi đó viền hợp kim vòng quanh thân chính...
                              </div>
                              <div class="price-box price-loop-style">
                                <span class="special-price">
                                  <span class="price">6.000.000₫</span>
                                </span>
                                <span class="old-price">
                                  <span class="price">
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/lg-g-pro-2" title="LG G Pro 2">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5323595lg-optimus-g-pro-1.jpg?v=1514102702370">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5323595lg-optimus-g-pro-1.jpg?v=1514102702370">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5323595lg-optimus-g-pro-1.jpg?v=1514102702370">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5323595lg-optimus-g-pro-1.jpg?v=1514102702370">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5323595lg-optimus-g-pro-1.jpg?v=1514102702370">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5323595lg-optimus-g-pro-1.jpg?v=1514102702370">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5323595lg-optimus-g-pro-1.jpg?v=1514102702370"
                                    alt="lg-g-pro-2">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/lg-g-pro-2" title="LG G Pro 2">
                                  Lg g pro 2
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Thiết kế gọn gàng, sang trọng LG G Pro Lite Dual tuy có kích thước màn hình 5,5 inch rất lớn nhưng với thiết kế viền màn
                                hình siêu mỏng, chiếc máy vẫn gọn gàng khi cầm trong tay. Mặt lưng làm bằng nhựa nhám giúp
                                máy khó bám bẩn và dấu vân tay, trong khi đó viền hợp kim vòng quanh thân chính...
                              </div>
                              <div class="price-box price-loop-style">
                                <span class="special-price">
                                  <span class="price">14.000.000₫</span>
                                </span>
                                <span class="old-price">
                                  <span class="price">
                                    14.800.000₫
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/lg-l70" title="LG L70">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5131967lg-l70-1.jpg?v=1514102701540">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5131967lg-l70-1.jpg?v=1514102701540">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5131967lg-l70-1.jpg?v=1514102701540">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5131967lg-l70-1.jpg?v=1514102701540">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5131967lg-l70-1.jpg?v=1514102701540">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5131967lg-l70-1.jpg?v=1514102701540">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5131967lg-l70-1.jpg?v=1514102701540" alt="lg-l70">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/lg-l70" title="LG L70">
                                  Lg l70
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Tính năng bảo mật thông minh Knock Code Điện thoại LG L70 là dòng smartphone thời trang hiện đại có cấu hình mạnh mẽ trong
                                một thiết kế nhỏ gọn tiện dụng. Bên cạnh đó, L70 còn có nhiều ứng dụng hữu ích sẽ mang
                                đến nhiều trải nghiệm công nghệ đầy thú vị cho người sử dụng. Tính năng bảo ...
                              </div>
                              <div class="price-box price-loop-style">
                                <span class="special-price">
                                  <span class="price">5.000.000₫</span>
                                </span>
                                <span class="old-price">
                                  <span class="price">
                                    5.200.000₫
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 409px;">
                        <div class="item">
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/nokia-x6-8gb" title="Nokia X6 8GB">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810" alt="nokia-x6-8gb">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/nokia-x6-8gb" title="Nokia X6 8GB">
                                  Nokia x6 8gb
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Được Nokia giới thiệu tại Nokia Connection 2010, chiếc Nokia X6 phiên bản bộ nhớ trong 8GB đã chính thức được phân phối tại
                                Việt Nam vào cuối tuần qua. Tuy vẫn giữ nguyên cấu hình và thiết kế như các phiên bản 16GB
                                và 32GB, nhưng X6 8GB có một điểm mới hơn nằm ở màu vỏ. Nó sở hữu 2 màu vỏ mới là...
                              </div>
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
                            </div>
                          </div>
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/iphone-4-16gb" title="iPhone 4 16GB">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5425773apple-iphone-4-1.jpg?v=1514102700137">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5425773apple-iphone-4-1.jpg?v=1514102700137">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5425773apple-iphone-4-1.jpg?v=1514102700137">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5425773apple-iphone-4-1.jpg?v=1514102700137">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5425773apple-iphone-4-1.jpg?v=1514102700137">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5425773apple-iphone-4-1.jpg?v=1514102700137">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5425773apple-iphone-4-1.jpg?v=1514102700137" alt="iphone-4-16gb">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/iphone-4-16gb" title="iPhone 4 16GB">
                                  Iphone 4 16gb
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                iPhone 4 ngày càng được nhiều người tin tưởng và sử dụng, với một cấu hình mạnh mẽ, hệ điều hành iOS 5, cảm ứng mượt mà,
                                bộ nhớ trong lên tới 16GB.. iPhone 4 chắc chắn sẽ khiến bạn cảm thấy hài lòng, với thiết
                                kế tính tế đến từng chi tiết. “Với thiết kế vuông vức, nhưng iPhone 4 vẫn có những né...
                              </div>
                              <div class="price-box price-loop-style">
                                <span class="special-price">
                                  <span class="price">5.990.000₫</span>
                                </span>
                                <span class="old-price">
                                  <span class="price">
                                    6.000.000₫
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- chan le = true -->
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/iphone-4s-32-gb" title="iPhone 4s 32GB">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/54115944s-1.jpg?v=1514102699253">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/54115944s-1.jpg?v=1514102699253">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/54115944s-1.jpg?v=1514102699253">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/54115944s-1.jpg?v=1514102699253">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/54115944s-1.jpg?v=1514102699253">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/54115944s-1.jpg?v=1514102699253">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/54115944s-1.jpg?v=1514102699253" alt="iphone-4s-32gb">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/iphone-4s-32-gb" title="iPhone 4s 32GB">
                                  Iphone 4s 32gb
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Với kích thước 3,5 in, chiếc iPhone 4S có kích thước rất vừa tay, bạn có thể sử dụng một cách thoải mái nhất. Phiên bản này
                                máy có bộ nhớ trong 32GB, màu đen và là bản quốc tế.Được thiết kế không khác gì mấy so
                                với người anh em tiền nhiệm iPhone 4, iPhone 4S với những nâng cấp đáng giá như CPU A...
                              </div>
                              <div class="price-box price-loop-style">
                                <span class="special-price">
                                  <span class="price">9.790.000₫</span>
                                </span>
                                <span class="old-price">
                                  <span class="price">
                                    10.000.000₫
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-nav">
                    <div class="owl-prev">
                      <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="owl-next">
                      <i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="owl-dots disabled"></div>
                </div>
              </div>
            </div>
            <!-- Giới hạn hiển thị 2 cột bằng nhau -->
            <!-- Kiểm tra số sản phẩm trong collection hiển thị -->
            <!-- end kiểm tra -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 small_module_gallery">
              <div class="module-header">
                <h2 class="module-title title-style-4">
                  <a href="san-pham-noi-bat" title="Bộ sưu tập Điện thoại">
                    <span>Bộ sưu tập Điện thoại</span>
                  </a>
                </h2>
              </div>
              <div class="module-content">
                <div class="owl-carousel owl-theme nav-enable nav-top owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="1"
                  data-xs-items="1" data-xxs-items="1" data-nav="true" data-auto-play="true" data-auto-height="true">
                  <!-- ADD DIV -->
                  <div class="owl-stage-outer owl-height" style="height: 306px;">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 818px;">
                      <div class="owl-item active" style="width: 409px;">
                        <div class="item">
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313"
                                    alt="lg-g-pro-lite-dual">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
                                  Lg g pro lite dual
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Thiết kế gọn gàng, sang trọng LG G Pro Lite Dual tuy có kích thước màn hình 5,5 inch rất lớn nhưng với thiết kế viền màn
                                hình siêu mỏng, chiếc máy vẫn gọn gàng khi cầm trong tay. Mặt lưng làm bằng nhựa nhám giúp
                                máy khó bám bẩn và dấu vân tay, trong khi đó viền hợp kim vòng quanh thân chính...
                              </div>
                              <div class="price-box price-loop-style">
                                <span class="special-price">
                                  <span class="price">6.000.000₫</span>
                                </span>
                                <span class="old-price">
                                  <span class="price">
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/nokia-x6-8gb" title="Nokia X6 8GB">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810" alt="nokia-x6-8gb">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/nokia-x6-8gb" title="Nokia X6 8GB">
                                  Nokia x6 8gb
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Được Nokia giới thiệu tại Nokia Connection 2010, chiếc Nokia X6 phiên bản bộ nhớ trong 8GB đã chính thức được phân phối tại
                                Việt Nam vào cuối tuần qua. Tuy vẫn giữ nguyên cấu hình và thiết kế như các phiên bản 16GB
                                và 32GB, nhưng X6 8GB có một điểm mới hơn nằm ở màu vỏ. Nó sở hữu 2 màu vỏ mới là...
                              </div>
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
                            </div>
                          </div>
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767" alt="ipad-wifi-3g-16gb">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
                                  Ipad wifi 3g 16gb
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Thông số kỹ thuật: - Màn hình: TFT LCD, 9.7 inch - Hệ điều hành: iOS - Vi xử lí CPU: A4, 1 GHz - Kết nối: Wifi chuẩn 802.11
                                a/b/g/n - Trọng lượng: 730 Thông tin chung: - Hệ điều hành: iOS - Ngôn ngữ: Tiếng Anh Màn
                                hình: - Loại màn hình: TFT LCD - Màn hình rộng: 9.7 in...
                              </div>
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
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 409px;">
                        <div class="item">
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780"
                                    alt="samsung-galaxy-tab-10-1-3g">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
                                  Samsung galaxy tab 10.1 3g
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Thiết kế tốt hơn Phiên bản máy tính bảng Samsung Galaxy Tab 10.1 đem đến một trải nghiệm tuyệt vời hơn hẳn, là tablet có
                                kích thước mỏng nhất và nhẹ nhất hiện nay. Tiện dụng tối đa với thiết kế thời trang, chắn
                                chắn trong kích thước mỏng nhất, nhẹ nhất của thế giới tablet: trọng lượng chỉ c...
                              </div>
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
                            </div>
                          </div>
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213"
                                    alt="lenovo-ideapad-z360-049390">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
                                  Lenovo ideapad z360 (049390)
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Thông số kỹ thuật: - Hãng sản xuất: Lenovo - Xuất xứ: Chính hãng - Bảo hành: 12 Tháng - Tên sản phẩm: IdeaPad Z360 P/N: 59-049390
                                - Bộ vi xử lý: Intel® Core™ i3-380M 2.53GHz/1066MHz/ 3MB L3 Cache - Bộ nhớ - RAM: 2048
                                DDR3 - Ổ đĩa cứng: 500GB - Ổ đĩa...
                              </div>
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
                            </div>
                          </div>
                          <!-- chan le = true -->
                          <div class="product-box product-list-item item-small">
                            <div class="product-thumbnail">
                              <a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
                                <picture class="dp-flex">
                                  <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                  <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/503903915-1-1.jpg?v=1514102691450" alt="samsung-ec-wb50fzbdbvn">
                                </picture>
                              </a>
                            </div>
                            <div class="product-info">
                              <h3 class="product-name text2line">
                                <a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
                                  Samsung ec-wb50fzbdbvn
                                </a>
                              </h3>
                              <div class="product-summary text3line">
                                Những chuyến du lịch hay những khoảnh khắc đẹp trong cuộc sống hằng ngày sẽ được lưu giữ nhanh chóng nhờ vào chiếc máy ảnh
                                Samsung WB50F. Sản phẩm có thiết kế nhỏ gọn hợp thời trang, cảm biến ảnh CCD 16.2MP, zoom
                                quang 12x, màn hình LCD 3.0” hiển thị sắc nét cùng khả năng quay phim HD720p. Hơn n...
                              </div>
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
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-nav">
                    <div class="owl-prev">
                      <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="owl-next">
                      <i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="owl-dots disabled"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-pull-9 col-md-pull-9">
          <div class="aside-item sidebar_support">
            <div class="module-header">
              <h2 class="module-title title-style-3 padding-right-0">
                <span>Hỗ trợ trực tuyến</span>
              </h2>
            </div>
            <div class="module-content">
              <div class="item">
                <div class="item_image">
                  <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/item_1_image.png?1514103963009" class="img-responsive" alt="tu-van-ban-hang-1">
                </div>
                <div class="item_desc">
                  <div class="item_title">
                    Tư vấn bán hàng 1
                  </div>
                  <div class="item_sum">
                    <label class="item_detail">
                      Mrs. Dung:
                    </label>
                    <a class="item_check" href="tel:0437868904" title="(04) 3786 8904">
                      (04) 3786 8904
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item_image">
                  <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/item_2_image.png?1514103963009" class="img-responsive" alt="tu-van-ban-hang-2">
                </div>
                <div class="item_desc">
                  <div class="item_title">
                    Tư vấn bán hàng 2
                  </div>
                  <div class="item_sum">
                    <label class="item_detail">
                      Mr. Tuấn:
                    </label>
                    <a class="item_check" href="tel:0437868904" title="(04) 3786 8904">
                      (04) 3786 8904
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item_image">
                  <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/item_3_image.png?1514103963009" class="img-responsive" alt="email-lien-he">
                </div>
                <div class="item_desc">
                  <div class="item_title">
                    Email liên hệ
                  </div>
                  <div class="item_sum">
                    <label class="item_detail">
                    </label>
                    <a class="item_check" href="mailto:support@bizweb.vn" title="support@bizweb.vn">
                      support@bizweb.vn
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Kiểm tra số sản phẩm trong collection hiển thị -->
          <!-- end kiểm tra -->
          <div class="aside-item sidebar_feature_products">
            <div class="module-header">
              <h2 class="module-title title-style-3">
                <a href="san-pham-noi-bat" title="Sản phẩm nổi bật">
                  <span>Sản phẩm nổi bật</span>
                </a>
              </h2>
            </div>
            <div class="module-content">
              <div class="owl-carousel owl-theme nav-enable nav-top owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="1"
                data-xs-items="1" data-xxs-items="1" data-nav="true" data-auto-play="true" data-auto-height="true">
                <!-- ADD DIV -->
                <div class="owl-stage-outer owl-height" style="height: 306px;">
                  <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 526px;">
                    <div class="owl-item active" style="width: 263px;">
                      <div class="item">
                        <div class="product-box product-list-item item-small">
                          <div class="product-thumbnail">
                            <a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
                              <picture class="dp-flex">
                                <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313"
                                  alt="lg-g-pro-lite-dual">
                              </picture>
                            </a>
                          </div>
                          <div class="product-info">
                            <h3 class="product-name text2line">
                              <a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
                                Lg g pro lite dual
                              </a>
                            </h3>
                            <div class="product-summary text3line">
                              Thiết kế gọn gàng, sang trọng LG G Pro Lite Dual tuy có kích thước màn hình 5,5 inch rất lớn nhưng với thiết kế viền màn
                              hình siêu mỏng, chiếc máy vẫn gọn gàng khi cầm trong tay. Mặt lưng làm bằng nhựa nhám giúp
                              máy khó bám bẩn và dấu vân tay, trong khi đó viền hợp kim vòng quanh thân chính...
                            </div>
                            <div class="price-box price-loop-style">
                              <span class="special-price">
                                <span class="price">6.000.000₫</span>
                              </span>
                              <span class="old-price">
                                <span class="price">
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="product-box product-list-item item-small">
                          <div class="product-thumbnail">
                            <a href="/nokia-x6-8gb" title="Nokia X6 8GB">
                              <picture class="dp-flex">
                                <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810" alt="nokia-x6-8gb">
                              </picture>
                            </a>
                          </div>
                          <div class="product-info">
                            <h3 class="product-name text2line">
                              <a href="/nokia-x6-8gb" title="Nokia X6 8GB">
                                Nokia x6 8gb
                              </a>
                            </h3>
                            <div class="product-summary text3line">
                              Được Nokia giới thiệu tại Nokia Connection 2010, chiếc Nokia X6 phiên bản bộ nhớ trong 8GB đã chính thức được phân phối tại
                              Việt Nam vào cuối tuần qua. Tuy vẫn giữ nguyên cấu hình và thiết kế như các phiên bản 16GB
                              và 32GB, nhưng X6 8GB có một điểm mới hơn nằm ở màu vỏ. Nó sở hữu 2 màu vỏ mới là...
                            </div>
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
                          </div>
                        </div>
                        <div class="product-box product-list-item item-small">
                          <div class="product-thumbnail">
                            <a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
                              <picture class="dp-flex">
                                <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767" alt="ipad-wifi-3g-16gb">
                              </picture>
                            </a>
                          </div>
                          <div class="product-info">
                            <h3 class="product-name text2line">
                              <a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
                                Ipad wifi 3g 16gb
                              </a>
                            </h3>
                            <div class="product-summary text3line">
                              Thông số kỹ thuật: - Màn hình: TFT LCD, 9.7 inch - Hệ điều hành: iOS - Vi xử lí CPU: A4, 1 GHz - Kết nối: Wifi chuẩn 802.11
                              a/b/g/n - Trọng lượng: 730 Thông tin chung: - Hệ điều hành: iOS - Ngôn ngữ: Tiếng Anh Màn
                              hình: - Loại màn hình: TFT LCD - Màn hình rộng: 9.7 in...
                            </div>
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
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 263px;">
                      <div class="item">
                        <div class="product-box product-list-item item-small">
                          <div class="product-thumbnail">
                            <a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
                              <picture class="dp-flex">
                                <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780"
                                  alt="samsung-galaxy-tab-10-1-3g">
                              </picture>
                            </a>
                          </div>
                          <div class="product-info">
                            <h3 class="product-name text2line">
                              <a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
                                Samsung galaxy tab 10.1 3g
                              </a>
                            </h3>
                            <div class="product-summary text3line">
                              Thiết kế tốt hơn Phiên bản máy tính bảng Samsung Galaxy Tab 10.1 đem đến một trải nghiệm tuyệt vời hơn hẳn, là tablet có
                              kích thước mỏng nhất và nhẹ nhất hiện nay. Tiện dụng tối đa với thiết kế thời trang, chắn
                              chắn trong kích thước mỏng nhất, nhẹ nhất của thế giới tablet: trọng lượng chỉ c...
                            </div>
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
                          </div>
                        </div>
                        <div class="product-box product-list-item item-small">
                          <div class="product-thumbnail">
                            <a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
                              <picture class="dp-flex">
                                <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213"
                                  alt="lenovo-ideapad-z360-049390">
                              </picture>
                            </a>
                          </div>
                          <div class="product-info">
                            <h3 class="product-name text2line">
                              <a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
                                Lenovo ideapad z360 (049390)
                              </a>
                            </h3>
                            <div class="product-summary text3line">
                              Thông số kỹ thuật: - Hãng sản xuất: Lenovo - Xuất xứ: Chính hãng - Bảo hành: 12 Tháng - Tên sản phẩm: IdeaPad Z360 P/N: 59-049390
                              - Bộ vi xử lý: Intel® Core™ i3-380M 2.53GHz/1066MHz/ 3MB L3 Cache - Bộ nhớ - RAM: 2048 DDR3
                              - Ổ đĩa cứng: 500GB - Ổ đĩa...
                            </div>
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
                          </div>
                        </div>
                        <!-- chan le = true -->
                        <div class="product-box product-list-item item-small">
                          <div class="product-thumbnail">
                            <a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
                              <picture class="dp-flex">
                                <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/503903915-1-1.jpg?v=1514102691450" alt="samsung-ec-wb50fzbdbvn">
                              </picture>
                            </a>
                          </div>
                          <div class="product-info">
                            <h3 class="product-name text2line">
                              <a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
                                Samsung ec-wb50fzbdbvn
                              </a>
                            </h3>
                            <div class="product-summary text3line">
                              Những chuyến du lịch hay những khoảnh khắc đẹp trong cuộc sống hằng ngày sẽ được lưu giữ nhanh chóng nhờ vào chiếc máy ảnh
                              Samsung WB50F. Sản phẩm có thiết kế nhỏ gọn hợp thời trang, cảm biến ảnh CCD 16.2MP, zoom
                              quang 12x, màn hình LCD 3.0” hiển thị sắc nét cùng khả năng quay phim HD720p. Hơn n...
                            </div>
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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-nav">
                  <div class="owl-prev">
                    <i class="fa fa-angle-left"></i>
                  </div>
                  <div class="owl-next">
                    <i class="fa fa-angle-right"></i>
                  </div>
                </div>
                <div class="owl-dots disabled"></div>
              </div>
            </div>
          </div>
          <div class="aside-item sidebar_news">
            <div class="module-header">
              <h2 class="module-title title-style-3">
                <a href="tin-tuc" title="Tin tức">
                  <span>Tin tức</span>
                </a>
              </h2>
            </div>
            <div class="module-content">
              <div class="owl-carousel owl-theme nav-enable nav-top owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="2"
                data-xs-items="2" data-xxs-items="1" data-nav="true" data-auto-play="true" data-auto-height="true">
                <div class="owl-stage-outer owl-height" style="height: 361px;">
                  <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 789px;">
                    <div class="owl-item active" style="width: 263px;">
                      <div class="item">
                        <div class="article-thumbnail">
                          <a href="/bai-viet-mau-3" title="Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP">
                            <picture>
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/xa1-1.jpg?v=1514102684720">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/xa1-1.jpg?v=1514102684720">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/xa1-1.jpg?v=1514102684720">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/xa1-1.jpg?v=1514102684720">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/xa1-1.jpg?v=1514102684720">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/xa1-1.jpg?v=1514102684720">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/articles/xa1-1.jpg?v=1514102684720" alt="sony-xperia-xa1-va-xa1-ultra-nang-cap-cau-hinh-thiet-ke-vuong-van-camera-23mp">
                            </picture>
                          </a>
                        </div>
                        <div class="article-info">
                          <h3 class="article-name">
                            <a href="/bai-viet-mau-3" title="Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP">
                              <span>Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP</span>
                            </a>
                          </h3>
                          <p class="article-detail">
                            <span>
                              <i class="fa fa-user"></i> Bizweb
                            </span>
                            <span>
                              <i class="fa fa-calendar"></i> 24/12/2017
                            </span>
                          </p>
                          <div class="article-summary">
                            <div class="article-summary-or-content text3line">
                              Ngoài hai mẫu điện thoại XZ, Sony còn đem đến MWC 2017 hai phiên bản nâng cấp của dòng XA là XA1 và XA1 Ultra. Thừa hưởng
                              phong cách thiết kế của dòng XZ, hai phiên bản XA mới được nâng cấp cấu hì...
                            </div>
                            <p class="margin-0">
                              <a class="text-danger" href="/bai-viet-mau-3" title="Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP">
                                [Đọc tiếp...]
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 263px;">
                      <div class="item">
                        <div class="article-thumbnail">
                          <a href="/bai-viet-mau-2" title="Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p">
                            <picture>
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/articles/sony-xperia-xzs-3view.jpg?v=1514102685243" alt="sony-xperia-xzs-giong-xz-premium-nho-hon-camera-giong-nhau-man-hinh-1080p">
                            </picture>
                          </a>
                        </div>
                        <div class="article-info">
                          <h3 class="article-name">
                            <a href="/bai-viet-mau-2" title="Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p">
                              <span>Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p</span>
                            </a>
                          </h3>
                          <p class="article-detail">
                            <span>
                              <i class="fa fa-user"></i> Bizweb
                            </span>
                            <span>
                              <i class="fa fa-calendar"></i> 24/12/2017
                            </span>
                          </p>
                          <div class="article-summary">
                            <div class="article-summary-or-content text3line">
                              Sony có thói quen giới thiệu phiên bản "mini" của những chiếc điện thoại mạnh nhất và hôm nay cũng không ngoại lệ. Sony Xperia
                              XZs chính là phiên bản thu nhỏ của Xperia XZ Premium, vốn là chiếc má...
                            </div>
                            <p class="margin-0">
                              <a class="text-danger" href="/bai-viet-mau-2" title="Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p">
                                [Đọc tiếp...]
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 263px;">
                      <div class="item">
                        <div class="article-thumbnail">
                          <a href="/bai-viet-mau" title="Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo">
                            <picture>
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/galaxy-s8.jpg?v=1514102685737">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/galaxy-s8.jpg?v=1514102685737">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/galaxy-s8.jpg?v=1514102685737">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/285/622/articles/galaxy-s8.jpg?v=1514102685737">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/galaxy-s8.jpg?v=1514102685737">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/articles/galaxy-s8.jpg?v=1514102685737">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/articles/galaxy-s8.jpg?v=1514102685737" alt="galaxy-s8-se-duoc-trang-bi-cong-nghe-cam-ung-3d-tren-nut-home-ao">
                            </picture>
                          </a>
                        </div>
                        <div class="article-info">
                          <h3 class="article-name">
                            <a href="/bai-viet-mau" title="Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo">
                              <span>Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo</span>
                            </a>
                          </h3>
                          <p class="article-detail">
                            <span>
                              <i class="fa fa-user"></i> Nguyen Van Son
                            </span>
                            <span>
                              <i class="fa fa-calendar"></i> 24/12/2017
                            </span>
                          </p>
                          <div class="article-summary">
                            <div class="article-summary-or-content text3line">
                              Galaxy S8 đang cận kề ngày ra mắt và hôm nay (15/3), thêm một thông tin rò rỉ thú vị về mẫu smartphone này đã xuất hiện.
                              Báo cáo từ The Korea Herald cho hay, Samsung sẽ trang bị tính năng 3D To...
                            </div>
                            <p class="margin-0">
                              <a class="text-danger" href="/bai-viet-mau" title="Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo">
                                [Đọc tiếp...]
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-nav">
                  <div class="owl-prev">
                    <i class="fa fa-angle-left"></i>
                  </div>
                  <div class="owl-next">
                    <i class="fa fa-angle-right"></i>
                  </div>
                </div>
                <div class="owl-dots disabled"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<section class="awe-section-4">
  <section class="section-banner banner-item">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="module-content">
            <a href="#" title="">
              <figure>
                <img src="//bizweb.dktcdn.net/100/285/622/themes/624602/assets/index_large_banner.png?1514103963009" class="img-responsive"
                  alt="MobileShop123">
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<section class="awe-section-5">
  <section class="section-recommend-products">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="module-header">
            <h2 class="module-title title-style-3">
              <a href="san-pham-noi-bat" title="Sản phẩm giới thiệu">
                <span>Sản phẩm giới thiệu</span>
              </a>
            </h2>
          </div>
          <div class="module-content lg6">
            <div class="owl-carousel owl-theme nav-enable nav-top owl-loaded owl-drag" data-lg-items="6" data-md-items="4" data-sm-items="3"
              data-xs-items="2" data-xxs-items="2" data-nav="true" data-margin="0">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 1140px;">
                  <div class="owl-item active" style="width: 190px;">
                    <div class="item">
                      <div class="product-box product-grid-item">
                        <div class="product-thumbnail">
                          <a href="/lg-g-pro-lite-dual" title="LG G Pro Lite Dual">
                            <picture class="dp-flex">
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5341643lg-g-pro-lite-dual-01-1.jpg?v=1514102703313"
                                alt="lg-g-pro-lite-dual">
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
                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450253" enctype="multipart/form-data">
                              <input class="hidden" type="hidden" name="variantId" value="15082636">
                              <button class="btn btn-cart addtocart btn-transition btn_choose_product choose-pro btn-accent" title="Chọn sản phẩm" type="button"
                                onclick="window.location.href='/lg-g-pro-lite-dual'">
                                <span>
                                  <i class="fa fa-cog"></i> Tuỳ chọn</span>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 190px;">
                    <div class="item">
                      <div class="product-box product-grid-item">
                        <div class="product-thumbnail">
                          <div class="sale-flash">SALE</div>
                          <a href="/nokia-x6-8gb" title="Nokia X6 8GB">
                            <picture class="dp-flex">
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0010687nokiax6-8gb-1.jpg?v=1514102700810" alt="nokia-x6-8gb">
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
                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450250" enctype="multipart/form-data">
                              <input class="hidden" type="hidden" name="variantId" value="15082632">
                              <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                <span>
                                  <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 190px;">
                    <div class="item">
                      <div class="product-box product-grid-item">
                        <div class="product-thumbnail">
                          <div class="sale-flash">SALE</div>
                          <a href="/ipad-wifi-3g-16gb" title="iPad Wifi 3G 16GB">
                            <picture class="dp-flex">
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5829839ipad-3g-2-1.jpg?v=1514102698767" alt="ipad-wifi-3g-16gb">
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
                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450247" enctype="multipart/form-data">
                              <input class="hidden" type="hidden" name="variantId" value="15082629">
                              <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                <span>
                                  <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 190px;">
                    <div class="item">
                      <div class="product-box product-grid-item">
                        <div class="product-thumbnail">
                          <div class="sale-flash">SALE</div>
                          <a href="/samsung-galaxy-tab-10-1-3g" title="Samsung Galaxy Tab 10.1 3G">
                            <picture class="dp-flex">
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/5755708samsung-galaxy-tab-4-101-2-1.jpg?v=1514102696780"
                                alt="samsung-galaxy-tab-10-1-3g">
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
                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450245" enctype="multipart/form-data">
                              <input class="hidden" type="hidden" name="variantId" value="15082627">
                              <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                <span>
                                  <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 190px;">
                    <div class="item">
                      <div class="product-box product-grid-item">
                        <div class="product-thumbnail">
                          <div class="sale-flash">SALE</div>
                          <a href="/lenovo-ideapad-z360-049390" title="Lenovo IdeaPad Z360 (049390)">
                            <picture class="dp-flex">
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/0513889lenovo-ideapad-z360-049390-1.jpg?v=1514102695213"
                                alt="lenovo-ideapad-z360-049390">
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
                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450243" enctype="multipart/form-data">
                              <input class="hidden" type="hidden" name="variantId" value="15082625">
                              <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                <span>
                                  <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 190px;">
                    <div class="item">
                      <div class="product-box product-grid-item">
                        <div class="product-thumbnail">
                          <div class="sale-flash">SALE</div>
                          <a href="/samsung-ec-wb50fzbdbvn" title="Samsung EC-WB50FZBDBVN">
                            <picture class="dp-flex">
                              <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                              <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/compact/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                              <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/small/100/285/622/products/503903915-1-1.jpg?v=1514102691450">
                              <img class="img-responsive" src="//bizweb.dktcdn.net/100/285/622/products/503903915-1-1.jpg?v=1514102691450" alt="samsung-ec-wb50fzbdbvn">
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
                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9450239" enctype="multipart/form-data">
                              <input class="hidden" type="hidden" name="variantId" value="15082621">
                              <button class="btn btn-buy btn-transition btn-cart btn_buy add_to_cart btn-accent" title="Mua hàng">
                                <span>
                                  <i class="fa fa-shopping-cart"></i> Mua hàng</span>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <div class="owl-prev">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="owl-next">
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>