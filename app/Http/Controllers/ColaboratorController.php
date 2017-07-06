<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColaboratorController extends Controller
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
  
    public function colaboratorForm()
    {
    	return view("colaborator.create");
    }
    public function onPageOne(Request $request)
    {
    	return view("colaborator.create1");
    }
    public function onPageTwo(Request $request)
    {
    	return view("colaborator.create2");
    }
    public function onPageThree(Request $request)
    {
    	return view("colaborator.create3");
    }
    public function onPageFour(Request $request)
    {
    	return view("colaborator.create4");
    }
    public function onPageFive(Request $request)
    {
    	return view("colaborator.create5");
    }
    public function onPageSix(Request $request)
    {
    	//Save na base	
    	return view("colaborator.create6");
    }
}
