<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\LogisticPriority;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function user_page()
    {
        $data = User::find(Auth::user()->id);
        return view('user.users.user_page', $data);
    }

    public function change_password()
    {
        $data = [];
        return view('user.users.change_password', $data);
    }

    public function profileupdate1(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric', 'min:10'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'agree' => ['required'],
        ]);

        $user =Auth::user();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->company_name = $request['company_name'];
        //$user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->save();
        
        return back()->with('message','Profile Updated Successfully !');
    }

    public function profileupdate(Request $request)
    {

    	$validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric', 'min:10'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'agree' => ['required'],
        ]);

        if ($validator->passes()) {

            $user =Auth::user();
            $user->first_name = $request['first_name'];
            $user->last_name = $request['last_name'];
            $user->company_name = $request['company_name'];
            //$user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->save();
            
            return response()->json(['success'=>'Profile Updated Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    public function changepassword(Request $request)
    {

    	$validator = Validator::make($request->all(), [
            'current_password' => 'required|min:8',
            'password' => 'required|confirmed|min:8|different:current_password',
        ]);

        if ($validator->passes()) {
            $user = User::findOrFail(Auth::user()->id);


            if (Hash::check($request->current_password, $user->password)) { 

                $user->fill([
                'password' => Hash::make($request->password)
                ])->save();
                return response()->json(['success'=>'Password Changed Successfully !']);
            
            } else {

                $error = array('current_password'=>array('Current Password does not match !'));
                return response()->json(['error'=>$error]);

            }
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }


    public function addWarehouseAddress(Request $request)
    {

    	$validator = Validator::make($request->all(), [
            'address1' => 'required|min:3',
            'address2' => 'required|min:3',
            'landmark' => 'required|min:3',
            'city' => 'required|min:3',
            'state' => 'required',
            'pincode' => ['required', 'numeric', 'min:5'],
            'phone_no' => ['required', 'numeric', 'min:10'],
        ]);

        if ($validator->passes()) {

            $data = array(
                'user_id'=>Auth::user()->id,
                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'landmark'=>$request->landmark,
                'city'=>$request->city,
                'state'=>$request->state,
                'pincode'=>$request->pincode,
                'phone_no'=>$request->phone_no,
            );
    
            Warehouse::create($data);
            return response()->json(['success'=>'Address Added Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }


    public function addCourier1(Request $request)
    {

    	$validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
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
                    $request->image->storeAs('/public/images/couriers', $image_name);
                    
    
                }else{
                    $image_name ="default.png";
                }
    
            }else{
                $image_name ="default.png";
            }

            $data = array(
                'user_id'=>Auth::user()->id,
                'title'=>$request->title,
                'image'=>$image_name,
            );
    
            Courier::create($data);
            return response()->json(['success'=>'Courier Added Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    public function addCourier(Request $request)
    {

    	$validator = Validator::make($request->all(), [
            //'title' => 'required|min:3',
            'logistic_id' => 'required',
            //'image' => 'required',
        ]);

        if ($validator->passes()) {


           /* if ($request->hasFile('image')) {

                if ($request->file('image')->isValid()) {

                    $extension = $request->image->extension();
                    $image_name = time().".".$extension;
                    $request->image->storeAs('/public/images/couriers', $image_name);
                    
    
                }else{
                    $image_name ="default.png";
                }
    
            }else{
                $image_name ="default.png";
            }*/
          /* $task = new LogisticPriority();
           $task->sender_id = Auth::user()->id;
           $task->logistic_id = $request->logistic_id;
           $task->priority =  LogisticPriority::where('sender_id',Auth::user()->id)->where('status',1)->count()+1;
            $task->save();*/
            $priority = LogisticPriority::where(['sender_id' => Auth::user()->id,'status' => '1'])->count()+1;

           // App\Flight::where('id', 1)->update(['value' => \DB::raw('value - 1')]);

        //    print_R($priority);die;
           // $priority =1;
            $data = array(
                'sender_id'=>Auth::user()->id,
                'logistic_id'=>$request->logistic_id,
                'priority'=>$priority,
            );
    
            LogisticPriority::create($data);
            return response()->json(['success'=>'Courier Added Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    // Remove
 
    public function deleteCourier(Request $request){
 
        ## Read POST data
        $id = $request->post('id');

        $data = LogisticPriority::find($id);
        $data->delete();
        
        return response()->json(['success'=>'Deleted Successfully !']);
    }


    public function changeCourierPriority(Request $request)
    {
        
    	$validator = Validator::make($request->all(), [
            'courier_id' => ['required'],
            'status' => ['required'],
        ]);

        if ($validator->passes()) {


            $data = LogisticPriority::findOrFail($request['courier_id']);

            if($request['status'] == 0){
                LogisticPriority::where(['sender_id' => Auth::user()->id])->where('priority', '>', $data->priority)->update(['priority' => \DB::raw('priority - 1')]);
                $data->priority =  LogisticPriority::where(['sender_id' => Auth::user()->id,'status' => '1'])->count();
            } else {
                $data->priority =  LogisticPriority::where(['sender_id' => Auth::user()->id,'status' => '1'])->count()+1;
            }
            
            //$data = Courier::findOrFail($request['courier_id']);
           
            $data->status = $request['status'];
            $data->save();

            
            
            return response()->json(['success'=>'Updated Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    
}
