<?php

namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\OwnersRepository;
use Corp\Repositories\AnimalsRepository;
use Corp\Owner;
use Corp\Animal;
use Illuminate\Support\Facades\Auth;



class OwnerpController extends LkController
{
     public function __construct(OwnersRepository $o_rep, AnimalsRepository $an_rep) 
		{		
			$this->an_rep = $an_rep;	
			$this->o_rep = $o_rep;		
			$this->template = env('THEME').'.owner.animalp';	
		}
    public function index()
		{
			$this->title = 'Персональные данные';
			$persons = $this->getOwners();
		
			$owner=$persons->id;
			
			$this->content = view(env('THEME').'.owner.person_content')->with(['persons' => $persons,'owner' => $owner])->render();
			return $this->renderOutput();     
		}
	public function getOwners()
		{
			$person = Auth::guard('web_owner')->user();		
			return $person;
		}
	public function getAnimals($take = FALSE,$paginate = TRUE)
		{       
		$animals = $this->an_rep->get('*',$take,$paginate);		
		return $animals;
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
