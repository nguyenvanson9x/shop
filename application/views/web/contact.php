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
							<strong itemprop="title">Liên hệ</strong>
						</li>
					
				</ul>
			</div>
		</div>
	</div>
</section>
	
	


<div class="page-template">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<div class="module-header">
					<h1 class="title-head">Liên hệ</h1>
				</div>
				<div class="module-content">
					<form accept-charset='UTF-8' action='/contact' id='contact' method='post'>
<input name='FormType' type='hidden' value='contact' />
<input name='utf8' type='hidden' value='true' />
					
					
					<div class="form-signup clearfix">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<fieldset class="form-group">
									<label>Tên: </label>
									<input type="text" name="contact[name]" id="name" class="form-control  form-control-lg" required>
								</fieldset>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<fieldset class="form-group">
									<label>Email: </label>
									<input type="email" name="contact[email]"  id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" class="form-control form-control-lg" required>
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<fieldset class="form-group">
									<label>Nội dung: </label>
									<textarea name="contact[body]" id="comment" class="form-control form-control-lg" rows="5" Required></textarea>
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<button tyle="summit" class="btn btn-dark margin-top-15 margin-bottom-30">Gửi liên hệ</button>
							</div> 
						</div>
					</div>
					</form>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<div class="module-header">
					<h2 class="module-title">
						Thông tin
					</h2>
				</div>
				<div class="module-content">
					<ul class="list-menu">
						
						<li>
							<a href="/" title="Trang chủ">
								<i class="fa fa-angle-right"></i>
								<span>Trang chủ</span>
							</a>
						</li>
						
						<li>
							<a href="<?= site_url('collections/all')?>" title="Sản phẩm">
								<i class="fa fa-angle-right"></i>
								<span>Sản phẩm</span>
							</a>
						</li>
						
						<li>
							<a href="<?= site_url('news')?>" title="Blog">
								<i class="fa fa-angle-right"></i>
								<span>Tin tức</span>
							</a>
						</li>
						
						<li>
							<a href="<?= site_url('about')?>" title="Giới thiệu">
								<i class="fa fa-angle-right"></i>
								<span>Giới thiệu</span>
							</a>
						</li>
						
						<li>
							<a href="<?= site_url('contact')?>" title="Liên hệ">
								<i class="fa fa-angle-right"></i>
								<span>Liên hệ</span>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>