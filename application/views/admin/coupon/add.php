<!-- head -->
<?php $this->load->view('admin/coupon/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
      <div class="widget">
           <div class="title">
			<h6>Thêm mới loại sản phẩm</h6>
		</div>

      <form id="form" class="form" enctype="multipart/form-data" method="post" action="">
          <fieldset>
                
                <div class="formRow">
                	<label for="param_code" class="formLeft">Mã khuyến mãi:</label>
                	<div class="formRight">
                		<span class="oneTwo"><input type="text" _autocheck="true" id="param_code" value="<?php echo set_value('code')?>" name="code"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"><?php echo form_error('code')?></div>
                	</div>
                	<div class="clear"></div>
                </div>
                            
                <div class="formSubmit">
	           			<input type="submit" class="redB" value="Thêm mới">
	           	</div>
          </fieldset>
      </form>
      
      </div>
</div>
