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
use App\Models\Metrocity;
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

class MetrocityController extends Controller
{

    // listing

    public function index(Request $request)
    {

        
        if ($request->ajax()) {

            $data = Metrocity::select('id','name','is_active')->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('is_active', function($row){

                    if($row->is_active == 1){
                        $checkStatus = '';
                    } else {
                        $checkStatus = 'checked';
                    }
                    $btn = "<label class='switch switch-left-right'><input class='switch-input metrocity_is_active' name='is_active[]' type='checkbox' data-id='".$row->id."' ".$checkStatus."/><span class='switch-label' data-on='Active' data-off='Inactive'></span> <span class='switch-handle'></span> </label>";
                    return $btn;

                })
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateMetrocity' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteMetrocity' data-id='".$row->id."'>Delete</button>";
 
                     return $updateButton." ".$deleteButton;
                })
                ->rawColumns(['is_active','action'])
                ->make(true);
        }
        
        return view('admin.metrocity.index');
    }


     // Store
    
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
            'name' => 'required',
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
                     $request->image->storeAs('/public/images/metrocitys', $image_name);
                     //$request->image->public_path('images/couriers', $image_name);
                     
     
                 }else{
                     $image_name ="default.png";
                 }
     
             }else{
                 $image_name ="default.png";
             }
 
             $data = array(
                'created_by'=>Auth::user()->id,
                'name'=>$request->name,
                //'is_active'=>$request->is_active,
             );
     
             Metrocity::create($data);
             return response()->json(['success'=>'Added Successfully !']);
             
         }
 
         return response()->json(['error'=>$validator->errors()]);
     }
 
 
     
 
     // Show
 
      public function show(Request $request){
 
         ## Read POST data 
         $id = $request->post('id');
 
         $data = Metrocity::find($id);
 
         $response = array();
         if(!empty($data)){
 
             $response['name'] = $data->name;
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
             //'image' => 'required',
         ]);
 
         if ($validator->passes()) {
             
             ## Read POST data
             $id = $request['metrocity_id'];//$request->metrocity_id;//13;//$request->post('id');
 
             $data = Metrocity::find($id);
 
 
 
             if ($request->hasFile('image')) {
                 if ($request->file('image')->isValid()) {
 
                     $extension = $request->image->extension();
                     $image_name = time().".".$extension; 
                     //$request->image->storeAs('/images', $image_name);
                     $request->image->storeAs('/public/images/metrocitys', $image_name);
 
                     $data->image = $image_name;
     
                 }else{
                     //$image_name ="default.png";
                 }
             }else{
                 //$image_name ="default.png";
             }
 
             $data->name = $request['edit_name'];
             $data->updated_by = Auth::user()->id;
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
 
         $data = Metrocity::find($id);
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
            
            $data = Metrocity::findOrFail($request['id']);
            $data->is_active = $request['is_active'];
            $data->save();
            
            return response()->json(['success'=>'Updated Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }
 
 
 }
 