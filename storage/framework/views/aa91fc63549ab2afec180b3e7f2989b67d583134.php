    <?php $__env->startSection('content'); ?>
<section>
<div class="container">
    <div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 28px;">
       
    	<div class="col-xs-12 padding_0">
            <?php if($sub_category): ?>
    			<div class="cat-pr-list">   
                    <?php echo e($sub_category->name); ?>       
                </div>
            <?php endif; ?>
            <?php if($sub_category): ?>
                <?php if($sub_category->parent_cat): ?>
                    <?php $__currentLoopData = $sub_category->parent_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        			    <div class="sb_pd_list" style="padding-left: 25px;">
                            <a href="<?php echo e(URL::to('wholesale-subcategory-product-view/'.$data->id)); ?>" class="pp-list-an">    
                                <?php echo e($data->name); ?>

                             </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
             <?php endif; ?>    			
    	</div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mobile-view.layout.master_m', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>