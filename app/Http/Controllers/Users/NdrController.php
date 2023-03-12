<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Ndr;
use Illuminate\Http\Request;

class NdrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //print_R('NdrController');die;
        $data = [];
        return view('user.ndr.index', $data);
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
     * @param  \App\Models\Ndr  $ndr
     * @return \Illuminate\Http\Response
     */
    public function show(Ndr $ndr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ndr  $ndr
     * @return \Illuminate\Http\Response
     */
    public function edit(Ndr $ndr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ndr  $ndr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ndr $ndr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ndr  $ndr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ndr $ndr)
    {
        //
    }
}
