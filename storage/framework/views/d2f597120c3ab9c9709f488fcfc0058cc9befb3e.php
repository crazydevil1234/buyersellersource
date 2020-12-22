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
                  <strong> Favorite Product</strong>
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
            <h1 style="margin-top: 0; margin-bottom: 10px; padding: 10px 0">Favorite Products</h1>
            <div class=" " style="">
               <?php if($favorite_product): ?>
               <?php $__currentLoopData = $favorite_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($f->bdtdc_product): ?>
               <?php $__currentLoopData = $f->bdtdc_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-xs-12  padding_0 favo" style="background: #fff; margin-bottom: 10px; position: relative;">
                  <div class="col-sm-2 " style="padding-left: 0">
                     <?php
                     $pro_img_new = BdtdcProductImageNew::where('product_id',$f->data)->first();
                     ?>
                     <?php if($fd->product_name): ?>
                     <a href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$fd->product_name->name).'='.mt_rand(100000000, 999999999).$fd->id)); ?>">
                        <?php else: ?>
                        <?php endif; ?>
                        <?php if($fd->product_image_new): ?>
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="<?php echo asset((isset($fd->product_image_new->image)) ? $fd->product_image_new->image : 'no_image.jpg'); ?>" alt="" />
                        <?php else: ?>
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="<?php echo asset('uploads/no-image.jpg'); ?>" alt="" />
                        <?php endif; ?>
                  </div>
                  <div class="col-sm-10">
                     <div style="width: 100%; display: block;position: relative;">
                        <h1 class="det_list" style="font-size: 22px; font-weight: normal; color: #666; margin-top: 5px; margin-bottom: 0">
                           <?php if($fd->product_name): ?>
                           <?php echo e($fd->product_name->name); ?>

                           <?php endif; ?>
                        </h1>
                        </a>
                        <?php if($fd->product_prices): ?>
                        <!--  <div class="det_list">
                        <p> US $ <?php echo e($fd->product_prices->product_FOB); ?></p>
                    </div>
                    <div class="det_list">
                        <p> MOQ: <?php echo e($fd->product_prices->product_MOQ); ?> <?php echo e($fd->product_unit->name); ?></p>
                    </div> -->
                        <?php endif; ?>
                     </div>
                     <div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px;">
                        <div>
                           <div class="pro_sur"><img style="height:18px;width:18px; float: left; margin-right: 5px" src="<?php echo asset('assets/images/Buyer-protection-home.png'); ?>">
                           </div>
                           <div class="pro_sur_gld">
                              <?php if($fd->supplier_product): ?>
                              <?php if($fd->supplier_product->supplier_membership): ?>
                              <?php if($fd->supplier_product->supplier_membership->membership_year): ?>
                              <span style="margin-right: 5px">
                                 <img style="height:25px;width:20px;" src="<?php echo asset('assets/helpcenter/Gold-membership.png'); ?>" alt="" />
                                 <span style="color: #000;font-size:12px;margin-left:-3%;">
                                    <?php echo e($fd->supplier_product->supplier_membership->membership_year ?? ''); ?>

                                 </span>
                                 <span style="color: #000;font-size:12px;"> YR</span>
                              </span>
                              <?php endif; ?>
                              <?php endif; ?>
                              <?php endif; ?>
                           </div>
                           <div class="pro_sur_cnt">
                              <?php if($fd->product_country): ?>
                              <img style="height:16px;width:24px; float: left; margin-right: 5px" src="<?php echo e(asset('assets/global/img/flags/'.strtolower($fd->product_country->iso_code_2).'.png')); ?>" alt="<?php echo e($fd->product_country->name); ?>">
                              <?php else: ?>
                              <?php endif; ?>
                              <span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">
                                 <?php if($fd->product_country): ?>
                                 <?php if($fd->product_country->name): ?>
                                 <P class="custom_click_search" data-id-type="country">
                                    <?php echo e($fd->product_country->name); ?>

                                 </P>
                                 <?php else: ?>
                                 Country not available
                                 <?php endif; ?>
                                 <?php else: ?>
                                 Country not available
                                 <?php endif; ?>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div style="clear: both;float: left; padding: 10px 0;">
                        <a data-product_id="<?php echo e($fd->id ?? ''); ?>" data-supplier_id="<?php echo e($fd->supplier_product->supplier_id ?? ''); ?>" class="btn btn-primary  contact_supplier" style="border-radius: 4px !important;padding: 5px 10px"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
                     </div>
                  </div>
                  <div class="remote-favo" title="Remove from favorite" data-product_id="<?php echo e($fd->id ?? ''); ?>">
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
      var fav_id = $(this).attr('data-product_id');
      var _this = $(this);
      $.post(window.location.origin + '/remove-favorite', {
         '_token': '<?php echo e(csrf_token()); ?>',
         'fav_id': fav_id,

      }, function(result) {
         if (parseInt(result) == 1) {
            _this.parent().remove();
         }
      });

   })

   /*contact supplier*/
   $(document).on({

      click: function(e) {

         e.preventDefault();

         $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');

         var base_url = window.location.origin; //$('[name="base_url"]').val();

         var supplier_id = $(this).data('supplier_id');

         var product_id = $(this).data('product_id');

         var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
         window.location.href = url;

         //$('.modal-content').html(" ");

         /*$.get(url, function(r) {

             $('.modal-content').html(r)

         })*/

      }

   }, '.contact_supplier');

   /*contact supplier*/
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>