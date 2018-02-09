<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
//use Corp\Repositories\AnimalsRepository;
use Corp\Animal;
use Corp\Clinic;

class TestController extends Controller
{
    

	
	
	
	
    public function index()
    {
       //$animals = Animal::find(1)->сlinica;
	   //$animals = Animal::all();
	   //$animals->load('сlinica');
	   //foreach ($animals as $animal)
	    //{
         //echo $animal->сlinica->title;
		//}
			
		$animals = Animal::with('clinics')->get();


	   
	   dd($animals->clinic);

		
		
    }
	
	
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
}
