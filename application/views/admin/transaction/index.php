<!-- head -->
<?php $this->load->view('admin/transaction/head', $this->data)?>
<div class="line"></div>
<div id="main_transaction" class="wrapper">
	<div class="widget">
		<div class="title">
			<span class="titleIcon">
				<input type="checkbox" name="titleCheck" id="titleCheck">
			</span>
			<h6>
				Danh sách giao dịch
			</h6>
			<div class="num f12">Số lượng:
				<b>
					<?php echo $total_rows?>
				</b>
			</div>
		</div>
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			<thead class="filter">
				<tr>
					<td colspan="9">
						<form class="list_filter form" action="<?php echo current_url(); ?>" method="get">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td class="label" style="width:60px;">
											<label for="filter_id">
												Mã số
											</label>
										</td>
										<td class="item">
											<input name="id" value="<?php if(isset($filter['id'])){echo $filter['id'];}?>" id="filter_id" type="text" style="width:95px;"
											/>
										</td>
										<td class="label" style="width:60px;">
											<label for="filter_type">
												Thanh toán
											</label>
										</td>
										<td class="item">
											<select name="payment_status">
												<option value=""></option>
												<option value='1' <?php if(isset($filter[ 'payment_status']) && $filter[ 'payment_status']==1 ){echo 'selected';}?>>Đã thanh toán</option>
												<option value='0' <?php if(isset($filter[ 'payment_status']) && $filter[ 'payment_status']==0 ){echo 'selected';}?>>Chưa thanh toán</option>
											</select>
										</td>
										<td class="label" style="width:60px;">
											<label for="filter_created">
												<?php echo lang('from_date'); ?>
											</label>
										</td>
										<td class="item">
											<input name="created" value="<?php if($created){echo $created;}?>" id="filter_created" type="text" class="datepicker"
											/>
										</td>
										<td colspan='2' style='width:60px'>
											<input type="submit" class="button blueB" value="<?php echo lang('filter')?>" />
											<input type="reset" class="basic" value="Reset" onclick="window.location.href = '<?php echo admin_url('transaction'); ?>'; ">
										</td>
									</tr>
									<tr>
										<td class="label" style="width:60px;">
											<label for="filter_user">
												Khách hàng
											</label>
										</td>
										<td class="item">
											<input name="user_name" value="<?php if(isset($filter['user_name'])){echo $filter['user_name'];}?>" id="filter_user" class="tipS"
											 title="Nhập tên khách hàng" type="text" />
										</td>
										<td class="label">
											<label for="filter_status">
												Giao hàng
											</label>
										</td>
										<td class="item">
											<select name="delivery_status">
												<option></option>
												<option value='0' <?php if(isset($filter[ 'delivery_status']) && $filter[ 'delivery_status']=='0' ){echo 'selected';}?>>Chưa giao hàng</option>
												<option value='1' <?php if(isset($filter[ 'delivery_status']) && $filter[ 'delivery_status']=='1' ){echo 'selected';}?>>Đã giao hàng</option>
												<option value='2' <?php if(isset($filter[ 'delivery_status']) && $filter[ 'delivery_status']=='2' ){echo 'selected';}?>>Hủy bỏ</option>
											</select>
										</td>
										<td class="label">
											<label for="filter_created_to">
												<?php echo lang('to_date'); ?>
											</label>
										</td>
										<td class="item">
											<input name="created_to" value="<?php if($created_to){echo $created_to;}?>" id="filter_created_to" type="text"
											 class="datepicker" />
										</td>
										<td class="label"></td>
										<td class="item"></td>
									</tr>
								</tbody>
							</table>
						</form>
					</td>
				</tr>
			</thead>
			<thead>
				<tr>
					<td style="width:21px;">
						<img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png">
					</td>
					<td style="width:60px;">Đơn hàng</td>
					<td>Ngày đặt</td>
					<td>Khách hàng</td>
					<td>Thanh toán</td>
					<td style="width:75px;">Giao hàng</td>
					<td style="width:120px;">Tổng tiền</td>
					<td>Hành động</td>
				</tr>
			</thead>
			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="8">
						<div class="list_action itemActions">
							<a url="<?php echo admin_url('transaction/delete_all')?>" class="button blueB" id="submit" href="#submit">
								<span style="color:white;">Xóa hết</span>
							</a>
						</div>
						<div class="pagination">
							<?php echo $this->pagination->create_links()?>
						</div>
						<div class="clear"></div>
					</td>
				</tr>
			</tfoot>
			<tbody class="list_item">
				<?php foreach ($list as $row):?>
				<tr class="row_<?php echo $row->id?>">
					<td>
						<input type="checkbox" value="<?php echo $row->id?>" name="id[]">
					</td>
					<td class="textC">
						<?php echo $row->id?>
					</td>
					<td>
						<?php echo mdate('%d-%m-%Y', $row->order_date); ?>
					</td>
					<td>
						<?php echo $row->user_name?>
					</td>
					<td>
						<?php 
					if($row->payment_status == 0)
					{
					    echo 'Chưa thanh toán';
					}elseif ($row->payment_status == 1)
					{
					    echo 'Đã thanh toán';
					}else{
					    echo 'Thanh toán thất bại';
					}
					?>
					</td>
					<td>
						<?php 
						if ($row->delivery_status == 0)
							echo "Chưa giao hàng";
						else if ($row->delivery_status == 1)
							echo "Đã giao hàng";
						else
							echo "Hủy bỏ"
						?>
					</td>
					<td  class="textC"><?= number_format($row->money); ?></td>
					<td class="option textC">
						<a title="Xem chi tiết giao dịch" class="tipS lightbox" href="<?php echo admin_url('transaction/detail/'.$row->id)?>">
							<img src="<?php echo public_url('admin/images')?>/icons/color/view.png">
						</a>
						<a class="tipS verify_action" title="Xóa" href="<?php echo admin_url('transaction/del/'.$row->id)?>">
							<img src="<?php echo public_url('admin/images')?>/icons/color/delete.png">
						</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>