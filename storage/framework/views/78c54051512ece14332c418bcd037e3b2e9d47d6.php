<?php $__env->startSection('page_css'); ?>
    <link rel="stylesheet" property='stylesheet' href="<?php echo asset('assets/fontend/bdtdccss/source-view.css'); ?>" media="all"  hreflang="en" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Password Reset'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row padding_0" style=" min-height: 700px;">
             <div class="col-sm-2 col-md-2">
                
            </div>
            <div class="col-md-6 padding_0">
                <div class="panel panel-default" style="border: 0 none; background-color: #F5F5F5;">
                    <div class="panel-body" style="margin-top: 20%;">
                     <div style="width: 600px; height: 20px; display: block;">
                            <div class="veri" style="width: 300px; display: block; float: left; position: relative;">
                                <div class="verify-circle" style=" border-radius: 50% !important; border:0 none; float: left; position: absolute;top: -8px;"><span style="color: #fff; text-align: center; padding-left: 5px;">1</span>
                                </div>
                                <span style="position: absolute; top: 20px; color: #666; padding: 0; margin: 0; color: #FF4400;">Verify</span>
                            </div>
                            <div class="veri" style="width: 300px; display: block; float: left;position: relative;">
                            <div class="verify-circle" style=" border-radius: 50% !important; border:0 none;position: absolute;top: -8px;"><span style="color: #fff; text-align: center; padding-left: 5px;">2</span>
                            </div>
                            <span style="position: absolute; top: 20px; color: #666; padding: 0; margin: 0; color: #FF4400;">Reset Password</span>
                            </div>
                            <div style="display: block; float: left; position: relative;">
                            <div class="verify-circle" style=" border-radius: 50% !important; background-color:#C3C3C1;position: absolute;top: -8px; "><span style="color: #fff; text-align: center; padding-left: 5px;">3</span>
                            </div>
                            <span style="position: absolute; top: 20px; color: #666; padding: 0; margin: 0;">Finish</span>
                            </div>
                   </div>
                        <?php echo Form::open(['action' => 'Front\Auth\PasswordController@postReset']); ?>

                        <fieldset style="margin-top: 10%;">

                            <?php if(session()->has('flash_message')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session()->get('flash_message')); ?>

                                </div>
                            <?php endif; ?>

                            <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <!-- Email field -->
                            <div style="max-width: 530px; display: block; height: auto; padding: 20px 5px;">
                             <label for="usr" style="width: 200px; float: left;display: inline-block;text-align: right;">New Password:</label>
                            <div class="form-group" style="width: 200px; float: left; padding-left: 10px;">
                               
                                <?php echo Form::password('password', ['placeholder' => 'Password','class' => 'form-control', 'required' => 'required']); ?>

                                
                            </div>
                            </div>
                            <!-- Password field -->
                             <div style="clear: both;"></div>
                            <div style="max-width: 530px; display: block; height: auto; padding: 20px 5px;">
                             <label for="usr" style="width: 200px; float: left;display: inline-block;text-align: right;">Confirm New Password:</label>
                            <div class="form-group" style="width: 200px; float: left; padding-left: 10px;">
                                 <?php echo Form::password('password_confirmation', ['placeholder' => 'Password confirmation','class' => 'form-control', 'required' => 'required']); ?>

                                
                            </div>
                            </div>
                             <div style="clear: both;"></div>
                            <!-- Hidden Token field -->
                            <?php echo Form::hidden('token', $token ); ?>

                            <?php echo Form::hidden('email', $email ); ?>



                            <!-- Submit field -->
                           <div class="form-group" style="padding-left: 39%; padding-top: 4%;">
                                <div style="width: 100px; border-radius: 5px !important;">
                                <?php echo Form::submit('Submit', ['class' => 'btn btn-primary btn-block']); ?>

                            </div>
                        </div>
                        </fieldset>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master_dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>