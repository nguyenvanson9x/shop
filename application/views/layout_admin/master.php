<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('layout_admin/include/head')?>
</head>

<body class="fixed-header skin-default fixed-sidebar">
	<div class="wrapper">
		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Sidebar -->
		<?php $this->load->view('layout_admin/include/sidebar');?>
		
		<!-- Template Options -->
		<?php $this->load->view('layout_admin/include/tpl_options')?>
		
		<!-- Header -->
		<?php $this->load->view('layout_admin/include/header', array('name' => 'Son'));?>
		
		<!-- Content -->
		<div class="site-content">
			<div class="content-area py-1">
				<div class="container-fluid">
					<?php echo $the_view_content;?>
        		</div>
			</div>
		</div>
		<!-- End Content -->
	</div>
	<?php $this->load->view('layout_admin/include/footer');?>
</body>
</html>