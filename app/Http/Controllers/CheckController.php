<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payment');
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
        $validate= Validator::make($request->all(),[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phonenumber'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'pincode'=>'required',



        ]);

        $payment=new Payment();
        $payment->firstname=$request->input('firstname');


        $payment->lastname=$request->input('lastname');
        $payment->email=$request->input('email');
        $payment->phonenumber=$request->input('phonenumber');
        $payment->address1=$request->input('address1');
        $payment->address2=$request->input('address2');
        $payment->city=$request->input('city');
        $payment->state=$request->input('state');
        $payment->country=$request->input('country');
        $payment->pincode=$request->input('pincode');

        $payment->save();


        return redirect()->back();



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
}
