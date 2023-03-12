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
use App\Models\DocumentMaster;
use App\Models\BillingAddress;
use App\Models\KycVerificationMaster;
use App\Models\KycDocumentMaster;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

class KycVerificationController extends Controller
{

     // kyc_verification

     public function kyc_verification(Request $request)
     {
       /*  $data['users'] = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
             'status' => '1',
             'is_active' => '1',
             'type' => '4',
         ])->orderBy('id', 'ASC')->get();*/
 
         $data['document_list'] = DocumentMaster::where(['is_active' => '1'])->get();
        
       // $this->Common_model->getResultArray(array('is_active' => '1'), '*', 'document_master');

         return view('admin.kyc.kyc_verification', $data);
     }


     // view_customer

     public function view_customer(Request $request)
     {
        //dd($request->id);
        $data['users'] = User::where(['is_active' => '2', 'type' => '2'])->get();
        $data['logistics'] = Logistic::where(['is_active' => '1'])->get();
        $data['document_list'] = DocumentMaster::where(['is_active' => '1'])->get();

       /* $data['user'] = $user = User::with('billing_address')
        //join('billing_address', 'billing_address.user_id', '=', 'users.id')
        //->join('kyc_verification_master', 'kyc_verification_master.sender_id', '=', 'users.id')
        //->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
        //->join('users AS u', 'u.id', '=', 'forward_order_master.user_id');
        ->where(['users.id' => $request->id])
        ->first();*/
        $data['customer'] = $user = User::with(['billing_address','kyc_verification_master','kyc_verification_master.kyc_document_master'])->where(['users.id' => $request->id])->first()->toArray();
       
        //echo '<pre>';
       // print_R($user['kyc_verification_master']['pan_no']);die;
        //echo '<pre>';

        return view('admin.kyc.view_customer', $data);
     }

      // approve_pending

