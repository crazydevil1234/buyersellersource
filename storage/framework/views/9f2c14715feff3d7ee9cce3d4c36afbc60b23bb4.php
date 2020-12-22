
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Latest</a></li>
                <li><a data-toggle="tab" href="#menu1">Answered</a></li>
                <li><a data-toggle="tab" href="#menu2">Unanswered</a></li>
            </ul>
            <div class="tab-content" style="margin-top:1%;">
                <div id="home" class="tab-pane fade in active">
                    <!-- <div class="fst">
                        <p class="fst-p"><span><i class="fa fa-lightbulb-o"></i>
                        </span>Answer the question within 30 mins, you will get double points  x2!</p>
                    </div> -->

            <?php if(count($errors)>0): ?>
                <div class="alerty alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if(count($trade)>0): ?>
            <?php $i=1; ?>
            <?php $__currentLoopData = $trade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($t->brif): ?>
            <div class="td-ans-cont">
                
                <h4 class="td-ans-cont-h4">
                    <a itemprop="url" href="<?php echo e(URL::to('trade/answers',$t->id)); ?>">
                        <?php if($t->brif): ?>
                            <p><?php echo e($i); ?>. <?php echo e($t->brif); ?></p>
                        <?php endif; ?>
                    </a> 
                </h4>
                <p class="td-ans-cont-p">
                    <?php if($t->descriptions): ?>
                        <?php echo e($t->descriptions); ?>

                    <?php endif; ?>
                    <br> Asked by <a itemprop="url" href="#">
                    <?php if($t->user): ?>
                        <?php echo e($t->user->first_name); ?> <?php echo e($t->user->last_name); ?> 
                    <?php endif; ?>
                    </a> 
                    <!-- in 
                 <a itemprop="url" href="#">Other Trade Processes</a> -->

                </p>
            </div>
            <?php $i++; ?>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php else: ?>

            <div>
                <center>
                <h4 style="padding-top: 8%;">Sorry! There are no related results.</h4>
                <p>You can post a question or try another search.</p>
                </center>
            </div>

            <?php endif; ?>

       
            <?php echo $trade->render(); ?>

                </div>
                <div id="menu1" class="tab-pane fade">
                                <div class="fst">
              <p class="fst-p"><span><i class="fa fa-lightbulb-o"></i>
              </span>Answer the question within 30 mins, you will get double points  x2!</p>
              </div>

             <?php if(count($errors)>0): ?>
             <div class="alerty alert-danger">
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
             </div>
             <?php endif; ?>
            <?php $i=1; ?>
             <?php $__currentLoopData = $trade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php if(isset($t->trade_answer)): ?>
               
                     <?php if($t->brif): ?>
                     <div class="td-ans-cont">
                        
                         <h4 class="td-ans-cont-h4"><a itemprop="url" href="<?php echo e(URL::to('trade/answers',$t->id)); ?>">
                       
                         <?php if($t->brif): ?>
                            <p><?php echo e($i); ?>. <?php echo e($t->brif); ?></p>
                          <?php endif; ?>
                        </a> </h4>
                         <p class="td-ans-cont-p">
                          <?php if($t->descriptions): ?>
                            <?php echo e($t->descriptions); ?>

                          <?php endif; ?>
                          <br> Asked by <a itemprop="url" href="#">
                          <?php if($t->user): ?>
                           <?php echo e($t->user->first_name); ?> <?php echo e($t->user->last_name); ?> 
                          <?php endif; ?>
                         </a> in <a itemprop="url" href="#">Other Trade Processes</a>
                         
                          <!-- 9 hours ago -->

                         </p>
                         <!-- <br><p class="p-answer" style="margin-left: -53%;margin-top: 1%;padding-left: 6.5%;"><a itemprop="url" href="#"><i class="fa fa-commenting"></i>
                          Answers 0 </a></p> -->
                     </div>
                    <?php $i++; ?>
                     <?php endif; ?>
               
             <?php endif; ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       
             <?php echo $trade->render(); ?>

                </div>
                <div id="menu2" class="tab-pane fade">
                                <div class="fst">
              <p class="fst-p"><span><i class="fa fa-lightbulb-o"></i>
              </span>Answer the question within 30 mins, you will get double points  x2!</p>
              </div>

             <?php if(count($errors)>0): ?>
             <div class="alerty alert-danger">
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
             </div>
             <?php endif; ?>
            <?php $i=1; ?>
             <?php $__currentLoopData = $trade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(!isset($t->trade_answer)): ?>
             <?php if($t->brif): ?>
             <div class="td-ans-cont">
                
                 <h4 class="td-ans-cont-h4"><a itemprop="url" href="<?php echo e(URL::to('trade/answers',$t->id)); ?>">
               
                 <?php if($t->brif): ?>
                    <p><?php echo e($i); ?>. <?php echo e($t->brif); ?></p>
                  <?php endif; ?>
                </a> </h4>
                 <p class="td-ans-cont-p">
                  <?php if($t->descriptions): ?>
                    <?php echo e($t->descriptions); ?>

                  <?php endif; ?>
                  <br> Asked by <a itemprop="url" href="#">
                  <?php if($t->user): ?>
                   <?php echo e($t->user->first_name); ?> <?php echo e($t->user->last_name); ?> 
                  <?php endif; ?>
                 </a> in <a itemprop="url" href="#">Other Trade Processes</a>
                 
                  <!-- 9 hours ago -->

                 </p>
                 <!-- <br><p class="p-answer" style="margin-left: -53%;margin-top: 1%;padding-left: 6.5%;"><a itemprop="url" href="#"><i class="fa fa-commenting"></i>
                  Answers 0 </a></p> -->
             </div>
            <?php $i++; ?>
             <?php endif; ?>
             
             <?php endif; ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       
             <?php echo $trade->render(); ?>

                </div>
            </div>

     

