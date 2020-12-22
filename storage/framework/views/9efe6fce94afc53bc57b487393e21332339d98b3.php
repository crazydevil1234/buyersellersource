<?php $__env->startSection('page_css'); ?>
    <link property='stylesheet' href="<?php echo asset('css/dashboard.css'); ?>" rel="stylesheet">
    <link property='stylesheet' href="<?php echo asset('assets/fontend/bdtdccss/why-bdtdc.css'); ?>" rel="stylesheet">

  <?php $__env->stopSection(); ?>
	<?php $__env->startSection('content'); ?>
	
<div class="container">
	 <?php if(Sentinel::check()): ?>
            <?php
              $role = App\Model\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        <?php endif; ?>

<div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
        <div class="col-lg-12 col-md-12 padding_0">
            <ul  style="margin-left: -2%;float: left;"><li style="float: left">
            <a itemprop="url" href="<?php echo e(URL::to($dashboard_route,null)); ?>" style="color: #000">
            My Dashboard
            </a> <i class="fa fa-angle-right"></i> </li>
            <li style="float: left">
            <a itemprop="url" href="" style="color: #000">
               <strong> My Buyers</strong>
            </a> <i class="fa fa-angle-right"></i></li>
           
            </ul>
            <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>
        </div>
    </div>
	<div class="row" id="row" style="margin-bottom: 2%;background-color: #eceef2" >
		<div class="col-sm-12 padding_0">
			<div class="col-sm-2 padding_0">
					<?php echo $__env->make('fontend.layouts.dashboard-aside', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


			</div>

			

			<div class="col-sm-10" style="padding-right: 0px">
				
				<div class="col-sm-12 padding_0" style="margin:10px 0;">
					<div class="col-sm-6 padding_0" style="font-size: 20px;">My Buyers</div>
					<div class="col-sm-6 padding_0 text-right"><a href="<?php echo e(URL::to('source')); ?>">What is BDSource Suppliers?</a></div>
				</div>
				
				<?php if($bdtdc_inquery_messages): ?>
				<?php $__currentLoopData = $bdtdc_inquery_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inq_messages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-12 message_data" onmouseover="$(this).css('background','rgb(250, 250, 250)');$(this).children().children().children().children('.delete_quote').show();" onmouseout="$(this).css('background','#fff');$(this).children().children().children().children('.delete_quote').hide();" style="padding: 10px;border-bottom: 1px solid #eee;">
					<div class="col-sm-1 padding_0"><a target="_blank" href="<?php echo e(URL::to('mysource_quotations/inq',$inq_messages->inquery_id,null)); ?>"><img src="
						<?php if($inq_messages->bdtdcInqueryMessageSender): ?>
						<?php echo e(URL::to('uploads/'.$inq_messages->bdtdcInqueryMessageSender->profile_picture)); ?>

						<?php else: ?>
						<?php echo e(URL::to('uploads/no-image.jpg')); ?>

						<?php endif; ?>" style="width:50px;height:50px;"></a></div>
					<div class="col-sm-11 padding_0">
						<div class="col-sm-12 padding_0" style="padding-bottom: 10px;">
							<div class="col-sm-6 padding_0"><a target="_blank" href="<?php echo e(URL::to('mysource_quotations/inq',$inq_messages->inquery_id,null)); ?>" style="color: #06c;font-size: 14px;font-weight: 700;">
							<?php if($inq_messages->bdtdcInqueryMessageSender): ?>
								<?php echo e($inq_messages->bdtdcInqueryMessageSender->first_name); ?> <?php echo e($inq_messages->bdtdcInqueryMessageSender->last_name); ?>

							<?php else: ?>
								name not available
							<?php endif; ?>
						</a></div>
							<div class="col-sm-6 padding_0 text-right"><a style="display:none;" class="delete_quote" quote-id="<?php echo e($inq_messages->id); ?>" href="#"></a></div>
						</div>
						<div class="col-sm-12 padding_0">
							<div class="col-sm-6 padding_0" style="position:relative;">
								<div style="position:absolute;font-size:5px;font-weight:bold;top:12px;left:1px;">2nd<sup>YR</sup></div>
								<img src="<?php echo e(URL::to('assets/gold/gold-com-icon.png')); ?>" style="width:20px;height:20px;">
								<img style="width:24px;height:16px;" src="
								<?php if($inq_messages->bdtdcInqueryMessageProductCompanySender): ?>
									<?php echo e(URL::to('assets/global/img/flags/'.strtolower($inq_messages->bdtdcInqueryMessageProductCompanySender->location_of_reg_string->iso_code_2)).'.png'); ?>

								<?php else: ?>
									<?php echo e(URL::to('uploads/no-image.jpg')); ?>

								<?php endif; ?>">
								<span title="<?php if($inq_messages->bdtdcInqueryMessageProductCompanySender): ?>
										<?php if($inq_messages->bdtdcInqueryMessageProductCompanySender->name_string): ?>
											<?php echo e($inq_messages->bdtdcInqueryMessageProductCompanySender->name_string->name); ?>

										<?php else: ?>
											Company name not available
										<?php endif; ?>
									<?php else: ?>
										Company not available
									<?php endif; ?>" style="color:#666;">
									<?php if($inq_messages->bdtdcInqueryMessageProductCompanySender): ?>
										<?php if($inq_messages->bdtdcInqueryMessageProductCompanySender->name_string): ?>
											<?php echo e(substr($inq_messages->bdtdcInqueryMessageProductCompanySender->name_string->name, 0,40)); ?>...
										<?php else: ?>
										Company name not available
										<?php endif; ?>
									<?php else: ?>
										Company not available
									<?php endif; ?>
								</span>
								<p><span style="color: #999;">Main Products:</span><span style="color:#666;">
								<?php if($inq_messages->bdtdcInqueryMessageSupplierSender): ?>
									<?php if($inq_messages->bdtdcInqueryMessageSupplierSender->main_products): ?>
										<?php echo e($inq_messages->bdtdcInqueryMessageSupplierSender->main_products->product_name_1); ?> &nbsp; <?php echo e($inq_messages->bdtdcInqueryMessageSupplierSender->main_products->product_name_2); ?> &nbsp; <?php echo e($inq_messages->bdtdcInqueryMessageSupplierSender->main_products->product_name_3); ?>

									<?php else: ?>
									Unknown
									<?php endif; ?>
								<?php else: ?>
								Unknown
								<?php endif; ?>
							</span></p>
							</div>
							<div class="col-sm-1 padding_0 text-right"><i class="fa fa-commenting-o" aria-hidden="true" style="margin-right: 10px;    font-size: 20px;"></i></div>
							<div class="col-sm-5 padding_0">
								<p><span style="font-size:14px;font-weight: 700;color:#666;">Received Quotation</span> <span style="color:#999;">(<?php echo e(date('d/m/Y',strtotime($inq_messages->updated_at))); ?>)</span></p>
								<p><a title="
									<?php if($inq_messages->bdtdcInqueryMessageProductDescription): ?>
										<?php echo e($inq_messages->bdtdcInqueryMessageProductDescription->name); ?>

									<?php else: ?>
									Product name not available;
									<?php endif; ?>
								>" target="_blank" href="<?php echo e(URL::to('mysource_quotations/inq',$inq_messages->inquery_id,null)); ?>">Submitted quotation for buying request &quot;
								<?php if($inq_messages->bdtdcInqueryMessageProductDescription): ?>
									<?php echo e(substr($inq_messages->bdtdcInqueryMessageProductDescription->name, 0,70)); ?>...&quot;
								<?php else: ?>
								Product name not available&quot;
								<?php endif; ?>
							</a></p>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
				<?php echo $bdtdc_inquery_messages->render(); ?>

				
				
				
		    </div>

	</div> 
</div>

	<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('fontend.layouts.dashboard_aside_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('ul.pagination').css('margin-top','15px');
	});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>