<?php
use App\Model\User;
use App\Model\BdtdcCountry;
use App\Model\BdtdcCategoryDescription;
?>

<?php $__env->startSection('page_css'); ?>
    <link property='stylesheet' href="<?php echo asset('css/search-products.css'); ?>" rel="stylesheet">
  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<br>
	<div class="row">
	<div class="col-lg-12 col-md-12 padding_0">
			<ul  style="margin-left: -2%;float: left;">
		<li style="float: left">
			<a itemprop="url" href="<?php echo e(URL::to('/',null)); ?>" style="color: #000">
			Search for  &nbsp;</a>
			<i class="fa fa-angle-right"></i>
			  &nbsp;</a>
		</li>

			<li style="float: left">
			<a itemprop="url" href="<?php echo e(URL::to($search_str.'/search?t=products',null)); ?>" style="color: #000;font-weight: 700">
				<?php echo e($search_str); ?> products
			 <i class="fa fa-angle-right"></i></a>
			</li>
			</ul>
			<div style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </div>
		</div>
	</div>

	
	<?php echo $__env->make('fontend.layouts.search_result_aside', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div id="" class="col-sm-9 col-md-10 col-xs-12 padding-right item_sha" style="padding-bottom:1%">
		<div class="col-sm-12 padding_0">
			<div id="custom-search-input">
	            <div class="input-group col-md-12">
	                <input type="text" class="form-control input-lg secondary_search_input" placeholder="Search products by name, brand name or company name" value="<?php echo e($search_str); ?>" />
	                <span class="input-group-btn">
	                    <button class="btn btn-primary secondary_search" type="button">
	                        <i class="fa fa-search" aria-hidden="true"></i>
	                    </button>
	                </span>
	            </div>
	        </div>
		</div>
		<form action="<?php echo e(URL::to('others_filter',null)); ?>" class="form others_filter_form" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<input type="hidden" name="searched_on" value="<?php echo e($searched_on); ?>">
			<input type="hidden" name="search_str" value="<?php echo e($search_str); ?>">
			<input type="hidden" name="countery" class="others_filter_select" value="<?php echo e($country); ?>">
			<input type="hidden" name="buyer_protection_input" value="<?php echo e($buyer_protection); ?>">
			<input type="hidden" name="gold_supplier_input" value="<?php echo e($gold_supplier); ?>">
			<input type="hidden" name="assessed_supplier_input" value="<?php echo e($assessed_supplier); ?>">
			<input type="hidden" name="filter_by_main_market" value="<?php echo e($filter_by_main_market); ?>">
			<input type="hidden" name="filter_by_total_revanue" value="<?php echo e($filter_by_total_revanue); ?>">
			<input type="hidden" name="filter_by_employe" value="<?php echo e($filter_by_employe); ?>">
			<input type="hidden" name="filter_by_origin" value="<?php echo e($origin); ?>">
			<input type="hidden" name="filter_by_category" value="<?php echo e($category); ?>">
			<div class="col-sm-5 col-md-5 col-xs-12">
				<div style="font-size:12px;line-height: 32px;" align="right" class="col-sm-4 col-md-4 col-xs-12 title_home padding_0">Supplier Location: </div>
				<div style="margin-top: 1%;padding-left:2%;position: relative;" class="col-sm-8 col-md-8 col-xs-12 padding_0 ">

					<div style="background-color: #fff;border: 1px solid #dae2ed;    display: inline-block;height: 22px;    line-height: 22px;padding: 0 0 0 5px;    width: 192px;    vertical-align: middle;color: #333;" class="country_tab">
					    <span class="replace_name">
					    	<?php if($country != 0): ?>
					    		<?php $__currentLoopData = $bdtdc_country_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
					    			<?php if($country == $value->id): ?>
					    				<?php echo e($value->name. " Selected"); ?>

					    			<?php endif; ?>
					    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					    	<?php else: ?>
					    	All Countries &amp; Regions
					    	<?php endif; ?>
					    </span>
					    <i style="padding-right:5px;" class="fa fa-angle-down fa_down_show" aria-hidden="true"></i>
					    <i style="padding-left:5px;padding-right:5px;display:none;" class="fa fa-angle-up fa_up_show" aria-hidden="true"></i>

					</div>
					<div class="container country_tab_show" style="display: none;">
					<div style="position:absolute;border: 1px solid #dae2ed;box-shadow: 2px 2px 3px rgba(0,0,0,.13);background-color: #fff;top: 21px;left: -120px;padding: 10px;overflow: auto;height: 250px;width: 300%;z-index: 1;" class="">
					  <div style="border-bottom: 1px dotted #dae2ed;    padding-bottom: 10px;">
					  	<div class="replace_name" style="background: #7d8ca1;color: #fff;font-size: 12px;    line-height: 26px;width: 162px;padding-left: 7px;    border-radius: 5px !important;">
					  		<?php if($country != 0): ?>
					  		<?php $__currentLoopData = $bdtdc_country_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
					    	<?php if($country == $value->id): ?>
					    		<?php echo e($value->name. " Selected"); ?>

					    	<?php endif; ?>
					    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					    	<?php else: ?>
					    All Countries &amp; Regions
					    <?php endif; ?>
					</div>
					  </div>
					  <select style="box-sizing: border-box;border: 1px solid #dae2ed;color: #333;box-shadow: inset 0 1px 2px rgba(0,0,0,.1);height: 29px;font-size: 12px;width: 29%;padding-left: 24px;margin-top: 10px;margin-bottom: 10px;" class="form-control others_filter_select" name="country_id_data">
							<option value="0">Select Country</option>
							<?php $__currentLoopData = $bdtdc_country_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bdtdc_country_list_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($country == $bdtdc_country_list_data->id): ?>
									<option value="<?php echo e($bdtdc_country_list_data->id); ?>" selected>
										<?php echo e($bdtdc_country_list_data->name); ?>

									</option>
									<?php else: ?>
									<option value="<?php echo e($bdtdc_country_list_data->id); ?>">
										<?php echo e($bdtdc_country_list_data->name); ?>

									</option>
									<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</select>
						  <ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#all-con">All Countries</a></li>
						    <?php $__currentLoopData = $country_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Countries_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
								<li><a data-toggle="tab" href="#<?php echo e(explode(' ', $Countries_data->name)[0]); ?>">
									<?php echo e($Countries_data->name); ?>

									</a>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						  </ul>

						  <div class="tab-content">
						    <div id="all-con" class="tab-pane fade in active">
						      <div class="col-md-3 padding_0">
						      	<label class="country_select" style="cursor:pointer;" countryid="0"> All</label>
						      </div>
						      <?php $__currentLoopData = $country_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Countries_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php $__currentLoopData = $Countries_data->country_region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="col-md-3 padding_0">
											<label class="country_select" style="cursor:pointer;" countryid="<?php echo e($p->id); ?>">
												<?php echo e($p->name); ?>

											</label>
										</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
						    </div>
						    <?php $__currentLoopData = $country_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Countries_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
								<div id="<?php echo e(explode(' ', $Countries_data->name)[0]); ?>" class="tab-pane fade">
								<?php $__currentLoopData = $Countries_data->country_region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-md-3 padding_0"><label class="country_select" style="cursor:pointer;" countryid="<?php echo e($p->id); ?>"><?php echo e($p->name); ?></label></div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						  </div>
					</div>
					</div>
				</div>
			</div>
			<?php
			?>
			<div class="col-sm-7 col-md-7 col-xs-12" style="padding-top:3px;padding-left: 0px;padding-right: 0px;">
				<label style="font-size:12px" class="ui2-checkbox-customize-label">
					<span class="ui2-checkbox-customize-txt">Supplier Types: </span>
				</label>
				<label title="Buyer Protection: Ensures on-time shipment and pre-shipment product quality" style="font-size:12px" class="ui2-checkbox-customize-label">
					<input name="trade_assurence" type="checkbox" class="ui2-checkbox-customize-val others_filter_form_input" value="0" <?php if($buyer_protection == 'true'): ?> checked <?php endif; ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:25px;width:25px;" src="<?php echo asset('assets/gold/Buyer-protection-home.png'); ?>">Buyer Protection</span>
				</label>
				<label title="Gold Suppliers:pre-qualified suppliers" style="font-size:12px" class="ui2-checkbox-customize-label">
					<input name="gold_supplier" type="checkbox" class="ui2-checkbox-customize-val others_filter_form_input" value="0" <?php if($gold_supplier == 'true'): ?> checked <?php endif; ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:25px;width:25px;" src="<?php echo asset('assets/helpcenter/Gold-membership.png'); ?>">Gold Supplier</span>
				</label>
				<!-- </a> -->
				<label title="Assessed Supplier: Supplier assessed by a world-leading inspection company (i.e SGS, Bureau Veritas)." style="font-size:12px" class="ui2-checkbox-customize-label">
					<input name="assessed_supplier" type="checkbox" class="ui2-checkbox-customize-val others_filter_form_input" value="0" <?php if($assessed_supplier == 'true'): ?> checked <?php endif; ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:25px;width:25px;" src="<?php echo asset('assets/helpcenter/verified-supplier.png'); ?>">Assessed Supplier</span>
				</label>
			</div>
		</form>
	</div>


	<br>
	<div id="pro_view" class="col-sm-9 col-md-10 col-xs-12 padding-right" data-spm="57">
		<div class="col-sm-4 col-md-4">
			<div class="view-label" style="padding: 8px;">View <?php if(isset($products)>=1): ?>
					<strong><?php echo count($products); ?></strong> <?php else: ?>
					<strong>0</strong> <?php endif; ?> Product(s) below
			</div>
		</div>
		<div class="col-sm-4 col-md-4">
				<div class="view-label text-center" style="padding: 8px;">Total <?php if(isset($products)): ?>
					<strong><?php echo e($products->total()); ?></strong> <?php else: ?>
					<strong>0</strong> <?php endif; ?> Result(s) found
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="view-label text-right" style="padding: 8px;">Page No <?php if(isset($products)): ?>
					<strong><?php echo e($products->currentPage()); ?></strong> <?php if($products->lastPage() >0 ): ?>
					of <strong><?php echo e($products->lastPage()); ?></strong> 
					<?php endif; ?> | 
					<a href="<?php echo e($products->previousPageUrl()); ?>">prev</a> | 
					<a href="<?php echo e($products->nextPageUrl()); ?>">next</a>
					<?php else: ?>
					<strong>0</strong>
					<?php endif; ?>
				</div>
			</div>
		<div class="col-sm-12 padding_0">
			<?php if(($category != null && trim($category) !='') || ($origin != null && $origin != '')): ?>
				<div style="">
					<p style="padding-top:10px;padding-left:20px;">
					<?php if($category != null && trim($category) !=''): ?>
					<?php 
					$cate_name = BdtdcCategoryDescription::where('category_id',$category)->first()
					?>
					<a title="Remove Category '<?php echo e($cate_name->name); ?>'" style="padding: 3px 7px;background-color: #ddd;border-radius: 5px !important;" class="cancel_custom_search" href="category">x&nbsp;<?php echo e($cate_name->name); ?></a> 
					<?php endif; ?>
					<?php if(($category != null && $category !='') && ($origin != null && $origin != '')): ?>
					|
					<?php endif; ?>
					<?php if($origin != null && $origin != ''): ?>
					<?php 
					$country_name_d = BdtdcCountry::where('id',$origin)->first()
					?>
					<a title="Remove Origin '<?php echo e($country_name_d->name); ?>'" style="padding: 3px 7px;background-color: #ddd;border-radius: 5px !important;" class="cancel_custom_search" href="country-origin">x&nbsp;<?php echo e($country_name_d->name); ?></a></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<br>
	<div id="" class="col-sm-9 col-md-10 col-xs-12 padding-right" style="padding-top: 2%;">
		<input type="hidden" name="base_url" value="<?php echo e(URL::to('/',null)); ?>">
		<!-- -LOADING ANIMATION TRIGERED TO THIS LOADER CLASS;- -->
		<div class="loader"></div>
		<div class="features_items" style="overflow: visible;">
			<!--THIS DATA AREA WILL BE OVERWRIDE WHEN FILTER SEARCH IS TRIGERED;-->
			<!--features_items-->
			<?php if(count($products)>=1): ?>
			<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div style="width: 100%;" class="list_product col-xs-12 ">
					<div class="col-xs-7 col-md-2 col-sm-4 padding_0">
						
						<?php if(count([$product->product_image_new]) == 0): ?>
						<img style="height:150px;width:100%" class="img-thumbnail" src="<?php echo e(URL::to('uploads/no_image.jpg',null)); ?>" alt="" />
						<?php else: ?>
							<img style="height:150px;width:100%" class="img-thumbnail" src="<?php echo e(URL::to((isset($product->product_image_new->image)) ? ''.$product->product_image_new->image : 'no_image.jpg',null)); ?>" alt="" />
						<?php endif; ?>

					</div>
					<div class="col-xs-6 col-md-6 col-sm-8">
						<div class="col-xs-12 padding_0">
							<p><a style="font-size:18px" target="_blank" href="<?php if($product->product_name): ?>
							<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$product->product_name->name).'='.mt_rand(100000000, 999999999).$product->id,null)); ?>

							<?php else: ?>
							<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-','no name').'='.mt_rand(100000000, 999999999).$product->id,null)); ?>

							<?php endif; ?>"><?php echo e($product->product_name->name ?? ''); ?></a></p>
							<div class="col-md-6 col-xs-12 padding_0">
							<?php if($product->product_prices): ?>
							<?php if(trim($product->product_prices->product_FOB) != '' && trim($product->product_prices->product_FOB) != '0' && $product->product_prices->product_FOB != null): ?>
								<p>
									<strong>	US $</strong><?php if($product->product_prices): ?>
									<?php echo e($product->product_prices->product_FOB); ?>

									<?php endif; ?>
									/<?php if($product->ProductUnit): ?>
									<?php echo e($product->ProductUnit->name); ?>

									<?php endif; ?>
								</p>
							<?php endif; ?>
							<?php endif; ?>
							</div>
							<div class="col-md-6 col-xs-12 padding_0">
							<?php if($product->product_prices): ?>
							<?php if(trim($product->product_prices->product_MOQ) != '' && trim($product->product_prices->product_MOQ) != '0' && $product->product_prices->product_MOQ != null): ?>
								<p>
									<span><?php if($product->product_prices): ?>
									<?php echo e($product->product_prices->product_MOQ.' '); ?>

									<?php endif; ?>
									<?php if($product->ProductUnit): ?>
									<?php echo e($product->ProductUnit->name); ?>

									<?php endif; ?></span>(Min. Order)
								</p>
							<?php endif; ?>
							<?php endif; ?>
							</div>

						</div>

						<div class="col-xs-12 padding_0">
							<div class="col-sm-6 col-xs-12 padding_0">
								<p style="margin:0 0 0px;display:block;width:83%" class="summary_pro">Product Type:</p>
								<p><a class="custom_click_search" data-id-type="category" href="" data-tid="
								<?php if($product->bdtdcProductToCategory): ?>
									<?php echo e($product->bdtdcProductToCategory->category_id); ?>

								<?php else: ?>
								0
								<?php endif; ?>
								">
								<?php if($product->bdtdcProductToCategory): ?>
									<?php if($product->bdtdcProductToCategory->bdtdcCategory): ?>
										<?php echo e($product->bdtdcProductToCategory->bdtdcCategory->name); ?>

									<?php else: ?>
										No Category Available
									<?php endif; ?>
								<?php else: ?>
									No Category Available
								<?php endif; ?>
									</a>
								</p>
							</div>
							<div class="col-sm-6 col-xs-12 padding_0">
								<ul class="padding_0">
									<!-- <li class="summary_pro">Supply Type:<span>OEM Service</span></li> -->
									<li class="summary_pro">Place of Origin:<span>
										<a class="custom_click_search" data-id-type="country-origin" href="" data-tid="
										<?php if($product->product_country): ?>
										<?php echo e($product->product_country->id); ?>

										<?php else: ?>
										0
										<?php endif; ?>
										">
									<?php if($product->product_country): ?>
									<?php echo e($product->product_country->name); ?>

									<?php endif; ?>
										</a>
									</span></li>
									<li class="summary_pro">Brand Name:<span>
									<a class="custom_click_search" data-id-type="brandname" href="" data-tid="<?php echo e($product->brandname); ?>">
									<?php echo e($product->brandname); ?>

									</a>
									</span></li>
								</ul>
							</div>
						</div>

					</div>
					<div class="col-xs-5 col-md-4 col-sm-12 padding_0">

						<div id="left_sh" style="padding-left: 15px;" style="" class="col-xs-12 padding_0">
							<div class="col-sm-10 padding_0">
								<?php if($product->bdtdcProductToCategory->supp_pro_company): ?>
								<p class="heading_sup">
									<a target="_blank" href="<?php echo e(URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$product->bdtdcProductToCategory->supp_pro_company->company_description->name),$product->bdtdcProductToCategory->company_id)); ?>">
										<?php if($product->bdtdcProductToCategory->supp_pro_company): ?>
										<?php if($product->bdtdcProductToCategory->supp_pro_company->company_description): ?>
										<?php echo e($product->bdtdcProductToCategory->supp_pro_company->company_description->name); ?>

										<?php else: ?>
										Name not available
										<?php endif; ?>
										<?php else: ?>
										Name not available
										<?php endif; ?>
									</a>
								</p>
								<p class="summary"><?php if($product->bdtdcProductToCategory->supp_pro_company): ?>
										<?php if($product->bdtdcProductToCategory->supp_pro_company->location_of_reg_string): ?>
										<a class="custom_click_search" data-id-type="country" href="" data-tid="<?php echo e($product->bdtdcProductToCategory->supp_pro_company->location_of_reg_string->id); ?>">
										<?php echo e($product->bdtdcProductToCategory->supp_pro_company->location_of_reg_string->name); ?>

										</a>
										<?php else: ?>
										Country not available
										<?php endif; ?>
										<?php else: ?>
										Country not available
										<?php endif; ?>
										 |
									<a href="<?php echo e(URL::to('BuyerChannel/pages/trade_assurance',5)); ?>" target="_blank">
										<i class="fa fa-pie-chart"></i> Buyer Protection
									</a>
								</p>
								<p class="summary">
									Experiance :
									<br> Established 
									<?php if($product->bdtdcProductToCategory->supp_pro_company): ?>
									<?php echo e(date('Y', strtotime($product->bdtdcProductToCategory->supp_pro_company->year_of_reg))); ?>

									<?php endif; ?>
									 , <?php  $rand=rand(5,50); echo $rand;?> years OEM
								</p>
								<?php endif; ?>


							</div>
							
						</div>
					</div>
					<div class="col-sm-12 padding_0">
						<div class="col-sm-5 choose padding_0">
							<ul class="nav nav-pills nav-justified padding_0">
								<li><?php
				$url='http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
				?>
				<?php if(Sentinel::check()): ?>
					<form action="<?php echo e(URL::to('make-favorite')); ?>" method="post">
						<?php echo csrf_field(); ?>

					<?php if($product): ?>
						<?php if($product->customer_activity): ?>
	                        <?php if(count($product->customer_activity)>0): ?>
	                           <a title="Remove from favorite" class="fa fa-heart  btn favorite" itemprop="url" style="line-height: 28px;color: #1a4570"  data-key="<?php echo e($product->bdtdcProductToCategory->pro_to_cat_name->name ?? ''); ?>" data-id="<?php echo e($product->id); ?>"> Remove from favorite</a>
	                        <?php else: ?>
	                   
	                      <a  class="fa fa-heart-o  btn favorite" itemprop="url" style="line-height: 28px"  data-key="<?php echo e($product->bdtdcProductToCategory->pro_to_cat_name->name ?? ''); ?>" data-id="<?php echo e($product->id); ?>"> Add to favorite</a>
	                        
	                        <?php endif; ?>
	                    <?php else: ?>
	                    
	                    <?php endif; ?>
	                <?php else: ?>
	                <?php endif; ?>
              
					</form>
					<?php else: ?>
					<a title="Add to favorite" href="<?php echo e(URL::to('ServiceLogin?continue='.$url)); ?>"  class="fa fa-heart-o  btn" itemprop="url" style="line-height: 28px"  > Add to favorite</a>

					<?php endif; ?>
					</li>
								
							</ul>
						</div>

						<div style="float:right" class="col-sm-5 padding_0">
							<ul style="float:right;padding-right:10px" class="list-inline">
								<li><button href="#" data-product_id="<?php echo e($product->id); ?>" data-supplier_id="
								<?php if($product->bdtdcProductToCategory->bdtdc_suppliers): ?>
								<?php echo e($product->bdtdcProductToCategory->bdtdc_suppliers->user_id); ?>

								<?php elseif($product->bdtdcProductToCategory->bdtdc_customer): ?>
								<?php echo e($product->bdtdcProductToCategory->bdtdc_customer->user_id); ?>

								<?php endif; ?>
								" class="btn btn-primary btn-sm contact_supplier"><i class="fa fa-envelope-o"></i>Contact Supplier</button></li>
								
								<li>
								<?php if($product->bdtdcProductToCategory->supp_company->users->active == '1'): ?>
									<i class="fa fa-weixin" style="color: green;"></i><a class="chat_single" data-target-id="
									<?php if($product->bdtdcProductToCategory->bdtdc_suppliers): ?>
									<?php echo e($product->bdtdcProductToCategory->bdtdc_suppliers->user_id.mt_rand(100000000, 999999999)); ?>

									<?php elseif($product->bdtdcProductToCategory->bdtdc_customer): ?>
									<?php echo e($product->bdtdcProductToCategory->bdtdc_customer->user_id.mt_rand(100000000, 999999999)); ?>

									<?php else: ?>
									0
									<?php endif; ?>
									" href="">Talk to me</a>
								<?php else: ?>
									<i class="fa fa-weixin"></i><a class="contact_supplier" data-product_id="<?php echo e($product->id); ?>" data-supplier_id="
									<?php if($product->bdtdcProductToCategory->bdtdc_suppliers): ?>
									<?php echo e($product->bdtdcProductToCategory->bdtdc_suppliers->user_id); ?>

									<?php elseif($product->bdtdcProductToCategory->bdtdc_customer): ?>
									<?php echo e($product->bdtdcProductToCategory->bdtdc_customer->user_id); ?>

									<?php endif; ?>
									" href="#">Talk to me</a>
								<?php endif; ?>
								</li>
							</ul>
						</div>
					</div>

				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php echo $products->render(); ?>	
			<?php else: ?>
			 <div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
				 No entry found!
				</div>
			<?php endif; ?>
		</div>
		<div class="col-md-12">
			<p>See more <?php echo e($search_str); ?> at <a target="_blank" href="<?php echo e(URL::to('online-marketplace')); ?>">All Categories.</a></p>
			<p>Unable to find your desired <?php echo e($search_str); ?>? <a target="_blank" href="<?php echo e(URL::to('get-quotations',null)); ?>">Get Quotations</a> of top quality <?php echo e($search_str); ?> from verified suppliers today!</p>
		</div>

		<br>
		<br>
	</div>
	</div>

	<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

	<script type="text/javascript">
		$(document).on({click:function(e){
		  e.preventDefault();
		  var target_id = $.trim($(this).attr('data-target-id'));
		  if(parseInt(target_id) == 0){
		    alert ('Unkonwn error occured.');
		  }else{
		    window.open("<?php echo URL::to('default/chat/"+target_id+"'); ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=450,width=500,height=500");
		  }
		}},'.chat_single');

		$(document).on({
			change: function(e) {
				$('[name="searched_on"]').val($(this).val());
			}
		}, '[name="search"]');
		
		var other_filter_search_func,call_from="";

		other_filter_search_func=function(call_from){
			$('.loader').fadeIn('slow');
			var count_checked_box = $('.others_filter_form_input:checked')
			var form = $('.others_filter_form');
			if(call_from == "select_box"){
				$.post(form.attr('action'), form.serialize(), function(r) {
					$('.features_items').html(r);
					$('.loader').fadeOut('slow');
				});
			}else{
				$.post(form.attr('action'), form.serialize(), function(r,status,xhr) {
					$('.features_items').html(r);
					console.log(status)
					$('.loader').fadeOut('slow');
				})
				
			}

		}

		function search_data(){
			var search = $('input[name="searched_on"]').val();
	        var key = $('input[name="search_str"]').val();
	        var country = $('input[name="countery"]').val();
	        var buyer_protection = $('input[name="buyer_protection_input"]').val();
	        var gold_supplier = $('input[name="gold_supplier_input"]').val();
	        var assessed_supplier = $('input[name="assessed_supplier_input"]').val();
	        var filter_by_main_market = $('input[name="filter_by_main_market"]').val();
	        var filter_by_total_revanue = $('input[name="filter_by_total_revanue"]').val();
	        var filter_by_employe = $('input[name="filter_by_employe"]').val();
	        var filter_by_origin = $('input[name="filter_by_origin"]').val();
	        var filter_by_category = $('input[name="filter_by_category"]').val();
	        var country_from_string = '<?php echo e($country_from_string); ?>';
	        if(key == ''){
	        	var query_str = ' ';
	        }else{
	        	var query_str = key.split(' ').join('-');
	        	var query_str = query_str.split('/').join('-');
	        }
	        var url = window.location.origin+'/'+query_str+'/search?t='+search+'&c='+country+'&o='+filter_by_origin+'&bp='+buyer_protection+'&gs='+gold_supplier+'&as='+assessed_supplier+'&fm='+filter_by_main_market+'&ftr='+filter_by_total_revanue+'&fe='+filter_by_employe+'&ca='+filter_by_category;
	        window.location.href = url;
		}
		

		$(function() {
			$('.button_holder').hide();
			$(".loader").fadeOut("slow");
			/*$('.contact_supplier').animatedModal({
				color: "rgba(102, 102, 100, .9)",
				animatedIn: "lightSpeedIn",
			});*/
			var $ui = $('#ui_element');
			$ui.find('.sb_input').bind('focus click', function() {
				$ui.find('.sb_down')
						.addClass('sb_up')
						.removeClass('sb_down')
						.andSelf()
						.find('.sb_dropdown')
						.show();
			});
			$ui.bind('mouseleave', function() {
				$ui.find('.sb_up')
						.addClass('sb_down')
						.removeClass('sb_up')
						.andSelf()
						.find('.sb_dropdown')
						.hide();
			});
			$ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click', function() {
				$(this).parent().siblings().find(':checkbox').attr('checked', this.checked).attr('disabled', this.checked);
			});
			$('[name="key"]').val($('[name="search_str"]').val());
			$(document).on({
				click: function(e) {
					e.preventDefault();
					$('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');
					var base_url = $('[name="base_url"]').val();
					var supplier_id = $(this).data('supplier_id');
					var product_id = $(this).data('product_id');
					var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
					//$('.modal-content').html(" ");
					// $.get(url, function(r) {
					// 	$('.modal-content').html(r);

				
					// })
					// alert (url);
					window.location.replace(url);
					// window.Location.href = url;
				}
			}, '.contact_supplier');

			/*$(document).on({
				click: function(e) {
					e.preventDefault();
					var url = $('[name="base_url"]').val() + '/buyer/contact_supplier';
					swal({
							title: "Are you sure?",
							text: "You are going to confirm adding your product !",
							type: "warning",
							showCancelButton: true,
							confirmButtonColor: "#DD6B55",
							timer: 6000,
							confirmButtonText: "Yes!",
							cancelButtonText: "No, Stay hare!",
							closeOnConfirm: false,
							closeOnCancel: false,
							showLoaderOnConfirm: true
						},
							function(isConfirm) {
								if (isConfirm) {

									$.post(url, $('.query_form').serialize(), function(r) {
										(parseInt(r) == 1) ? swal("Thank You!!", "Query has been sent successfully!!!", "success"): false;
										(parseInt(r) == 0) ? swal({title: "<h2 class='text-danger'>Please Login<h2>",text: "<p class='text-primary'>Login first to send the query</p>",html: true,type:'error'}) : false;
										(parseInt(r) !=1 && parseInt(r) !=0) ? swal("Fail!!", "Query Could Not Sent", "error") : false;
									})
								}
								else {
									swal("Cancelled", "Sending request is canceled :)", "error");
								}
							});
				}
			}, '.query_form_submit_btn');*/

			$(document).on({click:function(e){
				var count_checked_box = $('input[name="filter_by_main_market[]"]:checked')
				if(count_checked_box.length>0){
					$('.button_holder').show(300);
				}else{
					$('.button_holder').hide(300);
					$('input[name="filter_by_main_market"]').val('0');
				    search_data();
				}
			}},'input[name="filter_by_main_market[]"]');

			$(document).on({click:function(e){
				e.preventDefault();
				$('input[name="filter_by_main_market"]').val('0');
			    $('.button_holder').hide(300);
			    search_data();
			}},'.cancel_search');

			var main_market_val = $('[name="filter_by_main_market"]').val();
	        main_market_val_arr = main_market_val.split(",");
	        if(main_market_val_arr.length>0){
	        	if(main_market_val_arr[0] == '0'){
	        		$('.button_holder').hide(300);
	        	}else{
	        		$('.button_holder').show(300);
	        	}
	        }
	        for(i=0;i<main_market_val_arr.length;i++){
	            $('[name="filter_by_main_market[]"][value="'+main_market_val_arr[i]+'"]').prop('checked', true);
	        }

			/****************MAIN MARKET SEARCH;************************/
			$(document).on({
				click: function(e) {
					e.preventDefault();
					var checkedValues = $('input[name="filter_by_main_market[]"]:checked').map(function() {
					    return this.value;
					}).get();
					$('input[name="filter_by_main_market"]').val(checkedValues);
					search_data();
					/*$('.loader').fadeIn('slow');
					var url = $('#search_by_main_market_form').attr('action');
					$.post(url, $('#search_by_main_market_form').serialize(), function(r,status,xhr) {
						$('.features_items').html(r);
						$('.loader').fadeOut('slow');
					})*/
				}
			}, '.search_by_main_market_btn');

			/****************TOTAL REVANUE && NO OF EMPLOYE SEARCH;************************/
			/*$(document).on({
				click: function(e) {
					e.preventDefault();
					var search_str
					//id=$(this).attr('ca_id');
					$('.loader').fadeIn('slow');
					var url = $(this).attr('href')+'/'+$('[name="search_str"]').val();
					$.get(url, function(r) {
						$('.features_items').html(r);
						$('.loader').fadeOut('slow');
					})
				}
			}, '.filter_by_total_revanue_btn,.filter_by_total_employe_btn');*/

			$(document).on({
				click: function(e) {
					e.preventDefault();
					var total_revanue_id = $(this).attr('data-ca_revanue_id');
					$('input[name="filter_by_total_revanue"]').val(total_revanue_id);
					search_data();
				}
			}, '.filter_by_total_revanue_btn');

			$(document).on({
				click: function(e) {
					e.preventDefault();
					var total_employe_id = $(this).attr('data-total_employe_id');
					$('input[name="filter_by_employe"]').val(total_employe_id);
					search_data();
				}
			}, '.filter_by_total_employe_btn');

			/****************OTHERS FILTER SEARCH;************************/
			$(document).on({
				click: function(e) {
					// other_filter_search_func();
					$('.fa_down_show').show();
					$('.fa_up_show').hide();
					$('.country_tab_show').hide();
					var selected = $(this).val();
					var selected_name = $(this).attr('name');
					if(selected_name == 'trade_assurence'){
						if ($('input[name="trade_assurence"]').is(':checked')) {
							$('input[name="buyer_protection_input"]').val('true');
						}else{
							$('input[name="buyer_protection_input"]').val('');
						}
					}else if(selected_name == 'gold_supplier'){
						if ($('input[name="gold_supplier"]').is(':checked')) {
							$('input[name="gold_supplier_input"]').val('true');
						}else{
							$('input[name="gold_supplier_input"]').val('');
						}
					}else if(selected_name == 'assessed_supplier'){
						if ($('input[name="assessed_supplier"]').is(':checked')) {
							$('input[name="assessed_supplier_input"]').val('true');
						}else{
							$('input[name="assessed_supplier_input"]').val('');
						}
					}
					search_data();
				}
			}, '.others_filter_form_input');


			$(document).on({
				change: function(e) {
					var current_val = $(this).val();
	        		$('[name="countery"]').val(current_val);
	        		var countryText = $('option[value="'+current_val+'"]').html();
	        		if(countryText == 'Select Country'){
	        			$('.replace_name').html('All Countries &amp; Regions');
	        		}else{
	        			$('.replace_name').html(countryText+' selected');
	        		}
	        		$('.fa_down_show').show();
					$('.fa_up_show').hide();
					$('.country_tab_show').hide();
					// other_filter_search_func("select_box");
					search_data();
				}
			}, '.others_filter_select');

			$(document).on({click:function(){
	        	var countryid = $(this).attr('countryid');
	        	$('[name="countery"]').val(countryid);
	        	// other_filter_search_func("select_box");
	        	var countryText = $(this).html();
	    		if(countryText == ' All'){
	    			$('.replace_name').html('All Countries &amp; Regions');
	    			$('[name="country_id_data"]').val(0);
	    		}else{
	    			$('.replace_name').html(countryText+' selected');
	    			$('[name="country_id_data"]').val(countryid);
	    			// $('option[value="'+countryid+'"]').selected = true;
	    		}
	    		$('.fa_down_show').show();
				$('.fa_up_show').hide();
				$('.country_tab_show').hide();
				search_data();
	        }},'.country_select');
			
			$(document).on({keyup:function(){
  
			  var search_str = $(this).val();
			  $('[name="search_str"]').val(search_str);
			  
			}}, '[name="key"]');

			/* ******** Country search ********** */
			$(document).on({click:function(){
				$('.fa_down_show').toggle();
				$('.fa_up_show').toggle();
				$('.country_tab_show').toggle();
			}}, '.country_tab');

			$(document).on({click:function(e){
				e.preventDefault();
				var id = $.trim($(this).attr('data-tid'));
				var type = $(this).attr('data-id-type');
				if(type == 'category'){
					$('input[name="filter_by_category"]').val(id);
					search_data();
				}
				if(type == 'country-origin'){
					$('input[name="filter_by_origin"]').val(id);
					search_data();
				}
				if(type == 'brandname'){
					$('input[name="search_str"]').val(id);
					search_data();
				}
				if(type == 'country'){
					$('input[name="countery"]').val(id);
					search_data();
				}
			}}, '.custom_click_search');

			$(document).on({click:function(e){
				e.preventDefault();
				var search_string = $('.secondary_search_input').val();
				$('input[name="search_str"]').val(search_string);
			    search_data();
			}},'.secondary_search');

			$('.secondary_search_input').keypress(function (e) {
			 var key = e.which;
			 if(key == 13)  // the enter key code
				{
				  	$('.secondary_search').click();
				    // $('.all_inq_search_btn').click();
				    return false;
				}
			});

			$(document).on({click:function(e){
				e.preventDefault();
				var type = $.trim($(this).attr('href'));
				if(type == 'country-origin'){
					$('input[name="filter_by_origin"]').val('');
					search_data();
				}
				if(type == 'category'){
					$('input[name="filter_by_category"]').val('');
					search_data();
				}
			}}, '.cancel_custom_search');
			

			$('[name="search"]').val($('[name="searched_on"]').val());
			$('ul.pagination').css('margin-top','10px');
			$('ul.pagination').css('margin-right','25px');

		});
	/*favorite*/
	$(document).on({click:function(e){
	    e.preventDefault();
	    var base_url='<?php echo e(URL::to("/")); ?>'; 
	    var key= $(this).attr('data-key');
	    var data= $(this).attr('data-id');
	    $.post(base_url+'/make-favorite',{
	            '_token':'<?php echo e(csrf_token()); ?>',
	            'key':key,
	            'data':data
	        },function(result){
	            if(parseInt(result)==1)
	            {
	                var redirected_url = window.location.href;
	                window.location.href = redirected_url;
	            }
	          });
	     
	    }},'.favorite');

	$(".country_tab").hover(function(){
    $(".country_tab_show").css("display", "block");
    	$(".country_tab_show").hover(function(){
    		$(".country_tab_show").css("display", "block");

    	}, function(){
    $(".country_tab_show").css("display", "none");});

    }, function(){
		    $(".country_tab_show").css("display", "none");
		});


	</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master_dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>