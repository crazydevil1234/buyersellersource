<?php $__env->startSection('page_css'); ?>
    <link property='stylesheet' href="<?php echo asset('css/dashboard.css'); ?>" rel="stylesheet">
     <link property='stylesheet' href="<?php echo asset('assets/fontend/bdtdccss/buyer-bdtdc.css'); ?>" rel="stylesheet">
    <link property='stylesheet' href="<?php echo asset('assets/fontend/bdtdccss/why-bdtdc.css'); ?>" rel="stylesheet">
  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<div id="ajax_status" style="position: fixed;left: 40%;top: 40%;" class="text-center">
    <img src="<?php echo e(URL::asset('uploads/ajax_loading.gif')); ?>" class="img-responsive" alt="" >
</div>

<div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <ul style="margin-left:-2% ;float: left;">
                  <?php if(Sentinel::check()): ?>
            <?php
              $role = App\Model\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        <?php endif; ?>
                    <li style="float: left"><a href="<?php echo e(URL::to($dashboard_route,null)); ?>" class="top-path-li-a">My Dashboard <i class="fa fa-angle-right top-path-icon"></i></a></li>
                    <li style="float: left"><a href="<?php echo e(URL::to('Mybuying-Request')); ?>" class="top-path-li-a"><strong> My Buying Request </strong><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    <li style="float: left"><a href="" class="top-path-li-a"><strong>Buying Request Details </strong><i class="fa fa-angle-right top-path-icon"></i></a></li>
                </ul>
                 <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>



            </div>
    
  </div>
