@extends('protected.admin.master')
@section('page_css')
<link property='stylesheet' href="{!! asset('assets/fontend/css/select2.min.css') !!}" rel="stylesheet">
@endsection
@section('title', 'Admin Dashboard')

@section('content')

<div class="row bg-primary" style="padding:1%">
   <div class="col-xs-11 col-xs-offset-1">
      <input type="hidden" name="url" value="{{ URL::to('/') }}">
      <form class="navbar-form navbar-left trade_search_form" method="POST" action="{{ URL::to('admin/tradeshow/search',null) }}" role="search">
         {!! csrf_field() !!}
         <div class="form-group">
            {!! Form::text('title',null,['class'=>'form-control text-primary','placeholder'=>'Search By Title']) !!}
         </div>
         <div class="form-group">
            {!! Form::text('venue',null,['class'=>'form-control text-primary','placeholder'=>'Search By Venue']) !!}
         </div>
         <div class="form-group">
            <div class="dropdown">
               <button class="btn btn-default dropdown-toggle text-primary" type="button" data-toggle="dropdown" style="padding: 8px">--Search By Country--<span class="caret"></span></button>
               <ul class="dropdown-menu text-primary" id="supplier_list">
                  <input type="hidden" name="country_id" value="">

                  @foreach($country as $c)
                  <li><a data-country_id="{{ $c->id }}" class="country_str" href="#">{{ $c->name }}</a></li>
                  @endforeach
               </ul>
            </div>
         </div>
         {!! Form::token() !!}
         <input style="padding: 9px" type="submit" class="btn btn-success pull-right trade_search_btn" value="SEARCH" />
         <a style="display:none" href="{{ URL::to('admin/tradeshow-show',null) }}" class="btn btn-success btn-default pull-left show_trade_list">Trade list</a>
      </form>
   </div>
</div>

<hr class=".text-danger">

@if (session()->has('flash_message'))
   <p>{{ session()->get('flash_message') }}</p>
@endif
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
   <div class="col-md-12">
      <a href="{{ URL::to('admin/tradeshow-add',null) }}" class="btn btn-success pull-right">Add Trade</a>
      <h3>All Available Trade list</h3>
      <table class="table">
         <thead>
            <tr class="test-center">
               <td>Title</td>
               <td>Vanue</td>
               <td>Country</td>
               <td>Date</td>
               <td>Action</td>
            </tr>
         </thead>
         <tbody class="trade_table_body">
            @foreach($pre_trade_data as $data)
            <tr>
               <td>{{ $data->tradeshow_description->title }}</td>
               <td>{{ $data->venue }}</td>
               <td>{{ $data->country->name }}</td>
               <td>{{ date('d-M-Y',strtotime($data->created_at)) }}</td>
               <td>
                  <a href="{{ URL::to('admin/tradeshow-edit',$data->id) }}" class="btn btn-xs btn-info">Edit</a>
                  <a href="{{ URL::to('admin/tradeshow-delete',$data->id) }}" class="btn btn-xs btn-danger trade_delete">Delete</a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
</div>
<!-- END PAGE CONTENT-->
        
@stop
@section('scripts')
<script type="text/javascript" src="{!! asset('assets/custom.js' )!!}"></script> 
<script type="text/javascript" src="{!! asset('assets/fontend/js/select2.min.js') !!}"></script>
<script>
   jQuery(document).ready(function() {
      $("#supplier_list").select2({
         placeholder: "Please select country ",
      });
      Metronic.init(); // init metronic core components
      Layout.init(); // init current layout
      Demo.init(); // init demo features
      /* EcommerceProductsEdit.init();*/
   });

   function form_validate(form_id) {
      var error = 0;
      var msg = '';
      var name = $('#name').val();
      var desc = $('#description').val();
      var seo = $('#seo').val();
      var mtitle = $('#meta_title').val();
      var mdesc = $('#meta_description').val();
      var mkey = $('#meta_keywords').val();

      if (name === '') {
         error++;
         $('#name').css('border', '1px solid red');
         msg += error + ". Name Required <br/>";

      }
      if (desc === '') {
         error++;
         $('#description').css('border', '1px solid red');
         msg += error + ". Description Required <br/>";

      }
      if (seo === '') {
         error++;
         $('#seo').css('border', '1px solid red');
         msg += error + ". SEO Required <br/>";

      }
      if (mtitle === '') {
         error++;
         $('#meta_title').css('border', '1px solid red');
         msg += error + ". Meta Title Required <br/>";

      }
      if (mdesc === '') {
         error++;
         $('#meta_description').css('border', '1px solid red');
         msg += error + ". Meta Description Required <br/>";

      }
      if (mkey === '') {
         error++;
         $('#meta_keywords').css('border', '1px solid red');
         msg += error + ". Meta Keywords Required <br/>";

      }
      var allVals = [];
      $('.parent_id_div :checked').each(function() {
         allVals.push($(this).val());
      });

      if (allVals.length != 1) {
         error++;
         $('.parent_id_div').css('border', '1px solid red');
         msg += error + ". Parent Category Must be 1 selected ! <br/>";
      }

      if (error != 0) {

         $('#validation_error').addClass('alert alert-danger');
         $('#validation_error').html(msg);
      } else {

         var formdata = $("#" + form_id).serialize();
         var action = $("#" + form_id).attr('action');
         $.ajax({
            url: action,
            type: "post",
            data: formdata,
            success: function(data) {

               var er = '';
               var obj = $.parseJSON(data);
               if (obj.type === 'success') {
                  $('#validation_error').removeClass('alert alert-danger');
                  $('#validation_error').addClass('alert alert-success');
                  er += obj.text;


               } else {
                  $('#validation_error').addClass('alert alert-danger');
                  $.each(obj.text, function(index, value) {
                     er += value + '<br/>';
                  });

               }
               $('#validation_error').html(er);
            }
         });
      }
      return false;
   }
</script>
<!-- END JAVASCRIPTS -->
@stop
