<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //print_R('BillingController');die;
        $data = [];
        return view('user.billing.index', $data);
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
     * @param  \App\Models\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function show(Billing $billing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function edit(Billing $billing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billing $billing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billing $billing)
    {
        //
    }
}
