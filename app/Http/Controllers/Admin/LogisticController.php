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
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

class LogisticController extends Controller
{

    // listing

    public function index(Request $request)
    {

        
        if ($request->ajax()) {

            //$data = Logistic::select('id','logistic_name','api_name','cod_price','cod_percentage','is_active')->get();
            $url = url('public/storage/images/logistics');
            $data = Logistic::select(array('logistic_master.*', DB::raw("CONCAT('$url/', logistic_master.logo_image_name) AS image")))->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('is_active', function($row){

                    if($row->is_active == 0){
                        $checkStatus = '';
                    } else {
                        $checkStatus = 'checked';
                    }
                    $btn = "<label class='switch switch-left-right'><input class='switch-input logistic_is_active' name='is_active[]' type='checkbox' data-id='".$row->id."' ".$checkStatus."/><span class='switch-label' data-on='Active' data-off='Inactive'></span> <span class='switch-handle'></span> </label>";
                    return $btn;

                })
                ->addColumn('image', function($row){

                    $btn = "<img src='".$row->image."' alt='logistic_image'>";
                    return $btn;

                })
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateLogistic' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteLogistic' data-id='".$row->id."'>Delete</button>";
 
                     return $updateButton." ".$deleteButton;
                })
                ->rawColumns(['is_active','image','action'])
                ->make(true);
        }
        
        return view('admin.logistics.index');
    }


     // Store
    
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'api_name' => 'required',
            'cod_price' => 'required|numeric',
            'cod_percentage' => 'required|numeric',
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
                     $request->image->storeAs('/public/images/logistics', $image_name);
                     //$request->image->public_path('images/couriers', $image_name);
                     
     
                 }else{
                     $image_name ="default.png";
                 }
     
             }else{
                 $image_name ="default.png";
             }
 
             $data = array(
                 'logistic_name'=>$request->name,
                 'api_name'=>$request->api_name,
                 'cod_price'=>$request->cod_price,
                 'cod_percentage'=>$request->cod_percentage,
                 'logo_image_name'=>$image_name,
                 //'is_active'=>$request->is_active,
             );
     
             Logistic::create($data);
             return response()->json(['success'=>'Added Successfully !']);
             
         }
 
         return response()->json(['error'=>$validator->errors()]);
     }
 
 
     
 
     // Show
 
      public function show(Request $request){
 
         ## Read POST data 
         $id = $request->post('id');
 
         $data = Logistic::find($id);
 
         $response = array();
         if(!empty($data)){
 
             $response['name'] = $data->logistic_name;
             $response['api_name'] = $data->api_name;
             $response['cod_price'] = $data->cod_price;
             $response['cod_percentage'] = $data->cod_percentage;
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
            'edit_name' => 'required',
            'edit_api_name' => 'required',
            'edit_cod_price' => 'required|numeric',
            'edit_cod_percentage' => 'required|numeric',
             //'image' => 'required',
         ]);
 
         if ($validator->passes()) {
             
             ## Read POST data
             $id = $request['logistic_id'];//$request->logistic_id;//13;//$request->post('id');
 
             $data = Logistic::find($id);
 
 
 
             if ($request->hasFile('image')) {
                 if ($request->file('image')->isValid()) {
 
                     $extension = $request->image->extension();
                     $image_name = time().".".$extension; 
                     //$request->image->storeAs('/images', $image_name);
                     $request->image->storeAs('/public/images/logistics', $image_name);
 
                     $data->logo_image_name = $image_name;
     
                 }else{
                     //$image_name ="default.png";
                 }
             }else{
                 //$image_name ="default.png";
             }
 
             $data->logistic_name = $request['edit_name'];
             $data->api_name = $request['edit_api_name'];
             $data->cod_price = $request['edit_cod_price'];
             $data->cod_percentage = $request['edit_cod_percentage'];
            // $data->logo_image_name = $image_name;
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
 
         $data = Logistic::find($id);
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
            
            $data = Logistic::findOrFail($request['id']);
            $data->is_active = $request['is_active'];
            $data->save();
            
            return response()->json(['success'=>'Updated Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }
 
 
 }
 