<!-- head -->
<?php $this->load->view('admin/product/head')?>

<div class="line"></div>

<div class="wrapper">
    
	   	<!-- Form -->
		<form enctype="multipart/form-data" method="post" action="<?php echo admin_url('product/add')?>" id="form" class="form">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
						<h6>Thêm mới Sản phẩm</h6>
					</div>
					
				    <ul class="tabs">
		                <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
		                <li class=""><a href="#tab3">Bài viết</a></li>
		                
					</ul>
					
					<div class="tab_container">
					     <div class="tab_content pd0" id="tab1" style="display: block;">
					         <div class="formRow">
	<label for="param_name" class="formLeft">Tên:</label>
	<div class="formRight">
		<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="name"></span>
		<span class="autocheck" name="name_autocheck"></span>
		<div class="clear error" name="name_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label class="formLeft">Hình ảnh:</label>
	<div class="formRight">
		<div class="left">
    		<input type="file" name="image" id="image" size="25">
		</div>
		<div class="clear error" name="image_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_cat" class="formLeft">Loại:</label>
	<div class="formRight">
	    <select name="category"  class="left" >
				
           		<?php foreach ($category as $row):?>
				
           		  <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
           		
           		<?php endforeach;?>
           		
		</select>
		<span class="autocheck" name="cat_autocheck"></span>
		<div class="clear error" name="cat_error"></div>
	</div>
	<div class="clear"></div>
</div>
<!-- Price -->
<div class="formRow">
	<label for="param_price" class="formLeft">
		Giá :
	</label>
	<div class="formRight">
		<span class="oneTwo">
			<input type="text" _autocheck="true" class="format_number" id="param_price" style="width:100px" name="price">
			<img src="<?php echo public_url('admin')?>/crown/images/icons/notifications/information.png" style="margin-bottom:-8px" class="tipS" original-title="Giá bán sử dụng để giao dịch">
		</span>
		<span class="autocheck" name="price_autocheck"></span>
		<div class="clear error" name="price_error"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- Price -->



<div class="formRow">
	<label for="param_cat" class="formLeft">Hãng:</label>
	<div class="formRight">
	    <select name="supplier"  class="left" >
				<!-- kiem tra danh muc co danh muc con hay khong -->
				<?php foreach ($supplier as $row):?>
				
           		  <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
           		
           		<?php endforeach;?>
		</select>
		<span class="autocheck" name="cat_autocheck"></span>
		<div class="clear error" name="cat_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_discount" class="formLeft">
		Giảm giá (VND) 
		<span></span>:
	</label>
	<div class="formRight">
		<span>
			<input type="text" class="format_number" id="param_discount" style="width:100px" name="discount">
			<img src="<?php echo public_url('admin')?>/crown/images/icons/notifications/information.png" style="margin-bottom:-8px" class="tipS" original-title="Phần trăm giảm giá">
		</span>
		<span class="autocheck" name="discount_autocheck"></span>
		<div class="clear error" name="discount_error"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- expire_discount -->
<div class="formRow">
	<label for="param_expire_discount" class="formLeft">
		Hạn khuyến mãi :
	</label>
	<div class="formRight">
		<span class="oneFour"><input type="text" id="param_expire_discount" name="expire_discount"></span>
		<span class="autocheck" name="expire_discount_autocheck"></span>
		<div class="clear error" name="expire_discount_error"></div>
	</div>
	<div class="clear"></div>
</div>
					         <div class="formRow hide"></div>
						 </div>
						 
						 <div class="tab_content pd0" id="tab2" style="display: none;">
						     			


						     <div class="formRow hide"></div>
						 </div>
						 
						 <div class="tab_content pd0" id="tab3" style="display: none;">
						      <div class="formRow">
                            	<label class="formLeft">Nội dung:</label>
                            	<div class="formRight">
                            		<textarea class="editor" id="param_content" name="content"></textarea>
                            		<div class="clear error" name="content_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
						      <div class="formRow hide"></div>
						 </div>
						
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit">
	           			<input type="submit" class="redB" value="Thêm mới">
	           			<input type="reset" class="basic" value="Đặt lại">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
<div class="clear mt30"></div>
