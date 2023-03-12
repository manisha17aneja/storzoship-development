<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
*/

namespace App\Http\Controllers;
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
use App\Models\KycVerificationMaster;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

use Redirect;
use Helper;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        
        //Array ( [pickup_pincode] => 133001 [delivery_pincode] => 382443 [physical_weight] => 10 [order_type] => 0 [cod_amount] => [submit] => Get Price List )
        //Array ( [pickup_pincode] => 133001 [delivery_pincode] => 382443 [physical_weight] => 10 [order_type] => 1 [cod_amount] => 100 [submit] => Get Price List )
        $pickup_pincode =133001;
        $delivery_pincode =382443;
        $order_type =0;
        $physical_weight =10;
        $cod_amount =100;
 

       // $total_shipping_price = Helper::get_shiping_price(Auth::user()->id, NUll, $pickup_pincode, $delivery_pincode, '0', $order_type, $physical_weight, $physical_weight, $cod_amount);
       // print_R(Auth::user()->status);die;
        $exist = KycVerificationMaster::where('sender_id', '=', Auth::user()->id)->first();
        if ($exist === null) {
            return Redirect::to('admin/kyc-verification');
        } else if(Auth::user()->status == 1) {
            return Redirect::to('admin/approve-pending');
        } else {
            return view('home');
        }
    }


    public function index1()
    {
        
        return view('home');
    }

    /**
     * Display a listing of the myform.
     *
     * @return \Illuminate\Http\Response
     */
    public function myform()
    {
    	return view('myform');
    }
     
    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function myformPost(Request $request)
    {
     
    	$validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);
     
        if ($validator->passes()) {
            return response()->json(['success'=>'Added new records.']);
        }
     
        return response()->json(['error'=>$validator->errors()->all()]);
    }

}
