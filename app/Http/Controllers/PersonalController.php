<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Repositories\AnimalsRepository;
use Corp\Owner;
use Auth;
use Gate;
use Menu;

class PersonalController extends \Corp\Http\Controllers\Controller
{
   
	

   public function index()
    {
		$this->keywords = 'Личный кабинет владельца животного';
		$this->meta_desc = 'Личный кабинет владельца животного';
		$this->title = 'Личный кабинет владельца животного';

		return view('owner.home');
		
    }
	
    
    
    public function create()
    {
       
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
    public function show(Request $request)
    {
		
        return view('owner.show');
    }

   
    public function edit()
    
	{
        
       
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
