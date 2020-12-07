<?php $__env->startSection('title', 'Password Reset Email'); ?>

<?php $__env->startSection('content'); ?>

        <div class="container">
        <div class="row padding_0" style="padding-bottom: 10%;">
            <div class="col-sm-4">
                
            </div>
            <div class="col-md-6 padding_0">
                <div class="panel panel-default" style="border: 0 none; background-color: #F5F5F5;">
                    <div class="panel-body" style="margin-top: 20%;">
                        <?php echo Form::open(array('url'=>'forgot_password','method'=>'POST')); ?>

                        <fieldset>

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

                            <p style="position: absolute; top: 20%; left: -10%; vertical-align: baseline;font-size: 100%;"><span><i class="fa fa-exclamation-circle" aria-hidden="true" style="color: #68B5E2;font-size: 100%;padding-right: 10px;"></i></span>Please enter Email of the account to retrieve your password.</p>

                            <!-- Email field -->
                            <div style="max-width: 530px; display: block; height: auto; padding: 20px 5px;">

                                 <label for="usr" style="width: 75px; float: left;display: inline-block;">Email:</label>
                                <div class="form-group" style="width: 364px;float: left;">

                                    <?php echo Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required']); ?>

                                </div>
                            </div>
                            <div style="clear: both;"></div>
                           
                          
                            
                            <div style="clear: both;"></div>
                            <!-- Submit field -->
                            <div class="form-group" style="padding-left: 15%; padding-top: 4%;">
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