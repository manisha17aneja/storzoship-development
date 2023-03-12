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
use App\Models\AssignLabelUser;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

class LabelController extends Controller
{

     // assign_label

     public function assign_label(Request $request)
     {
         $data['users'] = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
             'status' => '1',
             'is_active' => '1',
             'type' => '4',
         ])->orderBy('id', 'ASC')->get();
 
 
         return view('admin.label.assign_label', $data);
     }

    // Store
        
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'label_id' => 'required',
            //'label_id[]' => 'required',
        ],
        [   
            'user_id.required' => 'Please select a customer.',
            'label_id.required' => 'Please select a label.',
            //'label_id[].required' => 'Please select a label.',
        ]
    );

        if ($validator->passes()) {

            $sender_id = $request->user_id;
			if ($sender_id) {
                AssignLabelUser::where('sender_id', $sender_id)->delete();
			}

			$labels = explode(',', $request->label_id);

			foreach ($labels as $key => $value) {
				$data = [
					'sender_id' => $sender_id,
					'label_type' => $value,
				];
                AssignLabelUser::create($data);
			}

            return response()->json(['success'=>'Label Assigned Successfully !']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }
        
 
 
 }
 