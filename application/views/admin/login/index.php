<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('layout_admin/include/head')?>
</head>

<body class="img-cover" style="background-image: url(''<?php echo public_url();?>img/photos-1/2.jpg');">
	<div class="wrapper">
		<!-- Preloader -->
		<div class="preloader"></div>

		<div class="container-fluid">
			<div class="sign-form">
				<div class="row">
					<div class="col-md-4 offset-md-4 px-3">
						<div class="box b-a-0">
							<div class="p-2 text-xs-center">
								<h5>Welcome</h5>
							</div>
							<form class="form-material mb-1">
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail"
										placeholder="Email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control"
										id="exampleInputPassword" placeholder="Password">
								</div>
								<div class="px-2 form-group mb-0">
									<button type="submit"
										class="btn btn-purple btn-block text-uppercase">Sign in</button>
								</div>
							</form>
							<div class="px-2">
								<div class="row">
									<div class="col-xs-6">
										<button type="button"
											class="btn bg-facebook btn-block label-left mb-0-25">
											<span class="btn-label"><i class="ti-facebook"></i></span>
											Facebook
										</button>
									</div>
									<div class="col-xs-6">
										<button type="button"
											class="btn bg-googleplus btn-block label-left mb-0-25">
											<span class="btn-label"><i class="ti-google"></i></span>
											Google+
										</button>
									</div>
								</div>
							</div>
							<div class="p-2 text-xs-center text-muted">
								Don't have an account? <a class="text-black"
									href="pages-sign-in.html#"><span class="underline">Sign up</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<?php $this->load->view('layout_admin/include/footer');?>
</body>
</html>