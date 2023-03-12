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

class ShippingController extends Controller
{

    // listing

    public function index(Request $request)
    {

        $data['logistics'] = Logistic::all();
        $data['rules'] = Rule::all();  

        if ($request->ajax()) {

            //$data = Shipping::select('id','name','from_kg','to_kg','is_active')->get();

            $data = DB::table('manage_price as t1')->
            select(['t1.*', 't2.logistic_name', 't3.name as rule_name'])->
            join('logistic_master AS t2', 't2.id', '=', 't1.logistic_id')->
            join('rule_master AS t3', 't3.id', '=', 't1.rule')->
            //where('t1.status', 2)->
            orderBy('t1.id', 'DESC')->
            get();

            return Datatables::of($data)->addIndexColumn()
               
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateShipping' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteShipping' data-id='".$row->id."'>Delete</button>";
 
                     return $updateButton." ".$deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('admin.shippings.index', $data);
    }


     // Store
    
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
            'logistic_id' => 'required',
            'shipment_type' => 'required',
            'rule' => 'required',
            'rule_index' => 'required',
            'within_zone' => 'required',
            'within_city' => 'required',
            'within_state' => 'required',
            'metro' => 'required',
            'metro_2' => 'required',
            'rest_of_india' => 'required',
            'rest_of_india_2' => 'required',
            'special_zone' => 'required',
            'is_cod_charge_return' => 'required',
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
                     $request->image->storeAs('/public/images/shippings', $image_name);
                     //$request->image->public_path('images/couriers', $image_name);
                     
     
                 }else{
                     $image_name ="default.png";
                 }
     
             }else{
                 $image_name ="default.png";
             }
 
             
             $data = array(

                'logistic_id' => $request->logistic_id,
                'shipment_type' => $request->shipment_type,
                'rule' => $request->rule,
                'rule_index' => $request->rule_index,
                'within_city' => $request->within_city,
                'within_state' => $request->within_state,
                'within_zone' => $request->within_zone,
                'metro' => $request->metro,
                'metro_2' => $request->metro_2,
                'rest_of_india' => $request->rest_of_india,
                'rest_of_india_2' => $request->rest_of_india_2,
                'special_zone' => $request->special_zone,
                'is_cod_charge_return' => $request->is_cod_charge_return,
                 //'is_active'=>$request->is_active,
             );
     
             Shipping::create($data);
             return response()->json(['success'=>'Added Successfully !']);
             
         }
 
         return response()->json(['error'=>$validator->errors()]);
     }
 
 
     
 
     // Show
 
      public function show(Request $request){
 
         ## Read POST data 
         $id = $request->post('id');
 
         $data = Shipping::find($id);
 
         $response = array();
         if(!empty($data)){

 
             $response['logistic_id'] = $data->logistic_id;
             $response['shipment_type'] = $data->shipment_type;
             $response['rule'] = $data->rule;
             $response['rule_index'] = $data->rule_index;
             $response['within_city'] = $data->within_city;
             $response['within_state'] = $data->within_state;
             $response['within_zone'] = $data->within_zone;
             $response['metro'] = $data->metro;
             $response['metro_2'] = $data->metro_2;
             $response['rest_of_india'] = $data->rest_of_india;
             $response['rest_of_india_2'] = $data->rest_of_india_2;
             $response['special_zone'] = $data->special_zone;
             $response['is_cod_charge_return'] = $data->is_cod_charge_return;

             //$response['is_active'] = $data->is_active;
    
             $response['success'] = 1;
         }else{
             $response['success'] = 0;
         }
 
         return response()->json($response);
 
     }
 
 
     // Update
 
     public function update(Request $request){
 
         $validator = Validator::make($request->all(), [
            'edit_logistic_id' => 'required',
            'edit_shipment_type' => 'required',
            'edit_rule' => 'required',
            'edit_rule_index' => 'required',
            'edit_within_city' => 'required',
            'edit_within_state' => 'required',
            'edit_within_zone' => 'required',
            'edit_metro' => 'required',
            'edit_metro_2' => 'required',
            'edit_rest_of_india' => 'required',
            'edit_rest_of_india_2' => 'required',
            'edit_special_zone' => 'required',
            'edit_is_cod_charge_return' => 'required',
             //'image' => 'required',
         ]);
 
         if ($validator->passes()) {
             
             ## Read POST data
             $id = $request['shipping_id'];//$request->shipping_id;//13;//$request->post('id');
 
             $data = Shipping::find($id);
 
 
 
             if ($request->hasFile('image')) {
                 if ($request->file('image')->isValid()) {
 
                     $extension = $request->image->extension();
                     $image_name = time().".".$extension; 
                     //$request->image->storeAs('/images', $image_name);
                     $request->image->storeAs('/public/images/shippings', $image_name);
 
                     $data->image = $image_name;
     
                 }else{
                     //$image_name ="default.png";
                 }
             }else{
                 //$image_name ="default.png";
             }
 
             $data->logistic_id = $request['edit_logistic_id'];
             $data->shipment_type = $request['edit_shipment_type'];
             $data->rule = $request['edit_rule'];
             $data->rule_index = $request['edit_rule_index'];
             $data->within_city = $request['edit_within_city'];
             $data->within_state = $request['edit_within_state'];
             $data->within_zone = $request['edit_within_zone'];
             $data->metro = $request['edit_metro'];
             $data->metro_2 = $request['edit_metro_2'];
             $data->rest_of_india = $request['edit_rest_of_india'];
             $data->rest_of_india_2 = $request['edit_rest_of_india_2'];
             $data->special_zone = $request['edit_special_zone'];
             $data->is_cod_charge_return = $request['edit_is_cod_charge_return'];

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
 
         $data = Shipping::find($id);
         $data->delete();
         
         return response()->json(['success'=>'Deleted Successfully !']);
     }

    
 
 }
 