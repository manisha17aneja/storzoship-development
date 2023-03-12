<?php

namespace App\Http\Controllers;
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
use Carbon\Carbon;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->filter_gender))
      {
       $data = DB::table('tbl_customer')
         ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
         ->where('Gender', $request->filter_gender)
         ->where('Country', $request->filter_country)
         ->get();
      }
      else
      {
       $data = DB::table('tbl_customer')
         ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     $country_name = DB::table('tbl_customer')
          ->select('Country')
          ->groupBy('Country')
          ->orderBy('Country', 'ASC')
          ->get();
     return view('custom_search', compact('country_name'));
    }


    function search_order(Request $request)
    {

        if(request()->ajax())
        {


            $data = [];

            if(!empty($request->search_no))
            { 

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
        
                $query = $query->Where('forward_order_master.order_no', '=', $request->search_no);
                $query = $query->orWhere('forward_order_master.customer_order_no', '=', $request->search_no);
                $query = $query->orWhere('forward_order_master.awb_number', '=', $request->search_no);

                $query = $query->orWhere('ra.mobile_no', '=', $request->search_no);
                $query = $query->orWhere('ra.name', '=', $request->search_no);

                $data = $query->get();

            }

            return datatables()->of($data)->addIndexColumn()
            ->addColumn('created_at', function($row){
                return Carbon::create($row->created_at)->toDayDateTimeString();
            })
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
            ->rawColumns(['action'])->make(true);
        }

        return view('user.orders.search');

    }

}

?>
