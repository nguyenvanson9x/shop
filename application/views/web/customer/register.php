<div class="customer-template">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="wrapper-form">
					<!-- {% form 'customer_register' %}     -->
          <h1 class="customer-heading">Đăng ký tài khoản</h1>
          <!-- 
					{% if form.errors.size > 0 %}
					<div class="alert alert-danger alert-dismissable">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						{% for field in form.errors %}
						<p class="margin-0">
							{{ form.errors.messages[field] }}
						</p>
						{% endfor %}
					</div>
					{% endif %}
          -->
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Họ:</label>
								<input type="text" name="LastName" class="input-control form-control" placeholder="Họ" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Tên:</label>
								<input type="text" name="FirstName" class="input-control form-control" placeholder="Tên" required="">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Email:</label>
								<input type="text" name="email" class="input-control form-control" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Mật khẩu:</label>
								<input type="password" name="password" class="input-control form-control" placeholder="Mật khẩu" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<button type="submit" class="btn btn-dark"><i class="fa fa-key"></i> Đăng ký</button>
								<button onClick="window.location.href='<?= site_url('account/login')?>'" class="btn btn-dark"><i class="fa fa-unlock"></i> Đăng nhập</a>
							</div>  
						</div>
					</div>
					<!-- {% endform %}  -->
				</div>
			</div>
		</div>
	</div>
</div>