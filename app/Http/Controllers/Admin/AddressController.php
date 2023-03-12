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
use App\Models\Address;
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\SenderAddressMaster;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

class AddressController extends Controller
{

    // listing

    public function index(Request $request)
    {
        
        $data['records'] = SenderAddressMaster::paginate(10);
        //return view('admin.address.index',$data);

      /*  if ($request->ajax()) {

            $data = SenderAddressMaster::select('id','warehouse_name as name','contact_person_name','contact_no','contact_email','website','address_line_1','address_line_2','pincode','state','city')->get();

            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    //$btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    //return $btn;

                     // Update Button
                     $updateButton = "<button class='btn btn-sm btn-info updateAddress' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='.editModal' >Edit</button>";

                     // Delete Button
                     $deleteButton = "<button class='btn btn-sm btn-danger deleteAddress' data-id='".$row->id."'>Delete</button>";
 
                     return $updateButton." ".$deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }*/
        
        //return view('admin.address.index');
        return view('admin.address.index',$data);
    }


     // Store
    
     public function store(Request $request)
     {
        
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contact_person_name' => 'required',
            'contact_no' => 'required',
            'contact_email' => 'required',
            'website' => 'required',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'pincode' => 'required',
            'state' => 'required',
            'city' => 'required',
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
                     $request->image->storeAs('/public/images/addresss', $image_name);
                     //$request->image->public_path('images/couriers', $image_name);
                     
     
                 }else{
                     $image_name ="default.png";
                 }
     
             }else{
                 $image_name ="default.png";
             }
             
             $data = array(
                'sender_id'=>Auth::user()->id,
                'warehouse_name'=>$request->name,
                'contact_person_name'=>$request->contact_person_name,
                'contact_no'=>$request->contact_no,
                'contact_email'=>$request->contact_email,
                'website'=>$request->website,
                'address_line_1'=>$request->address_line_1,
                'address_line_2'=>$request->address_line_2,
                'pincode'=>$request->pincode,
                'state'=>$request->state,
                'city'=>$request->city,
                //'is_active'=>$request->is_active,
             );
     
             SenderAddressMaster::create($data);
             return response()->json(['success'=>'Added Successfully !']);
             
         }
 
         return response()->json(['error'=>$validator->errors()]);
     }
 
 
     
 
     // Show
 
      public function show(Request $request){
 
         ## Read POST data 
         $id = $request->post('id');
 
         $data = SenderAddressMaster::find($id);
 
         $response = array();
         if(!empty($data)){
            
             $response['name'] = $data->warehouse_name;
             $response['contact_person_name'] = $data->contact_person_name;
             $response['contact_no'] = $data->contact_no;
             $response['contact_email'] = $data->contact_email;
             $response['website'] = $data->website;
             $response['address_line_1'] = $data->address_line_1;
             $response['address_line_2'] = $data->address_line_2;
             $response['pincode'] = $data->pincode;
             $response['state'] = $data->state;
             $response['city'] = $data->city;
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
            'edit_contact_person_name' => 'required',
            'edit_contact_no' => 'required',
            'edit_contact_email' => 'required',
            'edit_website' => 'required',
            'edit_address_line_1' => 'required',
            'edit_address_line_2' => 'required',
            'edit_pincode' => 'required',
            'edit_state' => 'required',
            'edit_city' => 'required',
             //'image' => 'required',
         ]);
 
         if ($validator->passes()) {
             
             ## Read POST data
             $id = $request['address_id'];//$request->address_id;//13;//$request->post('id');
 
             $data = SenderAddressMaster::find($id);
 
 
 
             if ($request->hasFile('image')) {
                 if ($request->file('image')->isValid()) {
 
                     $extension = $request->image->extension();
                     $image_name = time().".".$extension; 
                     //$request->image->storeAs('/images', $image_name);
                     $request->image->storeAs('/public/images/addresss', $image_name);
 
                     $data->image = $image_name;
     
                 }else{
                     //$image_name ="default.png";
                 }
             }else{
                 //$image_name ="default.png";
             }
            
             $data->warehouse_name = $request['edit_name'];
             $data->contact_person_name = $request['edit_contact_person_name'];
             $data->contact_no = $request['edit_contact_no'];
             $data->contact_email = $request['edit_contact_email'];
             $data->website = $request['edit_website'];
             $data->address_line_1 = $request['edit_address_line_1'];
             $data->address_line_2 = $request['edit_address_line_2'];
             $data->pincode = $request['edit_pincode'];
             $data->state = $request['edit_state'];
             $data->city = $request['edit_city'];

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
 
         $data = SenderAddressMaster::find($id);
         $data->delete();
         
         return response()->json(['success'=>'Deleted Successfully !']);
     }
 
 
 }
 