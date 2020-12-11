	<?php $__env->startSection('dashboard_content'); ?>
<?php if(Sentinel::check()): ?>
	<?php echo $__env->make('fontend.layouts.header-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
	<?php echo $__env->make('fontend.layouts.header-home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
	<?php echo $__env->yieldContent('content'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.layouts.dashboard-home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>