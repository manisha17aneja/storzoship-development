<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\WeightDiscrepancy;
use Illuminate\Http\Request;

class WeightDiscrepanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //print_R('WeightDiscrepanciesController');die;
        $data = [];
        return view('user.weightdiscrepancy.index', $data);
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
     * @param  \App\Models\WeightDiscrepancy  $weightDiscrepancy
     * @return \Illuminate\Http\Response
     */
    public function show(WeightDiscrepancy $weightDiscrepancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeightDiscrepancy  $weightDiscrepancy
     * @return \Illuminate\Http\Response
     */
    public function edit(WeightDiscrepancy $weightDiscrepancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WeightDiscrepancy  $weightDiscrepancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeightDiscrepancy $weightDiscrepancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeightDiscrepancy  $weightDiscrepancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeightDiscrepancy $weightDiscrepancy)
    {
        //
    }
}
