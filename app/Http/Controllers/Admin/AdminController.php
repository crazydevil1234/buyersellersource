<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\BdtdcSupplierQuery;

class AdminController extends Controller
{
	public function __construct()
    {
        ini_set('memory_limit', '9999999M');
    }

    public function getHome()
    {
        return view('protected.admin.admin_dashboard');
    }
    public function ManageBuyingRequest(){
    	$data['bdtdc_supllier_inqueries_all']=BdtdcSupplierQuery::with(['BdtdcSupplierQueryProduct','BdtdcSupplierQueryProductImage','BdtdcSupplierQueryProductUnit','BdtdcInqueryMessage'])->where('is_RFQ',1)->orderBy('id','desc')->get();

    	return view('protected.admin.myB2B.buying-request',$data);
    }
}
