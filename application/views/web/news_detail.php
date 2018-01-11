<div class="blog-article-template article">
  <div class="container article-wrapper">
    <div class="row">
      <section class="main-content col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <article class="article-main module-content" itemscope="" itemtype="http://schema.org/Article">
          <meta itemprop="mainEntityOfPage" content="">
          <meta itemprop="description" content="<?php $title?>">
          <meta itemprop="author" content="Bizweb">
          <meta itemprop="headline" content="<?php $title?>">
          <meta itemprop="image" content="https:<?php $title?>">
          <meta itemprop="datePublished" content="29-12-2017">
          <meta itemprop="dateModified" content="08-01-2018">
          <div class="hidden" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
            <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
              <img src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/logo.png?1515399077171" alt="MobileStore123">
              <meta itemprop="url" content="https://bizweb.dktcdn.net/100/289/080/themes/628775/assets/logo.png?1515399077171">
              <meta itemprop="width" content="200">
              <meta itemprop="height" content="49">
            </div>
            <meta itemprop="name" content="MobileStore123">
          </div>
          <div class="row">
            <?php 
          
            $url = "news/detail/" . $news->id;
            $title = $news->title;
            $content = $news->content;
            $image = base_url("upload/news/anh0.jpg");
            if (file_exists("upload/news/" . $news->image)) {
              $image = base_url("upload/news/" . $news->image);
            }
            $poster = $this->account_model->get_info($news->account_id);
            
            $avt1 = base_url("upload/common/avt1.jpg");
            $avt2 = base_url("upload/common/avt2.jpg");
            $avt3 = base_url("upload/common/avt3.jpg");
          ?>
            <!-- Content a product detai -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h1 class="title-head">
                <?php echo $title?>
              </h1>
              <div class="post-details">
                <span class="author">
                  <i class="fa fa-user"></i>
                  <?php echo $poster->fullname;?>
                </span>
                <span>
                  <i class="fa fa-calendar"></i>
                  <?php echo mdate('%d-%m-%Y',$news->create_at); ?>
                </span>
              </div>
              <div class="article-image">
                <img src="<?php echo $image;?>" alt="<?php echo $image;?>">
              </div>
              <div class="article-details">
                <div class="article-content">
                  <div class="rte">
                    <p>
                      <?php echo $content;?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h5 class="title-form-coment">Bình luận (
                <span>1</span>)</h5>
              <div id="article-comments">
                <div class="hidden">1 bình luận</div>
                <div class="article-comment clearfix">
                  <figure class="article-comment-user-image">
                    <img src="<?php echo $avt1;?>" alt="<?php echo $avt1;?>" class="block">
                  </figure>
                  <div class="article-comment-user-comment">
                    <p class="user-name-comment">
                      <strong>
                        Nguyễn Văn Sơn
                      </strong>
                    </p>
                    <span class="article-comment-date-bull">
                      <i>
                        <?php echo mdate('%d-%m-%Y',$news->create_at); ?>
                      </i>
                    </span>
                    <div class="article-comment-content">Bài viết hay quá!!!</div>
                  </div>
                </div>
              </div>
              <!-- Pagination -->
              <div class="row">
                <div class="notification col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <!-- Thông báo -->
                  <form accept-charset="UTF-8" action="/posts<?= site_url($url);?>/comments" id="article_comments" method="post">
                    <input name="FormType" type="hidden" value="article_comments">
                    <input name="utf8" type="hidden" value="true">
                    <!-- Bình luận -->
                    <div class="row">
                      <div class="form-comment col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h5 class="title-form-coment">VIẾT BÌNH LUẬN</h5>
                        <div class="layout-comment">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                              <fieldset class="form-group">
                                <input placeholder="Họ tên" type="text" class="form-control form-control-lg input-control" value="" id="full-name" name="Author"
                                  required="">
                              </fieldset>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                              <fieldset class="form-group">
                                <input placeholder="Email" type="email" class="form-control form-control-lg input-control" value="" id="email" name="Email"
                                  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" required="">
                              </fieldset>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <fieldset class="form-group">
                                <textarea placeholder="Nội dung" class="form-control form-control-lg input-control" id="comment" name="Body" rows="6" maxlength="500"
                                  minlength="5" required=""></textarea>
                              </fieldset>
                            </div>
                          </div>
                          <div>
                            <button type="submit" class="btn btn-dark margin-top-15 padding-left-15 padding-right-15">Gửi bình luận</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>
      <aside class="sidebar left left-content col-xs-12 col-sm-12 col-md-3 col-lg-3">

        <!-- Tin nổi bật -->
        <div class="aside-item aside-articles">
          <div class="module-header">
            <h2 class="module-title title-style-2">
              <a class="padding-right-55" title="Tin tức nổi bật">
                Tin tức nổi bật
              </a>
            </h2>
          </div>
          <div class="module-content">
            <div class="owl-carousel owl-theme nav-enable nav-top owl-loaded owl-drag" data-lg-items="1" data-md-items="1" data-sm-items="2"
              data-xs-items="2" data-xxs-items="1" data-nav="true" data-auto-play="true">
              <!-- ADD DIV -->
              <!-- content -->
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 263px;">
                  <div class="owl-item active" style="width: 263px;">
                    <!-- view > 400 -->
                    <div class="item">
                      <?php foreach ($list as $news): ?>
                      <?php if($news->view > 400): ?>
                      <?php 
                      $url = "news/detail/" . $news->id;
                        $title = $news->title;
                        $image = base_url("upload/news/anh0.jpg");
                        if (file_exists("upload/news/".$news->image)) {
                          $image = base_url("upload/news/".$news->image);
                        }
                      ?>
                      <div class="artitle-item item-small">
                        <div class="article-thumbnail">
                          <a href="<?= site_url($url);?>" title="<?php echo $title?>">
                            <picture>

                              <source media="(min-width: 1200px)" srcset="<?php echo $image; ?>" />
                              <source media="(min-width: 992px) and (max-width: 1199px)" srcset="<?php echo $image; ?>" />
                              <source media="(min-width: 768px) and (max-width: 991px)" srcset="<?php echo $image; ?>" />
                              <source media="(min-width: 571px) and (max-width: 767px)" srcset="<?php echo $image; ?>" />
                              <source media="(min-width: 543px) and (max-width: 570px)" srcset="<?php echo $image; ?>" />
                              <source media="(min-width: 320px) and (max-width: 542px)" srcset="<?php echo $image; ?>" />
                              <source media="(min-width: 319px)" srcset="<?php echo $image; ?>" />
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
                      <?php endif;?>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Thẻ -->
        <!-- <div class="aside-item article-tags">
          <div class="module-header">
            <h2 class="module-title title-style-2">
              <span>
                Tags bài viết
              </span>
            </h2>
            <div class="module-content">
              <div class="bg-warning padding-15">
                <div class="text-warning">
                  Danh mục hiện tại không có tag nào.
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- QC -->
        <div class="aside-item blog-banner">
          <div class="module-header">
            <h2 class="module-title title-style-2">
              <span>Quảng cáo</span>
            </h2>
          </div>
          <div class="module-content">
            <a href="" title="Quảng cáo">
              <img class="img-responsive" alt="quang-cao" src="//bizweb.dktcdn.net/100/289/080/themes/628775/assets/blog_aside_banner.png?1515399077171">
            </a>
          </div>
        </div>
        <!-- Chi sẻ -->
        <div class="aside-item article-sharing">
          <div class="module-header">
            <h2 class="module-title title-style-2">
              <span>Chia sẻ bài viết</span>
            </h2>
          </div>
          <div class="module-content">
            <div class="social-media" data-permalink="https://mobilestore123.bizwebvietnam.net<?= site_url($url);?>">
              <div class="custom_list">
                <a target="_blank" href="//www.facebook.com/sharer.php?u=https://mobilestore123.bizwebvietnam.net<?= site_url($url);?>" class="share-facebook hv-txt-facebook btn-transition btn-border-hover"
                  title="Chia sẻ lên Facebook">
                  <i class="fa fa-facebook-official"></i>
                </a>
                <a target="_blank" href="//twitter.com/share?text=<?php echo $image;?>&amp;url=https://facebook.com.vn<?= site_url($url);?>"
                  class="share-twitter hv-txt-twitter btn-transition btn-border-hover" title="Chia sẻ lên Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a target="_blank" href="//plus.google.com/share?url=https://mobilestore123.bizwebvietnam.net<?= site_url($url);?>" class="share-google hv-txt-google-plus btn-transition btn-border-hover"
                  title="+1">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Chào mừng -->
        <div class="aside-item aside-rte">
          <div class="module-header">
            <h2 class="module-title title-style-2">
              <span>Kính chào</span>
            </h2>
          </div>
          <div class="module-content">
            <div class="rte-content">
              Chào mừng quý khách tới với cửa hàng của chúng tôi. Hãy liên hệ theo địa chỉ cửa hàng ở bên để có thể được tư vấn và chăm
              sóc một cách tốt nhất. Xin cảm ơn.
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</div>