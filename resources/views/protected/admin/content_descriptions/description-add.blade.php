@extends('protected.admin.master')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="col-xs-12">
        @if (session()->has('flash_message'))
            <p>{{ session()->get('flash_message') }}</p>
        @endif
    </div>

    <h3 class="page-title">
        Page-Content-Description Create <small>create & edit content</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{URL::route('admin_dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
           
            <li>
                Content-Description Add
            </li>
        </ul>
        <div class="page-toolbar">
            {{-- <div class="btn-group pull-right">
                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    Actions <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">Action</a>
                    </li>
                    <li>
                        <a href="#">Another action</a>
                    </li>
                    <li>
                        <a href="#">Something else here</a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#">Separated link</a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('route'=>array('admin.description-add'),'id'=>'form1','class'=>'form-horizontal  form-row-seperated','files'=>true)) !!}
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-basket font-green-sharp"></i>
										<span class="caption-subject font-green-sharp bold uppercase">
										Add Content Description </span>
                    </div>
                    <div class="actions btn-set">
                        
                        <button class="btn green-haze btn-circle"><i class="fa fa-check"></i> Save</button>
                        <button class="btn green-haze btn-circle"><i class="fa fa-check-circle"></i> Save & Continue Edit</button>
                        {{-- <div class="btn-group">
                            <a class="btn yellow btn-circle" href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-share"></i> More <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        Duplicate </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        Delete </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        Print </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>

                </div>
                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                <div class="portlet-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_general" data-toggle="tab">
                                    General </a>
                            </li>
                        </ul>
                        <div class="tab-content no-space">
                            <div class="tab-pane active" id="tab_general">
                                <div class="page-bar">
                                    <ul class="page-breadcrumb">
                                        <li>
                                            <b>Content-Description Information:</b>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name: <span class="required">
														* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea id="editor" class="form-control" name="desc_name" placeholder="Description Name"></textarea>
                                            <!-- <input type="text" class="form-control" name="desc_name" placeholder="Description Name"> -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Page Category: <span class="required">
														* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="page_category_id" id="sel1">
                                                <option value="0">Select any</option>

                                                @foreach($pages as $page)
                                                    <option value="{{ $page->id }}">{{ $page->name  }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Content Category: <span class="required">
														* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="content_category_id" id="sel1">
                                                <option value="0">Select any</option>

                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name  }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Key: <span class="required">
														* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_key" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Description: <span class="required">
														* </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_description" placeholder="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- END PAGE CONTENT-->

@stop
@section('scripts')
<script src="{{asset('resources/assets/global/plugins/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">

        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Demo.init(); // init demo features
            EcommerceProductsEdit.init();
        });

        /*editor*/
                CKEDITOR.replace('editor',
        {
            extraPlugins: 'uploadimage,image2,colordialog',
            height: 300,

            // Upload images to a CKFinder connector (note that the response type is set to JSON).
            uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

            // The following options are not necessary and are used here for presentation purposes only.
            // They configure the Styles drop-down list and widgets to use classes.

            stylesSet: [
                { name: 'Narrow image', type: 'widget', widget: 'image', attributes: { 'class': 'image-narrow' } },
                { name: 'Wide image', type: 'widget', widget: 'image', attributes: { 'class': 'image-wide' } }
            ],

            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [ CKEDITOR.basePath + 'contents.css', 'assets/css/widgetstyles.css' ],

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
            image2_disableResizer: true



        });

        /*editor*/

    </script>

    <!-- END JAVASCRIPTS -->
@stop
