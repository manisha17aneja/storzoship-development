<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;


use App\Models\Address;

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
use App\Models\WalletTransaction;
use App\Models\CodRemittanceDetail;
use App\Models\NextCodRemittanceList;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;


use DataTables;
use DB;
use Carbon\Carbon;

class CodController extends Controller
{

    // cod_remittance_list

    public function cod_remittance_list(Request $request)
    {
        $data['users'] = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
            'status' => '1',
            'is_active' => '1',
            'type' => '4',
        ])->orderBy('id', 'ASC')->get();
   
        if(request()->ajax())
        {

            $data = [];

            if(!empty($request->user_id) && !empty($request->from_date) && !empty($request->to_date))
            { 

                $query = Order::query();
                $query->select(['forward_order_master.id','forward_order_master.order_no','forward_order_master.customer_order_no','forward_order_master.awb_number','opd.cod_amount','owd.delivery_date','forward_order_master.created_at','u.name']);
                $query->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
                $query->join('order_product_detail AS opd', 'opd.id', '=', 'forward_order_master.order_product_detail_id');
                $query->join('order_airwaybill_detail AS owd', 'forward_order_master.id', '=', 'owd.order_id');


                $query = $query->where([
                    'forward_order_master.is_delete' => '0',
                    'owd.order_status_id' => '6',
                    'forward_order_master.is_cod_remittance' => '0',
                    'forward_order_master.order_type' => '1',
                    'forward_order_master.user_id' => $request->user_id,
                ]);
            
                $query->whereBetween('owd.delivery_date', [$request->from_date, $request->to_date]);

                $data = $query->get();

           }

            return datatables()->of($data)->addIndexColumn()
            ->addColumn('created_at', function($row){
                return Carbon::create($row->created_at)->toDayDateTimeString();
            })
            ->addColumn('delivery_date', function($row){
                return Carbon::create($row->delivery_date)->toDateString();
            })
            ->make(true);
        }

        return view('admin.cod.cod_remittance_list', $data);
    }


    // all_cod_remittance_list

    public function all_cod_remittance_list(Request $request)
    {

        if ($request->ajax()) {

            $query = CodRemittanceDetail::query();
            $query->select(['cod_remittance_detail.created_at','cod_remittance_detail.cod_remittance_amount','cod_remittance_detail.cod_remittance_note','cod_remittance_detail.cod_remittance_detail_id','u.name']);
            $query->join('users AS u', 'u.id', '=', 'cod_remittance_detail.sender_id');




            if (Auth::user()->type == '1') {


            } else {
                $query = $query->where([
                    'cod_remittance_detail.sender_id' => Auth::user()->id,
                ]);
            }

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
            ->addColumn('created_at', function($row){
                return Carbon::create($row->created_at)->toDateString();
            })
            ->addColumn('action', function($row){
                    
                    // viewDetail Button
                    $viewDetailButton = "<button class='btn btn-sm btn-primary viewDetail' data-id='".$row->cod_remittance_detail_id."'>View Detail</button>";

                   // $viewDetailButton = "<button class='btn btn-sm btn-primary viewDetail' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.viewDetailModal' >View Detail</button>";

                    return $viewDetailButton;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('admin.cod.all_cod_remittance_list');
    }


    // next_cod_remittance_list

    public function next_cod_remittance_list(Request $request)
    {
       
        if ($request->ajax()) {

            $data = [];

            if(!empty($request->from_date) && !empty($request->to_date))
            {

                $query = Order::query();
                $query->select('u.id', 'u.name', 'u.email', DB::raw('COUNT(fom.id) As order_count'), DB::raw('sum(opd.cod_amount) As cod_remittance_amount'));
                $query->from('forward_order_master as fom');
                $query->join('order_airwaybill_detail AS owd', 'fom.id', '=', 'owd.order_id');
                $query->join('order_product_detail AS opd', 'fom.order_product_detail_id', '=', 'opd.id');
                $query->join('users AS u', 'fom.user_id', '=', 'u.id');


                $query = $query->where([
                    'fom.order_type' => '1',
                    'fom.is_pre_awb' => '0',
                    'fom.is_delete' => '0',
                    'owd.order_status_id' => '6',
                    'fom.is_cod_remittance' => '0',
                ]);
            
                $query->whereBetween('owd.delivery_date', [$request->from_date, $request->to_date]);

                $data = $query->groupBy('fom.user_id')->get();

            }

            return Datatables::of($data)->addIndexColumn()
            ->addColumn('cod_remittance_amount', function($row){
                return number_format($row->cod_remittance_amount, 2);
            })
            ->make(true);
        }

        return view('admin.cod.next_cod_remittance_list');
    }


    // next_cod_remittance_all_data

    public function next_cod_remittance_all_data(Request $request)
    {

        if ($request->ajax()) {

            $query = NextCodRemittanceList::query(); 
            $query->select('u.id', 'u.name', 'u.email', 'ncod.order_count', 'ncod.cod_remittance_amount');
            $query->from('next_cod_remittance_list as ncod');
            $query->join('users as u', 'ncod.sender_id', '=', 'u.id');
            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
            ->addColumn('cod_remittance_amount', function($row){
                return number_format($row->cod_remittance_amount, 2);
            })
            ->make(true);
        }

        return view('admin.cod.next_cod_remittance_all_data');
    }

    // cod_remittance

    public function cod_remittance(Request $request)
    {
       
        $get_shipping_amount = 2;
        $userId = Auth::user()->id;
        $userType = Auth::user()->type;

        $get_remitted_amount = CodController::get_cod_remittanace_count('2', $userId, $userType);
        $remitted_amount = $get_remitted_amount['cod_amount'] == null ? '0' : $get_remitted_amount['cod_amount'];

        $get_unremitted_amount = CodController::get_cod_remittanace_count('3', $userId, $userType);
        $unremitted_amount = $get_unremitted_amount['cod_amount'] == null ? '0' : $get_unremitted_amount['cod_amount'];

       if ($userType == 4) {
            $get_next_remmitance_amount = NextCodRemittanceList::select(DB::raw('sum(cod_remittance_amount) As cod_remittance_amount'))->where('sender_id', $userId)->first()->toArray();
        } else {
           $get_next_remmitance_amount = NextCodRemittanceList::select(DB::raw('sum(cod_remittance_amount) As cod_remittance_amount'))->first()->toArray();
        }
 
        $next_remmitance = $get_next_remmitance_amount['cod_remittance_amount'] == null ? '0' : $get_next_remmitance_amount['cod_remittance_amount'];
        if ($userType == 4) {
            $get_wallet_transaction = User::select(DB::raw('sum(wallet_balance) As wallet_balance'))->where('wallet_balance', '<', '0.00')->where('id', $userId)->first()->toArray();
        } else {
            $get_wallet_transaction = User::select(DB::raw('sum(wallet_balance) As wallet_balance'))->where('wallet_balance', '<', '0.00')->first()->toArray();
        }

        $wallet_balance = $get_wallet_transaction['wallet_balance'] == null ? '0' : $get_wallet_transaction['wallet_balance'];

        $data['total_cod_generated'] = number_format(($remitted_amount + $unremitted_amount), 2, '.', ',');
        $data['total_bill_adjusted'] = number_format((($remitted_amount + $unremitted_amount) - $remitted_amount - abs($wallet_balance)), 2, '.', ',');
        $data['total_refund_adjusted'] = "coming soon";
        $data['total_advance_hold'] = "coming soon";
        $data['total_cod_remmitted'] = number_format($remitted_amount, 2, '.', ',');
        $data['wallet_transfered'] = number_format($wallet_balance, 2, '.', ',');
        $data['unremmited_cod'] = number_format($unremitted_amount, 2, '.', ',');
        $data['next_remmitance'] = number_format($next_remmitance, 2, '.', ',');


        if ($request->ajax()) {

            $query = CodRemittanceDetail::query();
            $query->select('crd.cod_remittance_detail_id','crd.created_at', 'crd.cod_remittance_amount', 'crd.cod_remittance_note', 'u.name');
            $query->from('cod_remittance_detail as crd');
            $query->leftJoin('users AS u', 'u.id', '=', 'crd.sender_id');

            if ($userType != 1) {
                $query->where('crd.sender_id', Auth::user()->id);
            }
            
            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->toDateString();
                })
                ->addColumn('action', function($row){
                     //  viewDetail
                     //$viewDetail = "<button class='btn btn-sm btn-primary viewDetail' data-id='".$row->id."'> View Detail</button>";
                     $viewDetailButton = "<button class='btn btn-sm btn-primary viewDetail' data-id='".$row->cod_remittance_detail_id."'>View Detail</button>";
                     
                     return $viewDetailButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.cod.cod_remittance', $data);
    }

    // cod_wallet_transactions

    public function cod_wallet_transactions(Request $request)
    {

        if ($request->ajax()) {

            $query = WalletTransaction::query();
            $query->select('wt.updated_at', 'wt.id', 'wt.debit as debit', 'wt.credit as credit', 'u.wallet_balance', 'wt.remarks');
            $query->from('wallet_transaction as wt');
            $query->leftJoin('users AS u', 'u.id', '=', 'wt.sender_id');

            if (Auth::user()->type == 4) {
                $query->where('wt.sender_id', Auth::user()->id);
            }
            
            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('updated_at', function($row){
                    return Carbon::create($row->updated_at)->toDayDateTimeString();
                })
                ->make(true);
        }

        return view('admin.cod.cod_wallet_transactions', $data);

    }

    // get_cod_remittanace_count

    public function get_cod_remittanace_count($get_shipping_amount, $userId, $userType)
    {
        
        $query = Order::query();
        $query->select('fom.is_cod_remittance' ,'oad.updateDate',DB::raw('sum(opd.cod_amount) As cod_amount'));
        $query->from('forward_order_master as fom');
        $query->join('order_airwaybill_detail as oad', 'fom.id', '=', 'oad.order_id');
        $query->join('order_product_detail as opd', 'fom.order_product_detail_id', '=', 'opd.id');

        $query->where('fom.order_type', '1');
        if($get_shipping_amount == '3'){
            $query->where('fom.is_pre_awb', '0');
            $query->where('fom.is_delete', '0');
            $query->where('oad.order_status_id', '6');
            $query->where('fom.is_cod_remittance','0');
            
        }
        if($get_shipping_amount == '2'){
            $query->where('fom.is_cod_remittance','1');
        }
		if ($userType == 4) {
            $query->where('fom.user_id', $userId);
        }

        $data = $query->first()->toArray(); 

        return $data;

    }

    public function cod_remittance1(Request $request)
    {
        if ($request->ajax()) {

            $query = CodRemittanceDetail::query();
            $query->from('cod_remittance_detail as crd');
            $query->leftJoin('users AS u', 'u.id', '=', 'crd.sender_id');
            $query->where('crd.sender_id', Auth::user()->id);

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){

                     //  viewDetail
                     $viewDetail = "<button class='btn btn-sm btn-primary viewDetail' data-id='".$row->id."'> View Detail</button>";
                     return $viewDetail;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('admin.cod.cod_remittance');

    }


    public function cod_remittance_order_detail_table(Request $request)
    {
        if ($request->ajax()) {
            $cod_remittance_detail_id = $request->id;

            $query = Order::query();
            $query->select('fom.awb_number','opd.cod_amount','fom.is_cod_remittance_close_datetime','oad.delivery_date');
            $query->from('forward_order_master as fom');
            $query->join('order_product_detail as opd','opd.id', '=', 'fom.order_product_detail_id');
            $query->join('order_airwaybill_detail as oad','oad.order_id', '=', 'fom.id','left');
            $query->where('fom.cod_remittance_detail_id',$cod_remittance_detail_id);

            $data = $query->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('delivery_date1', function($row){
                    return Carbon::create($row->delivery_date)->toDateString();
                })
                ->addColumn('is_cod_remittance_close_datetime', function($row){
                    if($row->is_cod_remittance_close_datetime){
                        return Carbon::create($row->is_cod_remittance_close_datetime)->toDateString();
                    }
                })
                ->make(true);
        }
        
        return view('admin.cod.cod_remittance_order_detail_table');

    }






 
 }
 