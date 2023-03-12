<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\User;
use App\Models\ProcessOrder;
use App\Models\Order;
use App\Models\ErrorOrder;
use App\Models\TempOrder;
use App\Models\Logistic;
use App\Models\Rule;
use App\Models\Shipping;
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;
use Session;

use Carbon\Carbon;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.awb_number','l.name as logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    return Carbon::create($row->updated_at)->toDayDateTimeString();
                })
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateLogisticPriority' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteLogisticPriority' data-id='".$row->id."'>Delete</button>";
 
                     //return $updateButton." ".$deleteButton;
                     return $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.index', $data);

    }


    public function process_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = ProcessOrder::query();
            $query->select(['temp_forward_order_master.id','temp_forward_order_master.order_no','temp_forward_order_master.customer_order_no','temp_forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','temp_forward_order_master.order_type','temp_forward_order_master.created_at','temp_forward_order_master.updated_at','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'temp_forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'temp_forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'temp_forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'temp_forward_order_master.id');
           // $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'temp_forward_order_master.is_pre_awb' => '0',
                        'temp_forward_order_master.is_created' => '1',
                    ]);

                } else {
                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'temp_forward_order_master.is_pre_awb' => '0',
                        'temp_forward_order_master.is_created' => '1',
                        'temp_forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    //return Carbon::create($row->updated_at)->toDayDateTimeString();

                    $d = DB::select('SELECT max(otd.scan_date_time) as detail_create_date FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id);
                    if($d){
                        
                        if($d[0]->detail_create_date != ""){
                            return Carbon::create($d[0]->detail_create_date)->toDayDateTimeString();
                        }else{
                            return "";
                        }

                    }else{
                        return "";
                    }
                })
                ->addColumn('latest_scan', function($row){
                    //return Carbon::create($row->updated_at)->toDayDateTimeString();

                    $d = DB::select('SELECT otd.scan as latest_scan FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id.' ORDER BY scan_date_time DESC LIMIT 1');
                    if($d){
                        
                        return $d[0]->latest_scan;

                    }else{
                        return "";
                    }
                })
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateLogisticPriority' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteLogisticPriority' data-id='".$row->id."'>Delete</button>";
 
                     //return $updateButton." ".$deleteButton;
                     return $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.process_order_list', $data);

    }

    public function created_order_list(Request $request)
    {

        //$d =  $d = DB::select('SELECT otd.scan as latest_scan FROM order_tracking_detail as otd WHERE otd.order_id=1 ORDER BY scan_date_time DESC LIMIT 1');
       /* $d = DB::select('SELECT opd.cod_amount as cod_amount FROM order_product_detail as opd WHERE opd.id=184615');
                    //if ($d && $row->order_type=='1') {
                    //    return $d[0]->cod_amount;
        if($d){
            print_R($d);die;
        }else{
            print_R('hh');die;
        }*/
              

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    //return Carbon::create($row->updated_at)->toDayDateTimeString();

                    $d = DB::select('SELECT max(otd.scan_date_time) as detail_create_date FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id);
                    if($d){
                        
                        if($d[0]->detail_create_date != ""){
                            return Carbon::create($d[0]->detail_create_date)->toDayDateTimeString();
                        }else{
                            return "";
                        }

                    }else{
                        return "";
                    }
                })
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateOrder' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteOrder' data-id='".$row->id."'>Delete</button>";
 
                     //return $updateButton." ".$deleteButton;
                     return $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.created_order_list', $data);

    }


    public function intransit_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {
            //expresscourier444@gmail.com
            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        'os.order_status_id' => '3',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        'os.order_status_id' => '3',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->limit(10)->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    //return Carbon::create($row->updated_at)->toDayDateTimeString();

                    $d = DB::select('SELECT max(otd.scan_date_time) as detail_create_date FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id);
                    if($d){
                        
                        if($d[0]->detail_create_date != ""){
                            return Carbon::create($d[0]->detail_create_date)->toDayDateTimeString();
                        }else{
                            return "";
                        }

                    }else{
                        return "";
                    }
                })
                ->addColumn('intransit_days_count', function($row){

                    $d = DB::select('SELECT DATEDIFF("' . date("Y-m-d H:i:s") . '", (SELECT scan_date_time FROM order_tracking_detail WHERE order_id ='.$row->id.' AND (scan="intransit" OR scan="In Transit" OR scan = "Arrived" OR scan = "Departed") LIMIT 1)) as intransit_days_count');
                    if ($row->status_name == 'Delivered' || $row->status_name == 'RTO' || $row->status_name == 'Returned' || $row->status_name == 'Created') {
                        return "";
                    } else {
                        return $d[0]->intransit_days_count;
                    }
             
                })
                ->addColumn('action', function($row){

                     // orderDetails Button
                     //$orderDetailsButton = "<button class='btn btn-sm btn-primary orderDetailModal' data-id='".$row->id."'>Order Details</button>";
                     $orderDetailsButton = "<button class='btn btn-sm btn-primary orderDetail' data-id='".$row->id."'>Order Details</button>";

                     // orderTracking Button
                     $orderTrackingButton = "<button class='btn btn-sm btn-primary orderTracking' data-id='".$row->id."'>Order Tracking</button>";
 
                     return $orderDetailsButton." ".$orderTrackingButton;
                     
                     
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.intransit_order_list', $data);

    }


    public function ofd_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();

        if ($request->ajax()) {

            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        'os.order_status_id' => '5',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        'os.order_status_id' => '5',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();


            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    //return Carbon::create($row->updated_at)->toDayDateTimeString();

                    $d = DB::select('SELECT max(otd.scan_date_time) as detail_create_date FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id);
                    if($d){
                        
                        if($d[0]->detail_create_date != ""){
                            return Carbon::create($d[0]->detail_create_date)->toDayDateTimeString();
                        }else{
                            return "";
                        }

                    }else{
                        return "";
                    }
                })
                ->addColumn('intransit_days_count', function($row){

                    $d = DB::select('SELECT DATEDIFF("' . date("Y-m-d H:i:s") . '", (SELECT scan_date_time FROM order_tracking_detail WHERE order_id ='.$row->id.' AND (scan="intransit" OR scan="In Transit" OR scan = "Arrived" OR scan = "Departed") LIMIT 1)) as intransit_days_count');
                    if ($row->status_name == 'Delivered' || $row->status_name == 'RTO' || $row->status_name == 'Returned' || $row->status_name == 'Created') {
                        return "";
                    } else {
                        return $d[0]->intransit_days_count;
                    }
             
                })
                ->addColumn('ofd_count', function($row){

                    $d = DB::select('SELECT COUNT(DISTINCT DATE_FORMAT(created_at, "%d-%m-%y")) as ofd_count FROM order_tracking_detail WHERE order_id ='.$row->id.' AND (scan="Dispatched" || scan="Out for Delivery")');
                    if ($row->status_name == 'Delivered' || $row->status_name == 'RTO' || $row->status_name == 'Returned' || $row->status_name == 'Created') {
                        return "";
                    } else {
                        return $d[0]->ofd_count;
                    }
             
                })
                ->addColumn('action', function($row){

                       // orderDetails Button
                       $orderDetailsButton = "<button class='btn btn-sm btn-primary orderDetail' data-id='".$row->id."'>Order Details</button>";

                       // orderTracking Button
                       $orderTrackingButton = "<button class='btn btn-sm btn-primary orderTracking' data-id='".$row->id."'>Order Tracking</button>";
   
                       return $orderDetailsButton." ".$orderTrackingButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.ofd_order_list', $data);

    }

    public function ndr_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        'os.order_status_id' => '18',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        'os.order_status_id' => '18',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                /*->addColumn('updated_at', function($row){
                    return Carbon::create($row->updated_at)->toDayDateTimeString();
                })*/
                ->addColumn('updated_at', function($row){

                    $d = DB::select('SELECT max(otd.scan_date_time) as detail_create_date FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id);
                    if($d){
                        
                        if($d[0]->detail_create_date != ""){
                            return Carbon::create($d[0]->detail_create_date)->toDayDateTimeString();
                        }else{
                            return "";
                        }

                    }else{
                        return "";
                    }
                    
                })
                ->addColumn('latest_ndr_comment', function($row){

                    $d = DB::select('SELECT ncd.storzoship_comment as latest_ndr_comment FROM ndr_comment_detail as ncd WHERE ncd.order_id='.$row->id.' AND ncd.storzoship_comment!="" ORDER BY ncd.ndr_comment_detail_id LIMIT 1');
                    if($d){
                        return $d[0]->latest_ndr_comment;
                    }else{
                        return "";
                    }
                    
                })
                ->addColumn('latest_cm_ndr_comment', function($row){

                    $d = DB::select('SELECT ncd.client_comment as latest_cm_ndr_comment FROM ndr_comment_detail as ncd WHERE ncd.order_id='.$row->id.' AND ncd.client_comment!="" ORDER BY ncd.ndr_comment_detail_id DESC LIMIT 1');
                    if($d){
                        return $d[0]->latest_cm_ndr_comment;
                    }else{
                        return "";
                    }
             
                })
                ->addColumn('intransit_days_count', function($row){

                    $d = DB::select('SELECT DATEDIFF("' . date("Y-m-d H:i:s") . '", (SELECT scan_date_time FROM order_tracking_detail WHERE order_id ='.$row->id.' AND (scan="intransit" OR scan="In Transit" OR scan = "Arrived" OR scan = "Departed") LIMIT 1)) as intransit_days_count');
                    if ($row->status_name == 'Delivered' || $row->status_name == 'RTO' || $row->status_name == 'Returned' || $row->status_name == 'Created') {
                        return "";
                    } else {
                        return $d[0]->intransit_days_count;
                    }
             
                })
                ->addColumn('ofd_count', function($row){

                    $d = DB::select('SELECT COUNT(DISTINCT DATE_FORMAT(created_at, "%d-%m-%y")) as ofd_count FROM order_tracking_detail WHERE order_id ='.$row->id.' AND (scan="Dispatched" || scan="Out for Delivery")');
                    if ($row->status_name == 'Delivered' || $row->status_name == 'RTO' || $row->status_name == 'Returned' || $row->status_name == 'Created') {
                        return "";
                    } else {
                        return $d[0]->ofd_count;
                    }
             
                })
                ->addColumn('action', function($row){

                       // orderDetails Button
                       $orderDetailsButton = "<button class='btn btn-sm btn-primary orderDetails' data-id='".$row->id."'>Order Details</button>";

                       // ndrComment Button
                       $ndrCommentButton = "<button class='btn btn-sm btn-primary ndrComment' data-id='".$row->id."'>NDR Comment</button>";

                       // orderTracking Button
                       $orderTrackingButton = "<button class='btn btn-sm btn-primary orderTracking' data-id='".$row->id."'>Order Tracking</button>";
   
                       return $orderDetailsButton." ".$ndrCommentButton." ".$orderTrackingButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.ndr_order_list', $data);

    }


    public function delivered_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.updated_at','forward_order_master.order_product_detail_id','forward_order_master.customer_order_no','forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $date = Carbon::now()->subDays(7);
                    
                    $query = $query->where('forward_order_master.updated_at', '>=', $date);

                    $query = $query->where([
                       // 'forward_order_master.updated_at ' => $date,
                        //(fom.updated_date BETWEEN '" . date("Y-m-d 00:00:00", (strtotime('-7 days'))) . "' AND '" . date("Y-m-d 23:59:59") . "') AND
                        'os.order_status_id' => '6',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        'os.order_status_id' => '6',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    //return Carbon::create($row->updated_at)->toDayDateTimeString();
                    $d = DB::select('SELECT max(otd.scan_date_time) as detail_create_date FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id);
                    if($d){
                        
                        if($d[0]->detail_create_date != ""){
                            return Carbon::create($d[0]->detail_create_date)->toDayDateTimeString();
                        }else{
                            return "";
                        }

                    }else{
                        return "";
                    }
                })
                ->addColumn('cod_amount', function($row){
  
                    $d = DB::select('SELECT opd.cod_amount as cod_amount FROM order_product_detail as opd WHERE opd.id='.$row->order_product_detail_id);
                    if ($d && $row->order_type=='1') {
                        return $d[0]->cod_amount;
                    } else {
                        return "";
                    }
                })
                ->addColumn('action', function($row){
                    
                      // orderDetails Button
                      $orderDetailsButton = "<button class='btn btn-sm btn-primary orderDetails' data-id='".$row->id."'>Order Details</button>";

                      // ndrComment Button
                      $ndrCommentButton = "<button class='btn btn-sm btn-primary ndrComment' data-id='".$row->id."'>NDR Comment</button>";

                      // orderTracking Button
                      $orderTrackingButton = "<button class='btn btn-sm btn-primary orderTracking' data-id='".$row->id."'>Order Tracking</button>";
  
                      return $orderDetailsButton." ".$ndrCommentButton." ".$orderTrackingButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.delivered_order_list', $data);

    }


    public function rto_intransit_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            

                $query = $query->whereIn('os.order_status_id', [9,10,11,12]);

                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                   //return Carbon::create($row->updated_at)->toDayDateTimeString();
                   $d = DB::select('SELECT max(otd.scan_date_time) as detail_create_date FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id);
                   if($d){
                       
                       if($d[0]->detail_create_date != ""){
                           return Carbon::create($d[0]->detail_create_date)->toDayDateTimeString();
                       }else{
                           return "";
                       }

                   }else{
                       return "";
                   }
                })
                ->addColumn('latest_ndr_comment', function($row){

                    $d = DB::select('SELECT ncd.storzoship_comment as latest_ndr_comment FROM ndr_comment_detail as ncd WHERE ncd.order_id='.$row->id.' AND ncd.storzoship_comment!="" ORDER BY ncd.ndr_comment_detail_id LIMIT 1');
                    if($d){
                        return $d[0]->latest_ndr_comment;
                    }else{
                        return "";
                    }
                    
                })
                ->addColumn('intransit_days_count', function($row){

                    $d = DB::select('SELECT DATEDIFF("' . date("Y-m-d H:i:s") . '", (SELECT scan_date_time FROM order_tracking_detail WHERE order_id ='.$row->id.' AND (scan="intransit" OR scan="In Transit" OR scan = "Arrived" OR scan = "Departed") LIMIT 1)) as intransit_days_count');
                    if ($row->status_name == 'Delivered' || $row->status_name == 'RTO' || $row->status_name == 'Returned' || $row->status_name == 'Created') {
                        return "";
                    } else {
                        return $d[0]->intransit_days_count;
                    }
             
                })
                ->addColumn('action', function($row){

                     // orderDetails Button
                     $orderDetailsButton = "<button class='btn btn-sm btn-primary orderDetails' data-id='".$row->id."'>Order Details</button>";

                     // ndrComment Button
                     $ndrCommentButton = "<button class='btn btn-sm btn-primary ndrComment' data-id='".$row->id."'>NDR Comment</button>";

                     // orderTracking Button
                     $orderTrackingButton = "<button class='btn btn-sm btn-primary orderTracking' data-id='".$row->id."'>Order Tracking</button>";
 
                     return $orderDetailsButton." ".$ndrCommentButton." ".$orderTrackingButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.rto_intransit_order_list', $data);

    }


    public function rto_delivered_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.email as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

                    $query = $query->whereIn('os.order_status_id', [13,14]);

                if (Auth::user()->type == '1') {

                    $date = Carbon::now()->subDays(7);
                    $query = $query->where('forward_order_master.updated_at', '>=', $date);

                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '0',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    //return Carbon::create($row->updated_at)->toDayDateTimeString();
                    $d = DB::select('SELECT max(otd.scan_date_time) as detail_create_date FROM order_tracking_detail as otd WHERE otd.order_id='.$row->id);
                    if($d){
                        
                        if($d[0]->detail_create_date != ""){
                            return Carbon::create($d[0]->detail_create_date)->toDayDateTimeString();
                        }else{
                            return "";
                        }
 
                    }else{
                        return "";
                    }
                 })
                 ->addColumn('latest_ndr_comment', function($row){
 
                     $d = DB::select('SELECT ncd.storzoship_comment as latest_ndr_comment FROM ndr_comment_detail as ncd WHERE ncd.order_id='.$row->id.' AND ncd.storzoship_comment!="" ORDER BY ncd.ndr_comment_detail_id LIMIT 1');
                     if($d){
                         return $d[0]->latest_ndr_comment;
                     }else{
                         return "";
                     }
                     
                 })
                 ->addColumn('action', function($row){
 
                      // orderDetails Button
                      $orderDetailsButton = "<button class='btn btn-sm btn-primary orderDetails' data-id='".$row->id."'>Order Details</button>";
 
                      // ndrComment Button
                      $ndrCommentButton = "<button class='btn btn-sm btn-primary ndrComment' data-id='".$row->id."'>NDR Comment</button>";
 
                      // orderTracking Button
                      $orderTrackingButton = "<button class='btn btn-sm btn-primary orderTracking' data-id='".$row->id."'>Order Tracking</button>";
  
                      return $orderDetailsButton." ".$ndrCommentButton." ".$orderTrackingButton;
                 })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.rto_delivered_order_list', $data);

    }


    public function error_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = ErrorOrder::query();
            $query->select(['error_order_master.id','error_order_master.order_no','error_order_master.customer_order_no','error_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','error_order_master.order_type','error_order_master.created_at','error_order_master.updated_at','u.email as user','oel.error']);
            $query->join('users AS u', 'u.id', '=', 'error_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'error_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'error_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'error_order_master.id');
            $query->leftJoin('order_error_log AS oel', 'oel.order_Error_id', '=', 'error_order_master.id');
            //$query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'error_order_master.is_pre_awb' => '0',
                        'error_order_master.is_delete' => '0',
                    ]);

                } else {
                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'error_order_master.is_pre_awb' => '0',
                        'error_order_master.is_delete' => '0',
                        'error_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
               /* ->addColumn('updated_at', function($row){
                    return Carbon::create($row->updated_at)->toDayDateTimeString();
                }) */
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateLogisticPriority' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteLogisticPriority' data-id='".$row->id."'>Delete</button>";
 
                     //return $updateButton." ".$deleteButton;
                     return $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.error_order_list', $data);

    }


    public function waiting_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = TempOrder::query();
            $query->select(['temp_order_master.id','temp_order_master.order_no','temp_order_master.customer_order_no','temp_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','temp_order_master.order_type','temp_order_master.created_at','temp_order_master.updated_at','u.email as user','oel.error']);
            $query->join('users AS u', 'u.id', '=', 'temp_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'temp_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'temp_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'temp_order_master.id');
            $query->leftJoin('order_error_log AS oel', 'oel.order_Error_id', '=', 'temp_order_master.id');
            //$query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'temp_order_master.is_pre_awb' => '0',
                        'temp_order_master.is_flag' => '1',
                    ]);

                } else {
                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'temp_order_master.is_pre_awb' => '0',
                        'temp_order_master.is_flag' => '1',
                        'temp_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
               /* ->addColumn('updated_at', function($row){
                    return Carbon::create($row->updated_at)->toDayDateTimeString();
                }) */
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateLogisticPriority' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteLogisticPriority' data-id='".$row->id."'>Delete</button>";
 
                     //return $updateButton." ".$deleteButton;
                     return $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.waiting_order_list', $data);

    }


    public function cancel_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = Order::query();
            $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.paid_amount','forward_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','forward_order_master.order_type','forward_order_master.created_at','forward_order_master.updated_at','os.status_name','u.name as user']);
            $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'forward_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'forward_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'forward_order_master.id');
            $query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '1',
                    ]);

                } else {
                    $query = $query->where([
                        'os.order_status_id' => '1',
                        'forward_order_master.is_pre_awb' => '0',
                        'forward_order_master.is_delete' => '1',
                        'forward_order_master.user_id' => Auth::user()->id,
                    ]);
                }


            $query1 = ErrorOrder::query();
            $query1->select(['error_order_master.id','error_order_master.order_no','error_order_master.customer_order_no','error_order_master.paid_amount','error_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','error_order_master.order_type','error_order_master.created_at','error_order_master.updated_at','u.name as user','oel.error']);
            $query1->join('users AS u', 'u.id', '=', 'error_order_master.user_id');
            $query1->join('logistic_master AS l', 'l.id', '=', 'error_order_master.logistic_id');
            $query1->join('receiver_address AS ra', 'ra.id', '=', 'error_order_master.deliver_address_id');
            $query1->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'error_order_master.id');
            $query1->leftJoin('order_error_log AS oel', 'oel.order_Error_id', '=', 'error_order_master.id');
            //$query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query1 = $query1->where([
                        //'os.order_status_id' => '1',
                        'error_order_master.is_pre_awb' => '0',
                        'error_order_master.is_delete' => '1',
                    ]);

                } else {
                    $query1 = $query1->where([
                        //'os.order_status_id' => '1',
                        'error_order_master.is_pre_awb' => '0',
                        'error_order_master.is_delete' => '1',
                        'error_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            //$data = $query->get();
            $data = $query->union($query1)->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    return Carbon::create($row->updated_at)->toDayDateTimeString();
                })
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateLogisticPriority' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteLogisticPriority' data-id='".$row->id."'>Delete</button>";
 
                     //return $updateButton." ".$deleteButton;
                     return $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.cancel_order_list', $data);

    }


    public function shopify_waiting_order_list(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            $query = TempOrder::query();
            $query->select(['temp_order_master.id','temp_order_master.order_no','temp_order_master.customer_order_no','temp_order_master.total_shipping_amount','temp_order_master.awb_number','l.logistic_name','ra.name as customer_name','ra.mobile_no as customer_number','temp_order_master.order_type','temp_order_master.created_at','temp_order_master.updated_at','u.email as user','oel.error']);
            $query->join('users AS u', 'u.id', '=', 'temp_order_master.user_id');
            $query->join('logistic_master AS l', 'l.id', '=', 'temp_order_master.logistic_id');
            $query->join('receiver_address AS ra', 'ra.id', '=', 'temp_order_master.deliver_address_id');
            $query->leftJoin('order_airwaybill_detail AS owd', 'owd.order_id', '=', 'temp_order_master.id');
            $query->leftJoin('order_error_log AS oel', 'oel.order_Error_id', '=', 'temp_order_master.id');
            //$query->leftJoin('order_status AS os', 'os.order_status_id', '=', 'owd.order_status_id');

            
                if (Auth::user()->type == '1') {

                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'temp_order_master.is_pre_awb' => '0',
                        'temp_order_master.is_flag' => '0',
                        'temp_order_master.source' => '1',
                    ]);

                } else {
                    $query = $query->where([
                        //'os.order_status_id' => '1',
                        'temp_order_master.is_pre_awb' => '0',
                        'temp_order_master.is_flag' => '0',
                        'temp_order_master.source' => '1',
                        'temp_order_master.user_id' => Auth::user()->id,
                    ]);
                }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDayDateTimeString();
                })
                ->addColumn('updated_at', function($row){
                    return Carbon::create($row->updated_at)->toDayDateTimeString();
                })
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateLogisticPriority' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteLogisticPriority' data-id='".$row->id."'>Delete</button>";
 
                     //return $updateButton." ".$deleteButton;
                     return $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.orders.shopify_waiting_order_list', $data);

    }


     // Remove
 
     public function delete(Request $request){
 
        ## Read POST data
        $id = $request->post('id');

        $data = Order::findOrFail($request['id']);
        $data->is_delete = '1';
        $data->save();
        
        return response()->json(['success'=>'Deleted Successfully !']);
    }

    // status

   public function status(Request $request)
   {
       
       $validator = Validator::make($request->all(), [
           'id' => ['required'],
           'is_active' => ['required'],
       ]);

       if ($validator->passes()) {
           
           $data = Order::findOrFail($request['id']);
           $data->is_active = $request['is_active'];
           $data->save();
           
           return response()->json(['success'=>'Updated Successfully !']);
           
       }

       return response()->json(['error'=>$validator->errors()]);
   }


   


