<?php
use App\Model\BdtdcProductImageNew;
?>

<?php $__env->startSection('page_css'); ?>
<link property='stylesheet' href="<?php echo asset('css/dashboard.css'); ?>" rel="stylesheet">

<link property='stylesheet' href="<?php echo asset('assets/fontend/bdtdccss/why-bdtdc.css'); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
   <?php if(Sentinel::check()): ?>
   <?php
   $role = App\Model\Role_user::where('user_id',Sentinel::getUser()->id)->first();
   $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
   ?>
   <?php endif; ?>

   <div class="row" style="padding-bottom: 0.5%">
   </div>
   <div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
      <div class="col-lg-12 col-md-12 padding_0">
         <ul style="margin-left: -2%;float: left;">
            <li style="float: left">
               <a itemprop="url" href="<?php echo e(URL::to($dashboard_route,null)); ?>" style="color: #000">
                  My Dashboard
               </a> <i class="fa fa-angle-right"></i>
            </li>
            <li style="float: left">
               <a itemprop="url" href="" style="color: #000">
                  <strong> Favorite Supplier</strong>
               </a> <i class="fa fa-angle-right"></i>
            </li>
         </ul>
         <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
            <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
         </ul>
      </div>
   </div>
   <div class="row" id="row" style="margin-bottom: 2%;background-color: #eceef2">
      <div class="col-sm-12 padding_0">
         <div class="col-sm-2 padding_0">
            <?php echo $__env->make('fontend.layouts.dashboard-aside', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         </div>
         <div class="col-sm-10" style="padding-right: 0px">
            <h1 style="margin-top: 0; margin-bottom: 10px; padding: 10px 0;font-size: 15px;font-weight: bold;">Favorite Suppliers</h1>
            <div class=" " style="">
               <?php if($favorite_supplier): ?>
               <?php $__currentLoopData = $favorite_supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($data->bdtdc_company): ?>
               <?php $__currentLoopData = $data->bdtdc_company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $su): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-xs-12  padding_0 favo" style="background: #fff; margin-bottom: 10px; position: relative;">
                  <div class="col-sm-2 " style="padding-left: 0">
                     <a href="<?php echo e(URL::to('Home/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$su->name_string->name).'/'.$su->id)); ?>">
                        <?php if($su->name_string): ?>
                        <?php if($su->name_string->company_logo): ?>
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="<?php echo asset('uploads',$su->name_string->company_logo); ?>" alt="<?php echo e($su->name_string->name); ?>" />
                        <?php else: ?>
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="<?php echo asset('uploads/no_image.jpg'); ?>" alt="" />
                        <?php endif; ?>
                        <?php else: ?>
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="<?php echo asset('uploads/no_image.jpg'); ?>" alt="" />
                        <?php endif; ?>

                  </div>
                  <div class="col-sm-10">
                     <div style="width: 100%; display: block;position: relative;">
                        <h1 class="det_list" style="font-size: 22px; font-weight: normal; color: #666; margin-top: 5px; margin-bottom: 0">
                           <?php if($su->name_string): ?>
                           <?php echo e($su->name_string->name); ?>

                           <?php endif; ?>
                        </h1>
                     </div>
                     </a>
                     <div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px;">
                        <div>
                           <div class="pro_sur"><img style="height:18px;width:18px; float: left; margin-right: 5px" src="<?php echo asset('assets/images/Buyer-protection-home.png'); ?>">
                           </div>

                           <div class="pro_sur_gld">
                              <?php if($su->supplier_info): ?>
                              <?php if($su->supplier_info->membership_year): ?>
                              <span style="margin-right: 5px">
                                 <img style="height:25px;width:20px;margin-top: -.4%;" src="<?php echo asset('assets/helpcenter/Gold-membership.png'); ?>" alt="" />
                                 <span style="color: #000;font-size:12px;margin-left:1%;margin-top: -.4%;">
                                    <?php echo e($su->supplier_info->membership_year or ''); ?>

                                 </span>
                                 <span style="color: #000;font-size:12px;"> YR</span>
                              </span>
                              <?php endif; ?>
                              <?php endif; ?>

                           </div>
                           <?php if($su->country): ?>
                           <div class="pro_sur_cnt">
                              <img style="height:16px;width:24px; float: left; margin-right: 5px" src="<?php echo e(asset('assets/global/img/flags/'.strtolower($su->country->iso_code_2).'.png')); ?>" alt="<?php echo e($su->country->name); ?>">
                              <span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">
                                 <P class="custom_click_search" data-id-type="country">
                                    <?php echo e($su->country->name); ?>

                                 </P>
                              </span>
                           </div>
                           <?php else: ?>
                           country not available
                           <?php endif; ?>
                        </div>
                     </div>
                     <div style="clear: both;float: left; padding: 10px 0;">
                        <a class="btn btn-primary" style="border-radius: 4px !important;padding: 5px 10px" href="<?php echo e(URL::to('contact/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$su->name_string->name).'/'.$su->id)); ?>">
                           <i class="fa fa-envelope-o"></i>Contact Supplier
                        </a>
                     </div>
                  </div>
                  <div class="remote-favo" title="Remove from favorite" data-supplier_id="<?php echo e($su->id ?? ''); ?>">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
   <?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('fontend.layouts.dashboard_aside_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript">
   $(document).ready(function() {
      $('ul.pagination').css('margin-top', '15px');
   });

   $(document).on('click', '.remote-favo', function() {
      var fav_id = $(this).attr('data-supplier_id');
      var _this = $(this);
      $.post(window.location.origin + '/remove-favorite-supplier', {
         '_token': '<?php echo e(csrf_token()); ?>',
         'fav_id': fav_id,

      }, function(result) {
         if (parseInt(result) == 1) {
            _this.parent().remove();
         }
      });

   })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>