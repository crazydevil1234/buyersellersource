	<?php $__env->startSection('page_css'); ?>
    <link property='stylesheet' href="<?php echo asset('css/buy-on/wholesale.css'); ?>" rel="stylesheet">
    <link property='stylesheet' href="<?php echo asset('assets/fontend/bdtdccss/online-market-place.css'); ?>" rel="stylesheet">
    <link property='stylesheet' href="<?php echo asset('css/mega-menu.css'); ?>" rel="stylesheet">
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <br>
      <?php echo $__env->make('fontend.layouts.sidebar_wholesale', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row selet-menu">
				<div>
						<h1 style="text-align: left;color: #333;font-size: 24px;margin-bottom: 25px;padding-left: 15px;">Wholesale products</h1>
				</div>
	                <div class="category-tab">
						
							<ul class="nav nav-tab nav-pills trade-show-ul " style="background:none;border-bottom: 1px solid #dae2ed;" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<li style="padding-top: 11px;font-size: 15px;font-weight: 600;">Selected Brand</li>
								<li class="" style="margin-left: 2.5%;">  <a itemprop="url"  class="padding_0" href="#forbuyer" data-toggle="tab">Hot Brands</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#apparel" data-toggle="tab">Apparel</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#electronic" data-toggle="tab">Electronics</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#sport" data-toggle="tab">Machinery & Hardware</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#jewelry" data-toggle="tab">Jewelry & Watches</a></li>
								<!-- <li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#forsupplier" data-toggle="tab">Lights & Lighting</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#forsupplier" data-toggle="tab">Automotive</a></li> -->
								   
							</ul>
					</div>
					
	<div class="tab-content">
		<div class="tab-pane fade in active" id="forbuyer" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">


				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" itemscope itemtype="http://schema.org/Product">
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',968)); ?>" class="slidebox-item">
					<img itemprop="image"    style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/girl-fashion.jpg'); ?>" alt="girl-fashion" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1LTC_LpXXXXbRapXXXXXXXXXX-240-120.png'); ?>" alt="Shein logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',1001)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/sports-dress.png'); ?>" alt="sports dress" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1KF_EKXXXXXc6XVXXXXXXXXXX-240-120.png'); ?>" alt="FOS JOAS logo" />
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',151)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/digital-watch.jpg'); ?>" alt="digital watch" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1h2_FKXXXXXc.XFXXVPCB_VXX-240-120.png'); ?>" alt="winait logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',974)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/dimond-metal.jpg'); ?>" alt="dimond metal" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB19hHiLpXXXXXDXpXXfPaB_VXX-240-120.jpg'); ?>" alt="Allen coco logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',928)); ?>" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/images/supper-light.jpg'); ?>"  alt="supper light" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/images/TB1Y0YhKFXXXXauXXXXVPCB_VXX-240-120.png'); ?>" alt="SNU logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
			</div>
   		</div>
   		<div class="tab-pane fade" id="apparel" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',884)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/girl-fashion.jpg'); ?>" alt="girl-fashion" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1LTC_LpXXXXbRapXXXXXXXXXX-240-120.png'); ?>" alt="SheIn logo" />
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',920)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/dress-model.jpg'); ?>" alt="dress model" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1gRNRLFXXXXb5XpXXXXXXXXXX-240-120.png'); ?>" alt="petti girl logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',11)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/baby-dress.jpg'); ?>" alt="baby dress" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1gcWUKFXXXXa3XVXXXXXXXXXX-240-120.jpg'); ?>" alt="VasRa logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',812)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/long-tri-shirt.jpg'); ?>"  alt="long tri shirt" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1H9DULpXXXXcqXVXXXXXXXXXX-240-120.jpg'); ?>" alt="QianXiu logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',7)); ?>" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/summer-dress.jpg'); ?>"  alt="summer-dress" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1utHMKXXXXXXDXVXXXXXXXXXX-240-120.png'); ?>" alt="Zhuiman logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
			</div>

   		</div>
   		<div class="tab-pane fade" id="sport" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',151)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/sports-dress.png'); ?>" alt="winait" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1KF_EKXXXXXc6XVXXXXXXXXXX-240-120.png'); ?>" alt="winait logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',984)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/sports-raceling.png'); ?>" alt="sports raceling"/>
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1vOTFKXXXXXcaXVXXXXXXXXXX-240-120.png'); ?>" alt="costlo logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',51)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/wheel-machine.jpg'); ?>" alt="wheel machine" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1h2_FKXXXXXc.XFXXVPCB_VXX-240-120.png'); ?>" alt="3D logo "/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',54)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/bi-cycle.jpeg'); ?>" alt="bi cycle" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB19hHiLpXXXXXDXpXXfPaB_VXX-240-120.jpg'); ?>" alt="BRG logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',40)); ?>" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/cycle-wheel.jpg'); ?>" alt="cycle-wheel" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1oMFaKVXXXXavXXXXVPCB_VXX-240-120.png'); ?>"  alt="BUstyle logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				
			
			</div>

   		</div>
   		<div class="tab-pane fade" id="electronic" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',677)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/digital-watch.jpg'); ?>" alt="digital-watch" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1h2_FKXXXXXc.XFXXVPCB_VXX-240-120.png'); ?>" alt="FOS JOAS logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',135)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/color-lighting.jpg'); ?>" alt="color-lighting" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1oMFaKVXXXXavXXXXVPCB_VXX-240-120.png'); ?>" alt="CHIC logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',137)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/smart-phone.jpg'); ?>" alt="smart-phone" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1XQuDLpXXXXbEXFXXXXXXXXXX-240-120.png'); ?>" alt="Winait logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',67)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/branding-watch.jpg'); ?>"  alt="branding watch" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1vDhjKFXXXXc9XFXXfPaB_VXX-240-120.jpg'); ?>" alt="Allen COCO logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',896)); ?>" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/i-phone.jpg'); ?>" alt="i-phone" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1w3COLpXXXXXxXpXXXXXXXXXX-240-120.png'); ?>" alt="COSTELO logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				
			
			</div>

   		</div>
   		<div class="tab-pane fade" id="jewelry" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',974)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/dimond-ring.jpeg'); ?>" alt="dimond-ring" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1IPizKFXXXXXRXVXXfPaB_VXX-240-120.jpg'); ?>" alt="Mimeng logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',974)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/gorgious-ornamante.jpg'); ?>" alt="Western Rain" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1V35hKXXXXXbNXVXXb9RYIXXX-250-120.jpg'); ?>" alt="Western Rain logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',974)); ?>" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/neoglory.jpg'); ?>" alt="neoglory" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1C3T7KXXXXXb5XXXXVPCB_VXX-240-120.png'); ?>" alt="NEOGLORY logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',974)); ?>" class="slidebox-item">
						<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/Allen-COCO-fashion-Jewelry.jpg'); ?>" alt="Allen COCO fashion Jewelry" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB19hHiLpXXXXXDXpXXfPaB_VXX-240-120.jpg'); ?>" alt="Allen COCO logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
					</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="<?php echo e(URL::to('Home/template_',974)); ?>" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="<?php echo asset('assets/slider/dimond-loket.jpg'); ?>" alt="dimond loket" />
					<div class="brand-logo">
						<img itemprop="image"   src="<?php echo asset('assets/slider/TB1utHMKXXXXXXDXVXXXXXXXXXX-240-120.png'); ?>" alt="Zhudiman logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
					</a>	
				</div>
				
				
			
			</div>

   		</div>
	</div>
