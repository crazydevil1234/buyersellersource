	<?php $__env->startSection('dashboard_content'); ?>
		<?php if(isset($fluid)): ?>
		</div>
		<div class="container-fluid" style="background-color: #fff;">
		<div class="container">
		<?php echo $__env->make('fontend.layouts.header_dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		</div>
		<div class="container">
		<?php else: ?>
		<?php echo $__env->make('fontend.layouts.header_dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endif; ?>
			
        <?php echo $__env->yieldContent('content'); ?>
       	<?php $__env->stopSection(); ?>







<?php echo $__env->make('fontend.layouts.dashboard_daynamic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>