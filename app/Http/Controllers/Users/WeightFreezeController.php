<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\WeightFreeze;
use Illuminate\Http\Request;

class WeightFreezeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //print_R('WeightFreezeController');die;
        $data = [];
        return view('user.weightfreeze.index', $data);
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
     * @param  \App\Models\WeightFreeze  $weightFreeze
     * @return \Illuminate\Http\Response
     */
    public function show(WeightFreeze $weightFreeze)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeightFreeze  $weightFreeze
     * @return \Illuminate\Http\Response
     */
    public function edit(WeightFreeze $weightFreeze)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WeightFreeze  $weightFreeze
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeightFreeze $weightFreeze)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeightFreeze  $weightFreeze
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeightFreeze $weightFreeze)
    {
        //
    }
}