</div>
      <br>
      
      <?php if($product_categorys): ?>

            <?php $__currentLoopData = $product_categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            
      <div class="row" style="padding-bottom: 5px">
            	<ul class="" style="padding: 0; padding-left: 15px;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<li style="padding-left: 0%" class="sale-cat-heading-tit"> <i style="width: 2.85em;top: 7px;" class="icon-p <?php echo e($product_category->pro_parent_cat->image); ?>"></i><?php echo e($product_category->pro_parent_cat->name); ?><span>  <i class="fa fa-angle-right"></i></span></li>	
			</ul>
      </div>
	 <div  class="row" style="padding-top: 0px;">
	
		<div class="col-md-2" style="padding-left:0; padding-right:5px;">
					
	 			 <div class="sale-ppp-title" style="border: none;">
	 			 		<ul class="sale-title-menu" style="border: none;" itemscope itemtype="http://data-vocabulary.org/Product">
	 			 		<?php if($product_category->most_view_category): ?>
							<?php $__currentLoopData = $product_category->most_view_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		 			 			<li class="sale-title-menu-li" rel="sub category" itemprop="url">
			 			 			  <a itemprop="url"  class="sale-title-menu-li-a" href="<?php echo e(URL::to('wholesale/category/product',$cat->category_id)); ?>"><span itemprop="name"><?php echo e($cat->cat_name->name); ?></span>
			 			 			</a>
		 			 			</li>
		 			 		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 			 		<?php endif; ?>
	 			 		</ul>
	 			 </div>
		</div>

		<div class="col-md-3 padding_0">
		<?php if($product_category->pro_parent_cat): ?>
		 <img itemprop="image"   style="width: 290px;height: auto;padding-top: 0px" class="    col-sup-img" src="<?php echo e(URL::to('assets/wholesale', $product_category->pro_parent_cat->single_image)); ?>" alt="<?php echo e(preg_replace('/[^A-Za-z0-9\jpg]/', ' ',$product_category->pro_parent_cat->single_image)); ?>" />
		 <?php endif; ?>		
		</div>		
		<div class="col-md-7 padding_0" style="padding-left:5px;">							       
		  <?php if($product_category->selected_suppliers): ?> 
			<?php $__currentLoopData = $product_category->selected_suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<div class="col-sm-3 col-xs-6 padding_0  sup-head-col" style="margin-bottom: 1%;padding-right: 2%;">
				<div class="img-hilight  product-hover">														
		<?php if($data->pro_name_string): ?>
          <?php if($data->select_product_images): ?>
          <?php if($data->pro_name_string): ?>
				  <a itemprop="url"  target="_blank" href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->pro_name_string->name).'=232942253'.$data->product_id,null)); ?>" class="slidebox-item-list" style="box-shadow: none; border:0 none;">
				  <?php endif; ?>
          <img itemprop="image" title="<?php echo e($data->pro_name_string->name); ?>"   style="" class="    col-sup-img" src="<?php echo e(URL::to((isset($data->select_product_images)) ? ''.$data->select_product_images->image : 'no_image.jpg',null)); ?>" alt="<?php echo e($data->pro_name_string->name); ?>"/>
          <?php else: ?>
          <img itemprop="image" title="<?php echo e($data->pro_name_string->name); ?>"   style="" class="col-sup-img" src="<?php echo e(URL::to('uploads/no_image.jpg',null)); ?>" alt="<?php echo e($data->pro_name_string->name); ?>" />
          
          <?php endif; ?>
          <?php endif; ?>
			
					<div style="height: 100px;" class="product-head-cont">
					<div class="whole-sal-pro" style="">
              <?php if($data->pro_name_string): ?>
							 <?php echo e(substr($data->pro_name_string->name, 0, 30)); ?>..
               <?php else: ?>
               Unknown Product
               <?php endif; ?>
					 
					</div>
					<div itemprop="name"  class="brand-favorable" style="text-align:left;padding-left:10px;padding-bottom:3px; height:32px;">
						<span class="doller-product-price">$ 
							<?php if($data->cat_pro_price): ?>
							<?php echo e($data->cat_pro_price->product_FOB); ?> /</span><?php echo e($data->BdtdcSelectedSupplier_products->ProductUnit->name); ?>

							<?php else: ?>
							</span>
							<?php endif; ?>
					</div>
				</div>
					</a>
				</div>
             
				</div>
			
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
</div>
</div>
<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $product_categorys->render(); ?>

<?php endif; ?>
<br>
<br>     
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
		<script type="text/javascript">
		$(document).ready(function(){
			    $("#cat-tle").click(function(){
			        $("#whole-sl-cat-lst").toggle();
			    });
			});
	(function(){

		$('.product-image-wrapper-next').css('margin-bottom','0');
			
		$(window).load(function(){
			$('a[href="#forbuyer"]').click()	
		})
		    var section = $('[name="section"]').val();
		    (section !="") ? $('.nav-tabs li a[href="#'+section+'"]').click() : false;
			    
	}
	);
</script>
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master_dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>