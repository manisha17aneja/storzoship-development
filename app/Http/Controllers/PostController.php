<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Validator;

class PostController extends Controller
{

	/**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
	public function ajaxValidation()
	{
            return view('ajaxValidation');
	}

	/**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxValidationStore(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'pswd' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        if ($validator->passes()) {

            return response()->json(['success'=>'Added new records.']);
			
        }

        return response()->json(['error'=>$validator->errors()]);
    }

}