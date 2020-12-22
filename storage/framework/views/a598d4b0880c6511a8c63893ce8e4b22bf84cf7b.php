<?php $__env->startSection('page_css'); ?>
<link property='stylesheet' rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/fontend/bdtdccss/source-view.css')); ?>" media="screen" data-name="skins">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title', 'Password Reset Email'); ?>

<?php $__env->startSection('content'); ?>

        <div class="container">
        <div class="row padding_0" style="padding-bottom: 10%;">
                    <div class="col-sm-12 col-md-12" style="padding: 0; margin-top: 6%; padding-right: 6%; min-height: 70px;">
                        <div style="width: 100%; min-height: 70px; display: block;float: left; font-size: 100%; color: #333; font-weight:400; background-color: #EDFECF; position: relative; ">
                                <div style="display: block; float: left;">
                                    <span><i class="fa fa-check-circle" aria-hidden="true" style="color: #B5DE70;padding-right: 10px; font-size: 32px; padding-top: 25px; padding-left: 50px;"></i></span> 
                                </div>
                                <div style="display: block; float: left;">
                                     <p class="suc-msg">Reset successful, Please keep you mind your new password</p>
                                     <p class="suc-msg" style="padding: 0; padding-left: 10px; font-size: 13px; color: #D5B360; clear: both;"><a href="<?php echo e(URL::to('login')); ?>"> Sign in now </a></p>
                                </div>
                               

                        </div>
                          
                    </div>
                                   
                   
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master_dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>