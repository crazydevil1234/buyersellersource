
                        

                        <div id="replace_area" style="padding-bottom: 3%;padding-right: 1%;">

                           <a onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i>Go Back</a>
                                <?php if($parent_cat): ?>
                                <?php if(count($parent_cat)>0): ?>
                                    
                                    <?php $__currentLoopData = $parent_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li style="line-height: 48px;">
                                            <a href="<?php echo e(URL::to('faq-detail',$data->id)); ?>" style="color: #666;font-size: 14px;">
                                                <?php echo e($data->name); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <P>There is no matching search result<p>
                                <?php endif; ?>

                                <?php endif; ?>
                        </div>
                        

