<?php 
header("Content-type: application/octet-stream; charset=utf-8");
header("Content-Disposition: attachment; filename=transaction.xls");
header("Pragma: no-cache");
header("Expires: 0");
?> 
<table>
		<thead>
			<tr>
				<td>STT</td>
				<td style="width:60px;">Mã số</td>
				<td>Số tiền</td>
				<td>Thanh toán</td>
				<td style="width:75px;">Ngày tạo</td>
			</tr>
		</thead>
		
		<tbody class="list_item">
		        
		        <?php foreach ($list as $k => $row):?>
			      <tr class='row_<?php echo $row->id?>'>
			      <td class="textC"><?php echo $k + 1?></td>
					
					<td class="textC"><?php echo $row->id?></td>
					
					<td>
					  <?php echo number_format($row->money)?> đ					
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
					
					
					<td class="textC"><?php echo get_date($row->order_date)?></td>
					
				</tr>
			<?php endforeach;?>	
		</tbody>
</table>
		