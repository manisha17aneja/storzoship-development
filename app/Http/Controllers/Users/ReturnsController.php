<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Returns;
use Illuminate\Http\Request;

class ReturnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //print_R('ReturnsController');die;
        $data = [];
        return view('user.returns.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        return view('user.returns.create', $data);
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
     * @param  \App\Models\Returns  $returns
     * @return \Illuminate\Http\Response
     */
    public function show(Returns $returns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Returns  $returns
     * @return \Illuminate\Http\Response
     */
    public function edit(Returns $returns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Returns  $returns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Returns $returns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Returns  $returns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Returns $returns)
    {
        //
    }
}
