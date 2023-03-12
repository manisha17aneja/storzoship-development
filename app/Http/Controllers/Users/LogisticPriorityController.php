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
use App\Models\Logistic;
use App\Models\LogisticPriority;
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

class LogisticPriorityController extends Controller
{

    // listing

    public function index(Request $request)
    {

        $data['logistics'] = Logistic::all();
        
        if ($request->ajax()) {

            //$data = LogisticPriority::select('id','name','api_name','cod_price','cod_percentage','is_active')->get();

            $data = DB::table('logistic_priority as t1')->
            select(['t1.*', 't2.logistic_name'])->
            join('logistic_master AS t2', 't2.id', '=', 't1.logistic_id')->
            where('t1.sender_id', Auth::user()->id)->
            //orderBy('t1.id', 'DESC')->
            get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateLogisticPriority' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteLogisticPriority' data-id='".$row->id."'>Delete</button>";
 
                     return $updateButton." ".$deleteButton;
                     
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('user.logisticPriority.index', $data);
    }


     // Store
    
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
            
            'logistic_id' => 'required',
            'priority' => 'required',
            //'is_active' => ['required'],
            //'image' => 'required',
         ]);
 // https://stackoverflow.com/questions/56642998/unique-validation-in-laravel-depending-by-user-id
         if ($validator->passes()) {
 
 
             if ($request->hasFile('image')) {
 
                 if ($request->file('image')->isValid()) {
     
                    /* $validated = $request->validate([
                         'image' => 'mimes:jpeg,png|max:1014',
                     ]);*/
 
                     $extension = $request->image->extension();
                     $image_name = time().".".$extension;
                     $request->image->storeAs('/public/images/logisticPriority', $image_name);
                     //$request->image->public_path('images/couriers', $image_name);
                     
     
                 }else{
                     $image_name ="default.png";
                 }
     
             }else{
                 $image_name ="default.png";
             }
 
             $data = array(
                 'sender_id'=>Auth::user()->id,
                 'logistic_id'=>$request->logistic_id,
                 'priority'=>$request->priority,
                 //'is_active'=>$request->is_active,
             );
     
             LogisticPriority::create($data);
             return response()->json(['success'=>'Added Successfully !']);
             
         }
 
         return response()->json(['error'=>$validator->errors()]);
     }
 
 
     
 
     // Show
 
      public function show(Request $request){
 
         ## Read POST data 
         $id = $request->post('id');
 
         $data = LogisticPriority::find($id);
 
         $response = array();
         if(!empty($data)){
 
             $response['logistic_id'] = $data->logistic_id;
             $response['priority'] = $data->priority;

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
            'edit_priority' => 'required',
             //'image' => 'required',
         ]);
 
         if ($validator->passes()) {
             
             ## Read POST data
             $id = $request['logisticPriority_id'];//$request->logisticPriority_id;//13;//$request->post('id');
 
             $data = LogisticPriority::find($id);
 
 
 
             if ($request->hasFile('image')) {
                 if ($request->file('image')->isValid()) {
 
                     $extension = $request->image->extension();
                     $image_name = time().".".$extension; 
                     //$request->image->storeAs('/images', $image_name);
                     $request->image->storeAs('/public/images/logisticPriority', $image_name);
 
                     $data->image = $image_name;
     
                 }else{
                     //$image_name ="default.png";
                 }
             }else{
                 //$image_name ="default.png";
             }
 
             $data->logistic_id = $request['edit_logistic_id'];
             $data->priority = $request['edit_priority'];
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
 
         $data = LogisticPriority::find($id);
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
            
            $data = LogisticPriority::findOrFail($request['id']);
            $data->is_active = $request['is_active'];
            $data->save();
            
            return response()->json(['success'=>'Updated Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }
 
 
 }
 