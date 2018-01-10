<!-- head -->
<?php $this->load->view('admin/coupon/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">

    <?php $this->load->view('admin/message', $this->data);?>
    
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon">
			<div class="checker" id="uniform-titleCheck">
    			<span>
    			   <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    			</span>
			</div>
			</span>
			<h6>Tất cả khuyến mãi</h6>
		 	<div class="num f12">Tổng số: <b><?php echo count($list)?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></td>
					<!-- <td style="width:200px;">Mã số</td> -->
          <td>Mã khuyễn mãi</td>
          <td>Trạng thái</td>
          <td>Đã dùng</td>
          <td>Bắt đầu</td>
          <td>Kết thúc</td>
					<td style="width:200px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot>
				<tr>
					<td colspan="7">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="<?php echo admin_url('coupon/delete_all')?>">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					     <div class='pagination'>
			             </div>
					</td>
				</tr>
			</tfoot>
 			
			<tbody>
			<?php foreach ($list as $row):?>
			<tr class="row_<?php echo $row->id?>">
						<td><input type="checkbox" name="id[]" value="<?php echo $row->id?>" /></td>
						
						<!-- <td class="textC"><?php echo $row->id?></td>                      -->
						<td>
						<span title="<?php echo $row->code?>" class="tipS">
							<?php echo $row->code?>				
						</span>
						</td>
            
            <td>
            <?php
            if (now() <= $row->expire_at)
              echo "Đang áp dụng";
            else
              echo "Hết hạn";
            ?>
            </td>

            <td><?= $row->used?></td>

            <td><?= mdate('%d-%m-%Y', $row->begin_at)?></td>

            <td><?= mdate('%d-%m-%Y', $row->expire_at)?></td>
						
						<td class="option">
							<a href="<?php echo admin_url('coupon/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS ">
							   <img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
							</a>
							
							<a href="<?php echo admin_url('coupon/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
							    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
							</a>
						</td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
	</div>
</div>

<div class="clear mt30"></div>
