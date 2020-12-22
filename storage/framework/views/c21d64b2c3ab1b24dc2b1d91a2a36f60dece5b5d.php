<?php $__env->startSection('page_css'); ?>
<link property='stylesheet' rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/fontend/box.css')); ?>" media="screen" data-name="skins">
<link property='stylesheet' rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/fontend/bdtdccss/learning-center.css',)); ?>" media="screen" data-name="skins">
<link property='stylesheet' rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" media="screen" data-name="skins">

<style type="text/css">
    
</style>
<?php $__env->stopSection(); ?>
	<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row" style="    padding-top: 12px;">
	<div class="col-sm-10 padding_0">
				<div class="col-md-12 padding_0" style="">
			            <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			                <li style="float: left" itemprop="itemListElement" itemscope
			      itemtype="http://schema.org/ListItem">
			                    <a itemprop="url" href="<?php echo e(URL::to('company/dashboard')); ?>" style="color: #333;font-weight: normal;font-size: 15px;"  itemprop="item"> 
			                         <span itemprop="name">Dashboard </span><i class="fa fa-angle-right"></i>
			                    </a>
			                    <meta itemprop="position" content="1" />
			                </li> 
			                <li style="float: left"  itemprop="itemListElement" itemscope
			                itemtype="http://schema.org/ListItem">
			                    <a itemprop="url" href="<?php echo e(URL::to('payment-history')); ?>" style="color: #333;font-weight: normal;font-size: 15px;"> 
			                        <span itemprop="name">Payment History &nbsp;
			                    </span> </a>
			                    <meta itemprop="position" content="2" />
			                </li>
			            </ul>
			        </div>
	</div>
	<div class="col-sm-2 padding_0 text-right" style="">
		<a href="<?php echo e(URL::to('company/dashboard')); ?>" class="goBack"><span>Go Back</span></a>
	</div>
		
</div>
		<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 2%;margin-top:1%;">

		<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
				<div class="col-sm-2 col-md-2 col-lg-2 padding_0">
<?php echo $__env->make('fontend.layouts.dashboard-aside', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="col-sm-10 col-md-10">			
				<h1 class="title">Payment history</h1>
				<div class="col-sm-12 padding_0" style="border-bottom:none;margin-top:2%;margin-bottom:2%">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Invoice ID
						</th>
                <th>Invoice Type</th>
                <th>Status</th>
                <th>Transaction_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php if(count($supplier_info)>0): ?>
					<?php $__currentLoopData = $supplier_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($data->invoice_number); ?></td>
						<td>
							<?php echo e($data->payment_type); ?>

						</td>
						<td>
							<?php if($data->membership): ?>
								<?php if($data->membership->payment==1): ?>
								Paid for <?php echo e($data->membership->start_date); ?> to <?php echo e($data->membership->end_date); ?>

								<?php else: ?>
								Due for for <?php echo e($data->membership->start_date); ?> to <?php echo e($data->membership->end_date); ?>

								<?php endif; ?>
							<?php elseif($data->order_invoice): ?>
								<?php echo e($data->order_invoice->pay_type); ?> payment
							<?php endif; ?>
						</td>
						<td>
							<?php echo e($data->Transaction_id); ?>

						</td>
						<td>
							<?php if($data->membership): ?>
							<a href="<?php echo e(URL::to('membership/invoice',$data->membership->id)); ?>"> <i class="fa fa-eye" aria-hidden="true" style="font-size: 20px"></i> </a>
							<?php elseif($data->order_invoice): ?>
							<a href="<?php echo e(URL::to('order/invoice',$data->order_invoice->id)); ?>"> <i class="fa fa-eye" aria-hidden="true" style="font-size: 20px"></i> </a>
							<?php endif; ?>
							<p></p>
							
						</td>						
						<!-- <div class="col-sm-2" style="border-right:1px solid #DDD;height: 62px;text-align:center;">
							<a href=""  class="btn btn-primary" style="margin-top: 6.5%;border-radius: 5px !important;">View</a>
						</div> -->
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>					
				<?php endif; ?>           
        </tbody>
    </table>					
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>