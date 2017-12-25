<div class="customer-template">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="wrapper-form">
					<!-- {% form 'customer_login' %} -->
					<h1 class="customer-heading">Đăng nhập tài khoản</h1>
					<!-- {% if form.errors.size > 0 %} -->
					<!-- <div class="alert alert-danger alert-dismissable">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<!-- {% for field in form.errors %} -->
						<!-- <p class="margin-0"> -->
							<!-- {{ form.errors.messages[field] }} -->
						<!-- </p> -->
						<!-- {% endfor %} -->
					<!-- </div> -->
					<!-- {% endif %} -->
					<div class="form-group">
						<label>Email:</label>
						<input type="email" class="input-control form-control form-control-lg" value="" name="email" id="customer_email" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" required>
					</div>
					<div class="form-group">
						<label>Mật khẩu:</label>
						<input type="password" class="input-control form-control form-control-lg" value="" name="password" id="customer_password" placeholder="Mật khẩu">
					</div>
					<div class="form-group">
						<button class="btn btn-dark"><i class="fa fa-unlock"></i> Đăng nhập</button>
						<a href="#recover" onclick="showRecoverPasswordForm(); return false;">Quên mật khẩu?</a>
					</div>					
					
					<!-- {% endform %} -->
					<div id="recover_password" style="display: none;">
						<!-- {% form 'recover_customer_password' %}													 -->
						<h4 class="customer-heading">Lấy lại mật khẩu</h4>
						<!-- {% if form.errors.size > 0 %} -->
						<!-- {{ form.errors | default_errors }} -->
						<!-- {% endif %} -->
						<p>Chúng tôi sẽ gủi email kích hoạt việc lấy lại mật khẩu.</p>
						<div class="form-group">
							<label>Email:</label>
							<input type="email" class="input-control form-control form-control-lg" value="" name="email" id="customer_email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
						</div>
						<div class="form-group clearfix">					
							<a href="javascript:;" class="pull-right" onclick="hideRecoverPasswordForm();return false;">Quay lại</a>
							<button type="submit" class="btn btn-dark">Gửi</button>
						</div>	
						<!-- {% endform %} -->
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="wrapper-form">
					<h2 class="customer-heading">Tạo tài khoản mới</h2>
					<p>Đăng ký tài khoản ngay để có thể mua hàng nhanh chóng và dễ dàng hơn ! Ngoài ra còn có rất nhiều chính sách và ưu đãi cho các thành viên</p>
					<button onClick="window.location.href='<?= site_url('account/register')?>'" class="btn btn-dark">
						<i class="fa fa-user"></i> Tạo tài khoản
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>  
	function showRecoverPasswordForm() {
		document.getElementById('recover_password').style.display = 'block';
		document.getElementById('customer_login').style.display='none';
	}

	function hideRecoverPasswordForm() {
		document.getElementById('recover_password').style.display = 'none';
		document.getElementById('customer_login').style.display = 'block';
	}

	// Allow deep linking to the recover password form
	if (window.location.hash == '#recover') { showRecoverPasswordForm() }
</script>