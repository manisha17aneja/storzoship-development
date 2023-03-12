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
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;


use DataTables;
use DB;
use Carbon\Carbon;

class FinanceController extends Controller
{

    // listing

    public function customer_allow_credit(Request $request)
    {
        $data['users'] = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
            'status' => '1',
            'is_active' => '1',
            'type' => '4',
        ])->orderBy('id', 'ASC')->get();

        if ($request->ajax()) {

            $data = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
                'status' => '1',
                'is_active' => '1',
                'type' => '4',
                'allow_credit' => '1',
            ])->orderBy('id', 'ASC')->get();

            return Datatables::of($data)->addIndexColumn()->make(true);
        }

        return view('admin.finance.customer_allow_credit', $data);
    }



     // Show
 
     public function show(Request $request){
 
        ## Read POST data 
        $id = $request->post('id');

        $data = User::find($id);

        $response = array();
        if(!empty($data)){
           
            $response['allow_credit'] = $data->allow_credit;
            $response['allow_credit_limit'] = $data->allow_credit_limit;

            $response['success'] = 1;
        }else{
            $response['success'] = 0;
        }

        return response()->json($response);

    }


    // Update

    public function update(Request $request){

        $validator = Validator::make($request->all(), [
           'customer_id' => 'required',
           'allow_credit' => 'required',
           //'allow_credit_limit' => 'required',
        ]);

        if ($validator->passes()) {
            
            ## Read POST data
            $id = $request['customer_id'];

            $data = User::find($id);
           
            $data->allow_credit = $request['allow_credit'];

            if($request['allow_credit'] == 1){
                $data->allow_credit_limit = $request['allow_credit_limit'];
            }else{
                $data->allow_credit_limit = NULL;
            }
            
            $data->save();
            
            return response()->json(['success'=>'Updated Successfully !']);

        }

        return response()->json(['error'=>$validator->errors()]); 
    }


    // listing

    public function customer_used_credit(Request $request)
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

               // $from = date('2022-12-01 00:00:00'); //$request->from_date;
               // $to = date('2023-03-09 00:00:00'); //$request->to_date;
               // $user_id = 1; //$request->user_id; 
        
                //select SUM(debit) FROM `wallet_transaction` where `sender_id`=1 and `created_at` BETWEEN '2022-12-01 00:00:00' AND '2023-03-09 00:00:00';  1099069.97 1099069.97
        
                $query = User::query();
                $query->select(['users.name','users.email','users.allow_credit_limit',DB::raw('SUM(wallet_transaction.debit) AS debit')]);
                $query->join('wallet_transaction', 'users.id', '=', 'wallet_transaction.sender_id');
               
                $query = $query->where([
                    'users.status' => '1',
                    'users.allow_credit' => '1',
                    'wallet_transaction.sender_id' => $request->user_id,
                ]);
        
                $query->whereBetween('wallet_transaction.created_at', [$request->from_date, $request->to_date]);
        
                $data = $query->groupBy('users.id')->get();

           }

            return datatables()->of($data)->addIndexColumn()
            ->rawColumns(['action'])->make(true);
        }

        return view('admin.finance.customer_used_credit', $data);

    }

    public function user_wallet_balance(Request $request)
    {
        $data['users'] = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
            'status' => '1',
            'is_active' => '1',
            'type' => '4',
        ])->orderBy('id', 'ASC')->get();

        return view('admin.finance.user_wallet_balance', $data);
    }


    // Store

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'action' => 'required',
        'amount' => 'required|numeric',
        'remarks' => 'required',
        //'razorpay_pay_id' => 'required',
        ]);

        if ($validator->passes()) {

            $user_data = User::find($request->user_id);
            $data1 = User::find($request->user_id);
            
            $data['sender_id'] = $request->user_id;
            $data['remarks'] = $request->remarks;
            if (!empty($request->razorpay_pay_id)) {
                $data['remarks'] .= " / (Pay ID: " . $request->razorpay_pay_id . ")";
            }
            switch ($request->action) {
    
                case 0:
                    if ($request->amount <= $user_data->wallet_balance) {
    
                        $data['debit'] = $request->amount;
                        $data1['wallet_balance'] = $data['runningbalance'] = $user_data->wallet_balance - $request->amount;
                        break;
                    } else {
                        if ($user_data->allow_credit == 1) {
                            $data['debit'] = $request->amount;
                            $data1['wallet_balance'] = $data['runningbalance'] = $user_data->wallet_balance - $request->amount;
                            break;
                        } else {
                            return response()->json(['error'=>'User credit not allowed !']);
                        }
                    }
    
                case 1:
                    $data['credit'] = $request->amount;
                    $data1['wallet_balance'] = $data['runningbalance'] = $user_data->wallet_balance + $request->amount;
                    break;
            }

            WalletTransaction::create($data);

            $data1->save();

            return response()->json(['success'=>'Updated Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }

 
 }
 