<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\User;
use App\Models\Address;
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\Admin\Menu;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Service;
use App\Models\Logistic;
use App\Models\AssignLogisticSender;
use App\Models\LogisticPriority;
use App\Models\PincodeMaster;
use App\Models\PincodeDetail;
use App\Models\ManagePrice;
use App\Models\SenderManagePrice;

use DataTables;
use DB;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    function get_shiping_price($sender_id, $logistic_ids = NUll, $from_pin, $to_pin, $shipment_type, $order_type, $volumetric_weight, $physical_weight, $collectable_amount, $is_bulk = 0, $gst = 18)
    {
        define("APPPATH", base_path().'/');

        $user_type = Auth::user()->type;

        $path = APPPATH . 'logs/get_shiping_price/';

        if (!file_exists($path)) {

            mkdir($path, 0777, true);

        }

        $log_data = array('date' => date('Y-m-d H:s:i'), 'sender_id' => $sender_id, 'order_type' => $order_type, 'logistic_ids' => $logistic_ids, 'from_pin' => $from_pin, 'to_pin' => $to_pin, 'shipment_type' => $shipment_type, 'volumetric_weight' => $volumetric_weight, 'physical_weight' => $physical_weight, 'collectable_amount' => $collectable_amount, 'is_bulk' => $is_bulk, 'gst' => $gst);

        file_put_contents($path . date("d-m-Y") . '_log.txt', "\n\n------- Start Log ------\n" . print_r($log_data, true), FILE_APPEND);


        // GET LOGISTICS IDS WHERE IS ACTIVE

        if ($logistic_ids == NULL) {

            if ($user_type == "4" || $user_type == 4) {


                // $user_data = $CI->db->get_where('sender_master', array('id =' => $sender_id))->result();
                $user_data = User::find($sender_id)->get();

                if (!empty($user_data)) {


                // $logistic_ids = $CI->db->select('logistic_id')->from('assign_logistic_sender as als')->join('logistic_master lm', 'lm.id = als.logistic_id')->where('als.sender_id', $sender_id)->where('lm.is_active', "1")->group_by('lm.id')->get()->result_array();
                    $logistic_ids = AssignLogisticSender::select('logistic_id')->from('assign_logistic_sender as als')->join('logistic_master as lm', 'lm.id', '=', 'als.logistic_id')->where('als.sender_id', $sender_id)->where('lm.is_active', "1")->groupBy('lm.id')->get()->toArray();
    
                    $logistic_ids = array_column($logistic_ids, 'logistic_id');


                } else {


                    $log_data1['logistic_error'] = "User Have Not Any Active Logistic Assigned";


                    file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data1, true), FILE_APPEND);


                    return ['status' => FALSE, 'message' => "User Have Not Any Active Logistic Assigned"];

                    
                }
           
    
    
            } else {

                $user_data = User::where('id', $sender_id)->get();

                $logistic_ids = Logistic::select('id')->from('logistic_master')->where('is_active', '1')->get()->toArray();

                $logistic_ids = array_column($logistic_ids, 'id');

            }
    
    
        } else {


            // CHECK IN ARRAY OR NOT


            if (is_array($logistic_ids)) {

                $logistic_ids = $logistic_ids;

            } else {

                $logistic_ids = array($logistic_ids);

            }


        }

       // print_R($logistic_ids);die;

        $data_log['logistic_ids'] = $logistic_ids;


        // IF IS BULK THAN SET ARRAY ACCORDING TO PRIORITY

        if ($is_bulk == 1) {


            //$logistic_priority = $CI->db->select('lp.priority,lp.logistic_id')->from('logistic_priority as lp')->join('logistic_master lm', 'lm.id = lp.logistic_id')->where('lp.sender_id', $sender_id)->where('lm.is_active', "1")->order_by('lp.priority', "ASC")->get()->result_array();
            $logistic_priority = LogisticPriority::select('lp.priority,lp.logistic_id')->from('logistic_priority as lp')->join('logistic_master as lm', 'lm.id', '=', 'lp.logistic_id')->where('lp.sender_id', $sender_id)->where('lm.is_active', "1")->orderBy('lp.priority', "ASC")->get()->toArray();

            if (!empty($logistic_priority)) {

                foreach ($logistic_priority as $key => $l_p_val) {

                        $logistic_ids1[] = $l_p_val['logistic_id'];

                }

            }

            $logistic_ids = $logistic_ids1;

            $data_log['bulk_logistic_ids'] = $logistic_ids;


        }


        // CHECK FROM_PINCODE AND TO_PINCODE IS AWAILABEL OR NOT FOR SHIPMENT_TYPE AND ORDER_TYPE


        if ($from_pin == "" || $from_pin == null || $from_pin == NULL && $from_pin == "null") {


            $log_data2['logistic_error'] = "From Pincode Is Not Set";


            file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data2, true), FILE_APPEND);


            return ['status' => FALSE, 'message' => "From Pincode Is Not Set"];


        } elseif ($to_pin == "" || $to_pin == null || $to_pin == NULL && $to_pin == "null") {


            $log_data2['logistic_error'] = "To Pincode Is Not Set";


            file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data2, true), FILE_APPEND);


            return ['status' => FALSE, 'message' => "To Pincode Is Not Set"];


        } else {


            // CHECK IN PINCODE_MASTER IS EXIST OR NOT THAN GET PINCODE ID FROM OR TO BOTH


            //$from_pin_data = $CI->db->get_where('pincode_master', array('TRIM(pincode)' => trim($from_pin)))->result();
            $from_pin_data = PincodeMaster::where('pincode', trim($from_pin))->get();


            if (empty($from_pin_data)) {


                $log_data2['logistic_error'] = "Sender Pincode Is Not Found In Our Database";


                file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data2, true), FILE_APPEND);


                return ['status' => FALSE, 'message' => "Sender Pincode Is Not Found In Our Database"];


            } else {


                $from_pin_id = $from_pin_data[0]->id;


            }


            //$to_pin_data = $CI->db->get_where('pincode_master', array('TRIM(pincode)' => trim($to_pin)))->result();
            $to_pin_data = PincodeMaster::where('pincode', trim($to_pin))->get();
            


            if (empty($to_pin_data)) {


                $log_data2['logistic_error'] = "Reciver Pincode Is Not Found In Our Database";


                file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data2, true), FILE_APPEND);


                return ['status' => FALSE, 'message' => "Reciver Pincode Is Not Found In Our Database"];


            } else {


                $to_pin_id = $to_pin_data[0]->id;


            }


        }


        
                // CHECK IN ALL LOGISTIC FOR ASSIGN OR NOT FOR SHIPMENT OR ORDERTYPE        

                foreach ($logistic_ids as $key => $l_id) {


                    if ($order_type == 1 && $shipment_type == '1') {
        
        
                        //$from_logistic_pin_data = $CI->db->select('id')->from('pincode_detail')->where('pincode_id', $from_pin_id)->where('logistic_id', $l_id)->where('is_cod', '1')->where('is_pickup', '1')->get();
                        $from_logistic_pin_data = PincodeDetail::select('id')->where('pincode_id', $from_pin_id)->where('logistic_id', $l_id)->where('is_cod', '1')->where('is_pickup', '1')->first();
        
                        //$to_logistic_pin_data = $CI->db->select('id')->from('pincode_detail')->where('pincode_id', $to_pin_id)->where('logistic_id', $l_id)->where('is_cod', '1')->get();
                        $to_logistic_pin_data = PincodeDetail::select('id')->where('pincode_id', $to_pin_id)->where('logistic_id', $l_id)->where('is_cod', '1')->first();
        
                        if ($from_logistic_pin_data  || $to_logistic_pin_data) {
        
        
                            unset($logistic_ids[array_search($l_id, $logistic_ids)]);
        
        
                        }
        
        
                    } elseif ($order_type == 0 && $shipment_type == '0') {
        
        
                        //$from_logistic_pin_data = $CI->db->select('id')->from('pincode_detail')->where('pincode_id', $from_pin_id)->where('logistic_id', $l_id)->where('is_prepaid', '1')->where('is_pickup', '1')->get();
                        $from_logistic_pin_data = PincodeDetail::select('id')->where('pincode_id', $from_pin_id)->where('logistic_id', $l_id)->where('is_prepaid', '1')->where('is_pickup', '1')->first();
        
                        //$to_logistic_pin_data = $CI->db->select('id')->from('pincode_detail')->where('pincode_id', $to_pin_id)->where('logistic_id', $l_id)->where('is_prepaid', '1')->get();
                        $to_logistic_pin_data = PincodeDetail::select('id')->where('pincode_id', $to_pin_id)->where('logistic_id', $l_id)->where('is_prepaid', '1')->first();
        
                        if ($from_logistic_pin_data  || $to_logistic_pin_data) {
                           
                            unset($logistic_ids[array_search($l_id, $logistic_ids)]);
                            
        
                        }
        
        
                    } elseif ($order_type == 0 && $shipment_type == '1') {
        
        
                        //$from_logistic_pin_data = $CI->db->select('id')->from('pincode_detail')->where('pincode_id', $from_pin_id)->where('logistic_id', $l_id)->where('is_prepaid', '1')/*->where('is_reverse_pickup', '1')*/->get();
                        $from_logistic_pin_data = PincodeDetail::select('id')->where('pincode_id', $from_pin_id)->where('logistic_id', $l_id)->where('is_prepaid', '1')->first();
        
                        //$to_logistic_pin_data = $CI->db->select('id')->from('pincode_detail')->where('pincode_id', $to_pin_id)->where('logistic_id', $l_id)->where('is_prepaid', '1')->get();
                        $to_logistic_pin_data = PincodeDetail::select('id')->where('pincode_id', $to_pin_id)->where('logistic_id', $l_id)->where('is_prepaid', '1')->first();
        
                        if ($from_logistic_pin_data  || $to_logistic_pin_data) {
        
                            unset($logistic_ids[array_search($l_id, $logistic_ids)]);
        
        
                        }
        
        
                    } elseif ($order_type == 1 && $shipment_type == '0') {
        
        
                        //$from_logistic_pin_data = $CI->db->select('id')->from('pincode_detail')->where('pincode_id', $from_pin_id)->where('logistic_id', $l_id)->where('is_cod', '1')/*->where('is_reverse_pickup', '1')*/->get();
                        $from_logistic_pin_data = PincodeDetail::select('id')->where('pincode_id', $from_pin_id)->where('logistic_id', $l_id)->where('is_cod', '1')->first();
        
                        //$to_logistic_pin_data = $CI->db->select('id')->from('pincode_detail')->where('pincode_id', $to_pin_id)->where('logistic_id', $l_id)->where('is_cod', '1')->get();
                        $to_logistic_pin_data = PincodeDetail::select('id')->where('pincode_id', $to_pin_id)->where('logistic_id', $l_id)->where('is_cod', '1')->first();
        
                        if ($from_logistic_pin_data  || $to_logistic_pin_data) {
        
                            unset($logistic_ids[array_search($l_id, $logistic_ids)]);
        
        
                        }
        
        
                    } elseif ($shipment_type == '2') {
        
        
                        // Not Check From And To pincode awailibility
        
        
                        $shipment_type = '1';
        
        
                        $shipment_type_previus = TRUE;
        
        
                    } else {
        
        
                        $log_data3['logistic_error'] = "Order Type Or Shipment Type is not valid";
        
        
                        file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data3, true), FILE_APPEND);
        
        
                        return ['status' => FALSE, 'message' => "Order Type Or Shipment Type is not valid"];
        
        
                    }
                   
        
                } 
        
               // print_R($logistic_ids);die;
                $data_log['pincode_available_logistic'] = $logistic_ids;


                // CHECK LOGISTICS ARE AWAILABE OR NOT AFTER CHECK PIN FROM TO TO AND ASSIGNED LOGISTICS


            if (empty($logistic_ids)) {


                $log_data4['logistic_error'] = "This Logistic Is Not Provide This Delivery For this Pincode";


                file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data4, true), FILE_APPEND);


                return ['status' => FALSE, 'message' => "This Logistic Is Not Provide This Delivery For this Pincode"];


            }


               // IF SINGLE ORDER OR RETURN MULTIPLE LOGISTIC PRICE            


               foreach ($logistic_ids as $key => $l_id) {


                $logistic_rules[$l_id] = SenderManagePrice::select('*')->from('sender_manage_price')->join('rule_master', 'rule_master.id', '=', 'sender_manage_price.rule')->where('sender_id', $sender_id)->where('sender_manage_price.logistic_id', $l_id)->where('sender_manage_price.shipment_type', $shipment_type)->orderBy('sender_manage_price.rule_index', 'ASC')->get()->toArray();
    
    
                if (empty($logistic_rules[$l_id])) {
    
    
                    $logistic_rules[$l_id] = ManagePrice::select('*')->from('manage_price')->join('rule_master', 'rule_master.id', '=', 'manage_price.rule')->where('manage_price.logistic_id', $l_id)->where('manage_price.shipment_type', $shipment_type)->orderBy('manage_price.rule_index', 'ASC')->get()->toArray();
    
    
                } elseif (empty($logistic_rules[$l_id])) {
    
    
                    $log_data5['logistic_error'] = "Logistic Have No Rules";
    
    
                    file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data5, true), FILE_APPEND);
    
    
                    return ['status' => FALSE, 'message' => "Logistic Have No Rules"];
    
    
                }
    
    
            }

           // print_R($logistic_rules);die;
        $logistic_rules = array_filter($logistic_rules);


        if (empty($logistic_rules)) {


            $log_data6['logistic_error'] = "Logistic Have No Rules";


            file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($log_data6, true), FILE_APPEND);


            return ['status' => FALSE, 'message' => "Logistic Have No Rules"];


        }


        // CHECK MANAGE PRICE TYPE
       

        $distance = Helper::getdistance($from_pin, $to_pin, $from_pin_data[0]->state, $to_pin_data[0]->state, $from_pin_data[0]->city, $to_pin_data[0]->city);
        print_R($distance);die;