<div class="row" style="margin-bottom:2%;">
	<div class="col-xs-12 col-sm-2 col-lg-2 padding_0" style="">						
		<?php echo $__env->make('fontend.layouts.dashboard-aside', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							
	</div>
	<div class="col-md-10 ">

	<div class="col-sm-12" id="">
		
		<?php
		$inquiry_title = 'Not available';
		$image_url = 'uploads/no_image.jpg';
		?>
		<?php if($quotations->inq_products_description): ?>
		<?php
			$inquiry_title = $quotations->inq_products_description->name;
		?>
			
		<?php endif; ?>
		<?php if($quotations->inq_products_images): ?>
		<?php
			$image_url = $quotations->inq_products_images->image;
		?>
		<?php elseif($quotations->inq_docs_one): ?>
		<?php
			$image_url = 'buying-request-docs/'.$quotations->inq_docs_one->docs;
		?>
		<?php endif; ?>
		<?php if($quotations->inquery_title != ''): ?>
		<?php
			$inquiry_title = $quotations->inquery_title;
		?>
		<?php endif; ?>

	</div>
	<?php if(session()->has('success')): ?>
	<div class="col-sm-12" style="padding:0">
		<div class="alert alert-success"><?php echo e(session()->get('success')); ?></div>
	</div>
	<?php endif; ?>
	<?php if(session()->has('error')): ?>
	<div class="col-sm-12" style="padding:0">
		<div class="alert alert-danger"><?php echo e(session()->get('error')); ?></div>
	</div>
	<?php endif; ?>

<div class="col-sm-12" style="padding-bottom: 20px">
		<!-- <a href="{-{URL::to('mysource/add-details',$quotations->id)}-}" type="button" class="btn btn-default btn-md" style="border: 1px solid #E87B0E;background-color:#FF9917;border-radius: 5px !important;font-size: 13px; padding: 3px 7px;">Add Details</a> -->
		<?php if($quotations->status != 0): ?>
			<button id="post_again" type="button" class="btn btn-default btn-md" data-inqid="<?php echo e($quotations->id); ?>" style="border-radius: 5px !important;font-size: 13px; padding: 3px 7px;">Post Again</button>
		<?php endif; ?>
		<?php if($quotations->status != 4): ?>
			<button id="query_close" type="button" class="btn btn-default btn-md" data-inqid="<?php echo e($quotations->id); ?>" style="border-radius: 5px !important;font-size: 13px; padding: 3px 7px;">Close</button>
		<?php endif; ?>
			<a href="<?php echo e(URL::to('mysource/edit-add',$quotations->id)); ?>" type="button" class="btn btn-default btn-md" style="border-radius: 5px !important;font-size: 13px; padding: 3px 7px;">Edit</a>
	</div>

	<div class="col-sm-12" id="item_sha" style="margin-top:5px;margin-bottom:8%;padding: 15px">
		<div class="col-sm-6">

		</div>
		<div class="col-sm-6">
			
		</div>

	<!-- </div>
	
	<div class="col-sm-12" id="item_sha" style="margin-bottom:2%;padding-bottom:2%;"> -->
		
		
			
	
	<!-- <div class="col-sm-12" style="margin-bottom:2%;">
		<p style="color: #333;font-size: 14px;font-weight: bold;"><?php echo e($inquiry_title); ?></p>

	</div> -->

	<div class="col-sm-12" style="margin-bottom:2%;">

		<div class="col-sm-3" style="margin-left: -1%;">
			<img style="height:229px;width:237px;" src="<?php echo asset($image_url); ?>" alt="" />
		</div>
		<div class="col-sm-9">
			<h1 style="font-size: 18px; font-weight: 300; text-transform: uppercase; color: #545c58; margin: 0 0px 10px;">
			<?php echo e($inquiry_title, 0, 100); ?>

			</h1>

			<p style="color: #999;">Quantity Required: <?php echo e($quotations->quantity); ?> 
				<?php if($quotations->inq_unit_id): ?>
				<?php echo e($quotations->inq_unit_id->name); ?>

				<?php endif; ?>
			</p>
			<?php if($quotations->product_country): ?>
			<p style="color: #999;">Required Supplier Location: 
				<?php if($quotations->product_country): ?>
				<?php echo e($quotations->product_country->name); ?>

				<?php endif; ?>
			</p>
			<?php endif; ?>
			<?php if($quotations->pre_unit_price != 0): ?>
			<p style="color: #999;">Preferred Unit Price: 
				<?php if(trim($quotations->currency == '')): ?>
				USD
				<?php else: ?>
				<?php echo e($quotations->currency); ?>

				<?php endif; ?> <?php echo e($quotations->pre_unit_price); ?> / 
				<?php if($quotations->inq_unit_id): ?>
				<?php echo e($quotations->inq_unit_id->name); ?>

				<?php endif; ?>
			</p>
			<?php endif; ?>
			<p style="color: #999;">Expire After: <?php echo e(date('Y-m-d h:i:s a', strtotime($quotations->created_at . ' +15 day'))); ?></p>
			<!-- <p style="color: #999;">Shipping Terms:</p> -->
			<p style="color: #999;">Destination Port: <?php echo e($quotations->destination_port); ?></p>
			<?php if(trim($quotations->payment_terms != '')): ?>
			<p style="color: #999;">Payment Terms: <?php echo e($quotations->payment_terms); ?></p>
			<?php endif; ?>

			<!-- <p style="font-size: 13px;color: #999;"><a href="{-{ URL::to('Mybuying-Request') }-}" style="color: #999;">Buying Request</a></p> -->
			<!-- <p style="font-size: 13px;color: #999;"><a href="{-{ URL::to('mysource_quotations/inq',$quotations->id) }-}" style="color: #999;"> Quotations</a></p> -->
			<p style="font-size: 13px;color: #999;">Status : <b>
														<?php if($quotations->status == 1): ?>
															Pending
														<?php elseif($quotations->status == 2): ?>
															Approved
														<?php elseif($quotations->status == 3): ?>
															Rejected
														<?php elseif($quotations->status == 4): ?>
															Completed
														<?php elseif($quotations->status == 5): ?>
															Closed
														<?php endif; ?>
														</b></p>
		</div>
		
	</div>
	<div class="col-sm-12">
		<div class="col-sm-3"></div>
		<div class="col-sm-9 padding_0">
			<p style="font-size:11px;font-weight:bold;">Product Detailed Specification: </p>
		<p><?php echo e($quotations->message); ?></p>
		</div>
		
		<!-- <p style="font-size:11px;font-weight:bold;">Dear Sir/Madam, </p>
		<p style="font-size:11px;font-weight:bold;">Im looking for Universal Portable Tablet Handheld Case & Stand with 360 degree rotation with the following specifications: </p>
		<p style="padding-top:20px;color: #999;font-size: 11px;font-weight:bold;">Installation:</p>
		<p style="color: #999;font-size: 11px;font-weight:bold;">Adjustable Length: </p>
		<p style="color: #999;font-size: 11px;font-weight:bold;">Material:</p> -->
	</div>
	<div class="col-sm-12" style="margin-top:2%;">
	<div class="col-sm-3"></div>
		<div class="col-sm-9 padding_0">
			<p style="font-size: 11px;font-weight:bold;">Attached files:</p>
		<?php if($quotations->inq_docs): ?>
			<?php $__currentLoopData = $quotations->inq_docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
				<img style="height:80px;width:82px; margin-right: 3px" src="<?php echo asset('buying-request-docs/'.$docs->docs); ?>" alt="<?php echo e($inquiry_title); ?>" />
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
		</div>
		
		

	</div>
	
	</div>
	<div class="col-sm-12" style="#border-top: 1px solid #DDD; padding: 0">


<section>
<?php
$product_homes = App\Model\BdtdcHomeProduct::with('bdtdcProduct')->where('hot_product',1)->orderByRaw('RAND()')->get();
?>
 
<div  class="col-sm-12 item_sha" style="padding-bottom: 1%">
	<div class="col-sm-12">
		<h2 style="float: left;font-size: 19px" class="title text-left padding_0"  itemprop="name"><a style="color: #333;" href="<?php echo e(URL::to('selected/supplier-products')); ?>"> Today's Most Popular Products</a></h2>

		<p style="float:right; ">
			<a itemprop="url" href="<?php echo e(URL::to('selected/supplier-products')); ?>">View more
		</a></p>
	</div>
<div class="col-sm-12 padding_0">

				<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1250px; height: 310px; overflow: hidden; visibility: hidden;">
		        <!-- Loading Screen -->
		        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
		            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		            <div style="position:absolute;display:block;background:url('assets/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
		        </div>
		        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1250px; height: 310px; overflow: hidden;">
		        <?php if($product_homes): ?>
		        	<?php $__currentLoopData = $product_homes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        	

		        	<?php if($pro->bdtdcProduct): ?>

	        		

    <div style="display: none;">
	<div class="box" style="box-shadow: none;margin-bottom: 0px;">
	    <div class="product-image-wrapper media_wrapper" style="width:233px;height: 310px;border: none">
	    <?php $p_name = "Product Name Not Available"; ?>
		<?php if($pro->bdtdcProduct): ?>
			<?php if($pro->bdtdcProduct->product_name): ?>
			<?php 
			$p_name = $pro->bdtdcProduct->product_name->name; 
			?>
			<?php endif; ?>
		<?php endif; ?>
			<div class="single-products">
			
			<a itemprop="url" style="text-align: justify;text-justify: inter-word;" target="_blank" href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$p_name).'='.mt_rand(100000000, 999999999).$pro->product_id)); ?>">
			
				<div class="productinfo text-center"  itemscope itemtype="http://schema.org/Product">
				<?php if($pro->bdtdcProduct->product_image_new): ?>
					
					<img itemprop="image" title="<?php echo e($p_name); ?>" style="width:100%;height:233px;border: none;box-shadow:none" src="../../<?php echo e(ImageManager::getImagePath($pro->bdtdcProduct->product_image_new->image, 233, 233, 'crop')); ?>" alt="<?php echo e(substr($p_name, 0, 50)); ?>" class="img-thumbnail  media_image_res">
				
				<?php else: ?>
					<img itemprop="image" title="<?php echo e($p_name); ?>" style="width:100%;height:233px;border: none;box-shadow:none" src="../../<?php echo e(ImageManager::getImagePath('uploads/no_image.jpg', 233, 233, 'crop')); ?>" alt="<?php echo e($p_name); ?>" class="img-thumbnail  media_image_res">
				<?php endif; ?>
						
					<div class="hot_title" style="height: 40px;    padding: 5px;">
						
						<div style="text-align: center;text-justify: inter-word;">
							<span class="text-center" itemprop="name"><?php echo e(substr($p_name, 0, 30)); ?></span>
						
						</div>
						

						
						</div>
						<?php if($pro->bdtdcProduct): ?>
						<?php if($pro->bdtdcProduct->product_prices): ?>
						<?php if(trim($pro->bdtdcProduct->product_prices->product_FOB) != '' && trim($pro->bdtdcProduct->product_prices->product_FOB) != '0' && $pro->bdtdcProduct->product_prices->product_FOB != null && trim($pro->bdtdcProduct->product_prices->product_FOB) != '-' && trim($pro->bdtdcProduct->product_prices->product_FOB) != 'NA' && trim($pro->bdtdcProduct->product_prices->product_FOB) != 'N/A'): ?>
						<p style="text-align:  ;font-size:14px;color:#2192D9">
						<?php if($pro->bdtdcProduct->product_prices): ?>{
							<?php if(trim($pro->bdtdcProduct->product_prices->currency) != ''): ?>
							<?php echo e($pro->bdtdcProduct->product_prices->currency); ?>

							<?php else: ?>
							US
							<?php endif; ?>
						<?php else: ?>
						US
						<?php endif; ?>
					 $ <?php if($pro->bdtdcProduct->product_prices): ?>
					 <?php echo e($pro->bdtdcProduct->product_prices->product_FOB); ?> 
					 <?php else: ?>
					 Price Not Available
					 <?php endif; ?> / <?php if($pro->bdtdcProduct->ProductUnit): ?>
					 <?php echo e($pro->bdtdcProduct->ProductUnit->name); ?> 
					 <?php else: ?>
					 pieces
					<?php endif; ?></p>
						<?php endif; ?>
						<?php endif; ?>
						<?php endif; ?>
					</div>
				</a>
			</div>
		</div>
	</div>
	</div>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

</div>
		  
		        <span data-u="arrowleft" class="recommended-item-control" style="top:50px;left:8px;width:35px;height:55px;cursor:pointer;" data-autocenter="4"><i class="fa fa-angle-left" style="position: absolute;left: 0; background: transparent !important"></i></span>
		        <span data-u="arrowright" class="recommended-item-control" style="top:50px;right:8px;width:35px;height:55px;cursor:pointer;" data-autocenter="4"><i class="fa fa-angle-right" style="position: absolute;right: 0; background: transparent !important"></i></span>
		    </div>


  </div>
</div>
</section>


	</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('fontend.layouts.dashboard_aside_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type='text/javascript' src='<?php echo asset('assets/slider/jssor.slider.mini.js'); ?>'></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#ajax_status').hide();
});

