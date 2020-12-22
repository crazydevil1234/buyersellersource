  <?php $__env->startSection('content'); ?>
<?php echo $__env->make('mobile-view.country-product.template-header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php 
      $product_groups=DB::table('bdtdc_supplier_product_groups')->where('company_id',Route::current()->parameters()['profile_id'])->get();
       $profile_id=Route::current()->parameters()['profile_id'];
      //print_r(Route::current()->parameters());
?>
<div class="row padding_0" style="background: #fff;">
  <div id="comp_product">
        <div class="col-xs-8 padding_0">
            <div style="padding-left:2%; margin-top: 6px;">
             
            <form class="form" method="get" action="<?php echo e(URL::to('template-profile/product-search',Route::current()->parameters()['profile_id'],null)); ?>">
                <div class="input-group">
                  <input id="product_search_m" type="text" class="form-control product_key" style="height: 34px;" placeholder="Search products on Ministe"  name="key">
                  <span class="input-group-btn search_from_template">
                    <button class="btn btn-primary template_product" type="submit" data-profile-id="<?php echo e(Route::current()->parameters()['profile_id']); ?>"><i class="fa fa-search-plus"></i></button>
                  </span>
                </div>
            </form>
            </div>
        </div>
        <div class="col-xs-4" style=" margin-top: -7px;">
        <nav class="navbar navbar-inverse" style="background: #fff; border:0 none; padding-top: 5px;float: left;">
                <div class="navbar-header">
                  <button type="button " class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background: #3379B5; border:0 none;" id="nv-mnu-lst">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                </div>
            </nav>
        </div>
  </div>
 </div>
 <div class="row padding_0" style="background:#fff;">
 <div class="collapse navbar-collapse " style="background: #fff;" id="cat-lst-pro-bd">
      <ul class="nav navbar-nav cate-com-pro">
        <li class="cate-com-pro-li active" style="padding-left: 30px;">All Category</li>
         <?php $__currentLoopData = $product_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="cate-com-pro-li active"><a style="color: #000;" href="<?php echo e(URL::to('profile/template_'.'/'.$profile_id .'/'. $product_group->name)); ?>"><?php echo e($product_group->name); ?></a></li>
                       
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      </ul>
  </div>
  </div>
<div class="row padding_0" style="background: #fff; margin-bottom: 20px;border-bottom: 1px solid #ddd;">
<?php if($products_list): ?>         
            <?php $__currentLoopData = $products_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product-list-m-view">
                <?php if($data->pro_to_cat_name): ?>
                   <a title="<?php echo e($data->pro_to_cat_name->name ?? ''); ?>" href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $data->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$data->product_id)); ?>">
                <?php else: ?>
                    <a title="" target="_blank" href="<?php echo e(URL::to('product-details/'.'='.mt_rand(100000000, 999999999).$data->product_id)); ?>">
                    </a>
                <?php endif; ?>
                <div class="wrap-img">
           
                    <?php if($data->pro_images_new): ?>
                        <span class="wrap-img-span"><img class="wrap-img-img"   src="<?php echo e(URL::to((isset($data->pro_images_new)) ? $data->pro_images_new->image : 'no_image.jpg')); ?>" alt="<?php echo e($data->pro_to_cat_name->name ?? ''); ?>"></span>
                    <?php else: ?>
                        <img src="<?php echo e(URL::to('uploads/no_image.jpg')); ?>" class="wrap-img-img" alt="<?php echo e($data->pro_to_cat_name->name ?? ''); ?>" />
                    <?php endif; ?>
                </div>

             <div class="rap-text">
                        <h4 class="rap-text-h4"><?php echo e(substr($data->pro_to_cat_name->name, 0, 59)); ?></h4>
                 <?php if($data->bdtdcProduct): ?>
              <ul class="params" style="padding: 0;"> 
                        <?php if($data->bdtdcProduct->product_prices && $data->bdtdcProduct->ProductUnit): ?>     
                  <li class="param">
                        <label class="param-label">Min. Order:</label>
                             <span class="param-span"><?php echo e($data->bdtdcProduct->product_prices->product_MOQ); ?> <?php echo e($data->bdtdcProduct->ProductUnit->name ?? ''); ?></span>
                        </li>
                        <?php else: ?>
                        <?php endif; ?>
                    <li class="param">
                            <label>FOB Price:</label>
                            <span>US $ <?php echo e($data->bdtdcProduct->product_FOB); ?> /<?php echo e($data->bdtdcProduct->ProductUnit->name ?? ''); ?></span>
                        </li>
                  </ul>
                   <?php endif; ?>
             </div>
             </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
     $(document).ready(function(){
        $('#nv-mnu-lst').click(function(){
              $('#cat-lst-pro-bd').toggle('slow');
        });
      }); 

    /*product template search*/
   /* $(document).on({click:function(e){
    e.preventDefault();

    var base_url='<?php echo e(URL::to("/")); ?>';
    alert(base_url);
    var name_search= $('.product_key').val();
    alert(name_search);
    var profile_id= $(this).attr('data-profile-id');
    alert(profile_id);

    var url=base_url+'/template-profile/product-search?name_search='+name_search+'&profile_id='+profile_id;
    window.location.href=url;
   }},'.template_product');*/
    /*product template search*/
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mobile-view.layout.master-profile-m', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>