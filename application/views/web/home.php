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
                      Mr. Son:
                    </label>
                    <a class="item_check" href="tel:0439999999" title="(04) 3999 9999">
                      (04) 0123 456 789
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
                      Mr. Loc:
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
                    <a class="item_check" href="mailto:nguyentuan96ttbn@gmail.vn" title="support@mobileshop.vn">
                      nguyentuan96ttbn@gmail.vn
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
                
                
                <?php foreach ($hotNews as $news):?>
                <div class="item">
                  <div class="article-thumbnail">
                    <?php 
                      $url = "news/detail/" . $news->id;
                      $title = $news->title;
                      $image = "upload/news/anh0.jpg";
                      if (file_exists("upload/news/" . $news->image)) {
                        $image = "upload/news/" . $news->image;
                      }
                      $poster = $this->account_model->get_info($news->account_id);
                    ?>
                    <a href="<?= site_url($url);?>" title="<?php echo $title;?>">
                      <picture>
                        
                        <source media="(min-width: 1200px)" srcset="<?php echo $image;?>"/>
                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="<?php echo $image;?>"/>
                        <source media="(min-width: 768px) and (max-width: 991px)" srcset="<?php echo $image;?>"/>
                        <source media="(min-width: 571px) and (max-width: 767px)" srcset="<?php echo $image;?>"/>
                        <source media="(min-width: 320px) and (max-width: 570px)" srcset="<?php echo $image;?>"/>
                        <source media="(max-width: 319px)" srcset="<?php echo $image;?>"/>
                        <img class="img-responsive" src="<?php echo $image;?>" alt="<?php echo $image;?>">
                        
                      </picture>
                    </a>
                  </div>
                  <div class="article-info">
                    <h3 class="article-name">
                    <a href="<?= site_url($url);?>" title="<?php echo $title;?>">
                      <span><?php echo $title;?></span>
                    </a>
                    </h3>
                    <p class="article-detail">
                      <span>
                        <i class="fa fa-user"></i> <?php echo $poster->fullname;?>
                      </span>
                      <span>
                        <i class="fa fa-calendar"></i> <?php echo mdate('%d-%m-%Y',$news->create_at); ?>
                      </span>
                    </p>
                    <div class="article-summary">
                      
                      <div class="article-summary-or-content text3line">
                        <?php echo $news->content;?>
                      </div>
                      <p class="margin-0">
                        <a class="text-danger" href="<?= site_url($url);?>" title="<?php echo $title;?>">
                          [Đọc tiếp...]
                        </a>
                      </p>
                      </div>
                    </div>
                  </div>
                  <?php endforeach;?>
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
                <?php if($row->discount != 0) { ?>
              <div class="item">
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
</section>