function ajax_success_message(str){
	$('#ajax_status').html(str);
	$('#ajax_status').show();
    /*$('#ajax_status').show().html(str).fadeOut(1500,function(){
        $('#ajax_status').addClass('hide_this_loading');
        $('#ajax_status').html('<img src="'+window.location.origin+'/uploads/ajax_loading.gif" class="img-responsive" alt="" >');
    });*/
}

$(document).on({click:function(e){
        	e.preventDefault();
        	var inqID = $(this).attr('data-inqID');
        	var post_url = '<?php echo e(URL::to("all-action/post_again")); ?>';
        	$.post(post_url,{
        		'_token':'<?php echo e(csrf_token()); ?>',
        		'inqID': inqID,
        	},function(result){
        		if(parseInt(result) == 1){
        			ajax_success_message("<p style='font-size:20px;color:#ffffff;margin-top:5px;'><b>Action Performed!!!</b></p>");
        			var url = window.location.href;
        			window.location.href = url;
        		}else{
        			alert ("error");
        		}
        	});
        }},'#post_again');

        $(document).on({click:function(e){
        	e.preventDefault();
        	var inqID = $(this).attr('data-inqID');
        	var post_url = '<?php echo e(URL::to("all-action/query_close")); ?>';
        	$.post(post_url,{
        		'_token':'<?php echo e(csrf_token()); ?>',
        		'inqID': inqID,
        	},function(result){
        		if(parseInt(result) == 1){
        			ajax_success_message("<p style='font-size:20px;color:#ffffff;margin-top:5px;'><b>Action Performed!!!</b></p>");
        			var url = window.location.href;
        			window.location.href = url;
        		}else{
        			alert ("error");
        		}
        	});
        }},'#query_close');

        var jssor_1_options = {
	      $AutoPlay: false,
	      $AutoPlaySteps: 5,
	      $SlideDuration: 300,
	      $SlideWidth: 233,
	      $SlideSpacing: 20,
	      $Cols: 5,
	      $ArrowNavigatorOptions: {
	        $Class: $JssorArrowNavigator$,
	        $Steps: 5
	      },
	      $BulletNavigatorOptions: {
	        $Class: $JssorBulletNavigator$,
	        $SpacingX: 1,
	        $SpacingY: 1
	      }
	    };

	    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

	    function ScaleSlider1() {
	        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
	        if (refSize) {
	            refSize = Math.min(refSize, 1250);
	            jssor_1_slider.$ScaleWidth(refSize);
	        }
	        else {
	            window.setTimeout(ScaleSlider1, 50);
	        }
	    }
	    ScaleSlider1();
	    $(window).bind("load", ScaleSlider1);
	    $(window).bind("resize", ScaleSlider1);
	    $(window).bind("orientationchange", ScaleSlider1);

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>