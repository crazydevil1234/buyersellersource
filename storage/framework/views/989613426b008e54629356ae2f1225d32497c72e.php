<?php $__env->startSection('page_css'); ?>
<link property='stylesheet' href="<?php echo asset('css/about-us/tradeshow.css'); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>

<div class="row">
   <div class="col-md-10 padding_0" style="padding-bottom: 1%">
      <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
         <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo e(URL::to('/',null)); ?>"><span itemprop="name" style="color: #000"> Home &nbsp;</span></a></li>
         <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo e(URL::to('tradeshow',null)); ?>" style="color: #000"> <i class="fa fa-angle-right"></i><span itemprop="name" style="color: #000">Tradeshows </span><i class="fa fa-angle-right"></i></a></li>
      </ul>
   </div>

</div>
<div class="row">
   <div class="col-sm-12">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active" style="border-radius: 10px !important; border:0 none;"></li>
            <li data-target="#myCarousel" data-slide-to="1" style="border-radius: 10px !important; border:0 none;"></li>
            <li data-target="#myCarousel" data-slide-to="2" style="border-radius: 10px !important; border:0 none;"></li>
            <li data-target="#myCarousel" data-slide-to="3" style="border-radius: 10px !important; border:0 none;"></li>
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img itemprop="image" style="height:333px;width:100%;" src="<?php echo asset('assets/service/shanghai-convention-center.jpg'); ?>" alt="shanghai convention center" />
            </div>

            <div class="item">
               <img itemprop="image" style="height:333px;width:100%;" src="<?php echo asset('assets/service/frankfurt-messe.jpg'); ?>" alt="frankfurt messe" />
            </div>

            <div class="item">
               <img itemprop="image" style="height:333px;width:100;" src="<?php echo asset('assets/service/dubai-world-trade-center.jpg'); ?>" alt="dubai world trade center" />
            </div>
            <div class="item">
               <img itemprop="image" style="height:333px;width:100;" src="<?php echo asset('assets/service/ny-javits-center.jpg'); ?>" alt="ny javits center" />
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row" style="padding-bottom: 4%;">
   <div class="col-sm-4 ttup" style="">

   </div>
   <div class="col-sm-4">
      <div class="trade-title">
         <h2>Upcoming Expos!</h2>
      </div>

   </div>
   <div class="col-sm-4 ttdown" style="padding-top: 59px;">

   </div>
</div>

<?php $__currentLoopData = $tradeshows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tradeshow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row item_sha" style="margin-bottom:20px;padding:20px 0;">

   <div class="col-sm-12">

      <div class="trade-title1" style="width:100%;">
         <a itemprop="url" class="trade-title1-a" href="<?php echo e(URL::to('tradeshow/info-details',$tradeshow->tradeshow_id)); ?>"><?php echo e($tradeshow->title); ?></a>
         <span class="trade-comand pull-right" style="">Recommend</span>
      </div>
      <div style="padding-bottom:15px;">
         <span style="float:left;padding-left:0;padding-right:5px;"><?php echo e($tradeshow->category_id); ?></span>
         <span class="trade-span"><?php echo e($tradeshow->date); ?></span>
         <span class="trade-span"><img itemprop="image" style="height:30%;width:2%;" src="<?php echo e(URL::to('uploads',$tradeshow->images)); ?>" alt="" /></span>
         <span class="trade-span"><?php echo e($tradeshow->location); ?></span>
      </div>
   </div>

   <div class="col-sm-12">
      <p class="trade-des"><?php echo e($tradeshow->description); ?></p>
      <a itemprop="url" href="<?php echo e(URL::to('tradeshow/info-details',$tradeshow->tradeshow_id)); ?>" class="btn btn-primary btn-join"><i class="fa fa-street-view fa-4x"></i>Remind me</a>

   </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<br>
<br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master_dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>