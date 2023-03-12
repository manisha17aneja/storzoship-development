<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\User;
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\SenderAddressMaster;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

class UserController extends Controller
{

    // listing

    public function index(Request $request)
    {

        
        if ($request->ajax()) {

           //$data = User::select('id','name','phone','email','type','is_active')->get();

            $data = User::select('id','name','phone','email','type','is_active')
            /*->where([
                //'status' => '1',
                //'is_active' => '1',
                'type' => '4',
            ])*/
            ->whereIn('type', [1,2,3])->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('is_active', function($row){

                    if($row->is_active == 1){
                        $checkStatus = '';
                    } else {
                        $checkStatus = 'checked';
                    }
                    $btn = "<label class='switch switch-left-right'><input class='switch-input user_is_active' name='is_active[]' type='checkbox' data-id='".$row->id."' ".$checkStatus."/><span class='switch-label' data-on='Active' data-off='Inactive'></span> <span class='switch-handle'></span> </label>";
                    return $btn;

                })
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$row->id."'>Delete</button>";
 
                     return $updateButton." ".$deleteButton;
                })
                ->rawColumns(['is_active','action'])
                ->make(true);
        }
        
        return view('admin.users.manage_user');
    }


     // Store
    
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
            'type' => 'required',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'phone' => ['required', 'numeric', 'min:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            //'is_active' => ['required'],
            //'image' => 'required',
         ]);
 
         if ($validator->passes()) {
 
 
             if ($request->hasFile('image')) {
 
                 if ($request->file('image')->isValid()) {
     
                    /* $validated = $request->validate([
                         'image' => 'mimes:jpeg,png|max:1014',
                     ]);*/
 
                     $extension = $request->image->extension();
                     $image_name = time().".".$extension;
                     $request->image->storeAs('/public/images/users', $image_name);
                     //$request->image->public_path('images/couriers', $image_name);
                     
     
                 }else{
                     $image_name ="default.png";
                 }
     
             }else{
                 $image_name ="default.png";
             }
 
             $data = array(
                 'user_id'=>Auth::user()->id,
                 'type'=>$request->type,
                 'first_name'=>$request->first_name,
                 'last_name'=>$request->last_name,
                 'name'=>$request->first_name.' '.$request->last_name,
                 'phone'=>$request->phone,
                 'email'=>$request->email,
                 'password'=>Hash::make($request->password),
                 //'is_active'=>$request->is_active,
             );
     
             User::create($data);
             return response()->json(['success'=>'Added Successfully !']);
             
         }
 
         return response()->json(['error'=>$validator->errors()]);
     }
 
 
     
 
     // Show
 
      public function show(Request $request){
 
         ## Read POST data 
         $id = $request->post('id');
 
         $data = User::find($id);
 
         $response = array();
         if(!empty($data)){
 
             $response['type'] = $data->type;
             $response['first_name'] = $data->first_name;
             $response['last_name'] = $data->last_name;
             $response['phone'] = $data->phone;
             $response['email'] = $data->email;
             //$response['password'] = $data->password;
             $response['is_active'] = $data->is_active;
    
             $response['success'] = 1;
         }else{
             $response['success'] = 0;
         }
 
         return response()->json($response);
 
     }
 
 
     // Update
 
     public function update(Request $request){
 
         $validator = Validator::make($request->all(), [
            'edit_type' => 'required',
            'edit_first_name' => 'required|min:3',
            'edit_last_name' => 'required|min:3',
            'edit_phone' => ['required', 'numeric', 'min:10'],
            'edit_email' => ['required', 'string', 'email', 'max:255'],
            //'edit_password' => ['required', 'string', 'min:8'],
             //'image' => 'required',
         ]);
 
         if ($validator->passes()) {
             
             ## Read POST data
             $id = $request['user_id'];//$request->user_id;//13;//$request->post('id');
 
             $data = User::find($id);
 
 
 
             if ($request->hasFile('image')) {
                 if ($request->file('image')->isValid()) {
 
                     $extension = $request->image->extension();
                     $image_name = time().".".$extension; 
                     //$request->image->storeAs('/images', $image_name);
                     $request->image->storeAs('/public/images/users', $image_name);
 
                     $data->image = $image_name;
     
                 }else{
                     //$image_name ="default.png";
                 }
             }else{
                 //$image_name ="default.png";
             }
 
             $data->type = $request['edit_type'];
             $data->first_name = $request['edit_first_name'];
             $data->last_name = $request['edit_last_name'];
             $data->name = $request['edit_first_name'].' '.$request['edit_last_name'];
             $data->phone = $request['edit_phone'];
             $data->email = $request['edit_email'];
             $data->password = Hash::make($request['edit_password']);
             //$data->is_active = $request['edit_is_active'];
             $data->save();
             
             return response()->json(['success'=>'Updated Successfully !']);
 
         }
 
         return response()->json(['error'=>$validator->errors()]); 
     }
 
 
     // Remove
 
     public function delete(Request $request){
 
         ## Read POST data
         $id = $request->post('id');
 
         $data = User::find($id);
         $data->delete();
         
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
            
            $data = User::findOrFail($request['id']);
            $data->is_active = $request['is_active'];
            $data->save();
            
            return response()->json(['success'=>'Updated Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }


     // preawb_status

     public function preawb_status(Request $request)
     {
         
         $validator = Validator::make($request->all(), [
             'id' => ['required'],
             'is_pre_awb_allow' => ['required'],
         ]);
 
         if ($validator->passes()) {
             
             $data = User::findOrFail($request['id']);
             $data->is_pre_awb_allow = $request['is_pre_awb_allow'];
             $data->save();
             
             return response()->json(['success'=>'Updated Successfully !']);
             
         }
 
         return response()->json(['error'=>$validator->errors()]);
     }

     // customers

    public function customers(Request $request)
    {
      
        if ($request->ajax()) {

            //$data = User::select('id','name','phone','email','type','is_active')->get();

            /*$data = DB::table('users as t1')->
            select(['t1.*', 't2.id as created_by_user_id', 't2.name as created_by'])->
            join('users AS t2', 't2.id', '=', 't1.user_id')->
            where('t1.type', 4)->
            where('t1.status', 2)->
            where('t1.allow_credit', 2)->
            get();*/

            $data = DB::table('users as u')->
            select(['u.name','u.email','u.phone','u.wallet_balance','u.allow_credit_limit','u.status','u.allow_credit', 'um.id as created_by_user_id', 'um.name as created_by'])->
            join('kyc_verification_master AS km', 'u.id', '=', 'km.sender_id')->
            join('users AS um', 'km.created_by', '=', 'um.id')->
            where('u.status', '1')->
            where('u.allow_credit', '1')->
            get();


           // $joinquery = "FROM " . $table . " AS sm JOIN kyc_verification_master AS km ON sm.id = km.sender_id  JOIN user_master AS um ON km.created_by = um.id ";
            //$where = "sm.status = '1' AND sm.allow_credit='1'";

            return Datatables::of($data)->addIndexColumn()
                ->make(true);
        }
        
        return view('admin.users.customers');
    }


     // pending

     public function pending(Request $request)
     {
         
        if ($request->ajax()) {

            $data = DB::table('kyc_verification as kyc_verification')->
            select(['billing_address.*','kyc_verification.*','kyc_verification.created_at','users.id as id','users.name','users.website','users.phone','users.email','users.is_active','users.status'])->
            join('users', 'kyc_verification.user_id', '=', 'users.id')->
            join('billing_address', 'billing_address.user_id', '=', 'kyc_verification.user_id')->
            where('users.status', 1)->
            get();
 
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('address', function($row){
                    $address = $row->address_1.' '.$row->address_2;
                    return $address;

                })
                ->addColumn('is_active', function($row){

                    if($row->is_active == 1){
                        $checkStatus = '';
                    } else {
                        $checkStatus = 'checked';
                    }
                    $btn = "<label class='switch switch-left-right'><input class='switch-input user_is_active' name='is_active[]' type='checkbox' data-id='".$row->id."' ".$checkStatus."/><span class='switch-label' data-on='Active' data-off='Inactive'></span> <span class='switch-handle'></span> </label>";
                    return $btn;

                })
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    return $btn;

                    // Update Button
                    //$updateButton = "<button class='btn btn-sm btn-info updatePending' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                    // Delete Button
                    //$deleteButton = "<button class='btn btn-sm btn-danger deletePending' data-id='".$row->id."'>Delete</button>";

                    //return $updateButton." ".$deleteButton;
                })
                ->rawColumns(['is_active','action'])
                ->make(true);
        }
         
         return view('admin.users.pending');
     }


      // approve

    public function approve(Request $request)
    {

        
        if ($request->ajax()) {

            $data = DB::table('kyc_verification as kyc_verification')->
            select(['billing_address.*','kyc_verification.*','kyc_verification.created_at','users.id as id','users.name','users.website','users.phone','users.email','users.is_active','users.status'])->
            join('users', 'kyc_verification.user_id', '=', 'users.id')->
            join('billing_address', 'billing_address.user_id', '=', 'kyc_verification.user_id')->
            where('users.status', 2)->
            get();
 
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('address', function($row){
                    $address = $row->address_1.' '.$row->address_2;
                    return $address;

                })
                ->addColumn('is_active', function($row){

                    if($row->is_active == 1){
                        $checkStatus = '';
                    } else {
                        $checkStatus = 'checked';
                    }
                    $btn = "<label class='switch switch-left-right'><input class='switch-input user_is_active' name='is_active[]' type='checkbox' data-id='".$row->id."' ".$checkStatus."/><span class='switch-label' data-on='Active' data-off='Inactive'></span> <span class='switch-handle'></span> </label>";
                    return $btn;

                })
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    return $btn;

                    // Update Button
                    //$updateButton = "<button class='btn btn-sm btn-info updatePending' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                    // Delete Button
                    //$deleteButton = "<button class='btn btn-sm btn-danger deletePending' data-id='".$row->id."'>Delete</button>";

                    //return $updateButton." ".$deleteButton;
                })
                ->rawColumns(['is_active','action'])
                ->make(true);
        }
        
        return view('admin.users.approve');
    }

     // rejected

    public function rejected(Request $request)
    {
 
         
        if ($request->ajax()) {

            $data = DB::table('kyc_verification as kyc_verification')->
            select(['billing_address.*','kyc_verification.*','kyc_verification.created_at','users.id as id','users.name','users.website','users.phone','users.email','users.is_active','users.status'])->
            join('users', 'kyc_verification.user_id', '=', 'users.id')->
            join('billing_address', 'billing_address.user_id', '=', 'kyc_verification.user_id')->
            where('users.status', 3)->
            get();
 
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('address', function($row){
                $address = $row->address_1.' '.$row->address_2;
                return $address;

            })
            ->addColumn('is_active', function($row){

                if($row->is_active == 1){
                    $checkStatus = '';
                } else {
                    $checkStatus = 'checked';
                }
                $btn = "<label class='switch switch-left-right'><input class='switch-input user_is_active' name='is_active[]' type='checkbox' data-id='".$row->id."' ".$checkStatus."/><span class='switch-label' data-on='Active' data-off='Inactive'></span> <span class='switch-handle'></span> </label>";
                return $btn;

            })
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                return $btn;

                // Update Button
                //$updateButton = "<button class='btn btn-sm btn-info updatePending' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                // Delete Button
                //$deleteButton = "<button class='btn btn-sm btn-danger deletePending' data-id='".$row->id."'>Delete</button>";

                //return $updateButton." ".$deleteButton;
            })
            ->rawColumns(['is_active','action'])
            ->make(true);
        }
         
         return view('admin.users.rejected');
    }


     // customer_api_setting

     public function customer_api_setting(Request $request)
     {
 
        $data['users'] = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
            'status' => '1',
            'is_active' => '1',
            'type' => '4',
        ])->orderBy('id', 'ASC')->get();

        return view('admin.users.customer_api_setting', $data);
         
     }

    // show_customer_api_setting

     public function show_customer_api_setting(Request $request){

        $sender_id = $request->id;
        $customer_data_result = User::select('api_pickup_address_id', 'api_is_web_access', 'api_key', 'api_user_id')->where(['id' => $sender_id])->first()->toArray();
      
        $api_pickup_address_id = $customer_data_result['api_pickup_address_id'];
        $api_is_web_access = $customer_data_result['api_is_web_access'];

        if ($customer_data_result['api_key'] != "") {
            $api_key = $customer_data_result['api_key'];
        } else {
            $api_key = md5("storzoship_sender_web_access_api_key_" . $sender_id);
        }

        if ($customer_data_result['api_user_id'] != "") {
            $api_user_id = $customer_data_result['api_user_id'];
        } else {
            $api_user_id = md5("storzoship_sender_web_access_user_id_" . $sender_id);
        }

        $all_pickup_address = '';

        $pickup_address_result = SenderAddressMaster::select('id', 'warehouse_name', 'address_line_1', 'address_line_2', 'city', 'state' ,'pincode')->where(['sender_id' => $sender_id])->get();
        
        /*echo '<pre>';
        print_R($pickup_address_result);die;
        echo '<pre>';*/
        
       foreach ($pickup_address_result as $single_pickup_address) {

            if ($single_pickup_address['id'] == $api_pickup_address_id) {
                $select = 'selected';
            } else { 
                $select = "";
            }

            $all_pickup_address .= '<option value="' . $single_pickup_address['id'] . '" ' . $select . '>' . $single_pickup_address['warehouse_name'] . ' - ' . str_replace(",,", ",", $single_pickup_address['address_line_1'] . ", " . $single_pickup_address['address_line_2'] . ", " . $single_pickup_address['city'] . ", " . $single_pickup_address['state'] . ", " . $single_pickup_address['pincode']) . '</option>';
        }

        $response = array();
        $response['success'] = 1;
        $response['api_is_web_access'] = $api_is_web_access;
        $response['api_key'] = $api_key;
        $response['api_user_id'] = $api_user_id;
        $response['all_pickup_address'] = $all_pickup_address;
        //$response['pickup_address_result'] = $pickup_address_result;
        
        return response()->json($response);
       
    }


    // store_customer_api_setting

    public function store_customer_api_setting(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'api_pickup_address_id' => 'required',
        //'api_is_web_access' => 'required',
        ]);

        if ($validator->passes()) {

           /* $user_data = User::find($request->user_id);
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

            $data1->save();*/

            $sender_id = $request->user_id;

            if ($request->api_is_web_access == 1) {

                $pdf_view['api_is_web_access'] = $data['api_is_web_access'] = $request->api_is_web_access;
                $pdf_view['api_key'] = $data['api_key'] = $request->api_key;
                $pdf_view['api_user_id'] = $data['api_user_id'] = $request->api_user_id;

            } else {

                $data['api_is_web_access'] = 0;
                $pdf_view['api_key'] = "";
                $pdf_view['api_user_id'] = "";
            }

            //$result = $this->Common_model->update($data, 'sender_master', array('id' => $sender_id));

            if ($request->action_perfom == 'customer_api_setting_info_pdf_button') {

               // $pickup_address_result = $this->Common_model->getSingleRowArray(array('id' => $data['api_pickup_address_id']), 'address_line_1,address_line_2,city,state,pincode', 'sender_address_master');
              //  $customer_result = $this->Common_model->getSingleRowArray(array('id' => $request->sender_id), 'name', 'sender_master');
                $pdf_view['customer_name'] = $customer_result['name'];
                $pdf_view['pickup_address'] = str_replace(",,", ",", $pickup_address_result['address_line_1'] . ", " . $pickup_address_result['address_line_2'] . ", " . $pickup_address_result['city'] . ", " . $pickup_address_result['state'] . ", " . $pickup_address_result['pincode']);

               /* $html = $this->load->view('admin/manage_customer/customer_api_setting_pdf', $pdf_view, true);
                $this->load->library('pdf');
                $filename = base64_encode($request->sender_id) . "api_setting.pdf";
                if (file_exists(base_url() . 'uploads/customer_api_pdf/' . $filename)) {
                    unlink('uploads/customer_api_pdf/' . $filename);
                }
                $this->pdf->load_html($html);
                $this->pdf->render();
                $output = $this->pdf->output();
                file_put_contents($this->config->item('FILE_PATH') . 'uploads/customer_api_pdf/' . $filename, $output);
                echo $filename;*/
            } else {
                return response()->json(['success'=>'Added Successfully !']);
            } 
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }


     // customer_pre_awb

     public function customer_pre_awb(Request $request)
     {
 
         
         if ($request->ajax()) {
 
             $data = User::select('id','name','email','is_pre_awb_allow')->get();
 
             return Datatables::of($data)->addIndexColumn()
                ->addColumn('is_pre_awb_allow', function($row){

                    if($row->is_pre_awb_allow == 1){
                        $checkStatus = '';
                    } else {
                        $checkStatus = 'checked';
                    }
                    $btn = "<label class='switch switch-left-right'><input class='switch-input user_is_pre_awb_allow' name='is_pre_awb_allow[]' type='checkbox' data-id='".$row->id."' ".$checkStatus."/><span class='switch-label' data-on='Allow' data-off='Not Allow'></span> <span class='switch-handle'></span> </label>";
                    return $btn;

                })
                ->rawColumns(['is_pre_awb_allow'])
                ->make(true);
         }
         
         return view('admin.users.customer_pre_awb');
     }
 
 
 }
 