	<?php $__env->startSection('content'); ?>
<section>
    <div class="container">
	<div class="row padding_0">
			<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a itemprop="url" href="<?php echo e(URL::to('product/name')); ?>" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
         </div>
         <div class="col-sm-12 padding_0">
       <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
    </div>
	       <div class="cat-pr-list"><span id="one">All Category<i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
	        <div class="col-xs-12 padding_0" id="two" style="display:none;" itemscope itemtype="http://data-vocabulary.org/Product">
                <?php if($categorys): ?>                    
                    <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	            <div class="sb_pd_list">
                            <a rel="category" itemprop="url" href="<?php echo e(URL::to('Sourcing/Requests/info', $c->cat_id)); ?>" class="pp-list-an">
                                <?php echo e($c->cat_name); ?>

                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

	      </div>
       </div>
      <div class="row padding_0">
          
            <div class="col-xs-12 padding_0"> 
            		<div class="product-list-limit" itemscope itemtype="http://schema.org/Product">
                            <?php $__currentLoopData = $quotations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quotation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($quotation->inq_products_images): ?>
            				<div class="product-column-2" style="width: 50%;">
            					<a itemprop="url" href="<?php echo e(URL::to('product-sourcing/view',$quotation->id)); ?>">
            					<div class="product-img-limit">
            						<img itemprop="image" class="product-img_img" title="<?php echo e($quotation->inq_products_description->name ?? ''); ?>" src="<?php echo e(URL::to($quotation->inq_products_images->image,null)); ?>"  alt="<?php echo e($quotation->inq_products_description->name ?? ''); ?>">
            						</div>
            					</a>
            								<div class="txt-content-limit">
                                                <?php if($quotation->inq_products_description): ?>
                								    <a itemprop="url" class="title-wrapper-limt" href="<?php echo e(URL::to('product-sourcing/view',$quotation->id)); ?>">
                									    <?php echo e(substr($quotation->inq_products_description->name, 0, 40)); ?>

    													<span class="ripple-effect" style="width: 313.5px; height: 313.5px; top: -142px; left: -1px;"></span>
                									</a>
                                                 <?php endif; ?>
            									<div class="product-moq">
            										 MOQ:<span>30 Sets</span>
                                                     
            									</div>
            									<div class="product-price-limt">
            										<span>US $<?php echo e($quotation->p_price->product_FOB ?? ''); ?></span>/ <?php echo e($quotation->inq_unit_id->name ?? ''); ?> 
            									</div>
                                                <a itemprop="url" href="<?php echo e(URL::to('product-sourcing/view',$quotation->id)); ?>">
            									<div id="quetion-btn">
		                       		                <div class="ui2-button-primary_m">Get Instant Quotes</div>
		                                        </div>
                                                </a>
            								</div>
            						</div>
                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            			</div>
                        
            </div>
     </div>
    </div>
</section>   
 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
  
    var a = document.getElementById('one');
      var b = document.getElementById('two');

    a.addEventListener('click',showhide);

    function showhide () {
        if (b.style.display == 'none') {
        b.style.display = 'block';
        }
        else {
            b.style.display = 'none';
        }}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mobile-view.layout.master_m', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>