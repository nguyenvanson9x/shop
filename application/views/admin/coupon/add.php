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
						<span class="oneTwo">
							<input type="text" _autocheck="true" id="param_code" value="" name="code">
						</span>
						<span class="autocheck" name="code_autocheck"></span>
						<div class="clear error" name="code_error">
							<?php echo form_error('code')?>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label for="param_discount" class="formLeft">Giá trị khuyến mãi (%):</label>
					<div class="formRight">
						<span class="oneTwo">
							<input type="text" _autocheck="true" id="param_discount" value="" name="discount">
						</span>
						<span class="autocheck" name="discount_autocheck"></span>
						<div class="clear error" name="discount_error">
							<?php echo form_error('discount')?>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label for="param_begin_at" class="formLeft">Ngày bắt đầu:</label>
					<div class="formRight">
						<span class="oneTwo">
							<input type="text" _autocheck="true" id="param_begin_at" value="" name="begin_at" class="datepicker">
						</span>
						<span class="autocheck" name="begin_at_autocheck"></span>
						<div class="clear error" name="begin_at_error">
							<?php echo form_error('begin_at')?>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label for="param_expire_at" class="formLeft">Ngày kết thúc:</label>
					<div class="formRight">
						<span class="oneTwo">
							<input type="text" _autocheck="true" id="param_expire_at" value="" name="expire_at" class="datepicker">
						</span>
						<span class="autocheck" name="expire_at_autocheck"></span>
						<div class="clear error" name="expire_at_error">
							<?php echo form_error('expire_at')?>
						</div>
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