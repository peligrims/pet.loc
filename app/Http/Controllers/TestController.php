<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
//use Corp\Repositories\AnimalsRepository;
use Corp\Animal;
use Corp\Clinic;
use Corp\Breed;

class TestController extends Controller
{
    

	
	
	
	
    public function index()
    {
		
		$animals = Animal::find(200);
        $kinds = Breed::all();
		foreach ($kinds as $kind){
			
			dd($kind->title);
			
		}
		
		
		/* $country = Country::find(1);
		$user = User::find(2);
		
		$country->user()->associate($user);
		
		
		
		
		$animal->kind; */
		
		//dump($animal->kinds->title);
		
		/* $article=Article::find(10);
		dump($article->user->name); */
	   
	   
	  /*  $animals = Animal::find(1);
	   dd($animals); */
	   
	   //$animals = Animal::all();
	   //$animals->load('сlinica');
	   //foreach ($animals as $animal)
	    //{
         //echo $animal->сlinica->title;
		//}
		//$animal = Animal::find(1);
		//$clinica=Clinic	::find(1);
		//$animal = Animal::find(1);
		//$clinic = Clinic::find(1024)->title;


	   
	 

		
		
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
