<section class="awe-section-1">
  
</section>
<section class="awe-section-2">
  <section class="section_slider">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 index-slider">
          <div class="owl-carousel owl-theme" data-lg-items="1" data-md-items='1' data-sm-items='1' data-xs-items="1" data-margin='0' data-auto-play="true" data-nav="true">
            
            
            
            
            
            
            <div class="item banner-item">
              <a href="#" class="clearfix" title="MobileStore123">
                <figure>
                  <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/slider_1_image.png?1515399077171" alt="MobileStore123">
                </figure>
              </a>
            </div>
            
            
            
            
            
            
            
            <div class="item banner-item">
              <a href="#" class="clearfix" title="MobileStore123">
                <figure>
                  <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/slider_2_image.png?1515399077171" alt="MobileStore123">
                </figure>
              </a>
            </div>
            
            
            
            
            
            
            
            <div class="item banner-item">
              <a href="#" class="clearfix" title="MobileStore123">
                <figure>
                  <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/slider_3_image.png?1515399077171" alt="MobileStore123">
                </figure>
              </a>
            </div>
            
            
          </div>
        </div>
        <div class="hidden-xs col-sm-12 col-md-4 col-lg-4">
          <div class="row">
            
            
            
            
            
            
            <div class="hidden-xs col-sm-6 col-md-12 col-lg-12 index-banner">
              <div class="item banner-item">
                <a href="#" title="">
                  <figure>
                    <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/slide_banner_1_image.png?1515399077171" alt="MobileStore123">
                  </figure>
                </a>
              </div>
            </div>
            
            
            
            
            
            
            
            <div class="hidden-xs col-sm-6 col-md-12 col-lg-12 index-banner">
              <div class="item banner-item">
                <a href="#" title="">
                  <figure>
                    <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/slide_banner_2_image.png?1515399077171" alt="MobileStore123">
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
                  <a href="<?= site_url('collections/new')?>" title="Sản phẩm mới">
                    <span>Sản phẩm mới</span>
                  </a>
                </div>
              </div>
              <div class="module-content">
                
                <div class="owl-carousel owl-theme nav-enable nav-top lg4" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-nav="true" data-auto-play="true" data-auto-height="true">
                  
                  
                  <?php foreach ($product_new as $row ): ?>
                  
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
                          <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592511" enctype="multipart/form-data">
                            <input class="hidden" type="hidden" name="variantId" value="15300050" />
                            
                            <button class="btn btn-cart addtocart btn-transition btn_choose_product choose-pro btn-accent" title="Chọn sản phẩm"  type="button" onclick="window.location.href='<?php echo site_url('product/detail/'.$row->id)?>'" >
                            <span><i class="fa fa-cog"></i> Chi tiết</span>
                            </button>
                            
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach ?>
                  
                </div>
                
              </div>
            </div>
          </div>
          
          
          
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 module_feature_products">
              <div class="module-header">
                <div class="module-title title-style-3">
                  <a href="<?= site_url('collections/hot')?>" title="Sản phẩm nổi bật">
                    <span>Sản phẩm nổi bật</span>
                  </a>
                </div>
              </div>
              <div class="module-content">
                
                <div class="owl-carousel owl-theme nav-enable nav-top lg4" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-nav="true" data-auto-play="true" data-auto-height="true">
                  
                  <?php foreach ($product_hot as $row ): ?>
                  
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
                          <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592511" enctype="multipart/form-data">
                            <input class="hidden" type="hidden" name="variantId" value="15300050" />
                            
                            <button class="btn btn-cart addtocart btn-transition btn_choose_product choose-pro btn-accent" title="Chọn sản phẩm"  type="button" onclick="window.location.href='<?php echo site_url('product/detail/'.$row->id)?>'" >
                            <span><i class="fa fa-cog"></i> Chi tiết</span>
                            </button>
                            
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach ?>
                  
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
                  <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/item_1_image.png?1515399077171" class="img-responsive" alt="tu-van-ban-hang-1">
                </div>
                <div class="item_desc">
                  <div class="item_title">
                    Tư vấn bán hàng 1
                  </div>
                  <div class="item_sum">
                    <label class="item_detail">
                      Mr. Cuu:
                    </label>
                    <a class="item_check" href="tel:0439999999" title="(04) 3999 9999">
                      (04) 3999 9999
                    </a>
                  </div>
                </div>
              </div>
              
              
              
              
              
              
              
              
              
              <div class="item">
                <div class="item_image">
                  <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/item_2_image.png?1515399077171" class="img-responsive" alt="tu-van-ban-hang-2">
                </div>
                <div class="item_desc">
                  <div class="item_title">
                    Tư vấn bán hàng 2
                  </div>
                  <div class="item_sum">
                    <label class="item_detail">
                      Mr. Luc:
                    </label>
                    <a class="item_check" href="tel:0436666666" title="(04) 3666 6666">
                      (04) 3666 6666
                    </a>
                  </div>
                </div>
              </div>
              
              
              
              
              
              
              
              
              
              <div class="item">
                <div class="item_image">
                  <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/item_3_image.png?1515399077171" class="img-responsive" alt="email-lien-he">
                </div>
                <div class="item_desc">
                  <div class="item_title">
                    Email liên hệ
                  </div>
                  <div class="item_sum">
                    <label class="item_detail">
                      
                    </label>
                    <a class="item_check" href="mailto:anonymous@mail.vn" title="support@bizweb.vn">
                      anonymous@mail.vn
                    </a>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
          
          
          <div class="aside-item sidebar_news">
            <div class="module-header">
              <h2 class="module-title title-style-3">
              <a href="<?= site_url('news')?>" title="Tin tức">
                <span>Tin tức</span>
              </a>
              </h2>
            </div>
            <div class="module-content">
              
              <div class="owl-carousel owl-theme nav-enable nav-top" data-lg-items="1" data-md-items="1" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-nav="true" data-auto-play="true" data-auto-height="true">
                
                <div class="item">
                  <div class="article-thumbnail">
                    <a href="#" title="Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP">
                      <picture>
                        
                        <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/xa1-1.jpg?v=1515399069080"/>
                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/xa1-1.jpg?v=1515399069080"/>
                        <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/large/100/289/080/articles/xa1-1.jpg?v=1515399069080"/>
                        <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/289/080/articles/xa1-1.jpg?v=1515399069080"/>
                        <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/xa1-1.jpg?v=1515399069080"/>
                        <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/xa1-1.jpg?v=1515399069080"/>
                        <img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/articles/xa1-1.jpg?v=1515399069080" alt="sony-xperia-xa1-va-xa1-ultra-nang-cap-cau-hinh-thiet-ke-vuong-van-camera-23mp">
                        
                      </picture>
                    </a>
                  </div>
                  <div class="article-info">
                    <h3 class="article-name">
                    <a href="#" title="Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP">
                      <span>Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP</span>
                    </a>
                    </h3>
                    <p class="article-detail">
                      <span>
                        <i class="fa fa-user"></i> Bizweb
                      </span>
                      <span>
                        <i class="fa fa-calendar"></i> 08/01/2018
                      </span>
                    </p>
                    <div class="article-summary">
                      
                      <div class="article-summary-or-content text3line">
                        Ngoài hai mẫu điện thoại XZ, Sony còn đem đến MWC 2017 hai phiên bản nâng cấp của dòng XA là XA1 và XA1 Ultra. Thừa hưởng phong cách thiết kế của dòng XZ, hai phiên bản XA mới được nâng cấp cấu hì...
                      </div>
                      <p class="margin-0">
                        <a class="text-danger" href="#" title="Sony Xperia XA1 và XA1 Ultra: nâng cấp cấu hình, thiết kế vuông vắn, camera 23MP">
                          [Đọc tiếp...]
                        </a>
                      </p>
                      
                    </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="article-thumbnail">
                    <a href="#" title="Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p">
                      <picture>
                        
                        <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/sony-xperia-xzs-3view.jpg?v=1515399069537"/>
                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/sony-xperia-xzs-3view.jpg?v=1515399069537"/>
                        <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/large/100/289/080/articles/sony-xperia-xzs-3view.jpg?v=1515399069537"/>
                        <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/289/080/articles/sony-xperia-xzs-3view.jpg?v=1515399069537"/>
                        <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/sony-xperia-xzs-3view.jpg?v=1515399069537"/>
                        <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/sony-xperia-xzs-3view.jpg?v=1515399069537"/>
                        <img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/articles/sony-xperia-xzs-3view.jpg?v=1515399069537" alt="sony-xperia-xzs-giong-xz-premium-nho-hon-camera-giong-nhau-man-hinh-1080p">
                        
                      </picture>
                    </a>
                  </div>
                  <div class="article-info">
                    <h3 class="article-name">
                    <a href="#" title="Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p">
                      <span>Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p</span>
                    </a>
                    </h3>
                    <p class="article-detail">
                      <span>
                        <i class="fa fa-user"></i> Bizweb
                      </span>
                      <span>
                        <i class="fa fa-calendar"></i> 08/01/2018
                      </span>
                    </p>
                    <div class="article-summary">
                      
                      <div class="article-summary-or-content text3line">
                        Sony có thói quen giới thiệu phiên bản "mini" của những chiếc điện thoại mạnh nhất và hôm nay cũng không ngoại lệ. Sony Xperia XZs chính là phiên bản thu nhỏ của Xperia XZ Premium, vốn là chiếc má...
                      </div>
                      <p class="margin-0">
                        <a class="text-danger" href="#" title="Sony Xperia XZs: Giống XZ Premium, nhỏ hơn, camera giống nhau, màn hình 1080p">
                          [Đọc tiếp...]
                        </a>
                      </p>
                      
                    </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="article-thumbnail">
                    <a href="#" title="Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo">
                      <picture>
                        
                        <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/galaxy-s8.jpg?v=1515399069830"/>
                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/galaxy-s8.jpg?v=1515399069830"/>
                        <source media="(min-width: 768px) and (max-width: 991px)" srcset="//bizweb.dktcdn.net/thumb/large/100/289/080/articles/galaxy-s8.jpg?v=1515399069830"/>
                        <source media="(min-width: 571px) and (max-width: 767px)" srcset="//bizweb.dktcdn.net/thumb/large/100/289/080/articles/galaxy-s8.jpg?v=1515399069830"/>
                        <source media="(min-width: 320px) and (max-width: 570px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/galaxy-s8.jpg?v=1515399069830"/>
                        <source media="(max-width: 319px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/289/080/articles/galaxy-s8.jpg?v=1515399069830"/>
                        <img class="img-responsive" src="//bizweb.dktcdn.net/100/289/080/articles/galaxy-s8.jpg?v=1515399069830" alt="galaxy-s8-se-duoc-trang-bi-cong-nghe-cam-ung-3d-tren-nut-home-ao">
                        
                      </picture>
                    </a>
                  </div>
                  <div class="article-info">
                    <h3 class="article-name">
                    <a href="#" title="Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo">
                      <span>Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo</span>
                    </a>
                    </h3>
                    <p class="article-detail">
                      <span>
                        <i class="fa fa-user"></i> Bizweb
                      </span>
                      <span>
                        <i class="fa fa-calendar"></i> 08/01/2018
                      </span>
                    </p>
                    <div class="article-summary">
                      
                      <div class="article-summary-or-content text3line">
                        Galaxy S8 đang cận kề ngày ra mắt và hôm nay (15/3), thêm một thông tin rò rỉ thú vị về mẫu smartphone này đã xuất hiện.
                        Báo cáo từ The Korea Herald cho hay, Samsung sẽ trang bị tính năng 3D ...
                      </div>
                      <p class="margin-0">
                        <a class="text-danger" href="#" title="Galaxy S8 sẽ được trang bị công nghệ cảm ứng 3D trên nút Home ảo">
                          [Đọc tiếp...]
                        </a>
                      </p>
                      
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
</section>
<section class="awe-section-4">
  <section class="section-banner banner-item">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="module-content">
            <a href="#" title="">
              <figure>
                <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/index_large_banner.png?1515399077171" class="img-responsive" alt="MobileStore123">
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
            <a title="Sản phẩm giới thiệu">
              <span>Sản phẩm giới thiệu</span>
            </a>
            </h2>
          </div>
          <div class="module-content lg6">
            
            <div class="owl-carousel owl-theme nav-enable nav-top" data-lg-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-nav="true" data-margin="0">
              
              <?php foreach ($product_intro as $row): ?>
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
                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9592511" enctype="multipart/form-data">
                        <input class="hidden" type="hidden" name="variantId" value="15300050" />
                        
                        <button class="btn btn-cart addtocart btn-transition btn_choose_product choose-pro btn-accent" title="Chọn sản phẩm"  type="button" onclick="window.location.href='<?php echo site_url('product/detail/'.$row->id)?>'" >
                        <span><i class="fa fa-cog"></i> Tuỳ chọn</span>
                        </button>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>