      public function approve_pending(Request $request)
      {
          $data['users'] = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
              'status' => '1',
              'is_active' => '1',
              'type' => '4',
          ])->orderBy('id', 'ASC')->get();
  
  
          return view('admin.kyc.approve_pending', $data);
      }


      //rejection_reason reject
      // Store
        
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'profile_type' => 'required',
            'company_type' => 'required_if:profile_type,==,1',
            'company_name' => 'required_if:profile_type,==,1',
            'pan_no' => 'required|size:10|regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/',
            'gst_no' => 'required_if:profile_type,==,1',
            //'gst_no' => 'required_if:profile_type,==,1|size:15|regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/',
            
            'pincode' => 'required|digits:6',
            'city' => 'required',
            'state' => 'required',
            'address_1' => 'required',

            'doc1_id' => 'required',
            'doc2_id' => 'required',
            //'doc1_1_img' => 'required',
            //'doc1_2_img' => 'required',
            //'doc2_image1' => 'required',
            //'doc2_image2' => 'required',

            'pickup_id' => 'required',
            //'pick_up_img' => 'required',
            //'cancelled_cheque_image' => 'required',

        ],
        [   
            'profile_type.required' => 'Please select profile type.',
            'company_type.required_if' => 'Please select a company type.',
            'company_name.required_if' => 'Please enter company name.',
            'pan_no.required' => 'Please enter pan no.',
            //'gst_no.required' => 'Please enter gst no.',
            'gst_no.required_if' => 'Please enter gst no.',

            'pincode.required' => 'Please enter pincode.',
            'city.required' => 'Please enter city.',
            'state.required' => 'Please enter state.',
            'address_1.required' => 'Please enter address line 1.',

            'doc1_id.required' => 'Please Select document id.',
            'doc2_id.required' => 'Please select identification proof.',
            'doc1_1_img.required' => 'Please select image for address proof.',
            'doc1_2_img.required' => 'Please select image for address proof.',
            'doc2_image1.required' => 'Please select image for identification proof.',
            //'doc2_image2.required' => 'Please select image for identification proof.',
         
           'pickup_id.required' => 'Please select identification proof.',
           'pick_up_img.required' => 'Please select image for pickup proof.',
           'cancelled_cheque_image.required' => 'Please select image of cancelled cheque.',

        ]
    );

        if ($validator->passes()) {

            $kycbilladdressdata = array(
                //"user_id" => Auth::user()->id,
                "address_1" => $request->address_1,
                "address_2" => $request->address_2,
                "city" => $request->city,
                "state" => $request->state,
                "pincode" => $request->pincode,
            );
            
            //$resultkycbilladdress = $this->Common_model->insert($kycbilladdressdata, "billing_address");
            //$billing_address_id = $this->db->insert_id();
            $resultkycbilladdress = BillingAddress::where(['user_id' => $request->sender_id])->update($kycbilladdressdata);
            //LogisticPriority::where(['sender_id' => Auth::user()->id])->where('priority', '>', $data->priority)->update(['priority' => \DB::raw('priority - 1')]);
            //$billing_address_id = $resultkycbilladdress->id;

            $kycdata = array(
                //"sender_id" => Auth::user()->id,
                //"billing_address_id" => $billing_address_id,
                "profile_type" => $request->profile_type,
                "company_type" => $request->company_type,
                "company_name" => $request->company_name,
                "pan_no" => $request->pan_no,
                "gst_no" => $request->gst_no,
                "created_by" => $request->source_id, //Auth::user()->id,
            );


            //$result = $this->Common_model->insert($kycdata, "kyc_verification_master");
            //$kyc_id = $this->db->insert_id();
            $result = KycVerificationMaster::where(['sender_id' => $request->sender_id])->update($kycdata);
            $kyc_id = $request->kyc_id;


            if ($request->hasFile('doc1_1_img')) {
 
                if ($request->file('doc1_1_img')->isValid()) {

                    $extension = $request->doc1_1_img->extension();
                    $doc1_1_img = time().'-'.rand(10,100).".".$extension;
                    $request->doc1_1_img->storeAs('/public/images/kyc', $doc1_1_img);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->doc1_id,
                        "image" => $doc1_1_img,
                    );
                    //KycDocumentMaster::create($data);
                    KycDocumentMaster::where(['id' => $request->doc1_1_id])->update($data);
                }
            }

            if ($request->hasFile('doc1_2_img')) {
 
                if ($request->file('doc1_2_img')->isValid()) {

                    $extension = $request->doc1_2_img->extension();
                    $doc1_2_img = time().'-'.rand(10,100).".".$extension;
                    $request->doc1_2_img->storeAs('/public/images/kyc', $doc1_2_img);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->doc1_id,
                        "image" => $doc1_2_img,
                    );
                   // KycDocumentMaster::create($data);
                   KycDocumentMaster::where(['id' => $request->doc1_2_id])->update($data);
                }
            }

            if ($request->hasFile('doc2_image1')) {
 
                if ($request->file('doc2_image1')->isValid()) {

                    $extension = $request->doc2_image1->extension();
                    $doc2_image1 = time().'-'.rand(10,100).".".$extension;
                    $request->doc2_image1->storeAs('/public/images/kyc', $doc2_image1);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->doc2_id,
                        "image" => $doc2_image1,
                    );
                    //KycDocumentMaster::create($data);
                    KycDocumentMaster::where(['id' => $request->doc2_1_id])->update($data);
                }
            }

            if ($request->hasFile('doc2_image2')) {
 
                if ($request->file('doc2_image2')->isValid()) {

                    $extension = $request->doc2_image2->extension();
                    $doc2_image2 = time().'-'.rand(10,100).".".$extension;
                    $request->doc2_image2->storeAs('/public/images/kyc', $doc2_image2);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->doc2_id,
                        "image" => $doc2_image2,
                    );
                    //KycDocumentMaster::create($data);
                    KycDocumentMaster::where(['id' => $request->do2_2_id])->update($data);
                }
            }

            if ($request->hasFile('pick_up_img')) {
 
                if ($request->file('pick_up_img')->isValid()) {

                    $extension = $request->pick_up_img->extension();
                    $pick_up_img = time().'-'.rand(10,100).".".$extension;
                    $request->pick_up_img->storeAs('/public/images/kyc', $pick_up_img);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->pickup_id,
                        "image" => $pick_up_img,
                    );
                    //KycDocumentMaster::create($data);
                    KycDocumentMaster::where(['id' => $request->pick_up_id])->update($data);
                }
            }

            if ($request->hasFile('cancelled_cheque_image')) {
 
                if ($request->file('cancelled_cheque_image')->isValid()) {

                    $extension = $request->cancelled_cheque_image->extension();
                    $cancelled_cheque_image = time().'-'.rand(10,100).".".$extension;
                    $request->cancelled_cheque_image->storeAs('/public/images/kyc', $cancelled_cheque_image);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->cancelled_cheque_id,
                        "image" => $cancelled_cheque_image,
                    );
                    //KycDocumentMaster::create($data);
                    KycDocumentMaster::where(['id' => $request->cancelled_id])->update($data);
                }
            }

            if ($request->hasFile('other_document')) {

                $files = $request->file('other_document');

               // KycDocumentMaster::where(['id' => $request->other_document_id])->delete();

                foreach($files as $file){

                    if ($file->isValid()) {

                        $extension = $file->extension();
                        $other_document = time().'-'.rand(10,100).".".$extension;
                        $file->storeAs('/public/images/kyc', $other_document);

                        $data = array(
                            "kyc_id" => $kyc_id,
                            "doc_id" => $request->other_doc_id,
                            "image" => $other_document,
                        );
                        KycDocumentMaster::create($data);
                       // KycDocumentMaster::where(['id' => $request->other_document_id])->update($data);
                    }
                }
            }
            

            return response()->json(['success'=>'KYC Document Updated Successfully .']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }


    // Store
        
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'profile_type' => 'required',
            'company_type' => 'required_if:profile_type,==,1',
            'company_name' => 'required_if:profile_type,==,1',
            'pan_no' => 'required|size:10|regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/',
            'gst_no' => 'required_if:profile_type,==,1',
            //'gst_no' => 'required_if:profile_type,==,1|size:15|regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/',
            
            'pincode' => 'required|digits:6',
            'city' => 'required',
            'state' => 'required',
            'address_1' => 'required',

            'doc1_id' => 'required',
            'doc2_id' => 'required',
            'doc1_1_img' => 'required',
            'doc1_2_img' => 'required',
            'doc2_image1' => 'required',
            //'doc2_image2' => 'required',

            'pickup_id' => 'required',
            'pick_up_img' => 'required',
            'cancelled_cheque_image' => 'required',

        ],
        [   
            'profile_type.required' => 'Please select profile type.',
            'company_type.required_if' => 'Please select a company type.',
            'company_name.required_if' => 'Please enter company name.',
            'pan_no.required' => 'Please enter pan no.',
            //'gst_no.required' => 'Please enter gst no.',
            'gst_no.required_if' => 'Please enter gst no.',

            'pincode.required' => 'Please enter pincode.',
            'city.required' => 'Please enter city.',
            'state.required' => 'Please enter state.',
            'address_1.required' => 'Please enter address line 1.',

            'doc1_id.required' => 'Please Select document id.',
            'doc2_id.required' => 'Please select identification proof.',
            'doc1_1_img.required' => 'Please select image for address proof.',
            'doc1_2_img.required' => 'Please select image for address proof.',
            'doc2_image1.required' => 'Please select image for identification proof.',
            //'doc2_image2.required' => 'Please select image for identification proof.',
         
           'pickup_id.required' => 'Please select identification proof.',
           'pick_up_img.required' => 'Please select image for pickup proof.',
           'cancelled_cheque_image.required' => 'Please select image of cancelled cheque.',

        ]
    );

        if ($validator->passes()) {

            $kycbilladdressdata = array(
                "user_id" => Auth::user()->id,
                "address_1" => $request->address_1,
                "address_2" => $request->address_2,
                "city" => $request->city,
                "state" => $request->state,
                "pincode" => $request->pincode,
            );
            //$resultkycbilladdress = $this->Common_model->insert($kycbilladdressdata, "billing_address");
            //$billing_address_id = $this->db->insert_id();
            $resultkycbilladdress = BillingAddress::create($kycbilladdressdata);
            $billing_address_id = $resultkycbilladdress->id;

            $kycdata = array(
                "sender_id" => Auth::user()->id,
                "billing_address_id" => $billing_address_id,
                "profile_type" => $request->profile_type,
                "company_type" => $request->company_type,
                "company_name" => $request->company_name,
                "pan_no" => $request->pan_no,
                "gst_no" => $request->gst_no,
                "created_by" => Auth::user()->id,
            );

            //$result = $this->Common_model->insert($kycdata, "kyc_verification_master");
            //$kyc_id = $this->db->insert_id();
            $result = KycVerificationMaster::create($kycdata);
            $kyc_id = $result->id;


            if ($request->hasFile('doc1_1_img')) {
 
                if ($request->file('doc1_1_img')->isValid()) {

                    $extension = $request->doc1_1_img->extension();
                    $doc1_1_img = time().'-'.rand(10,100).".".$extension;
                    $request->doc1_1_img->storeAs('/public/images/kyc', $doc1_1_img);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->doc1_id,
                        "image" => $doc1_1_img,
                    );
                    KycDocumentMaster::create($data);
                }
            }

            if ($request->hasFile('doc1_2_img')) {
 
                if ($request->file('doc1_2_img')->isValid()) {

                    $extension = $request->doc1_2_img->extension();
                    $doc1_2_img = time().'-'.rand(10,100).".".$extension;
                    $request->doc1_2_img->storeAs('/public/images/kyc', $doc1_2_img);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->doc1_id,
                        "image" => $doc1_2_img,
                    );
                    KycDocumentMaster::create($data);
                }
            }

            if ($request->hasFile('doc2_image1')) {
 
                if ($request->file('doc2_image1')->isValid()) {

                    $extension = $request->doc2_image1->extension();
                    $doc2_image1 = time().'-'.rand(10,100).".".$extension;
                    $request->doc2_image1->storeAs('/public/images/kyc', $doc2_image1);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->doc2_id,
                        "image" => $doc2_image1,
                    );
                    KycDocumentMaster::create($data);
                }
            }

            if ($request->hasFile('doc2_image2')) {
 
                if ($request->file('doc2_image2')->isValid()) {

                    $extension = $request->doc2_image2->extension();
                    $doc2_image2 = time().'-'.rand(10,100).".".$extension;
                    $request->doc2_image2->storeAs('/public/images/kyc', $doc2_image2);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->doc2_id,
                        "image" => $doc2_image2,
                    );
                    KycDocumentMaster::create($data);
                }
            }

            if ($request->hasFile('pick_up_img')) {
 
                if ($request->file('pick_up_img')->isValid()) {

                    $extension = $request->pick_up_img->extension();
                    $pick_up_img = time().'-'.rand(10,100).".".$extension;
                    $request->pick_up_img->storeAs('/public/images/kyc', $pick_up_img);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->pickup_id,
                        "image" => $pick_up_img,
                    );
                    KycDocumentMaster::create($data);
                }
            }

            if ($request->hasFile('cancelled_cheque_image')) {
 
                if ($request->file('cancelled_cheque_image')->isValid()) {

                    $extension = $request->cancelled_cheque_image->extension();
                    $cancelled_cheque_image = time().'-'.rand(10,100).".".$extension;
                    $request->cancelled_cheque_image->storeAs('/public/images/kyc', $cancelled_cheque_image);

                    $data = array(
                        "kyc_id" => $kyc_id,
                        "doc_id" => $request->cancelled_cheque_id,
                        "image" => $cancelled_cheque_image,
                    );
                    KycDocumentMaster::create($data);
                }
            }

            if ($request->hasFile('other_document')) {

                $files = $request->file('other_document');

                foreach($files as $file){

                    if ($file->isValid()) {

                        $extension = $file->extension();
                        $other_document = time().'-'.rand(10,100).".".$extension;
                        $file->storeAs('/public/images/kyc', $other_document);

                        $data = array(
                            "kyc_id" => $kyc_id,
                            "doc_id" => $request->other_doc_id,
                            "image" => $other_document,
                        );
                        KycDocumentMaster::create($data);
                    }
                }
            }
            

            return response()->json(['success'=>'Your KYC Document add Successfully.']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }

 
 }
 