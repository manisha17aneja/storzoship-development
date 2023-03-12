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
use App\Models\AssignLogisticSender;
use App\Models\SenderManagePrice;
use App\Models\ManagePrice;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;

use DataTables;
use DB;

class ManagePriceController extends Controller
{

    // manage_price

    public function manage_price(Request $request)
    {

        $data['users'] = User::select('id','name','email','allow_credit','allow_credit_limit')->where([
            'status' => '1',
            'is_active' => '1',
            'type' => '4',
        ])->orderBy('id', 'ASC')->get();

        $customer_id = "";

        if ($request->post()) {

            $manage_price_id = array();
            if ($request->post('user_id') != "") {
                $customer_id = $request->post('user_id');
            } else {
                $customer_id = "";
            }

            //get assign logistic of user
            $query =  AssignLogisticSender::query();
            $query->select('logistic_id');
            $query->where('sender_id', $customer_id);
            $get_assign_logistic = $query->get()->toArray();
            
            $result = array_column($get_assign_logistic, 'logistic_id');

            if (!empty($result)) {

                //get data from sender manage price
                $query =  SenderManagePrice::query();
                $query->select('sender_manage_price.*','logistic_master.logistic_name','rule_master.name','rule_master.id as rule_name');
                $query->from('sender_manage_price');
                $query->join('logistic_master','logistic_master.id', '=', 'sender_manage_price.logistic_id');
                $query->join('rule_master','rule_master.id', '=', 'sender_manage_price.rule');
                $query->where('sender_manage_price.sender_id', $customer_id);       
                $query->whereIn('sender_manage_price.logistic_id', $result);
                $sender_assing_price = $query->get()->toArray(); 

                foreach ($sender_assing_price as $key => $sender_assign_price_value) {
                    $data['logistic_price'][$sender_assign_price_value['logistic_id']]['logistic_name'] = $sender_assign_price_value['logistic_name'];
                    $data['logistic_price'][$sender_assign_price_value['logistic_id']]['assign_price_info'][] = $sender_assign_price_value;
                    $manage_price_id[] = $sender_assign_price_value['manage_price_id'];
                }

                //get data from manage price
                $query =  ManagePrice::query();
                $query->select('manage_price.*','logistic_master.logistic_name','rule_master.name','rule_master.id as rule_name');
                $query->from('manage_price');
                $query->join('logistic_master','logistic_master.id', '=', 'manage_price.logistic_id');
                $query->join('rule_master','rule_master.id', '=', 'manage_price.rule');
                $query->whereIn('manage_price.logistic_id',$result);
                if(empty($manage_price_id)){
                    $query->whereNotIn('manage_price.id',[]);
                }else{
                    $query->whereNotIn('manage_price.id',$manage_price_id);
                }
                $sender_pending_price = $query->get()->toArray(); 

                foreach ($sender_pending_price as $key => $sender_assign_price_value) {
                    $data['logistic_price'][$sender_assign_price_value['logistic_id']]['logistic_name'] = $sender_assign_price_value['logistic_name'];
                    $data['logistic_price'][$sender_assign_price_value['logistic_id']]['pending_price_info'][] = $sender_assign_price_value;
                }
            } else {
               // $this->session->set_flashdata('error', "This user has not assign any logistic !! First you have to assign logistic to this user");
            }
           
        }

        $data['user_id'] = $customer_id;

        return view('admin.price.manage_price', $data);
    }



    // Save Price Data

    public function store(Request $request)
    {
        if ($request->post('assign_price')) {
            foreach ($request->post('assign_price')['id'] as $key => $id_value) {
                $sender_price_id = $request->post('assign_price')['sender_price_id'][$key];
                $update_data['logistic_id'] = $request->post('assign_price')['logistic_id'][$key];
                $update_data['sender_id'] = $request->post('assign_price')['sender_price_id'][$key];
                $update_data['shipment_type'] = $request->post('assign_price')['shipment_type'][$key];
                $update_data['rule'] = $request->post('assign_price')['rules'][$key];
                $update_data['rule_index'] = $request->post('assign_price')['rule_index'][$key];
                $update_data['within_city'] = $request->post('assign_price')['within_city'][$key];
                $update_data['within_state'] = $request->post('assign_price')['within_state'][$key];
                $update_data['within_zone'] = $request->post('assign_price')['within_zone'][$key];
                $update_data['metro'] = $request->post('assign_price')['metro'][$key];
                $update_data['metro_2'] = $request->post('assign_price')['metro_2'][$key];
                $update_data['rest_of_india'] = $request->post('assign_price')['rest_of_india'][$key];
                $update_data['rest_of_india_2'] = $request->post('assign_price')['rest_of_india_2'][$key];
                $update_data['special_zone'] = $request->post('assign_price')['special_zone'][$key];
                $update_data['jammu_kashmir'] = $request->post('assign_price')['jammu_kashmir'][$key];
                $update_data['cod_price'] = $request->post('assign_price')['cod_price'][$request->post('assign_price')['logistic_id'][$key]];
                $update_data['cod_percentage'] = $request->post('assign_price')['cod_percentage'][$request->post('assign_price')['logistic_id'][$key]];

                SenderManagePrice::where('id', $id_value)->update($update_data);
            }
        }

        if ($request->post('pending_price')) {

            foreach ($request->post('pending_price') as $key1 => $id_value1) {

                if (!empty($request->post('pending_price')[$key1]['checkbox_item'])) {
                    foreach ($request->post('pending_price')[$key1]['checkbox_item'] as $key => $id_value) {
                        //$cod_detail = $this->Common_model->getSingle_data('cod_price, cod_percentage', 'manage_price', array('id' => $id_value));
                        $cod_detail = ManagePrice::select('cod_price','cod_percentage')->where('id', $id_value)->first()->toArray();
                    
                        $insert_data['logistic_id'] = $key1;
                        $insert_data['manage_price_id'] = $id_value;
                        $insert_data['sender_id'] = $request->post('pending_price')[$key1]['hidden_user_id'];
                        $insert_data['shipment_type'] = $request->post('pending_price')[$key1]['shipment_type'][$key];
                        $insert_data['rule'] = $request->post('pending_price')[$key1]['rules'][$key];
                        $insert_data['rule_index'] = $request->post('pending_price')[$key1]['rule_index'][$key];
                        $insert_data['within_city'] = $request->post('pending_price')[$key1]['within_city'][$key];
                        $insert_data['within_state'] = $request->post('pending_price')[$key1]['within_state'][$key];
                        $insert_data['within_zone'] = $request->post('pending_price')[$key1]['within_zone'][$key];
                        $insert_data['metro'] = $request->post('pending_price')[$key1]['metro'][$key];
                        $insert_data['metro_2'] = $request->post('pending_price')[$key1]['metro_2'][$key];
                        $insert_data['rest_of_india'] = $request->post('pending_price')[$key1]['rest_of_india'][$key];
                        $insert_data['rest_of_india_2'] = $request->post('pending_price')[$key1]['rest_of_india_2'][$key];
                        $insert_data['special_zone'] = $request->post('pending_price')[$key1]['special_zone'][$key];
                        $insert_data['jammu_kashmir'] = $request->post('pending_price')[$key1]['jammu_kashmir'][$key];
                        $insert_data['cod_price'] = $cod_detail['cod_price'];
                        $insert_data['cod_percentage'] = $cod_detail['cod_percentage'];

                        SenderManagePrice::create($insert_data);
                    }
                }
            }
        }

        return response()->json(['success'=>'Shipping Price Update Sucessfully !']);

    }


 }
 