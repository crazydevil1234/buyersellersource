<?php
use App\Model\BdtdcProduct;
?>
<?php if($product_orders): ?>
	<?php $__currentLoopData = $product_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-sm-12 col-md-12 padding_0 head-query" style="margin-right: 0px; margin-left: 0px">
		<div class="col-sm-12 col-md-12 padding_0 head-query-top">
			<div class="col-sm-4 padding_0">
				<span style="display: block;float: left;padding: 5px 10px;">
					<span class="lf-dots">
							<i style="font-size: 15px; position: relative; top: 1.5px; color: #1f5d9d;" class="fa fa-ellipsis-v" aria-hidden="true"></i>
							<ul style="min-width: 140px;" class="lf-d-inner" >
      							<li>
      								<a class=""  href="#">Move to <i class="fa fa-angle-right pull-right"></i></a>
      								<ul class="lf-drop">
      									<li role="presentation" data-remove="0"><a class="add_to" style="" role="menuitem" tabindex="-1" href="#">Ungroup</a></li>
										<?php if($bdtdc_custom_folder): ?>
											<?php $__currentLoopData = $bdtdc_custom_folder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $folder_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li role="presentation" data-remove="<?php echo e($folder_name->id); ?>"><a class="add_to" style="" role="menuitem" tabindex="-1" href="#"><?php echo e($folder_name->name); ?></a></li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
      								</ul>
      							</li>
      							<li><a href="#" class="all_inquery_action" targeted="flag">Set flag</a></li>
								<li><a href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
								<li><a href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
								<li><a href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
								<li><a class=""  href="#">Report Spam</a></li>
					    	</ul>
					</span>
					<input type="checkbox" inquery_id_data="<?php echo e($product_order->id); ?>" data_quotation_type="join" class="inq_select_single mail_check" name="dtata" style="margin-right: 3px">
					<!-- <i style="cursor:pointer;" class="fa fa-flag inq_flag_hover <?php //if($product_order->flag == 1){echo "reverse_action_inquery inq_flag_active";}else{echo "inquery_action inq_flag_default";} ?>" ca_inquery_id="{-{$product_order->id}-}" ca_action="join_flag" ca_reverse_from="flag" aria-hidden="true"></i> -->
					<input class="star <?php if($product_order->flag == 1){echo "reverse_action_inquery";}else{echo "inquery_action";} ?>" type="checkbox" title="bookmark page" ca_inquery_id="<?php echo e($product_order->id); ?>" ca_action="join_flag" ca_reverse_from="flag" style="margin-right: 3px" <?php if($product_order->flag == 1){echo "checked";}?>>

						<?php
							$inq_total_count = 0;
							if($product_order->views == 0){
								$inq_total_count++;
							}
						?>
						<!-- <?php
						//if($inq_total_count > 0){
							//echo $inq_total_count;
						//}
						?> -->
						<?php if($inq_total_count > 0): ?>
							<i class="fa fa-envelope" title="<?php echo e($inq_total_count); ?> unread message" aria-hidden="true" style="color: #4ad44a; font-size: 17px; top: 1px; position: relative;"></i>(<?php if($inq_total_count > 0){
							echo $inq_total_count;
						} ?>)
						<?php endif; ?>
				</span>
				<div style="display: block;float: left; padding: 9px 25px;padding-right: 0px">Inquiry ID:</div>
				<div style="display: block;float: left; padding: 9px 5px;"><?php echo e($product_order->id); ?></div>
				<div style="display: block;float: left; padding: 9px 15px;"><?php echo e(date('d/m/Y',strtotime($product_order->created_at))); ?></div>
			</div>
			<div class="col-sm-3" style="    padding: 9px 0px;">
				<i class="icon-p manpower-pro-icon" style="margin-top: -6px;"></i>
				<?php
				if($product_order->product_owner_user){
					$full_name = $product_order->product_owner_user->first_name.' '.$product_order->product_owner_user->last_name;
				}else{
					$full_name = "not available";
				}
				?>
				<span title="<?php echo e($full_name); ?>" style="padding-left: 20px;margin-left: 20px; padding-top: 9px;">
				<?php echo e($full_name); ?></span>
			</div>
			<?php
				$sender_comp_name = 'Not Available';
				if($product_order->product_owner_company){
					if($product_order->product_owner_company->name_string){
						$sender_comp_name = $product_order->product_owner_company->name_string->name;
					}
				}
			?>
			<div title="<?php echo e($sender_comp_name); ?>" class="col-sm-3" style="padding: 9px 0px;">
				<a style="font-weight:600;" target="_blank" href="<?php echo e(URL::to('Home/'.$sender_comp_name,$product_order->product_owner_company->id)); ?>"><?php echo e($sender_comp_name); ?></a>
			</div>
			<div class="col-sm-2 padding_0" style="padding-left: 20px;">
				<div style="display:block; float: left;">
					<i style="    margin-right: 7px;float: right; margin-top: 7px;" class="ui2-flag ui2-flag-<?php if($product_order->product_owner_company->location_of_reg_string){echo strtolower($product_order->product_owner_company->location_of_reg_string->iso_code_2);} ?> u-inline-block flag-country"></i>
				</div>
				<div style="display: inline-block;">
               		<img title="gold" style="width: 35px; height: 35px; " src=" <?php echo e(asset('bdtdc-product-image/home-page/Gold-membership.png')); ?>">
             	</div>
             	<div style="display: inline-block;">
             			<img style="margin-top: 2px; width: 35px; height: 35px;" itemprop="image"  src="<?php echo asset('assets/images/Buyer-protection-home.png'); ?>" alt="Buyer protection">
             	</div> 
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
			<div class="col-sm-4">
				<div style="padding: 25px 0px;">
					<?php $__currentLoopData = $product_order->bdtdcOrderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_order_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $order_product = BdtdcProduct::where('id',$p_order_details->product_id)->first(); ?>
						<?php if($order_product): ?>
							<?php if($order_product->product_name): ?>
							<a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" title="<?php echo e($order_product->product_name->name); ?>" target="_blank" href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', '-',$order_product->product_name->name).'='.mt_rand(100000000, 999999999).$order_product->id)); ?>"><?php echo e(substr($order_product->product_name->name,0,35)); ?>..</a>
							<?php else: ?>
							<a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" target="_blank" href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', '-',$p_order_details->product_name).'='.mt_rand(100000000, 999999999).$order_product->id)); ?>"><?php echo e($p_order_details->product_name); ?></a>
							<?php endif; ?>
						<?php else: ?>
						<a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" target="_blank" href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', '-',$p_order_details->product_name).'='.mt_rand(100000000, 999999999).$p_order_details->id)); ?>"><?php echo e($p_order_details->product_name); ?></a>
						<?php endif; ?>
						<br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			<div class="col-sm-3 padding_0" style="padding-top: 4.6%;">
			<!-- <div class="rat">30</div>
				<div class="rat">Sets</div>
					<div class="rat">US $</div> -->
			</div>
			<div class="col-sm-1 padding_0" style="padding-top: 4.6%;">
				<div class="aui2-grid-quo-status-col" style="color: #FF751A">
					<!-- <span style="color: #FF751A;">US $</span> -->
				</div>
			</div>
			<div class="col-sm-2 padding_0" style="padding-top: 4.6%;">
				<div class="aui2-grid-quo-status-col">
					<?php if($product_order->views == 1): ?>
						<span>Ongoing</span>
					<?php else: ?>
						<span>New Inquiry</span>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-2" style="padding-top: 4.6%;">
				<div>
					<a  href="<?php echo e(URL::to('order-details',$product_order->id)); ?>" target="_blank" class="pp-detail ui2-button-primary" style="padding: 6px 7px;color: #fff !important;"> View details</a>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
<?php else: ?>

<div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
	
	No order found!

</div>
<?php endif; ?>