public function create(Request $request)
{
    $data =[];
    return view('user.orders.create', $data);

}



public function order_tracking_table(Request $request)
{
    if ($request->ajax()) {
        $order_id = $request->id;

        $query = Order::query();
        $query->select('fom.id', 'otd.*');
        $query->from('order_tracking_detail as otd');
        $query->join('forward_order_master as fom', 'fom.id', '=', 'otd.order_id');
        $query->where('fom.id', $order_id);


        $data = $query->get();

        return Datatables::of($data)->addIndexColumn()
            ->addColumn('scan_date_time', function($row){
                return Carbon::create($row->scan_date_time)->toDayDateTimeString();
            })
            ->make(true);
    }
    
    return view('admin.orders.order_tracking_table');

}





    public function buyer_details(Request $request)
    {
        $data =[];
        return view('user.orders.buyer_details', $data);

    }

    // buyer_details_store

    public function buyer_details_store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'customer_mobile' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_address1' => 'required',
            'customer_address2' => 'required',
            'pincode' => 'required',
            'city' => 'required',
            'state' => 'required',
            
        ]);

        if ($validator->passes()) {

            $data = array(
                'customer_mobile'=>$request->customer_mobile,
                'customer_name'=>$request->customer_name,
                'customer_email'=>$request->customer_email,
                'customer_address1'=>$request->customer_address1,
                'customer_address2'=>$request->customer_address2,
                'pincode'=>$request->pincode,
                'city'=>$request->city,
                'state'=>$request->state,
            );

            Session::put('buyer_details', $data);
            //$data  = Session::get('buyer_details');
            return response()->json($data);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }



    public function pickup_details(Request $request)
    {
        $data =[];
        return view('user.orders.pickup_details', $data);

    }

    
    // pickup_details_store

    public function pickup_details_store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'customer_mobile' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_address1' => 'required',
            'customer_address2' => 'required',
            'pincode' => 'required',
            'city' => 'required',
            'state' => 'required',
            
        ]);

        if ($validator->passes()) {

            $data = array(
                'customer_mobile'=>$request->customer_mobile,
                'customer_name'=>$request->customer_name,
                'customer_email'=>$request->customer_email,
                'customer_address1'=>$request->customer_address1,
                'customer_address2'=>$request->customer_address2,
                'pincode'=>$request->pincode,
                'city'=>$request->city,
                'state'=>$request->state,
            );

            Session::put('buyer_details', $data);
            //$data  = Session::get('buyer_details');
            return response()->json($data);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }


    public function order_details(Request $request)
    {
        $data =[];
        return view('user.orders.order_details', $data);

    }


    // order_details_store

    public function order_details_store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'order_number' => 'required',
            'order_type' => 'required',
            'product_name' => 'required',
            'product_value' => 'required',
            'product_quantity' => 'required',
            'sku' => 'required',
            'seller_info' => 'required',
            'reseller_name' => 'required',
            
        ]);

        if ($validator->passes()) {

            $data = array(
                'order_number'=>$request->order_number,
                'order_type'=>$request->order_type,
                'product_name'=>$request->product_name,
                'product_value'=>$request->product_value,
                'product_quantity'=>$request->product_quantity,
                'sku'=>$request->sku,
                'seller_info'=>$request->seller_info,
                'reseller_name'=>$request->reseller_name,
            );

            Session::put('order_details', $data);
            //$data  = Session::get('order_details');
            return response()->json($data);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    public function package_details(Request $request)
    {
        $data =[];
        return view('user.orders.package_details', $data);

    }

    // package_details_store

    public function package_details_store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'customer_mobile' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_address1' => 'required',
            'customer_address2' => 'required',
            'pincode' => 'required',
            'city' => 'required',
            'state' => 'required',
            
        ]);

        if ($validator->passes()) {

            $data = array(
                'customer_mobile'=>$request->customer_mobile,
                'customer_name'=>$request->customer_name,
                'customer_email'=>$request->customer_email,
                'customer_address1'=>$request->customer_address1,
                'customer_address2'=>$request->customer_address2,
                'pincode'=>$request->pincode,
                'city'=>$request->city,
                'state'=>$request->state,
            );

            Session::put('buyer_details', $data);
            //$data  = Session::get('buyer_details');
            return response()->json($data);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }



}


