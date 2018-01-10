<section class="signup search-main search-template">

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php if ($query != ""):?>
						<?php if (count($products) == 0):?>
							<div class="bg-danger padding-15 margin-bottom-15">
								<p class="margin-0">Không tìm thấy bất kỳ kết quả với từ khóa: <b class="keysearch">"<?php echo $query; ?>"</b></p>	
							</div>
						<?php else:?>
							<div class="bg-success padding-15 margin-bottom-15">
								<p class="margin-0">Có <b><?php echo count($products); ?></b> kết quả tìm kiếm với từ khoá <b>"<?php echo $query; ?>"</b></p>
							</div>

							<section class="section-products products-view products-view-grid lg4">
								<div class="product-grid-show products">
									<div class="row">
										<?php foreach ($products as $row):?>
										<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 item" >
											<div class="product-box product-grid-item">
												<div class="product-thumbnail">
													<a href="<?php echo site_url('product/detail/'.$row->id)?>" title="<?php echo $row->name; ?>">
														<picture class="dp-flex">
															<img class="img-responsive" src="
																	
																	<?php
																		if(file_exists('upload/product/'.$row->image))
																		{
																			echo base_url('upload/product/'.$row->image);
																		}
																		else
																			{
																			echo base_url('upload/unknown.png');
																		}
																	?>
																	" alt="<?php echo $row->name; ?>" />
														</picture>
													</a>
												</div>
												<div class="product-info">
													<h3 class="product-name text1line">
														<a href="<?php echo site_url('product/detail/'.$row->id)?>" title="<?php echo $row->name; ?>">
															<?php echo $row->name; ?>
														</a>
													</h3>
													<div class="price-box price-loop-style">
														<?php if ($row->discount != 0 && $row->expire_discount > now()) {?>
														<span class="special-price">
															<span class="price">
																<?php echo number_format(($row->price-($row->price*$row->discount/100)),0,',','.'); ?>
															</span>
														</span>
														<span class="old-price">
															<span class="price">
																<?php echo number_format($row->price,0,',','.'); ?>
															</span>
														</span>
														<?php } else { ?>
														<span class="special-price">
															<span class="price">
																<?php echo number_format($row->price,0,',','.'); ?>
															</span>
														</span>
														<?php } ?>
													</div>
												</div>
											</div>
										</div>
										<?php endforeach;?>
									</div>
								</div>
							</section>
						<?php endif;?>
						<?php else:?>
						<div class="bg-danger padding-15 margin-bottom-15">Vui lòng nhập từ khóa tìm kiếm</div>
						<?php endif;?>
			</div>
		</div>
	</div>
</section>