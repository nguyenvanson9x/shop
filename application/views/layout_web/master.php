<!DOCTYPE html>
<html lang="en">
	<head>		
			<?php $this->load->view('layout_web/include/head')?>
		</head>
		<body>
			<!-- Header -->
			<?php $this->load->view('layout_web/include/header');?>
			<!-- Content -->
			<?php echo $the_view_content;?>
			<!-- End Content -->
			
			<!-- Footer -->
			<?php $this->load->view('layout_web/include/footer');?>
		</body>
	</html>