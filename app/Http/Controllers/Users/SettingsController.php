<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Warehouse;
use App\Models\Courier;
use App\Models\Logistic;
use App\Models\LogisticPriority;

use DB;

class SettingsController extends Controller
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

    public function courier_priority()
    {

  //$priority =  LogisticPriority::where(['sender_id' => Auth::user()->id,'status' => '1'])->count();

       // print_R($priority);die;
        $logistic_priorities = LogisticPriority::select('logistic_id')->where(['sender_id' => Auth::user()->id])->get()->toArray();
        $logistic_ids = array_column($logistic_priorities, 'logistic_id');

        $data['logistics'] =  $logistics =
        Logistic::where(['is_active' => '1'])
        ->whereNotIn('id',$logistic_ids)
        ->orderBy('logistic_name', 'ASC')
        ->get();

        //echo '<pre>';
        //print_R($logistics);die;
        //echo '</pre>';

        $url = url('public/storage/images/logistics');
        //$url = storage_path('images/couriers');
       
       // $data['records'] = Courier::where(['user_id'=>Auth::user()->id])->select(array('*', DB::raw("CONCAT('$url/', image) AS image")))->get();
       $data['records'] = $records = Logistic::join('logistic_priority AS lp', 'lp.logistic_id', '=', 'logistic_master.id')
       ->whereIn('logistic_master.id',$logistic_ids)
       ->where(['lp.sender_id' => Auth::user()->id])
       ->select(array('*', DB::raw("CONCAT('$url/', logo_image_name) AS image")))
       ->orderBy('lp.status', 'DESC')
       ->orderBy('lp.priority', 'ASC')
       //->paginate(8);
       ->get();//->toArray();
        //echo '<pre>';
        //print_R($records);die;
        //echo '</pre>';
        return view('user.settings.courier_priority', $data);
    }

    public function add_warehouse()
    {
        $data['records'] = Warehouse::get();//paginate(3);
        return view('user.settings.add_warehouse', $data);
    }
}
