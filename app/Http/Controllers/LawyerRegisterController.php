<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\Lawyer;

class LawyerRegisterController extends Controller
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
   $this->validate($request,[
          'name'=>'required',
          'email'=>'required',
          'lawyer_id'=>'required',
          'description'=>'required',
          'gender'=>'required',
          'specialInterest'=>'required',
         'district'=>'required',
          'town'=>'required',
        'password'=>'required|confirmed',
        
      ]);   


       $lawyer=new Lawyer();
       $lawyer->name=request('name');
       $lawyer->email=request('email'); 
       $lawyer->lawyer_id=request('lawyer_id');
       $lawyer->description=request('description');
       $lawyer->gender=request('gender');
       $lawyer->specialInterest=request('specialInterest');
       $lawyer->district=request('district');
       $lawyer->town=request('town');
       $lawyer->password=Hash::make(request('password'));
       
       
       $lawyer->save();
       return redirect('/')->with('msg','Your registration was successfully completed!!Now you can Sign up to your account!!');
    

 



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
