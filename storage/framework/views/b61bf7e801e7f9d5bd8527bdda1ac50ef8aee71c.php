<?php
use App\Model\BdtdcInqueryMessage;
use App\Model\bdtdcInqueryDocs;
use Carbon\Carbon;
?>
<?php if($product): ?>
<form action="<?php echo e(URL::to('post_conversation',null)); ?>" method="post" class="form conversation_form">
   <?php echo csrf_field(); ?>

   <div class="col-sm-12 padding_0">
      <p style="font-size:15px;font-weight:bold;color:#666" class="pull-left">Product</p>
      <?php if($product->product_owner_id != Sentinel::getUser()->id): ?>
      <a href="<?php echo e(URL::to('mysource/online-order/new',mt_rand(100000000, 999999999).'0'.mt_rand(100000000, 999999999))); ?>?r=true&s=<?php echo e(mt_rand(100000000, 999999999).$product->product_owner_id.mt_rand(100000000, 999999999)); ?>" class="btn btn-sm btn-warning pull-right">Start Order</a>
      <?php endif; ?>
      <div class="container_of_inquery_action_btn">
         <?php if($user_id == $product->sender): ?>
         <a class="pull-right text-danger inquery_action" href="#" ca_inquery_id="<?php echo e($product->id); ?>" style="margin-top:.5%;margin-right:2%" ca_action="single_trush"><i class="fa fa-trash"></i> Trash</a>
         <?php else: ?>
         <a class="pull-right text-danger inquery_action" href="#" ca_inquery_id="<?php echo e($product->id); ?>" style="margin-top:.5%;margin-right:2%" ca_action="single_spam"><i class="fa fa-thumbs-down"></i> Spam</a>
         <a class="pull-right text-danger inquery_action" href="#" ca_inquery_id="<?php echo e($product->id); ?>" style="margin-top:.5%;margin-right:2%" ca_action="single_flag"><i class="fa fa-flag-checkered"></i> Flag</a>
         <?php endif; ?>
      </div>

   </div>
   <table class="table" style="background:#F0F0F0">
      <thead style="border:1px solid #ddd!important">
         <tr class="text-muted" style="font-weight:bold">
            <td>Product Information</td>
            <td>Quantity</td>
            <td>Unit</td>
            <td>Unit Price (Asking)</td>
            <td>Total</td>
         </tr>
      </thead>
      <tbody style="border:1px solid #dce2e6!important">
         <tr style="font-size:13px">
            <input type="hidden" name="product_owner_id" value="<?php echo e($product->product_owner_id); ?>">
            <input type="hidden" name="inquery_id" value="<?php echo e($product->id); ?>">
            <input type="hidden" name="product_id" value="<?php echo e($product->product_id); ?>">
            <td><a href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product->name).'='.mt_rand(100000000, 999999999).$product->product_id,null)); ?>" target="_blank" style="border:1px solid #ddd;padding:0%" class="col-xs-2 padding_0">
                  <?php if($product->images): ?>
                  <img src="<?php echo e(URL::to($product->images,null)); ?>" alt="<?php echo e(substr($product->name, 0, 30)); ?>" class="img-responsive" style="height:52px;width:100%">
                  <?php else: ?>
                  <img src="<?php echo e(URL::asset('uploads/no-image.jpg')); ?>" alt="no image" class="img-responsive" style="height:52px;width:100%">
                  <?php endif; ?>
               </a><a href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product->name).'='.mt_rand(100000000, 999999999).$product->product_id,null)); ?>" target="_blank" class="col-xs-9 btn-link"><?php echo e($product->name); ?></a></td>
            <?php
            $previous_qp_data = BdtdcInqueryMessage::where('inquery_id',$product->id)
            ->where('product_id',$product->product_id)
            ->where('product_owner_id',$product->product_owner_id)
            ->orderBy('id','desc')
            ->first();
            $attached_docs = bdtdcInqueryDocs::where('inquery_id',$product->id)->get();
            ?>
            <td><input type="text" name="quantity" class="form-control quantity quantity_count quantity_count1" value="<?php if($previous_qp_data): ?><?php echo e($previous_qp_data->quantity); ?><?php else: ?> <?php echo e($product->quantity); ?><?php endif; ?>"></td>
            <td><?php echo e($product->unit); ?></td>
            <td><input type="text" name="unit_price" class="form-control unit_price unit_count unit_count1" placeholder="Asking Unit Price" value="<?php if($previous_qp_data): ?> <?php echo e($previous_qp_data->unit_price); ?> <?php else: ?> <?php endif; ?>"></td>
            <td style="min-width: 120px;"><input type="text" name="total" class="form-control total total_count total_count1" readonly></td>
         </tr>
         <tr>
            <td colspan="4">
               <?php if($person_who_wrote  = ($user_id == $product->sender)): ?> <span style='color:#666;font-weight:bold'>You</span>"
               <?php else: ?> <span style='color:red;font-weight:bold'>Supplier</span>
               <?php endif; ?>
               <?php if($user_id == $product->sender): ?> <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;    margin-right: 10px;">You wrote </span>
               <?php else: ?>
               <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;    margin-right:10px;"><?php echo e($product->s_first_name); ?> <?php echo e($product->s_last_name); ?> wrote </span>
               <?php endif; ?>
               <span class="badge pull-right">at <?php echo e($product->created_at); ?></span>
               <div class="prev_msg"><?php echo $product->message; ?></div>
               <?php if($attached_docs): ?>
               <?php if(count($attached_docs) > 0): ?>
               <div>
                  <p style="font-size:15px;font-weight:bold;color:#666">Attached Documents</p>
                  <?php $__currentLoopData = $attached_docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a target="_blank" href="<?php echo e(URL::asset('buying-request-docs/'.$ad->docs.'')); ?>"><img width="150" height="150" src="<?php echo e(URL::asset('buying-request-docs/'.$ad->docs.'')); ?>" alt=""></a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
               <?php endif; ?>
               <?php endif; ?>
            </td>
         </tr>
      </tbody>
   </table>

   <?php $_id = 1 ?>
   <?php $__currentLoopData = $prev_quotation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <table class="table show_prev_quotation_tbl" class="collapsed" style="background:#F0F0F0;height:50px">
      <thead style="border:1px solid #ddd!important" data-toggle="collapse" data-messID="<?php echo e($pq->id); ?>" data-target="#demo<?php echo e($_id); ?>" class="quotation_tbl_header <?php if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id): ?> view_changer <?php endif; ?>">
         <tr>
            <td><?php if($pq->bdtdcInqueryMessageSender): ?>
               <?php if($pq->bdtdcInqueryMessageSender->Role_user): ?>
               <?php if($pq->bdtdcInqueryMessageSender->Role_user->role_id == 2): ?>
               <img src="<?php echo e(URL::to('favicon-16x16.png')); ?>" alt="bdtdc logo">
               <?php else: ?>
               <i class="fa fa-user-plus pull-left" style="margin-top: 1%"></i>
               <?php endif; ?>
               <?php else: ?>
               <i class="fa fa-user-plus pull-left" style="margin-top: 1%"></i>
               <?php endif; ?>
               <?php else: ?>
               <i class="fa fa-user-plus pull-left" style="margin-top: 1%"></i>
               <?php endif; ?>
               <div class="toggle_quotation_text">
                  <?php if($user_id == $pq->sender): ?>
                     <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;margin-right: 10px;">You Wrote:</span> <?php echo e(substr($pq->messages,'0','15')); ?>

                  <?php else: ?>
                     <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;margin-right: 10px;"><?php echo e($pq->bdtdcInqueryMessageSender->first_name); ?> <?php echo e($pq->bdtdcInqueryMessageSender->last_name); ?> Wrote: </span><?php echo e(substr($pq->messages,'0','15')); ?>

                  <?php endif; ?>
               </div>
            </td>
            <td></td>
            <td></td>
            <td><span class="toggle_quotation_text">at <?php
                  $DeferenceInDays = Carbon::parse(Carbon::now())->diffInDays($pq->created_at);
                  ?>
                  <?php echo e($DeferenceInDays); ?> days ago
               </span>
            </td>
            <td style="padding:0%" class="text-right"> <i class="fa fa-arrow-circle-down btn btn-xs" style="font-size: 19px;margin-top:1%;<?php if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id): ?> color: green; <?php endif; ?>"></i>
            </td>
         </tr>
      </thead>
      <tbody style="border:1px solid #dce2e6!important" id="demo<?php echo e($_id); ?>" class="collapse">
         <tr style="font-size:13px">
            <td><a href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product->name).'='.mt_rand(100000000, 999999999).$product->product_id)); ?>" target="_blank" style="border:1px solid #ddd;padding:0%" class="col-xs-2 padding_0">
                  <?php if($product->images): ?>
                  <img src="<?php echo e(URL::to($product->images)); ?>" alt="<?php echo e(substr($product->name, 0, 30)); ?>" class="img-responsive" style="height:52px;width:100%">
                  <?php else: ?>
                  <img src="<?php echo e(URL::asset('uploads/no-image.jpg')); ?>" alt="no image" class="img-responsive" style="height:52px;width:100%">
                  <?php endif; ?>
                  <!-- <img src="{-{ URL::asset('uploads/'.$product->image.'') }-}" alt="" class="img-responsive" style="height:52px;width:100%"> -->
               </a><a href="<?php echo e(URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product->name).'='.mt_rand(100000000, 999999999).$product->product_id)); ?>" target="_blank" class="col-xs-9 btn-link"><?php echo e($product->name); ?></a></td>
            <td><input type="text" name="" value="<?php echo e($pq->quantity); ?>" class="form-control quantity_count quantity_count<?php echo e($_id+1); ?>" /></td>
            <td><?php echo e($product->unit); ?></td>
            <td><input type="text" name="" class="form-control unit_count unit_count<?php echo e($_id+1); ?>" placeholder="Asking Unit Price" value="<?php echo e($pq->unit_price); ?>"></td>
            <td><input type="text" name="" class="form-control total_count total_count<?php echo e($_id+1); ?>" value="<?php echo e($pq->total); ?>" readonly></td>

         </tr>
         <tr>
            <td><a href="<?php echo e(URL::to('mysource/online-order/inq',mt_rand(100000000, 999999999).$pq->id.mt_rand(100000000, 999999999))); ?>?r=true&s=<?php echo e(mt_rand(100000000, 999999999).$product->product_owner_id.mt_rand(100000000, 999999999)); ?>" class="btn btn-sm btn-warning pull-right">Start Order</a></td>
         </tr>
         <tr>
            <td colspan="5">
               <?php if($person_who_wrote  = ($user_id == $product->sender)): ?>
                  <span style='color:#666;font-weight:bold'>You</span>
               <?php else: ?>
               <span style='color:red;font-weight:bold'>Supplier</span>
               <?php endif; ?>
               <?php if($user_id == $pq->sender): ?>
                  <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;margin-right: 10px;">You wrote </span>
               <?php else: ?>
                  <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;margin-right: 10px;">Supplier wrote </span>
               <?php endif; ?>
               <span class="badge pull-right">at <?php echo e($pq->created_at); ?></span>
               <div class="prev_msg"><?php echo $pq->messages; ?></div>
            </td>
         </tr>

      </tbody>
   </table>
   <?php $_id++ ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   <div class="col-sm-12 padding_0">
      <textarea name="messages" id="" cols="30" rows="2" placeholder="New message" class="form-control"></textarea>
      <input type="submit" value="Send" class="btn btn-sm btn-primary submit_single_msg" />
   </div>
</form>
<?php else: ?>
<h2 class="text-danger text-muted">Product not available</h2>
<?php endif; ?>