/*
        $data_log[$from_pin."_".$to_pin.'distance'] = $distance;


        $special_zone_array = array("JK", "JAMMU AND KASHMIR", "JAMMU & KASHMIR", "JAMMU AND KASMIR", "JAMMU", "KASHMIR", "JAMMUKASHMIR", "JAMMU KASHMIR", "KL", "KERALA", "AN", "ANDAMAN & NICOBAR", "ANDAMAN AND NICOBAR", "MN", "MANIPUR", "ML", "MEGHALAYA", "MZ", "MIZORAM", "NL", "NAGALAND", "SK", "SIKKIM", "AR", "ARUNACHAL PRADESH", "AS", "ASSAM", "HP", "HIMACHAL PRADESH", "LD", "LAKSHADWEEP", "LAKSHADWEEP ISLANDS", "LAKSHADWEEP ISLAND");


        if ($from_pin_data[0]->city == $to_pin_data[0]->city) {


            $mange_price_type = "within_city";


        } elseif ($from_pin_data[0]->state == $to_pin_data[0]->state) {


            $mange_price_type = "within_state";


        // } elseif (trim(strtoupper($to_pin_data[0]->state)) == "JK" || trim(strtoupper($to_pin_data[0]->state)) == "KL" || trim(strtoupper($to_pin_data[0]->state)) == "JAMMU AND KASHMIR" || trim(strtoupper($to_pin_data[0]->state)) == "AN" || trim(strtoupper($to_pin_data[0]->state)) == "ANDAMAN & NICOBAR" || trim(strtoupper($to_pin_data[0]->state)) == "MANIPUR" || trim(strtoupper($to_pin_data[0]->state)) == "MANIPUR" || trim(strtoupper($to_pin_data[0]->state)) == "ANDAMAN AND NICOBAR" || trim(strtoupper($to_pin_data[0]->state)) == "JAMMU & KASHMIR" || trim(strtoupper($to_pin_data[0]->state)) == "JAMMU AND KASMIR" || trim(strtoupper($to_pin_data[0]->state)) == "JAMMU" || trim(strtoupper($to_pin_data[0]->state)) == "KASHMIR" || trim(strtoupper($to_pin_data[0]->state)) == "JAMMUKASHMIR" || trim(strtoupper($to_pin_data[0]->state)) == "JAMMU KASHMIR" || trim(strtoupper($to_pin_data[0]->state)) == "KERALA") {


        } elseif (in_array(trim(strtoupper($to_pin_data[0]->state)), $special_zone_array)){


            $mange_price_type = "jammu_kashmir";


        } elseif ($distance > 2500) {


            $mange_price_type = "special_zone";


        } elseif ($distance < 500) {


            $mange_price_type = "within_zone";


        } else {


            $from_metro_or_not = $CI->db->get_where('metrocity_master', array('UPPER(TRIM(metrocity_name)) =' => strtoupper(trim($from_pin_data[0]->city)), "is_active" => '1'))->result();


            $to_metro_or_not = $CI->db->get_where('metrocity_master', array('UPPER(TRIM(metrocity_name)) =' => strtoupper(trim($to_pin_data[0]->city)), "is_active" => '1'))->result();


            if (!empty($from_metro_or_not) && !empty($to_metro_or_not)) {


                if ($distance < 1400) {


                    $mange_price_type = "metro";


                } else {


                    $mange_price_type = "metro_2";


                }


            } else {


                if ($distance < 1400) {


                    $mange_price_type = "rest_of_india";


                } else {


                    $mange_price_type = "rest_of_india_2";


                }


            }


        }


        $data_log['distance_city'] = $mange_price_type;*/
        

    }


    function getdistance($from_pincode, $to_pincode, $from_state, $to_state, $from_city, $to_city)


    {


        $dist_log['lable'] = 'Get distance';


        $dist_log['from_pincode'] = $from_pincode;


        $dist_log['to_pincode'] = $to_pincode;


        file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', "\n------- Start Distance Log ------\n" . print_r($dist_log, true), FILE_APPEND);





        $CI = &get_instance();


        $CI->benchmark->mark('11');


        $CI->load->database();


        $CI->load->model('Common_model');


        if ($from_pincode == $to_pincode) {


            return 1;


        }else{


            $from_to_to = $CI->Common_model->getRow(array('from_pincode' => $from_pincode, 'to_pincode' => $to_pincode), 'distance', 'distance_master');


            if (!empty($from_to_to) || $from_to_to!="") {


                $dist_log1['distance_result'] = $from_to_to->distance;


                file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($dist_log1, true) . "\n------- End Distance Log ------\n", FILE_APPEND);


                return $from_to_to->distance;


            }else{





                $to_to_from = $CI->Common_model->getRow(array('from_pincode' => $to_pincode, 'to_pincode' => $from_pincode), 'distance', 'distance_master');





                if (!empty($to_to_from) || $to_to_from!="") {


                    $dist_log1['distance_result'] = $to_to_from->distance;


                    file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($dist_log1, true) . "\n------- End Distance Log ------\n", FILE_APPEND);


                    return $to_to_from->distance;


                }else{


                    $url ="https://maps.googleapis.com/maps/api/distancematrix/json?origins=".str_replace(array(" ","&"),array("+","and"),trim(strtolower($from_city)))."," . $from_pincode . ",india&destinations=".str_replace(array(" ","&"),array("+","and"),trim(strtolower($to_city)))."," . $to_pincode . ",india&key=" . $CI->config->item('DISTANCE_API');


    


                    $curl = curl_init();


                    curl_setopt_array($curl, array(


                      CURLOPT_URL => $url,


                      CURLOPT_RETURNTRANSFER => true,


                      CURLOPT_ENCODING => '',


                      CURLOPT_MAXREDIRS => 10,


                      CURLOPT_TIMEOUT => 0,


                      CURLOPT_FOLLOWLOCATION => true,


                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,


                      CURLOPT_CUSTOMREQUEST => 'GET',


                    ));


                    $data_response = curl_exec($curl);


                    curl_close($curl);


                    


                    $data = json_decode($data_response);


                    $dist_log1['distance_data_response'] = $data_response;


                    $dist_log1['distance_data_response_decode'] = $data;





                    if (!empty($data->status)) {


                        if (@$data->rows[0]->elements[0]->status != 'ZERO_RESULTS') {


                            if ($data->rows[0]->elements[0]->status=="NOT_FOUND") {


                                $dist_log1['distance_result'] = 'Distance Not Found';


                                file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($dist_log1, true) . "\n------- End Distance Log ------\n", FILE_APPEND);


                                return ['status' => FALSE, 'message' => "Distance Not Found"];


                            }elseif($data->rows[0]->elements[0]->status=="OK") {


                                foreach ($data->rows[0]->elements as $road) {


                                    $distance = @$road->distance->value;


                                }


                                $distance_insert_data['from_pincode'] = $from_pincode;


                                $distance_insert_data['to_pincode'] = $to_pincode;


                                $distance_insert_data['distance'] = $distance / 1000;


                                $CI->Common_model->insert($distance_insert_data, 'distance_master');


                                $dist_log1['from_from_insert_query'] = $CI->db->last_query();


                                $distance_insert_data1['from_pincode'] = $to_pincode;


                                $distance_insert_data1['to_pincode'] = $from_pincode;


                                $distance_insert_data1['distance'] = $distance / 1000;


                                $CI->Common_model->insert($distance_insert_data1, 'distance_master');


                                $dist_log1['from_to_insert_query'] = $CI->db->last_query();





                                $dist_log1['distance_result'] = $distance / 1000;


                                file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($dist_log1, true) . "\n------- End Distance Log ------\n", FILE_APPEND);


                                return $distance / 1000;


                            }else {                                    


                                $dist_log1['distance_result'] = 'Distance Not Found';


                                file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($dist_log1, true) . "\n------- End Distance Log ------\n", FILE_APPEND);


                                return ['status' => FALSE, 'message' => "Distance Not Found"];


                            }


                        }


                    } else {


                        $dist_log1['distance_result'] = 'Distance Not Found';


                        file_put_contents(APPPATH . 'logs/get_shiping_price/' . date("d-m-Y") . '_log.txt', print_r($dist_log1, true) . "\n------- End Distance Log ------\n", FILE_APPEND);


                        return ['status' => FALSE, 'message' => "Distance Not Found"];


                    }


                }


            }


        }


    }

    
}